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
        </div>
        <div class="admin-cat-container">
            <h3>Concerts</h3>
            <form class="admin-cat-form"action="#" method="post">
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
