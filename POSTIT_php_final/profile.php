<?php 
        include_once './header.php' ;
        include_once 'includes/dbh.inc.php';
?> 
        
        
<div id="helpnote">
        <div class="notetitle">Your Profile</div>
        <br>
        <?php 
                echo "<p>ID: #".$_SESSION['userid']."</p>";
                echo "<p>Username: ".$_SESSION['useruid']."</p>";
                echo "<p>User Email:  ".$_SESSION['useremail']."</p>";
        ?>
</div>
<?php 
        include_once "footer.php";
?>
        
</body>
</html>