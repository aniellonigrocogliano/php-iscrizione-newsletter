<?php 
include __DIR__ . "/partials/header.php";
if (!isset($_SESSION)) {
    session_start();
  }
  ?>
<main class="container"> 
    <h1>
        Grazie per esserti registrato con l'email <?php echo $_SESSION["email"] ?>.
    </h1>
</main>
