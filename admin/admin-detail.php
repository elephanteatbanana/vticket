<?php
require '../category/includes/vticket.db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vancouver's Best Ticket Booking : Admin Detail</title>
    <!-- Firebase setting -->
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-auth.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/7.1.0/firebase-firestore.js"></script>

    <!--Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <!--  kit's code  -->
    <script src="https://kit.fontawesome.com/25199e113c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/admin-style.css">
</head>
<body>
<header></header>
    <div id="admin-main-header-logo">
        <a href="main.php"><img src="../category/images/logo.png" alt="logo"></a>
        <div class="admin-menu-header-logo-icons">
            <div class="admin-header-logo-icon" id="signoutBt">
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </div>
    </div>
    <div class="admin-cat-main">
        <div class="admin-cat-category">
            <div class="admin-cat-category-name">
                <a href="admin-concert.php">Concerts</a>
            </div>
            <div class="admin-cat-category-name">
                <a href="admin-sport.php">Sports</a>
            </div>
            <div class="admin-cat-category-name">
                <a href="admin-art.php">Arts</a>
            </div>
            <div class="admin-cat-category-name">
                <a href="admin-local.php">Local</a>
            </div>
        </div>
        <div id="catPanel" class="panel active">
        <div class="detail-window">
            <?php

if (!isset($_GET['id'])) {

} else {
    $page_id = $_GET['id'];
    try {
        if (!isset($_GET['cat'])) {
            throw new Exception('Invalid url');
        } elseif (!is_numeric($page_id)) {
            //SQL injection prevention : ID must be numeric only
            throw new Exception('Invalid url');
        }
        ////SQL injection prevention : The value of 'cat' must be valid
        $categoryUrl = mysqli_real_escape_string($conn, $_GET['cat']);

        switch ($categoryUrl) {
            case "spo":
                //check if id is valid
                $idChecker = "SELECT id FROM sports WHERE id = '$page_id' ";
                $idChecker_sql = mysqli_query($conn, $idChecker);
                if (mysqli_num_rows($idChecker_sql) == 0) {
                    throw new Exception('Invalid url');
                } else {
                    $selected_query = "SELECT * FROM sports WHERE id='$page_id' ";
                    $detail_sql = mysqli_query($conn, $selected_query);
                    $row = mysqli_fetch_array($detail_sql);
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="../category/' . $row["Image_dir"] . '" alt="Failed to load the image">';
                    echo "</div>";
                    echo "<div class='detail-event-title-container'>";
                    echo "<h3>";
                    echo $row['title'];
                    echo "</h3>";
                    echo "<h4>";
                    echo $row['location'];
                    echo "</h4>";
                    echo "<h4>";
                    echo $row['date'];
                    echo "</h4>";
                    echo "</div>";
                }
                break;
            case "con":
                //check if id is valid
                $idChecker = "SELECT id FROM concerts WHERE id = '$page_id' ";
                $idChecker_sql = mysqli_query($conn, $idChecker);
                if (mysqli_num_rows($idChecker_sql) == 0) {
                    throw new Exception('Invalid url');
                } else {
                    $selected_query = "SELECT * FROM concerts WHERE id='$page_id' ";
                    $detail_sql = mysqli_query($conn, $selected_query);
                    $row = mysqli_fetch_array($detail_sql);
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="../category/' . $row["Image_dir"] . '" alt="Failed to load the image">';
                    echo "</div>";
                    echo "<div class='detail-event-title-container'>";
                    echo "<h3>";
                    echo $row['title'];
                    echo "</h3>";
                    echo "<h4>";
                    echo $row['location'];
                    echo "</h4>";
                    echo "<h4>";
                    echo $row['date'];
                    echo "</h4>";
                    echo "</div>";
                }
                break;
            case "loc":
                //check if id is valid
                $idChecker = "SELECT id FROM locals WHERE id = '$page_id' ";
                $idChecker_sql = mysqli_query($conn, $idChecker);
                if (mysqli_num_rows($idChecker_sql) == 0) {
                    throw new Exception('Invalid url');
                } else {
                    $selected_query = "SELECT * FROM locals WHERE id='$page_id' ";
                    $detail_sql = mysqli_query($conn, $selected_query);
                    $row = mysqli_fetch_array($detail_sql);
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="../category/' . $row["Image_dir"] . '" alt="Failed to load the image">';
                    echo "</div>";
                    echo "<div class='detail-event-title-container'>";
                    echo "<h3>";
                    echo $row['title'];
                    echo "</h3>";
                    echo "<h4>";
                    echo $row['location'];
                    echo "</h4>";
                    echo "<h4>";
                    echo $row['date'];
                    echo "</h4>";
                    echo "</div>";
                }

                break;
            case "art":
                //check if id is valid
                $idChecker = "SELECT id FROM arts WHERE id = '$page_id' ";
                $idChecker_sql = mysqli_query($conn, $idChecker);
                if (mysqli_num_rows($idChecker_sql) == 0) {
                    throw new Exception('Invalid url');
                } else {
                    $selected_query = "SELECT * FROM arts WHERE id='$page_id' ";
                    $detail_sql = mysqli_query($conn, $selected_query);
                    $row = mysqli_fetch_array($detail_sql);
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="../category/' . $row["Image_dir"] . '" alt="Failed to load the image">';
                    echo "</div>";
                    echo "<div class='detail-event-title-container'>";
                    echo "<h3>";
                    echo $row['title'];
                    echo "</h3>";
                    echo "<h4>";
                    echo $row['location'];
                    echo "</h4>";
                    echo "<h4>";
                    echo $row['date'];
                    echo "</h4>";
                    echo "</div>";
                }
                break;
            default:
                echo "Access Denied!";
        }
    } catch (Execption $e) {
        echo $e->getMessage();
    }
}
?>
        </div>
        <?php
echo "<div class='description'>";
echo $row['description'];
echo "</div>";
?>
        </div>
    </div>
    <footer class="admin-detail-footer"></footer>
</body>
<script src="../javascript/init-firebase.js"></script>
<script src="../javascript/admin.js"></script>
</html>
