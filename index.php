<?php
$pageTitle = 'Home';
$additionalCSS = ['/echolog-template/style.css'];
$additionalJS = ['/echolog-template/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<section class="carousel">
  <div class="carousel__item active">
    <img src="./assets/images/carousel-1.png" alt="Carousel Image 1" />
  </div>
  <div class="carousel__item">
    <img src="./assets/images/carousel-2.jpg" alt="Carousel Image 2" />
  </div>
  <div class="carousel__item">
    <img src="./assets/images/carousel-3.jpg" alt="Carousel Image 3" />
  </div>
  <div class="carousel__item">
    <img src="./assets/images/carousel-4.jpg" alt="Carousel Image 4" />
  </div>
  <div class="carousel__front-text">
    <h1 class="carousel__title">Track your games, share your thoughts, build your collection</h1>
    <a class="carousel__cta" href="#">Get Started - It's lit</a>
  </div>
</section>
<div class="container">
  <section class="popular-reviews mt-5">
    <p class="fs-2">Popular Games to Track</p>
    <div class="gallery">
      <?php
      $src = "/echolog-template/assets/images/image-1.png";
      $title = "God of War";
      include './ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-2.png";
      $title = "Fallout New Vegas";
      include './ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-3.png";
      $title = "Red Dead Redemption 2";
      include './ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-4.png";
      $title = "Death Stranding";
      include './ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-5.png";
      $title = "Silent Hill 2";
      include './ui/image-card/index.php';
      ?>
      <?php
      $src = "/echolog-template/assets/images/image-6.png";
      $title = "Silent Hill 3";
      include './ui/image-card/index.php';
      ?>
    </div>
  </section>
  <section class="popular-reviews mt-5">
    <p class="fs-2">Most Popular Reviews</p>
    <?php
    $game_image = "/echolog-template/assets/images/image-4.png";
    $game_title = "Death Stranding";
    $username = "Deacon";
    $rating = 5;
    $text = "\"KODJIMA IS GENIUS\"";
    $like_count = 200;
    include './ui/review-card/index.php';
    ?>
    <?php
    $game_image = "/echolog-template/assets/images/image-7.png";
    $game_title = "God of War 3";
    $username = "Kratos";
    $rating = 4;
    $text = "The man, the legend and the myth himself... KRATOSSS";
    $like_count = 100;
    include './ui/review-card/index.php';
    ?>
    <?php
    $game_image = "/echolog-template/assets/images/image-8.png";
    $game_title = "Wolf Among Us 2";
    $username = "Bigby";
    $rating = 3;
    $text = "Wake up baby, my new personality just dropped";
    $like_count = 50;
    include './ui/review-card/index.php';
    ?>
  </section>
  <section class="popular-collections">
    <p class="fs-2">Most Rated Collections</p>
    <div class="collections">
      <?php
      $title = 'for when you want to feel something';
      $username = 'bel';
      $like_count = 198375;
      $comment_count = 1236;
      include './ui/collection-card/index.php';
      ?>
      <?php
      $title = 'Games everyone should play at least once during their lifetime';
      $username = 'fcbarcelona';
      $like_count = 164824;
      $comment_count = 1024;
      include './ui/collection-card/index.php';
      ?>
      <?php
      $title = 'Official top 250 games of all time';
      $username = 'Dave Vis';
      $like_count = 123456;
      $comment_count = 987;
      include './ui/collection-card/index.php';
      ?>
    </div>
  </section>
  <hr class="mt-5" />
  <p class="fs-3 text-center">...aaaand so much more</p>
  <?php
  $text = 'Sign Up';
  $class = 'px-3 text-center';
  include './ui/button/index.php';
  ?>
</div>
<?php
$content = ob_get_clean();

include './layout/index.php';
?>