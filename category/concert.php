<?php
require 'includes/vticket.db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vancouver's Best Ticket Booking : Concerts</title>

    <!-- Firebase setting -->
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-auth.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-firestore.js"></script>

    <!--Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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
    <!--Main-->
    <div>
        <!--Nav-->
        <ul id="listTab" class="menu-category">
            <li class="menu-category-name concertsTab active" rel="concertsPanel"> <a href="concert.php">Concerts</a></li>
            <li class="menu-category-name sportsTab" rel="sportsPanel"> <a href="sport.php">Sports</a></li>
            <li class="menu-category-name artsTab" rel="artsPanel"> <a href="art.php">Arts</a></li>          
            <li class="menu-category-name localTab" rel="localPanel"> <a href="local.php">Local</a></li>
        </ul>
        <!--Content container -->
        <div id="catPanel" class="panel active">
            <h3>Concerts</h3>
            <div>
                <!--Sort by -->
                <select name="selectCat" class="cat-sort-select">
                    <option value="">Default</option>
                    <option value="namea">By Name(A-Z)</option>
                    <option value="namez">By Name(Z-A)</option>
                    <option value="new">Newest First</option>
                    <option value="old">Oldest First</option>   
                </select>
            </div>
            <div id="cat-sort-result">
                <?php
                /* fetch only 4 pieces of data from 'concerts' */
                $query= 'SELECT * FROM `concerts` ORDER BY id LIMIT 4';
                if ($is_query_run = mysqli_query($conn, $query)) {
                    echo '<ul class="category-list-ul">';
                    while ($row = mysqli_fetch_assoc($is_query_run)) {
                        echo '<div class="category-event">';
                        $date=date_create($row['date']);
                        $mdy = date_format($date, "M d, D, Y");
                        $hm = date_format($date, "h:m")." PM";
                        echo '<img src="'.$row["Image_dir"].'" alt=""><li><a href="detail.php?cat=con&id='.$row["id"].'"><p class="cat-title">'.$row["title"].'</p><p class="cat-location">'. $row["location"].'</p><p class="cat-mdy">'. $mdy.'</p><p class="cat-hm">'.$hm.'</p></a></li>';
                        echo '</div>';
                    }
                    echo '</ul>';
                    /* free result set */
                    mysqli_free_result($is_query_run);
                } else {
                    echo "query not executed";
                }
                ?>
            </div>
            <button>Load More</button>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <p>By continuing past this page, you agree to our Terms of Use.</p>
            <p>Privacy Policy | 2019 Vticket. All rights reserved.</p>
        </div>  
    </footer> 
</body>
</html>