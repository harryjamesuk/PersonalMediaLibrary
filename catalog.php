<?php

$pageTitle = "Full Catalog";    // Default title.
$section = null;    // Default section.

if (isset($_GET['cat'])) { // A category has been supplied.
    $cat = $_GET['cat'];    // Get the category.

    switch ($cat) { // Switch based on category. Leave default if none of these.
        case "books":
            $pageTitle = "Books";
            $section = "books";
            break;
        case "movies":
            $pageTitle = "Movies";
            $section = "movies";
            break;
        case "music":
            $pageTitle = "Music";
            $section = "music";
            break;
    }
}

include("inc/header.php"); ?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>
