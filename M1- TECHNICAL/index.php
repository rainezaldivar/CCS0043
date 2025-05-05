<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "$firstname $lastname"; ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
</head>
<body>
<?php
    $firstname = 'Raine Angeline';
    $lastname = 'Zaldivar';
    $profession = 'Photographer';
    $email = '202311025@example.com';
    $phone = '+6394567890';
    $bio = 'I am a passionate photographer with 2 years of experience capturing moments in events, portraits, and creative projects. I am an active member of "The Innovator" organization.';
    $skills = ['Adobe Lightroom', 'Photoshop', 'Event Photography', 'Portraits', 'Photojournalism'];
    $experience = [
        ['role' => 'Junior Photographer', 'company' => 'The Innovator', 'years' => '2025'],
        ['role' => 'Photojournalist', 'company' => 'Kuhaku Media', 'years' => '2023-Present']
    ];
    $portfolio = ['photo1.jpg', 'photo2.jpg', 'photo3.jpg'];
?>
<div class="header-wrapper">
    <div class="header">
        <div class="header-left">
            <h1><?php echo "$firstname $lastname"; ?></h1>
            <p><?php echo $profession; ?></p>
        </div>
    </div>
    <div class="profile-photo">
        <img src="images/1x1.jpg" alt="Profile Photo">
    </div>
</div>

<div class="section">
    <h2>About Me</h2>
    <p><?php echo $bio; ?></p>
</div>

<div class="section">
    <h2>Contact</h2>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
</div>

<div class="section">
    <h2>Tools & Expertise</h2>
    <div class="skills">
        <?php foreach ($skills as $skill) {
            echo "<span>$skill</span>";
        } ?>
    </div>
</div>

<div class="section">
    <h2>Experience</h2>
    <ul>
        <?php foreach ($experience as $job) {
            echo "<li><strong>{$job['role']}</strong> at {$job['company']} ({$job['years']})</li>";
        } ?>
    </ul>
</div>

<div class="section">
    <h2>Portfolio</h2>
    <div class="portfolio">
        <?php foreach ($portfolio as $photo) {
            echo "<a href='images/$photo' data-lightbox='portfolio'><img src='images/$photo' alt='Sample photo' class='thumb'></a>";
        } ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html>
