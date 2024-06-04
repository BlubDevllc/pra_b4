<!doctype html>
<html lang="nl">

<head>
    <?php
    include_once "components/head.php";
    ?>
</head>

<body>

    <?php include_once 'components/header.php'; ?>
    <div class="container">
        <h1>Contact</h1>

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
                <label for="reden">Reden:</label>
                <input type="text" name="reason" id="reason" placeholder="reden">
            </div>
            <div class="form-group">
                <textarea name="info" id="info">Vul hier meer informatie in.</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Verstuur">
            </div>
        </form>
    </div>
    </div>

    <?php
    include_once "/components/footer.php";
    ?>
</body>

</html>