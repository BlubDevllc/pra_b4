<?php
include_once "../components/head.php";
include_once "../backend/helpers.php";
?>

<body>
    <?php
    include_once "../components/header.php";
    ?>

    <main>
        <div class="wrapper">
            <div class="center">
                <div class="login-form">
                    <form action="../backend/createAttraction.php" method="POST" enctype="multipart/form-data">
                        <div class="center flex-direction-column">
                            <input type="text" id="name" name="name" placeholder="Name" class="input">
                            <input type="text" id="type" name="type" placeholder="Type" class="input">
                            <textarea name="extra_information" id="extra_information" placeholder="Extra Information" class="input"></textarea>
                            <input id="capacity" name="capacity" type="number" placeholder="100" min="1" class="input">
                            <input type="text" id="status" name="status" placeholder="Status" class="input">
                            <input id="openes_on" name="openes_on" type="date" class="input">
                            <input type="file" name="photo" id="photo" class="input">
                            <input type="submit" class="login-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php
    include_once "../components/footer.php";
    ?>
</body>