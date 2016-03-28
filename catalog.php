<?php

$pageTitle = "Full Catalog";    // Default title.
if (isset($_GET['cat'])) { // A category has been supplied.
    $cat = $_GET['cat'];    // Get the category.

    switch ($cat) { // Switch based on category. Leave default if none of these.
        case "books":
            $pageTitle = "Books";
            break;
        case "movies":
            $pageTitle = "Movies";
            break;
        case "music":
            $pageTitle = "Music";
            break;
    }
}

include("inc/header.php"); ?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>
