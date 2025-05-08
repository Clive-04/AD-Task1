<?php include("../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">
<?php
    $cats = [
        ["name" => "Mittens", "age" => 2],
        ["name" => "Salmon", "age" => 4],
        ["name" => "Panda", "age" => 2],
        ["name" => "Luffy", "age" => 2],
        ["name" => "Zoro", "age" => 0.5],
    ];

    echo "<div class='cat-list'>";
    foreach ($cats as $cat) {
        echo "<div class='cat-card'>";
        echo "<strong>{$cat['name']}</strong><br>Age: {$cat['age']} years<br>";

        if ($cat['age'] <div 1){
            echo "<span class = 'kitten'>Kitten 🐱</span><br>";
        } else {
            echo "<span class = 'adult'>Adult Cat 🐈</span><br>";
        }

        echo "</div">;
    }
    echo "</div">
?>
<a href="../../index.php">Back to Home</a>
<script src="assets/js/catScript.js"></script>