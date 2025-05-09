<?php include(__DIR__."/../../components/header.component.php"); ?>
<link rel="stylesheet" href="/../assets/css/global.css">
<link rel="stylesheet" href="assets/css/profileStyle.css">

<div class="cat-profile">
    <h1>Mittens' Profile</h1>
    <img src="assets/img/siamese.jpg" alt="Mittens" class="profile-img">
    <p><strong>Age:</strong> 2 years</p>
    <p><strong>Breed:</strong> Siamese</p>
    <p><strong>Personality:</strong> Vocal and Social</p>
    <p><strong>Hobbies: </strong> Climbing and exploring high places</p>
    <p><strong>Likes: </strong> Being talked to, Lots of attention</p>
    <p><strong>Dislikes: </strong> Being confined, Being ignored</p>
    <p><strong>Status:</strong> Adult Cat 🐈</p>
</div>

<div class="back-button-wrapper">
    <a href="index.php" class="btn">Back to Cat List</a>
</div>

<footer class="footer">
    <p>&copy; <?=date("Y") ?> <? $shelterName ?>. All Rights Reserved.</p>
    <p>Contact us at <a href="mailto:info@happypaws.com">info@happypaws.com</a></p>
</footer>