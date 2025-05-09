<?php include(__DIR__."/../../components/header.component.php"); ?>
<link rel="stylesheet" href="/../assets/css/global.css">
<link rel="stylesheet" href="assets/css/profileStyle.css">

<div class="cat-profile">
    <h1>Zoro's Profile</h1>
    <img src="assets/img/calico.jpg" alt="Zoro" class="profile-img">
    <p><strong>Age:</strong> 2 months</p>
    <p><strong>Breed:</strong> Calico</p>
    <p><strong>Personality:</strong> Independent & Strong-Willed</p>
    <p><strong>Hobbies: </strong> Hunting for toys</p>
    <p><strong>Likes: </strong> Quiet time, Sunbathing, Being brushed</p>
    <p><strong>Dislikes: </strong> Too much chaos, Loud noises, Baths</p>
    <p><strong>Status:</strong> Kitten 🐱</p>
</div>

<div class="back-button-wrapper">
    <a href="index.php" class="btn">Back to Cat List</a>
</div>

<footer class="footer">
    <p>&copy; <?=date("Y") ?> <? $shelterName ?>. All Rights Reserved.</p>
    <p>Contact us at <a href="mailto:info@happypaws.com">info@happypaws.com</a></p>
</footer>