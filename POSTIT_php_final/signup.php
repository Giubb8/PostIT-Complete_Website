<?php 
  include_once "./signheader.php";
?>

 <div class="wrapper">
    <section class="signup-form">
      <div id="helpnote">
        <div class="formwrapper">
            <div class="notetitle">Sign up</div>
            <form action="includes/signup.inc.php" method="post">
              <input type="text" name="name" placeholder="  Full name...">
              <input type="text" name="email" placeholder="  Email...">
              <input type="text" name="uid" placeholder="  Username...">
              <input type="password" name="pwd" placeholder="  Password...">
              <input type="password" name="pwd_repeat" placeholder="  Repeat Password...">
              <button class="button" type="submit" name="submit">Sign Up</button>
            </form>
      </div>
      <?php
        //utilizzo il get per prendere cio che posso vedere nell url
        if(isset($_GET["error"])){
          if($_GET["error"]=="emptyinput"){
            echo "<p> Fill in all fields ! </p>";
          }
          else if($_GET["error"]=="invaliduid"){
            echo "<p> invalid id ! </p>";
          }
          else if($_GET["error"]=="invalidemail"){
            echo "<p> invalid email! </p>";
          }
          else if($_GET["error"]=="pwdnotmatch"){
            echo "<p> password not match ! </p>";
          }
          else if($_GET["error"]=="issetfailed"){
            echo "<p> something got wrong ! </p>";
          }
          else if($_GET["error"]=="stmtfailed"){
            echo "<p> something got wrong with your data! </p>";
          }
          else if($_GET["error"]=="none"){
            echo "<p>you have signed up ! </p>";
          }
        }
    ?>

      </div> 
  

</section>
</div> 

<?php
include_once 'footer.php';

?>
          </body>
</html>