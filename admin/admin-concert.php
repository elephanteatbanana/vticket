<?php
include_once '../category/includes/vticket.db.php';
$result = "";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vancouver's Best Ticket Booking : Admin Concerts</title>
</head>

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

<body>
    <header>
        <div id="admin-main-header-logo">
            <a href="main.php"><img src="../category/images/logo.png" alt="logo"></a>
            <div class="admin-menu-header-logo-icons">
                <div class="admin-header-logo-icon" id="signoutBt">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>
        </div>
    </header>
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
        <div class="add-delete">
            <input id="add-event-button" type="button" value="ADD">
            <input id="delete-event-button" type="button" value="DELETE">
            <div id="add-event-window" class="popup-add">
                <form name="add-event" id="add-form"   method="post" enctype="multipart/form-data">
                    <div class="admin-cat-add-input">
                        <label for="selectCat">Category</label>
                        <select id="select-category" name="selectCat">
                            <option value="concerts" selected>Concerts</option>
                            <option value="sports">Sports</option>
                            <option value="arts">Arts</option>
                            <option value="locals">Locals</option>
                        </select>
                    </div>
                    <div class="admin-cat-add-input">
                        <label for="title">Title</label>
                        <input id="add-title" type="text" name="title" placeholder="1~25 letters">
                    </div>
                    <div class="admin-cat-add-input">
                        <label for="location">Location</label>
                        <input id="add-location" type="text" name="location" placeholder="1~25 letters">
                    </div>
                    <div class="admin-cat-add-input">
                        <label for="date">Date</label>
                        <input id="add-date" type="date" name="date">
                        <input id="add-time" type="time" name="time">
                    </div>
                    <div class="admin-cat-add-input">
                        <label for="description">Description</label>
                        <textarea id="add-description" type="text" name="description" >Enter Description</textarea>
                    </div>
                    <div class="admin-cat-add-input">
                        <label for="image">Image</label>
                        <input type="file" name="imgUpload" value="image upload" accept="image/png, image/jpeg">
                    </div>
                    <div class="admin-cat-add-input">
                        <input id="add-submit" type="submit" name ="submit" value="add new event">
                        <p class="form-message"></p>
                    </div>

                </form>
            </div>
            <?php echo $result; ?>
        </div>
        <div class="admin-cat-container">
            <h3>Concerts</h3>
            <form class="admin-cat-form"action="#" method="post">
                <!-- Fetching query from Mysql -->
            <?php
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                $query = 'SELECT * FROM `concerts`';
                if ($is_query_run = mysqli_query($conn, $query)) {
                    /* fetch associative array */
                    while ($row = mysqli_fetch_assoc($is_query_run)) {
                        $cat = substr($row["category"], 0, 1);
                        echo "<div class='admin-cat-list'>";
                        echo "<div class='admin-cat-list-image'>";
                        $date = date_create($row['date']);
                        $mdy = date_format($date, "M d, D, Y");
                        $hm = date_format($date, "h:m") . " PM";
                        echo '<img src="../category/' . $row["Image_dir"] . '" alt="">';
                        echo "</div>";
                        echo "<div class='admin-cat-list-title'>";
                        echo '<input class="delete-popup-checkbox" name="delete-list[]" type="checkbox" value="' . $cat . $row["id"] . '"><a href="admin-detail.php?cat=con&id=' . $row["id"] . '"><p class="cat-title">' . $row["title"] . '</p><p class="cat-location">' . $row["location"] . '</p><p class="cat-mdy">' . $mdy . '</p><p class="cat-hm">' . $hm . '</p></a></li>';
                        echo "</div>";
                        echo "</div>";
                    }
                    /* free result set */
                    mysqli_free_result($is_query_run);
                } else {
                    echo "query not executed";
                }
?>
                <div class="delete-process-button">
                    <input id="delete-event-button" type="submit" name="delete" value="Process To Delete">
                </div>
            </form>
        </div>

    </div>
    <footer></footer>

</body>
<script src="../javascript/init-firebase.js"></script>
<script src="../javascript/admin.js"></script>

</html>
<?php
if (isset($_POST["submit"])) {
    //Variables for posting the form
    //SQL injection prevention
    $cat = mysqli_real_escape_string($conn, $_POST['selectCat']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $loc = mysqli_real_escape_string($conn, $_POST['location']);
    $des = mysqli_real_escape_string($conn, $_POST['description']);
    $date = $_POST['date'];
    $time = htmlspecialchars($_POST['time']);
    $imgName = basename($_FILES["imgUpload"]["name"]);
    $img_dir = "images/" . $imgName;
    $datime = $date . ' ' . $time . ':00';
    $currentDate = date('Y-m-d');

    //Form validation
    if (empty($title) || strlen($title) > 25) {
        // title validation : 1~20 letters
        $result = "Error : Invalid Title Input, Title must be 1~25 letters";
    } elseif (empty($loc) || strlen($loc) > 25) {
        //Location validation : 1~20 letters
        $result = "Error : Invalid Location Input, Location must be 1~25 letters";
    } elseif ($date < $currentDate) {
        //Date validation : no later than curret date
        $result = "Error : Invalid Date Input, Date must be no later than current date ";
    } else {
        $artSql = "INSERT INTO concerts (id, category, title, location, date, Image_dir,description)
            VALUES (NULL,'$cat','$title','$loc','$datime','$img_dir','$des')";
        if (!mysqli_query($conn, $artSql)) {
            $result = mysqli_error($conn);
        } else {
            //Image Upload
            $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/vticket/category/images/";
            $targetFile = $targetDir . basename($_FILES["imgUpload"]["name"]);
            $readyToUpload = true;
            if (basename($_FILES["imgUpload"]["name"])) {
                //check if the image file is valid
                $checkImage = getimagesize($_FILES["imgUpload"]["tmp_name"]);
                if ($checkImage !== false) {
                    $result = "File is an image - " . $checkImage["mime"];
                    $readyToUpload = true;
                } else {
                    $result = "File is not an image.";
                    $readyToUpload = false;
                }

                //Check if the image exists
                if (file_exists($targetFile)) {
                    $result = "File already exists";
                    $readyToUpload = false;
                }
                //Check if the size of the file is too large
                if ($_FILES["imgUpload"]["size"] > 2000000) {
                    $result = "File size must be less than 2 MB";
                    $readyToUpload = false;
                }
                if ($readyToUpload == true) {
                    if (move_uploaded_file($_FILES["imgUpload"]["tmp_name"], $targetFile)) {
                        $result = "File upload completed !";
                    } else {
                        $result = "File upload failed !";
                    }
                } else {
                    $result = "File upload failed !";
                }
            } else {
                $result = "No image has chosen!";
            }
        }
    }
}
?>
<?php
if (isset($_POST["delete"])) {
    if (!empty($_POST['delete-list'])) {
        try {
            $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);

            // set the PDO  error mode to exception
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            foreach ($_POST['delete-list'] as $selected) {
                $subStrSelected = substr($selected, 0, 1);
                $uniqId = substr($selected, 1);
                $tableN = "";
                switch ($subStrSelected) {
                    case "c":
                        $tableN = "concerts";
                        break;
                    case "s":
                        $tableN = "sports";
                        break;
                    case "l":
                        $tableN = "locals";
                        break;
                    case "a":
                        $tableN = "arts";
                        break;
                    default:
                        echo "Invalid Input";
                }

                $stmt = $conn->prepare('DELETE FROM concerts WHERE id = :uniqueId');
                //$stmt->bindParam(':tableName', $tableN);
                $stmt->bindParam(':uniqueId', $uniqId);
                $stmt->execute();

            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
}
?>