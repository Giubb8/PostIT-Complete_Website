<?php 
//controllo che chi viene in questa pagina abbia compilato il form e ci accedi da li
if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $username=$_POST["uid"];
        $pwd=$_POST["pwd"];
        $pwd_repeat=$_POST["pwd_repeat"];
        require_once('dbh.inc.php');
        require_once('ufunction.inc.php');

        if(emptyinputsignup($name,$email,$username,$pwd,$pwd_repeat) !==false){
                header("location: ../signup.php?error=emptyinput");
                exit();
        }
        
        if(invaliduid($username) !==false){
                header("location: ../signup.php?error=invaliduid");
                exit();
        }
        if(invalidemail($email) !==false){
                header("location: ../signup.php?error=invalidemail");
                exit();
        }
        if(pwdmatch($pwd,$pwd_repeat) !==false){
                header("location: ../signup.php?error=pwdnotmatch");
                exit();
        }
        

        if(uidexists($conn,$username,$email) !==false){
                header("location: ../signup.php?error=usernametaken");
                exit();
        }
        createuser($conn,$name,$email,$username,$pwd);
}
else{
        header("location: ../signup.php?error=issetfailed");
        exit();
}