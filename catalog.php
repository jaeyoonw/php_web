<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); ?>

<div class="section catalog page">
  <div class="wrapper">
    <h1><?php echo $pageTitle; ?></h1>

    <ul class="items">
      <?php
      $categories = array_category($catalog, $section); # $categories에는 리턴한 $output배열의 key가 들어간다.  
      foreach ($categories as $id) {  # $id는 여러개의 key 들이 된다.
        echo get_item_html($id, $catalog[$id]);
      }
      ?>
    </ul>
  </div>
</div>

<?php include("inc/footer.php"); ?>