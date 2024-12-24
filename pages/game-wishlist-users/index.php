<?php
$pageTitle = 'Game Page - Wishlisted Users';
$additionalCSS = ['/echolog-template/pages/game-wishlist-users/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="outer-container">
  <div class="container">
    <div class="content">
      <h1>Everyone who wishlisted Red Dead Redemption II</h1>
      <div class="tabs">
        <a href="/echolog-template/pages/game-like-users" class="tab">LIKES</a>
        <a href="/echolog-template/pages/game-wishlist-users" class="tab active">WISHLIST</a>
        <a href="/echolog-template/pages/game-reviews" class="tab">REVIEWS</a>
        <a href="/echolog-template/pages/game-collections" class="tab">COLLECTIONS</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th style="text-align: center;">Wishlisted</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="user-info">
              <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
              Ricky
            </td>
            <td style="color: #0078ff;"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2" />
              </svg></td>
          </tr>
          <tr>
            <td class="user-info">
              <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
              Deacon
            </td>
            <td style="color: #0078ff;"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2" />
              </svg></td>
          </tr>
          <tr>
            <td class="user-info">
              <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
              Joel
            </td>
            <td style="color: #0078ff;"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2" />
              </svg></td>
          </tr>
        </tbody>
      </table>
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