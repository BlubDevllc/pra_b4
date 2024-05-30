<?php
include_once "../components/head.php";
?>

<body>
    <?php
    include_once "../components/header.php";
    ?>

    <main>
    <div class="login">
            <form action="backend/loginController.php" method="post" class="login">
                <label for="login-username">Gebruikersnaam:</label>
                <input type="text" id="login-username" name="username" placeholder="Gebruikersnaam" required>
                <label for="login-password">Wachtwoord:</label>
                <?php 
                if(isset($_GET['msg']))
                {
                    echo "<p class='error'>" . $_GET['msg'] . "</p>";
                }
                ?>
                <input type="password" id="login-password" name="password" placeholder="Wachtwoord" required>
                <input type="submit" id="login" value="login" name="submit">
            </form>
        </div>

    </main>

    <?php
    include_once "../components/footer.php";
    ?>
</body>