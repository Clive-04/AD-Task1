<?php include(__DIR__."/../../components/header.component.php"); ?>
<link rel="stylesheet" href="/../assets/css/global.css">
<link rel="stylesheet" href="assets/css/profileStyle.css">

<div class="cat-profile">
    <h1>Milo's Profile</h1>
    <img src="assets/img/tabby.jpg" alt="Milo" class="profile-img">
    <p><strong>Age:</strong> 1.3 years</p>
    <p><strong>Breed:</strong> Tabby</p>
    <p><strong>Personality:</strong> Friendly and Laid-back</p>
    <p><strong>Hobbies: </strong> Window watching, especially birds</p>
    <p><strong>Likes: </strong> Cozy blankets, baskets, or your laundry pile</p>
    <p><strong>Dislikes: </strong> Being picked up too much and empty food bowls</p>
    <p><strong>Status:</strong> Adult Cat 🐈</p>
</div>

<div class="back-button-wrapper">
    <a href="index.php" class="btn">Back to Cat List</a>
</div>

<footer class="footer">
    <p>&copy; <?=date("Y") ?> <? $shelterName ?>. All Rights Reserved.</p>
    <p>Contact us at <a href="mailto:info@happypaws.com">info@happypaws.com</a></p>
</footer>