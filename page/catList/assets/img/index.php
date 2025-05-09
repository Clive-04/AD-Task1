<?php include(__DIR__ . "/../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">

<img src="assets/img/catbanner.jpg" alt="Cat Banner" class="cat-page-banner">

<?php
    $cats = [
        ["name" => "Mittens", "age" => 2, "breed" => "Siamese", "img" => "siamese.jpg"],
        ["name" => "Snow", "age" => 4, "breed" => "White", "img" => "white.jpg"],
        ["name" => "Milo", "age" => 1.3, "breed" => "Tabby", "img" => "tabby.jpg"],
        ["name" => "Luffy", "age" => 0.5, "breed" => "Ginger", "img" => "ginger.jpg"],
        ["name" => "Zoro", "age" => 0.2, "breed" => "Calico", "img" => "calico.jpg"],
    ];

    echo "<div class='cat-list'>";
    foreach ($cats as $cat) {
        $query = http_build_query([
            'name' => $cat['name'],
            'age' => $cat['age'],
            'breed' => $cat['breed'],
            'img' => $cat['img']
        ]);
        echo "<a href='../catProfile/index.php?$query' class='cat-card-link' style='text-decoration: none; color: inherit;'>";
        echo "<div class='cat-card'>";
        echo "<img src='../../assets/img/{$cat['img']}' alt='{$cat['name']}' class='cat-img'><br>";
        echo "<strong>{$cat['name']}</strong><br>Age: {$cat['age']} years<br>";
        echo "Breed: {$cat['breed']}<br>";
    
        echo $cat['age'] < 1 ? "<span class='kitten'>Kitten 🐱</span><br>" : "<span class='adult'>Adult Cat 🐈</span><br>";
        echo "</div>";
        echo "</a>";
    }
    echo "</div>";
?>

<div class="back-button-wrapper">
    <a href="../../index.php" class="btn">Back to Home</a>
</div>

<script src="assets/js/catScript.js"></script>
