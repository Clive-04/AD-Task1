<?php include(__DIR__ . "/../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">

<img src="assets/img/catbanner.jpg" alt="Cat Banner" class="cat-page-banner">

<?php
    $cats = [
        ["name" => "Mittens", "age" => 2, "breed" => "Siamese", "img" => "siamese.jpg", "slug" => "Mittens"],
        ["name" => "Snow", "age" => 4, "breed" => "White", "img" => "white.jpg", "slug" => "Snow"],
        ["name" => "Milo", "age" => 1.3, "breed" => "Tabby", "img" => "tabby.jpg", "slug" => "Milo"],
        ["name" => "Luffy", "age" => 0.5, "breed" => "Ginger", "img" => "ginger.jpg", "slug" => "Luffy"],
        ["name" => "Zoro", "age" => 0.2, "breed" => "Calico", "img" => "calico.jpg", "slug" => "Zoro"],
    ];

    echo "<div class='cat-list'>";
    foreach ($cats as $cat) {
        echo "<div class='cat-card'>";
        echo "<a href='../../page/profile/{$cat['slug']}.php'>";
        echo "<img src='assets/img/{$cat['img']}' alt='{$cat['name']}' class='cat-img'><br>";
        echo "</a>";
        echo "<strong>{$cat['name']}</strong><br>Age: {$cat['age']} years<br>";
        echo "Breed: {$cat['breed']}<br>";

        if ($cat['age'] < 1){
            echo "<span class = 'kitten'>Kitten 🐱</span><br>";
        } else {
            echo "<span class = 'adult'>Adult Cat 🐈</span><br>";
        }

        echo "</div>";
    }
    echo "</div>";
?>

<div class="back-button-wrapper">
  <a href="../../index.php" class="btn">Back to Home</a>
</div>

<script src="assets/js/catScript.js"></script>