<?php
$pageTitle = 'Game Page - Collections';
$additionalCSS = ['/echolog-template/pages/game-collections/style.css'];
$additionalJS = ['/echolog-template/pages/game-collections/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="outer-container">
  <div class="container">
    <div class="content">
      <h1>Collections that include - Red Dead Redemption II</h1>
      <div class="tabs">
        <a href="/echolog-template/pages/game-like-users" class="tab">LIKES</a>
        <a href="/echolog-template/pages/game-wishlist-users" class="tab">WISHLIST</a>
        <a href="/echolog-template/pages/game-reviews" class="tab">REVIEWS</a>
        <a href="/echolog-template/pages/game-collections" class="tab active">COLLECTIONS</a>
      </div>
      <div class="collections" id="collections-container">
      </div>
      <div class="pagination">
        <button id="next-button">Next</button>
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