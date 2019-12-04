<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vancouver's Best Ticket Booking : Vticket</title>

     <!-- Firebase setting -->
     <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-firestore.js"></script>

    <!--JS, Popper.js, jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!--  kit's code  -->
    <script src="https://kit.fontawesome.com/25199e113c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="menu-header-logo">
        <a href="menu.php"><img src="category/images/logo.png" alt="logo"></a>

        <div class="menu-header-logo-icons">
            <a class="header-logo-icon" href="myPage.php"><i class="fas fa-user"></i></a>
            <div class="header-logo-icon" id="signoutBt">
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </div>

    </div>

    <div class="menu-category">
        <div class="menu-category-name">
            <a href="category/concert.php">Concerts</a>
        </div>
        <div class="menu-category-name">
            <a href="category/sport.php">Sports</a>
        </div>
        <div class="menu-category-name">
            <a href="category/art.php">Arts</a>
        </div>
        <div class="menu-category-name">
            <a href="category/local.php">Local</a>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <p>By continuing past this page, you agree to our Terms of Use.</p>
            <p>Privacy Policy | 2019 Vticket. All rights reserved.</p>
        </div>
    </footer>
</body>
<script src="javascript/init-firebase.js"></script>
<script src="javascript/menu.js"></script>
</html>
