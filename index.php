<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?msg=Je bent niet ingelogd");
    exit;
 }
 
include_once "components/head.php";
?>

<body>
    <?php
    include_once "components/header.php";
    ?>

    <main>
        <div class="main">
            <img src="assets/main.jpg" alt="">
        </div>
    </main>

    <?php
    include_once "components/footer.php";
    ?>
</body>