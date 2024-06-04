<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?msg=Je bent niet ingelogd");
    exit;
}
 
include_once "components/head.php";
?>

<body>
    <?php
    include_once "components/header.php";
    ?>
    <div class="ph">
    <div class="ph1">
        <button type="button" class="collapsible">the dogg</button>
            <div class="content">
                <img class="dogg" src="assets\TheDogg.jpg" alt="">
                <p>The Dogg is een food stand met verschillende soorten hotdogs en drankjes</p>
        
            </div>
        </div>
    <div class='ph2'>

    <button type="button" class="collapsible">The bakery</button>
        <div class="content">
            
            <img class="bakery" src="assets\TheBakery.webp" alt="">        
            <p>The Bakery is een klein en schattig bakerijtje met allerlij soorten gebak en banket die all uw zoetekauw benodig heden heeft</p>
        </div>
    </div>
        <div class='ph3'>
        <button type="button" class="collapsible">kiosk</button>
        <div class="content">
            <img class="kiosk" src="assets\kiosk.jpg" alt="">
                <p>de kiosk is een klein wikeltje voor all uw benodig heden tijdens het </p>
        </div>
    </div>
        <div class='ph4'>   

        
        <button type="button" class="collapsible">phat Jimmy's</button>
            <div class="content">
                <p>test</p>
            </div>
        </div>
        <div class='ph5'>   

        
            <button type="button" class="collapsible">phat Jimmy's</button>
            <div class="content">
                <p>test</p>
            </div>
        </div>
        <div class='ph6'>   

        
            <button type="button" class="collapsible">phat Jimmy's</button>
            <div class="content">
                <p>test</p>
            </div>
        </div>
    </div>

</body>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>
</html>