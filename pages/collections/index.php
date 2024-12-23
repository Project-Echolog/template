<?php
$pageTitle = 'Collections';
$additionalCSS = ['/echolog-template/pages/collections/style.css'];
$additionalJS = ['/echolog-template/pages/collections/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="container">
  <div class="search-bar mt-3">
    <img src="/echolog-template/assets/svgs/magnifying-glass-outline.svg" alt="Search icon" class="search-icon" />
    <input type="text" class="search" placeholder="Search in list" id="collection-search" />
  </div>
  <section class="popular-collections" id="popular-collections">
    <p class="fs-2">Most Rated Collections</p>
    <div class="collections">
      <?php
      $title = 'for when you want to feel something';
      $username = 'bel';
      $like_count = 198375;
      $comment_count = 1236;
      include '../../ui/collection-card/index.php';
      ?>
      <?php
      $title = 'Games everyone should play at least once during their lifetime';
      $username = 'fcbarcelona';
      $like_count = 164824;
      $comment_count = 1024;
      include '../../ui/collection-card/index.php';
      ?>
      <?php
      $title = 'Official top 250 games of all time';
      $username = 'Dave Vis';
      $like_count = 123456;
      $comment_count = 987;
      include '../../ui/collection-card/index.php';
      ?>
    </div>
  </section>
  <section class="new-collections" id="new-collections">
    <p class="fs-2">New Collections</p>
    <?php
    $title = "Games that will make you feel something, whether it be sadness, happiness, or anger.";
    $username = "bel";
    $like_count = 345;
    $comment_count = 12;
    $alt_view = true;
    $collection_description = "Games that will make you feel something, whether it be sadness, happiness, or anger.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Games that are considered classics and are a must-play for everyone.";
    $username = "fcbarcelona";
    $like_count = 345;
    $comment_count = 12;
    $alt_view = true;
    $collection_description = "Games that are considered classics and are a must-play for everyone.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Games that are considered classics and are a must-play for everyone.";
    $username = "xXx";
    $like_count = 345;
    $comment_count = 12;
    $alt_view = true;
    $collection_description = "Games that are considered classics and are a must-play for everyone.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Top 250 games of all time";
    $username = "Dave Vis";
    $like_count = 234;
    $comment_count = 11;
    $alt_view = true;
    $collection_description = "Top 250 games of all time according to the community.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Unforgettable games";
    $username = "Zelda";
    $like_count = 123;
    $comment_count = 10;
    $alt_view = true;
    $collection_description = "Games that are unforgettable and will stay with you forever.";
    include '../../ui/collection-card/index.php';
    ?>
  </section>
  <section class="searched-collections hidden mt-3" id="searched-collections">
    <p id="no-results" style="display: none;">No results found</p>
    <?php
    $title = 'for when you want to feel something';
    $username = 'bel';
    $like_count = 198375;
    $comment_count = 1236;
    $alt_view = true;
    $collection_description = 'Games that will make you feel something, whether it be sadness, happiness, or anger.';
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = 'Games everyone should play at least once during their lifetime';
    $username = 'fcbarcelona';
    $like_count = 164824;
    $comment_count = 1024;
    $alt_view = true;
    $collection_description = 'Games that are considered classics and are a must-play for everyone.';
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = 'Official top 250 games of all time';
    $username = 'Dave Vis';
    $like_count = 123456;
    $comment_count = 987;
    $alt_view = true;
    $collection_description = 'The official top 250 games of all time, as voted by the community.';
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Games that will make you feel something, whether it be sadness, happiness, or anger.";
    $username = "bel";
    $like_count = 345;
    $comment_count = 12;
    $alt_view = true;
    $collection_description = "Games that will make you feel something, whether it be sadness, happiness, or anger.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Games that are considered classics and are a must-play for everyone.";
    $username = "fcbarcelona";
    $like_count = 345;
    $comment_count = 12;
    $alt_view = true;
    $collection_description = "Games that are considered classics and are a must-play for everyone.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Games that are considered classics and are a must-play for everyone.";
    $username = "xXx";
    $like_count = 345;
    $comment_count = 12;
    $alt_view = true;
    $collection_description = "Games that are considered classics and are a must-play for everyone.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Top 250 games of all time";
    $username = "Dave Vis";
    $like_count = 234;
    $comment_count = 11;
    $alt_view = true;
    $collection_description = "Top 250 games of all time according to the community.";
    include '../../ui/collection-card/index.php';
    ?>
    <?php
    $title = "Unforgettable games";
    $username = "Zelda";
    $like_count = 123;
    $comment_count = 10;
    $alt_view = true;
    $collection_description = "Games that are unforgettable and will stay with you forever.";
    include '../../ui/collection-card/index.php';
    ?>
  </section>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>