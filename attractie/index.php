<?php
include_once "../components/head.php";
include_once "../backend/helpers.php";

$attractions = fetchCurrentAttractions($conn);

$opened_attractions = [];
$future_attractions = [];

$current_date = new DateTime();

foreach ($attractions as $attraction) {
    $attraction_date = new DateTime($attraction["openes_on"]);

    if ($attraction_date < $current_date) {
        $opened_attractions[] = $attraction;
    } else {
        $future_attractions[] = $attraction;
    }
}

?>

<body>
    <?php
    include_once "../components/header.php";
    ?>

    <main>
        <div class="wrapper">
            <div class="main-title center">
                <h1>Onze Attracties</h1>
            </div>
            <div class="grid">
                <?php foreach ($opened_attractions as $attraction) : ?>
                    <div class="attraction">
                        <img src="../assets/<?php echo $attraction["photo_name"]; ?>" alt="">
                        <div>
                            <div class="title"><?php echo $attraction["name"]; ?></div>
                            <div class="subtitle">
                                <?php echo $attraction["extra_information"]; ?>
                            </div>
                            <div class="openes-on">
                                Geopened op: <?php echo $attraction["openes_on"]; ?>
                            </div>
                        </div>
                        <a class="checkout" href="index.php?attraction=<?php $attraction["id"]; ?>">Bekijk</a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="main-title center">
                <h1>Toekomstige Attracties</h1>
            </div>
            <div class="grid">
                <?php foreach ($future_attractions as $attraction) : ?>
                    <div class="attraction">
                        <img src="../assets/<?php echo $attraction["photo_name"]; ?>" alt="">
                        <div>
                            <div class="title"><?php echo $attraction["name"]; ?></div>
                            <div class="subtitle">
                                <?php echo $attraction["extra_information"]; ?>
                            </div>
                            <div class="openes-on">
                                Geopened op: <?php echo $attraction["openes_on"]; ?>
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