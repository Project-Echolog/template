<?php
$pageTitle = 'Reviews of Red Dead Redemption II';
$additionalCSS = ['/echolog-template/pages/game-reviews/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="outer-container">
  <div class="container">
    <div class="content">
      <div class="title-section">
        <h2>Reviews of</h2>
      </div>
      <h1>Red Dead Redemption II </h1>
      <div class="tabs">
        <a href="/echolog-template/pages/game-like-users" class="tab">LIKES</a>
        <a href="/echolog-template/pages/game-wishlist-users" class="tab">WISHLIST</a>
        <a href="/echolog-template/pages/game-reviews" class="tab active">REVIEWS</a>
        <a href="/echolog-template/pages/game-collections" class="tab">COLLECTIONS</a>
      </div>
      <div class="reviews">
        <div class="review">
          <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
          <div class="review-content">
            <p class="rating">9/10</p>
            <p>The game is amazing and underrated. Highly recommended!</p>
            <div class="likes">
              <span>1.5k Likes</span>
            </div>
          </div>
        </div>
        <div class="review">
          <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
          <div class="review-content">
            <p class="rating">8/10</p>
            <p>Great visuals and gameplay but lacks variety in missions.</p>
            <div class="likes">
              <span>1.2k Likes</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidebar">
      <div class="game-image">
        <img src="https://m.media-amazon.com/images/M/MV5BZTM4YjFiMGEtZGFkYy00NjAwLWEwNjMtNWQwOWI5ZTAwMTgwXkEyXkFqcGc@._V1_.jpg" alt="Game cover">
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>