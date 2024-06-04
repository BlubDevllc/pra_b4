<?php //session_start(); ?>

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

        <form action="../backend/registerController.php" method="POST">
        <div class="form-group">
                <label for="user">Naam:</label>
                <input type="text" name="user" id="user" placeholder="naam">
            </div>
            <div class="form-group">
                <label for="user">Email:</label>
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="pass">
            </div>
            <div class="form-group">
                <label for="password_check">Wachtwoord herhalen:</label>
                <input type="password" name="password_check" id="password_check" placeholder="pass">
            </div>
            <input type="submit" value="Registreren">
        </form>
    </div>

    <?php
    include_once "../components/footer.php";
    ?>
</body>

</html>








