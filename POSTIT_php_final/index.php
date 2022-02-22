<?php 
  include_once "./signheader.php";
?>
<!-- nota in cui fare il login-->
<div id="helpnote">
        <div class="formwrapper">
            <div class="notetitle">Sign In</div>
            <form action="includes/signin.inc.php" method="post">
                    <input type="text" name="uid" placeholder="  Username/email...">
                    <input type="password" name="pwd" placeholder="  Password...">
                    <button class="button" type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <?php
                //utilizzo il get per prendere cio che posso vedere nell url
                if(isset($_GET["error"])){
                        if($_GET["error"]=="emptyinput"){
                                echo "<p> Fill in all fields ! </p>";
                        }
                        else if($_GET["error"]=="wrongsignin"){
                                echo "<p>incorrect login info ! </p>";
                        }
                }
          ?>
</div>


<?php
include_once 'footer.php';

?>
</body>
</html>