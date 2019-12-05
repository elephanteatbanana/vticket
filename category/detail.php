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
                <?php
// get id from URL
if (!isset($_GET['id'])) {
    echo "Invalid url";
} else {
    $page_id = $_GET['id'];
    try {
        // get cat from URL
        if (!isset($_GET['cat'])) {
            throw new Exception('Invalid url');
        } elseif (!is_numeric($page_id)) {
            //SQL injection prevention : ID must be numeric only
            throw new Exception('Invalid url');
        }
        //SQL injection prevention : The value of 'cat' must be valid
        $categoryUrl = mysqli_real_escape_string($conn, $_GET['cat']);
        // switch by category
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
                    // building HTML for the requested content
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="' . $row["Image_dir"] . '" alt="Failed to load the image">';
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
                    // building HTML for the requested content
                    $selected_query = "SELECT * FROM concerts WHERE id='$page_id' ";
                    $detail_sql = mysqli_query($conn, $selected_query);
                    $row = mysqli_fetch_array($detail_sql);
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="' . $row["Image_dir"] . '" alt="Failed to load the image">';
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
                    // building HTML for the requested content
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="' . $row["Image_dir"] . '" alt="Failed to load the image">';
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
                    // building HTML for the requested content
                    echo "<div class='detail-event-image-container'>";
                    echo '<img class="detail-event-image" src="' . $row["Image_dir"] . '" alt="Failed to load the image">';
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
            <div class="detail-bookingbt-container">
                <button id="bookBt" class="notBooked"></button>
            </div>
            <?php
echo "<div class='description'>";
echo $row['description'];
echo "</div>";
?>
        </div>
    </div>
</body>
<script src="../javascript/init-firebase.js"></script>
<script>
    var multiClickPrevnt = false;
    window.onload=function(){
         // add a button action and run IsBooked()
        document.getElementById("bookBt").addEventListener("click", buttonAction);
        firebase.auth().onAuthStateChanged(user => IsBooked());
    }
    //check whether it's booked or not by class 
    function IsBooked(){
        var sql_id = "<?php echo $row['id']; ?>";
        var sql_cat = "<?php echo $row['category']; ?>";
        var substrCat = sql_cat.substring(0, 1);
        var newId = substrCat + sql_id;
        var user = firebase.auth().currentUser;
        var uid;
        var db = firebase.firestore();
        if (user != null) {
            uid = user.uid;
            var userRef = db.collection("userList").doc(uid);
            // check if the data exists in the array
            userRef.get().then(function(doc) {
                if (doc.exists) {
                    var foundResult = doc.data().bookingList.find(function(element) {
                        return element == newId;
                    })
                    if(foundResult){
                        console.log("exist");
                        document.getElementById("bookBt").className = "Booked";
                        document.getElementById("bookBt").innerHTML = "Cancel";
                        return true;
                    }else{
                        document.getElementById("bookBt").className = "notBooked";
                        document.getElementById("bookBt").innerHTML = "Book Now";
                        return false;
                    }
                } else {
                    // doc.data() will be undefined in this case
                    console.log("No such document!");
                }
            }).catch(function(error) {
                console.log("Error getting document:", error);
            });
        }
    }
    //button action -> booking if it's not booked , cancel if it's booked
    function buttonAction(){
        if(!multiClickPrevnt){
            multiClickPrevnt = true;
            // check whether it's booked or not by class
            var ifBooked = document.getElementById("bookBt").className;
            if(ifBooked == "notBooked"){
                console.log("not booked");
                bookingGo();
            }else{
                console.log("booked");
                cancelBooking();
            }
        }else{
            alert("Booking is in progress");
        }
    }
    // cancel a reservation
    function cancelBooking(){
        console.log("cancelling...");
        //fetching data from the list to display
        var sql_title = "<?php echo $row['title']; ?>";
        var sql_id = "<?php echo $row['id']; ?>";
        var sql_time = "<?php echo $row['location']; ?>";
        var sql_location = "<?php echo $row['date']; ?>";
        var sql_cat = "<?php echo $row['category']; ?>";
        
        //user identification
        var user = firebase.auth().currentUser;
        var uid;
        var db = firebase.firestore();
        if (user != null) {
            uid = user.uid;
            console.log(uid);

            //delete data from the array
            var userRef = db.collection("userList").doc(uid);
            var substrCat = sql_cat.substring(0, 1);
            var newId = substrCat + sql_id;
                userRef.update({
                    bookingList: firebase.firestore.FieldValue.arrayRemove(newId)
                });
            //delete data from the collection
            var deletePath = "userList/" + uid + "/" + newId;
            console.log(userRef.path);
            console.log(deletePath);
            deleteAtPath(deletePath);
            //delete all the docs from the collection

        }else{
            console.log("unidentified user access !");
        }
        multiClickPrevnt =false;

        document.getElementById("bookBt").className = "notBooked";
        document.getElementById("bookBt").innerHTML = "Book Now";
        console.log("Successfully Canceled!");
    }
    //delete the reservation on Firebase - firebase function
    function deleteAtPath(path) {
        var deleteFn = firebase.functions().httpsCallable('recursiveDelete');
        deleteFn({ path: path })
            .then(function(result) {
                console.log('Delete success: ');
            })
            .catch(function(err) {
                console.log('Delete failed, see console,');
                console.warn(err);
            });
    }
    // process booking
    function bookingGo() {
        var sql_title = "<?php echo $row['title']; ?>";
        var sql_id = "<?php echo $row['id']; ?>";
        var sql_time = "<?php echo $row['location']; ?>";
        var sql_location = "<?php echo $row['date']; ?>";
        var sql_cat = "<?php echo $row['category']; ?>";
        var substrCat = sql_cat.substring(0, 1);
        var user = firebase.auth().currentUser;
        var uid;
        var db = firebase.firestore();
        if (user != null) {
            uid = user.uid;
            var userRef = db.collection("userList").doc(uid);
            // check if the data exists in the array
            userRef.get().then(function(doc) {
                if (doc.exists) {
                    var foundResult = doc.data().bookingList.find(function(element) {
                        var newId = substrCat + sql_id;
                        return element == sql_id;
                    })
                    if(foundResult){
                        console.log("exist");
                    }else{
                        console.log("does not exist");
                        // add new data to the the array field.
                        var newId = substrCat + sql_id;
                        console.log("new id is " + newId);
                        userRef.update({
                            bookingList: firebase.firestore.FieldValue.arrayUnion(newId)
                        });
                        // insert a new doc into the subcollection
                        userRef.collection(newId).doc().set({
                            id : sql_id,
                            category : sql_cat,
                            title : sql_title,
                            time : sql_time,
                            location : sql_location
                        });
                        document.getElementById("bookBt").className = "Booked";
                        document.getElementById("bookBt").innerHTML = "Cancel";
                        console.log("Successfully booked!");
                    }
                } else {
                    // doc.data() will be undefined in this case
                    console.log("No such document!");
                }
            }).catch(function(error) {
                console.log("Error getting document:", error);
            });
        }
        multiClickPrevnt =false;
    }
</script>
<script src="../javascript/detail.js"></script>
</html>
