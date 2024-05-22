<?php
include __DIR__ . "/partials/header.php";
require_once __DIR__ . "/partials/functions.php";
$error=email_validation();
?>
<main class="container">
    <form action="index.php" method="POST" class="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Inserisci la tua email per iscriverti alla nostra newsletter</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Iscriviti</button>
    </form>
    <?php
         if(isset($error)){
            if($error=="email_wrong"){
                echo "<div class=\"alert alert-danger mt-3\" role=\"alert\">
                Devi inserire un email valida!
              </div>";
            }else{
                echo "<div class=\"alert alert-success mt-3\" role=\"alert\">
                L'email è valida!
              </div>";
            };
         }; 
    ?>
</main>