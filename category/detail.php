<?php
require 'includes/vticket.db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vancouver's Best Ticket Booking : Vticket</title>

    <!-- Firebase setting -->
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-auth.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-functions.js"></script>

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">

    <!--  kit's code  -->
    <script src="https://kit.fontawesome.com/25199e113c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="menu-header-logo">
        <a href="../menu.php"><img src="images/logo.png" alt="logo"></a>
            <div class="menu-header-logo-icons">
                <a class="header-logo-icon" href="../myPage.php"><i class="fas fa-user"></i></a>
                <div class="header-logo-icon" id="signoutBt">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>
    </div>
    <div>
        <!--Nav-->
        <ul class="menu-category">
            <li class="menu-category-name concertsTab active" rel="concertsPanel"> <a href="concert.php">Concerts</a></li>
            <li class="menu-category-name sportsTab" rel="sportsPanel"> <a href="sport.php">Sports</a></li>
            <li class="menu-category-name artsTab" rel="artsPanel"> <a href="art.php">Arts</a></li>
            <li class="menu-category-name localTab" rel="localPanel"> <a href="local.php">Local</a></li>
        </ul>
        <!--Content container -->
        <div id="catPanel" class="panel">
            <div class="detail-window">
                
            </div>
        </div>
    </div>
</body>
</html>
