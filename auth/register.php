<?php
include_once "../components/head.php";
?>

<body>
    <?php
    include_once "../components/header.php";
    ?>

    <main>
        <h1>Sign-up</h1>
        <div class="signup">
            <form action="backend/process_sigup.php" method= "post" class="signup">
                <label for="signup-name">Naam:</label> 
                <input type="text" id="signup-name" name="name" placeholder="Naam" required>

                <label for="signup-username">Gebruikersnaam:</label>
                <input type="text" id="signup-username" name="username" placeholder="Gebruikersnaam" required>

                <label for="signup-password">Wachtwoord:</label>
                <input type="password" id="signup-password" name="password" placeholder="Wachtwoord" required>

                <label for="signup-password-confirmation">Wachtwoord Herhalen: </label>
                <input type="password" id="signup-password-confirmation" name="password_confirmation">
                
                <input type="submit" id="sign-up" value="sign-up" name="submit">
            </form>
        </div>

    </main>

    <?php
    include_once "../components/footer.php";
    ?>
</body>