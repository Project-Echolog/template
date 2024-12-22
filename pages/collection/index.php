<?php
$pageTitle = 'Collection';
$additionalCSS = ['/echolog-template/pages/collection/style.css'];
$additionalJS = ['/echolog-template/pages/collection/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="collection container">
  <h1 class="collection__name">
    Games where main character is "literally me"
    <span class="collection__edit-button">
      <img class="collection__edit-button-icon" src="/echolog-template/assets/svgs/pencil-outline.svg" alt="Edit icon" />
    </span>
  </h1>
  <h2 class="collection__description gray">
    Main character is literally me fr fr
  </h2>
  <div class="collection__stats flex flex-row justify-between align-center">
    <div class="collection__by">
      <img
        src="/echolog-template/assets/images/profile-photo.png"
        alt="Avatar of user"
        class="collection__avatar" />
      <h3 class="collection__username">Collection by <span>Deacon</span></h3>
    </div>
    <a class="collection__like" href="#" id="collection-like">
      <img src="/echolog-template/assets/svgs/heart-outline.svg" alt="Heart icon" class="collection__like-icon">
      <p class="collection__like-count m-0">150</p>
    </a>
  </div>
  <hr color="#8a8a8a" />
  <div class="flex flex-row justify-between align-center">
    <select class="collection__sort" id="collection-sort">
      <option class="collection__sort-option" value="popular">Popular</option>
      <option class="collection__sort-option" value="newest">Newest</option>
    </select>
    <div class="collection__search-bar">
      <img src="/echolog-template/assets/svgs/magnifying-glass-outline.svg" alt="Search icon" class="collection__search-icon" />
      <input type="text" class="collection__search" placeholder="Search in list" id="collection-search" />
    </div>
  </div>
  <section class="gallery">
    <?php
    $src = "/echolog-template/assets/images/image-1.png";
    $title = "God of War";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-9.png";
    $title = "Ghost of Tsushima";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-3.png";
    $title = "Red Dead Redemption 2";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-4.png";
    $title = "Death Stranding";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-5.png";
    $title = "Silent Hill 2";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-10.png";
    $title = "Grand Theft Auto IV";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-11.png";
    $title = "Detroit Become Human";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-12.png";
    $title = "Metal Gear Solid 2";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-13.png";
    $title = "Metal Gear Solid 3";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-14.png";
    $title = "The Last of Us";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-15.png";
    $title = "The Evil Within";
    include '../../ui/image-card/index.php';
    ?>
    <?php
    $src = "/echolog-template/assets/images/image-16.png";
    $title = "Uncharted 4";
    include '../../ui/image-card/index.php';
    ?>
  </section>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>