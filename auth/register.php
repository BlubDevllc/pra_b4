<!doctype html>
<html lang="nl">

<head>
    <?php
    include_once "../components/head.php";
    ?>
</head>

<body>

    <?php include_once '../components/header.php'; ?>
    <div class="container">
        <h1>Registreren</h1>
        <?php
        if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        }
        ?>
        <div class="login-form">
        <form action="../backend/registerController.php" method="POST">
        <div class="form-group">
                <label for="user">Naam:</label>
                <input type="text" name="user" id="user" placeholder="naam" class="input-register">
            </div>
            <div class="form-group">
                <label for="user">Email:</label>
                <input type="email" name="email" id="email" placeholder="email" class="input-register">
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="pass" class="input-register">
            </div>
            <div class="form-group">
                <label for="password_check">Wachtwoord herhalen:</label>
                <input type="password" name="password_check" id="password_check" placeholder="pass" class="input-register">
            </div>
            <div class="form-group">
                <input type="submit" value="Registreren">
            </div>
        </form>
        </div>
    </div>
    </div>

    <?php
    include_once "../components/footer.php";
    ?>
</body>

</html>