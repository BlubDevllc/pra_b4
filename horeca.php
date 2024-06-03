<?php
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
            <p>this a little fast food chain here in developerland</p>
        
        </div>
        </div>
    <div class='ph2'>

    <button type="button" class="collapsible">The bakery</button>
        <div class="content">
            <p>test</p>
    </div>
    </div>
    <div class='ph3'>
        <button type="button" class="collapsible">kios</button>
        <div class="content">
            <p>test</p>
    </div>
    </div>
    <div class='ph4'>   

        <button type="button" class="collapsible">phat Jimmy's</button>
        <div class="content">
            <p>test</p>
    </div>
    </div
    </div>
</body>
<script>
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</html>