<?php
$pageTitle = 'Profile';
$additionalCSS = ['/echolog-template/pages/profile/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="container">
  <section class="user-panel">
    <img
      src="/echolog-template/assets/images/profile-photo.png"
      alt="Avatar of user"
      class="user-panel__avatar" />
    <p class="user-panel__username m-0">
      <?php echo $username ?? 'Deacon' ?>
      <span class="user-panel__edit-button">
        <a class="white" href="#">Edit</a>
      </span>
    </p>
    <p class="user-panel__stats m-0">
      <span class="user-panel__stats__item">
        <?php echo $game_count ?? 15; ?> games</span>
      <span>|</span>
      <span class="user-panel__stats__item">
        <?php echo $review_count ?? 10 ?> reviews</span>
      <span>|</span>
      <span class="user-panel__stats__item">
        <?php echo $list_count ?? 2 ?> lists</span>
    </p>
  </section>
  <hr class="divider" />
  <section class="popular-games mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Popular Games to Track</p>
      <a class="fs-1-5" href="/echolog-template/pages/games/">See all</a>
    </div>
    <div class="gallery">
      <?php
      $src = "/echolog-template/assets/images/image-1.png";
      $title = "God of War";
      include '../../ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-2.png";
      $title = "Fallout New Vegas";
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
      $src = "/echolog-template/assets/images/image-6.png";
      $title = "Silent Hill 3";
      include '../../ui/image-card/index.php';
      ?>
    </div>
  </section>
  <section class="user-collections mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Collections</p>
      <!-- <a class="fs-1-5" href="#">See all</a> -->
    </div>
    <div class="collections">
      <a class="create-new-list" id="create-new-list" href="/echolog-template/pages/collection-create/">
        <div class="create-new-list__frame"></div>
        <p class="create-new-list__title fs-2 m-0">
          Create new list
        </p>
      </a>
    </div>
  </section>
  <section class="wishlist mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Wishlist</p>
      <a class="fs-1-5" href="/echolog-template/pages/games/">See all</a>
    </div>
    <div class="gallery">
      <?php
      $src = "/echolog-template/assets/images/image-1.png";
      $title = "God of War";
      include '../../ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-2.png";
      $title = "Fallout New Vegas";
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
      $src = "/echolog-template/assets/images/image-6.png";
      $title = "Silent Hill 3";
      include '../../ui/image-card/index.php';
      ?>
    </div>
  </section>
  <section class="reviews mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Reviews</p>
    </div>
    <?php
    $game_image = "/echolog-template/assets/images/image-4.png";
    $game_title = "Death Stranding";
    $username = "Deacon";
    $rating = 5;
    $text = "\"KODJIMA IS GENIUS\"";
    $like_count = 200;
    $hide_like_button = true;
    include '../../ui/review-card/index.php';
    ?>
  </section>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>