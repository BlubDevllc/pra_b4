<?php
include_once "../components/head.php";
include_once "../backend/helpers.php";

$attractions = fetchCurrentAttractions($conn);
?>

<body>
    <?php
    include_once "../components/header.php";
    ?>

    <main>
        <div class="wrapper">
            <div class="grid">
                <?php foreach ($attractions as $attraction) : ?>
                    <div class="attraction">
                        <img src="../assets/<?php echo $attraction["photo_name"];?>" alt="">
                        <div>
                            <div class="title"><?php echo $attraction["name"]; ?></div>
                            <div class="subtitle">
                            <?php echo $attraction["extra_information"]; ?>
                            </div>
                        </div>
                        <a class="checkout" href="index.php?attraction=<?php $attraction["id"]; ?>">Bekijk</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php
    include_once "../components/footer.php";
    ?>
</body>