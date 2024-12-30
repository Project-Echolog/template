<?php
$pageTitle = 'Game - Days Gone';
$additionalCSS = ['/echolog-template/pages/game/style.css'];
$additionalJS = ['/echolog-template/pages/game/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="banner-frame">
  <img src="/echolog-template/assets/images/banner.png" alt="banner" class="banner">
</div>
<div class="container">
  <section class="introduction">
    <div class="introduction__left">
      <div class="cover-frame">
        <img src="/echolog-template/assets/images/cover.png" alt="Days Gone" class="cover">
      </div>
      <div class="introduction__tools">
        <a class="introduction__tool" href="#" id="game-wishlist">
          <img src="/echolog-template/assets/svgs/bookmark-outline.svg" alt="PS4" class="introduction__tool-icon">
          <p class="m-0">1202</p>
        </a>
        <a class="introduction__tool" href="#" id="game-like">
          <img src="/echolog-template/assets/svgs/heart-outline.svg" alt="PS4" class="introduction__tool-icon">
          <p class="m-0">5014</p>
        </a>
        <a class="introduction__tool" href="#" id="game-add">
          <img src="/echolog-template/assets/svgs/plus-circle-outline.svg" alt="PS4" class="introduction__tool-icon">
        </a>
      </div>
    </div>
    <div class="introduction__right">
      <h1 class="introduction__title">Days Gone</h1>
      <h2 class="introduction__developer">
        <a class="white" href="/echolog-template/pages/games-browse">Bend Studio</a>
      </h2>
      <p class="introduction__description">
        Days Gone is set in a post-apocalyptic open world, two years after a
        devastating global pandemic transforms the majority of humanity into
        Freakers—feral, mindless creatures driven by hunger and instinct. The world
        is harsh, violent, and crumbling under the weight of chaos as survivors
        scavenge for resources, battle nature, and fend off relentless hordes of the
        infected.
        <br /><br />
        You step into the worn boots of Deacon St. John, a former outlaw turned
        drifter and bounty hunter, haunted by the ghosts of his past. Deacon roams the
        broken highways of the Pacific Northwest on his trusty motorcycle, a symbol of
        freedom and survival in a world where hope is scarce. The once vibrant
        forests, snowy peaks, and abandoned towns now serve as hunting grounds for
        Freakers, marauders, and desperate survivors.
        <br /><br />
        Driven by love, loss, and loyalty, Deacon’s journey is not just about
        survival—it’s about uncovering the truth behind the pandemic, reuniting with
        his past, and forging a reason to keep going in a world that has seemingly
        moved on. In Days Gone, every choice matters: every bullet counts, the
        weather shapes your odds, and the line between man and monster grows thin...
      </p>
    </div>
  </section>
  <hr color="#8a8a8a" />
  <aside class="genres">
    <h2 class="genres__title">Genres</h2>
    <div class="genres__list">
      <a class="genres__item" href="/echolog-template/pages/games-browse">Action</a>
      <a class="genres__item" href="/echolog-template/pages/games-browse">Adventure</a>
      <a class="genres__item" href="/echolog-template/pages/games-browse">Horror</a>
      <a class="genres__item" href="/echolog-template/pages/games-browse">Open World</a>
      <a class="genres__item" href="/echolog-template/pages/games-browse">Survival</a>
    </div>
  </aside>
  <hr color="#8a8a8a" />
  <aside class="info-line">
    <p class="info">Rating: <span>4.5</span>/5</p>
    <p class="info">Developer: <a class="white" href="/echolog-template/pages/games-browse"><span>Bend Studio</a></span></p>
    <p class="info">Release Date: <span>April 26, 2019</span></p>
    <p class="info">Platforms: <span>PS4,PS5,PC</span></p>
  </aside>
  <hr color="#8a8a8a" />
  <section class="personal-review">
    <h3 class="personal-review__text m-0 fs-3">What do you think?</h3>
    <?php
    $class = 'personal-review__button';
    $id = 'review-button';
    $href = '/echolog-template/pages/game-add';
    $text = 'Review it';
    include '../../UI/button/index.php';
    ?>
  </section>
  <hr color="#8a8a8a" />
  <section class="popular-reviews mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Popular Reviews</p>
      <a class="fs-1-5" href="/echolog-template/pages/game-reviews">See all</a>
    </div>
    <?php
    $avatar = "/echolog-template/assets/images/profile-photo.png";
    $game_title = "Death Stranding";
    $username = "Bigby";
    $rating = 5;
    $text = "The game is amazing and underrated, you play as badass chum named Deacon St.John who is ex-drifter as characters calls him, The world is f**ked up no hope for future or whatsover, but hope of finding his old-lady alive is what keeping Deek to go forward. Highly recommend";
    $like_count = 200;
    $alt_view = true;
    include '../../ui/review-card/index.php';
    ?>
    <?php
    $avatar = "/echolog-template/assets/images/profile-photo.png";
    $game_title = "Death Stranding";
    $username = "Bigby";
    $rating = 5;
    $text = "The game is amazing and underrated, you play as badass chum named Deacon St.John who is ex-drifter as characters calls him, The world is f**ked up no hope for future or whatsover, but hope of finding his old-lady alive is what keeping Deek to go forward. Highly recommend";
    $like_count = 200;
    $alt_view = true;
    include '../../ui/review-card/index.php';
    ?>
  </section>
  <hr color="#8a8a8a" />
  <section class="recent-reviews mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Recent Reviews</p>
    </div>
    <?php
    $avatar = "/echolog-template/assets/images/floyd.png";
    $game_title = "Death Stranding";
    $username = "F3nt_Floyd";
    $rating = 5;
    $text = "Game is so awesome, i couldnt breath";
    $like_count = 150;
    $alt_view = true;
    include '../../ui/review-card/index.php';
    ?>
    <?php
    $avatar = "/echolog-template/assets/images/profile-photo.png";
    $game_title = "Death Stranding";
    $username = "Deacon";
    $rating = 5;
    $text = "F**k you Skizzo";
    $like_count = 150;
    $alt_view = true;
    include '../../ui/review-card/index.php';
    ?>
  </section>
  <hr color="#8a8a8a" />
  <section class="mentioned-collections mt-3">
    <div class="section-header mb-2">
      <p class="fs-2 m-0">Mentioned Collections</p>
    </div>
    <div class="collections">
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
    </div>
  </section>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>