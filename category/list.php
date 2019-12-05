<?php

require 'includes/vticket.db.php';


$sortedBy = $_REQUEST["q"];
$input = "";
$category = substr($sortedBy, 0, 1);
$sortedBy = substr($sortedBy, 1);
$order = "";

// sort by ?
switch ($sortedBy) {
    case "namea":
        $order = "title";
        break;
    case "namez":
        $order = "title DESC";
        break;
    case "new":
        $order = "date";
        break;
    case "old":
        $order = "date DESC";
        break;
    default:
        $order = "id";
}

// category
switch ($category) {
    case "c":
        $category = "concerts";
        break;
    case "s":
        $category = "sports";
        break;
    case "l":
        $category = "locals";
        break;
    case "a":
        $category = "arts";
        break;
}

// data fetching by the requested order and category
$query = 'SELECT * FROM ' . $category . ' ORDER BY ' . $order;
if ($is_query_run = mysqli_query($conn, $query)) {
    echo '<ul class="category-list-ul">';
    $temp_str = $_REQUEST["from"];
    $temp_end = $_REQUEST["to"];
    while ($row = mysqli_fetch_assoc($is_query_run)) {
        if ($temp_str < $temp_end) {
            echo '<div class="category-event">';
            $date = date_create($row['date']);
            $mdy = date_format($date, "M d, D, Y");
            $hm = date_format($date, "h:m") . " PM";
            echo '<img src="' . $row["Image_dir"] . '" alt=""><li><a href="detail.php?cat=con&id=' . $row["id"] . '"><p class="cat-title">' . $row["title"] . '</p><p class="cat-location">' . $row["location"] . '</p><p class="cat-mdy">' . $mdy . '</p><p class="cat-hm">' . $hm . '</p></a></li>';
            echo '</div>';
            $temp_str = $temp_str + 1;
        }
    }
    echo '</ul>';
    /* free result set */
    mysqli_free_result($is_query_run);
} else {
    echo "query not executed";
}
