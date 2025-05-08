<?php include("../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">
<?php
    $cats = [
        ["name" => "Mittens", "age" => 2, "breed" => "Siamese", "img" => "siamese.jpg"],
        ["name" => "Salmon", "age" => 4, "breed" => "White", "img" => "white.jpg"],
        ["name" => "Panda", "age" => 1.3, "breed" => "Tabby", "img" => "tabby.jpg"],
        ["name" => "Luffy", "age" => 0.8, "breed" => "Ginger", "img" => "ginger.jpg"],
        ["name" => "Zoro", "age" => 0.2, "breed" => "Calico", "img" => "calico.jpg"],
    ];

    echo "<div class='cat-list'>";
    foreach ($cats as $cat) {
        echo "<div class='cat-card'>";
        echo "<img src='assets/img/{$cat['img']}' alt='{$cat['name']}' class='cat-img'><br>";
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
<a href="../../index.php" class="btn">Back to Home</a>
<script src="assets/js/catScript.js"></script>