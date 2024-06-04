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
                        <h2>Registereren</h2>
                        <input type="text" id="username" name="username" placeholder="Username" class="input">
                        <input type="email" id="email" name="email" placeholder="Email" class="input">
                        <input id="password" name="password" type="password" placeholder="Wachtword" class="input">
                        <input id="password_again" name="password_again" type="password" placeholder="Wachtword herhaling" class="input">
                        <input type="hidden" value="register" name="action" id="action">
                        <input type="submit" value="Register" class="login-button">
                        <a href="login.php">Heb je al een account?</a>
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once "../components/footer.php";
    ?>
</body>

</html>