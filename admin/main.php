<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vancouver's Best Ticket Booking : Admin Main Page</title>

    <!-- Firebase setting -->
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-auth.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-firestore.js"></script>

    <!--  kit's code  -->
    <script src="https://kit.fontawesome.com/25199e113c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin-style.css">
</head>
<body>
<div id="admin-main-header-logo">
        <a href="main.php"><img src="../category/images/logo.png" alt="logo"></a>
        <div class="admin-menu-header-logo-icons">
            <div class="admin-header-logo-icon" id="signoutBt">
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </div>
    </div>


    <div class="admin-main-category">
        <div class="admin-main-category-name">
            <a href="admin-concert.php">Concerts</a>
        </div>
        <div class="admin-main-category-name">
            <a href="admin-sport.php">Sports</a>
        </div>
        <div class="admin-main-category-name">
            <a href="admin-art.php">Arts</a>
        </div>
        <div class="admin-main-category-name">
            <a href="admin-local.php">Local</a>
        </div>
    </div>


    <footer class="admin-main-footer"></footer>
</body>
</html>
