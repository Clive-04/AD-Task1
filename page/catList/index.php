<?php include(__DIR__ . "/../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">

<img src="assets/img/catbanner.jpg" alt="Cat Banner" class="cat-page-banner">

<?php
    $cats = [
        ["name" => "Mittens", "age" => 2, "breed" => "Siamese", "img" => "siamese.jpg", "file" => "mittens.php"],
        ["name" => "Snow", "age" => 4, "breed" => "White", "img" => "white.jpg", "file" => "snow.php"],
        ["name" => "Milo", "age" => 1.3, "breed" => "Tabby", "img" => "tabby.jpg", "file" => "milo.php"],
        ["name" => "Luffy", "age" => 0.5, "breed" => "Ginger", "img" => "ginger.jpg", "file" => "luffy.php"],
        ["name" => "Zoro", "age" => 0.2, "breed" => "Calico", "img" => "calico.jpg", "file" => "zoro.php"],
    ];

    echo "<div class='cat-list'>";

    foreach ($cats as $cat) {
        echo "<a href='{$cat['file']}' class='cat-card-link' style='text-decoration: none; color: inherit;'>";
        echo "<div class='cat-card'>";
        echo "<img src='assets/img/{$cat['img']}' alt='{$cat['name']}' class='cat-img'><br>";
        echo "<strong>{$cat['name']}</strong><br>Age: {$cat['age']} years<br>";
        echo "Breed: {$cat['breed']}<br>";

        if ($cat['age'] < 1) {
            echo "<span class='kitten'>Kitten 🐱</span><br>";
        } else {
            echo "<span class='adult'>Adult Cat 🐈</span><br>";
        }

        echo "</div></a>";
    }

    echo "</div>";
?>

<div class="back-button-wrapper">
    <a href="../../index.php" class="btn">Back to Home</a>
</div>

<footer class="footer">
    <p>&copy; <?=date("Y") ?> <? $shelterName ?>. All Rights Reserved.</p>
    <p>Contact us at <a href="mailto:info@happypaws.com">info@happypaws.com</a></p>
</footer>

<script src="assets/js/catScript.js"></script>
