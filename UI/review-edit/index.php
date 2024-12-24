<?php
$pageTitle = 'Edit Game to Collection';
$additionalCSS = ['/echolog-template/pages/review-edit/style.css'];
$additionalJS = ['/echolog-template/pages/review-edit/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="popup">
  <div class="popup-header">
    <h2>Red Dead Redemption II</h2>
    <button>&times;</button>
  </div>
  <div class="content">
    <div class="game-image">
      <img src="https://m.media-amazon.com/images/M/MV5BZTM4YjFiMGEtZGFkYy00NjAwLWEwNjMtNWQwOWI5ZTAwMTgwXkEyXkFqcGc@._V1_.jpg" alt="Days Gone">
    </div>
    <div class="review-section">
      <textarea class="textarea" placeholder="Edit Review"></textarea>
      <div class="rating">
        <span>Rating:</span>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="star">
          <path d="M12 .587l3.668 7.431 8.2 1.191-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.868 1.4-8.174L.132 9.209l8.2-1.191z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="star">
          <path d="M12 .587l3.668 7.431 8.2 1.191-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.868 1.4-8.174L.132 9.209l8.2-1.191z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="star">
          <path d="M12 .587l3.668 7.431 8.2 1.191-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.868 1.4-8.174L.132 9.209l8.2-1.191z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="star">
          <path d="M12 .587l3.668 7.431 8.2 1.191-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.868 1.4-8.174L.132 9.209l8.2-1.191z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="star">
          <path d="M12 .587l3.668 7.431 8.2 1.191-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.868 1.4-8.174L.132 9.209l8.2-1.191z" />
        </svg>

      </div>
      <button class="save-button">Save Changes</button>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>