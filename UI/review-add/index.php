<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/review-add/style.css');
if (!isset($additionalJS)) $additionalJS = [];
array_push($additionalJS, '/echolog-template/ui/review-add/script.js');
?>
<div class="overlay-review" style="display: none;" id="<?php echo $id; ?>">
  <div class="popup">
    <div class="popup-header">
      <h2>Red Dead Redemption II</h2>
      <button class="close-button">&times;</button>
    </div>
    <div class="content">
      <div class="game-image">
        <img src="https://m.media-amazon.com/images/M/MV5BZTM4YjFiMGEtZGFkYy00NjAwLWEwNjMtNWQwOWI5ZTAwMTgwXkEyXkFqcGc@._V1_.jpg" alt="Days Gone">
      </div>
      <div class="review-section">
        <textarea class="textarea" placeholder="Add Review"></textarea>
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
        <button class="save-button">Save</button>
      </div>
    </div>
  </div>
</div>