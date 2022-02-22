<?php 
        

        function   emptyinputsignup($name,$email,$username,$pwd,$pwd_repeat){
                $results=false;
                //empty è builtin in php
                if(empty($name) || empty($email) || empty($username)|| empty($pwd) || empty($pwd_repeat)){
                        $results= true ;//se errore allora true 
                }
                else{
                        $results=false;
                }
                return $results;
        }

        function   invaliduid($username){
                $results=false;
                //funzione  built in che va a controllare se esistono determinati caratteri nell argomento 
                if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
                        $results=true;
                }
                else{
                        $results=false;
                }
                return $results;
        }

        function invalidemail($email){
                $results=false;
                //funzione che verifica se email corretta
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $results=true;
                }
                else{
                        $results=false;
                }
                return $results;
        }
        function pwdmatch($pwd,$pwd_repeat){
                $results=false;
                //funzione che verifica se pwd corretta
                if($pwd !== $pwd_repeat){
                        $results=true;
                }
                else{
                        $results=false;
                }
                return $results;
        }

        function uidexists($conn,$username,$email){
                //faccio una variabile che  memorizza la query per il db, il ? è un placeholder ,lo andremo a sostutire dopo con i dati giusti
                $sql="SELECT * FROM users where usersUid = ? OR usersEmail = ? ; ";
                $stmt=mysqli_stmt_init($conn);//prepared statement per evitare injection
                if(!mysqli_stmt_prepare($stmt,$sql)){//runna sul database e vede se ci sono errori
                        header("location: ../signup.php?error=stmtfailed");
                        exit();
                }
                //bindo,eseguo ed elaboro il prepared statement
                mysqli_stmt_bind_param($stmt, "ss",$username,$email);
                mysqli_stmt_execute($stmt);
                $resultsData =mysqli_stmt_get_result($stmt);

                if($row=mysqli_fetch_assoc($resultsData)){
                        return $row;
                }
                else{
                        $results=false;
                        return $results;        
                }
                mysqli_stmt_close($stmt);//chiudo lo statement
        }

        function createuser($conn,$name,$email,$username,$pwd){
                //faccio una variabile che  memorizza la query per il db, il ? è un placeholder ,lo andremo a sostutire dopo con i dati giusti
                $sql="INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES (?,  ?,  ?,  ?);";
                $stmt=mysqli_stmt_init($conn);//prepared statement per evitare injection
                if(!mysqli_stmt_prepare($stmt,$sql)){//runna sul databese e vede se ci sono errori
                        header("location: ../signup.php?error=stmtfailed");
                        exit();
                }
                $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssss",$name,$email,$username,$hashedPwd);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header("location: ../index.php?error=none");
                exit();
        }
        
        function insertpostit($conn,$id,$text){
                $sql="INSERT INTO postit (userId,content) VALUES (?, ?);";
                $stmt=mysqli_stmt_init($conn);//prepared statement per evitare injection
                if(!mysqli_stmt_prepare($stmt,$sql)){//runna sul databese e vede se ci sono errori
                        header("location: ../home.php?error=stmtfailed");
                        exit();
                }
                mysqli_stmt_bind_param($stmt, "ss",$id,$text);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
        }
        function removepostit($conn,$id,$text){
                $sql="DELETE FROM postit WHERE userId=? AND content=?";
                $stmt=mysqli_stmt_init($conn);//prepared statement per evitare injection
                if(!mysqli_stmt_prepare($stmt,$sql)){//runna sul databese e vede se ci sono errori
                        header("location: ../home.php?error=stmtfailed");
                        exit();
                }
                mysqli_stmt_bind_param($stmt, "ss",$id,$text);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
        }
        function websitestarter(){
                
                require_once 'dbh.inc.php';
                $id=$_SESSION["userid"];
                $sql="SELECT * FROM  postit WHERE  userId=$id;";
                $result=mysqli_query($conn,$sql);
                $resultcheck=mysqli_num_rows($result);
                if($resultcheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                                $temp=$row['content'];
                                //le virgolette aggiuntive sono per metterlo nel formato che javascript vuole per poter chiamare con successo la funzione
                                echo "<script>createnotelogin('".$temp."');</script>";
                        }
                }
                return;
        }
        function   emptyinputlogin($username,$pwd){
                $results=false;
                //empty è builtin in php
                if(empty($username)|| empty($pwd)){
                        $results= true ;//se errore allora true 
                }
                else{
                        $results=false;
                }
                return $results;
        }
        function loginuser($conn,$username,$pwd){
                $uidexist=uidexists($conn,$username,$username);
                if($uidexist ===false){
                        header("location: ../index.php?error=wrongsignin");
                        exit();
                }
                $hashedPwd=$uidexist["usersPwd"];
                $checkPwd=password_verify($pwd,$hashedPwd);

                if($checkPwd===false){
                        header("location: ../index.php?error=wrongsigning");
                        exit();
                }
                else if($checkPwd===true){
                        session_start();
                        $_SESSION["userid"]=$uidexist["usersId"];
                        $_SESSION["useruid"]=$uidexist["usersUid"];
                        $_SESSION["useremail"]=$uidexist["usersEmail"];
                        
                        header("location: ../home.php?");
                        exit();

                }

        }
        
?>
