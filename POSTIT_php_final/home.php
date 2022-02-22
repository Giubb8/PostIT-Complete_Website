
    <?php include_once "homeheader.php";?>
            <!---->
        
    <!--Uso row per creare una riga vuota-->
    <div class="row">
        <div class="main-container">
            <div class="container1"></div><!--contenitore generale-->
            <div class="container2"></div><!--contenitore di tutti i postit-->
            <div class="container3"><!--container per il postit dove utente scrive-->
                <form >
                    <textarea name="note-text" id="note-text" placeholder="Write Note..." maxlength="100" ></textarea>
                    <svg id="iconV" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 20 20"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
                    <svg id="iconX" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 20 20"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/></svg>
                </form>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js" ></script>
    <?php
        include_once "./includes/ufunction.inc.php";
        websitestarter();
    ?>

    <?php
        include_once 'footer.php';
    ?>

  </body>
  
</html> 