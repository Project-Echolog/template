<?php
$pageTitle = 'Game Page - Like Users';
$additionalCSS = ['/echolog-template/pages/game-like-users/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="outer-container">
  <div class="container">
    <div class="content">
      <h1>Users who liked Red Dead Redemption II</h1>
      <div class="tabs">
        <a href="/echolog-template/pages/game-like-users" class="tab active">LIKES</a>
        <a href="/echolog-template/pages/game-wishlist-users" class="tab">WISHLIST</a>
        <a href="/echolog-template/pages/game-reviews" class="tab">REVIEWS</a>
        <a href="/echolog-template/pages/game-collections" class="tab">COLLECTIONS</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th style="text-align: left;">Name</th>
            <th>Rating</th>
            <th>Likes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="user-info">
              <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
              Ricky
            </td>
            <td>4/5</td>
            <td style="color:red"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
              </svg></td>
          </tr>
          <tr>
            <td class="user-info">
              <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
              Deacon
            </td>
            <td>5/5</td>
            <td style="color:red"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
              </svg></td>
          </tr>
          <tr>
            <td class="user-info">
              <img src="/echolog-template/assets/images/profile-photo.png" alt="User avatar">
              Joel
            </td>
            <td>2/5</td>
            <td style="color:red"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
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