 <?php
//se ho submittato la richista
 if(isset($_POST["submit"])){
        //prelevo le variabili dalla post
        $username=$_POST["uid"];
        $pwd=$_POST["pwd"];
        //effettuo la connessione al server e carico le funzioni di utilità
        require_once 'dbh.inc.php';
        require_once 'ufunction.inc.php';
        //controllo errori
        if(emptyinputlogin($username,$pwd) !==false){
                header("location: ../index.php?error=emptyinput");
                exit();
        }
        loginuser($conn,$username,$pwd);
 }
 else{
         header("location: ../index.php");
         exit();
 }
