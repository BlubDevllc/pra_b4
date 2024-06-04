<?php session_start(); 
?>

<!doctype html>
<html lang="nl">

<head>
    <?php
    include_once "../components/head.php";
    ?>
</head>

<body>

    <?php include_once '../components/header.php'; ?>


    <div class="wrapper">
        <div class="center">
            <?php
            if (isset($_GET['msg'])) {
                echo "<div class='msg'>" . $_GET['msg'] . "</div>";
            }
            ?>

            <div class="login-form">
                <form action="../backend/registerController.php" method="POST" enctype="multipart/form-data">
                    <div class="center flex-direction-column">
                        <h2>Login</h2>
                        <input type="email" id="email" name="email" placeholder="Email" class="input">
                        <input id="password" name="password" type="password" class="input">
                        <input type="hidden" value="login" name="action" id="action">
                        <input type="submit" value="Login" class="login-button">
                        <a href="register.php">Heb je geen account?</a>
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once "../components/footer.php";
    ?>
</body>

</html>
