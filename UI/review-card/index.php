<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/review-card/style.css');
array_push($additionalJS, '/echolog-template/ui/review-card/script.js');
?>
<div class="review-card mb-3">
  <div class="review-card__left">
    <img
      class="review-card__game-image"
      src="<?php echo $game_image; ?>"
      alt="Game Image" />
  </div>
  <div class="review-card__right">
    <p class="review-card__game-title fs-2"><?php echo $game_title ?? 'Death Stranding'; ?></p>
    <p class="review-card__adjoining-info">
      <span class="review-card__username"><?php echo $username ?? 'Deacon'; ?></span>
      <span>|</span>
      <span class="review-card__rating">Rating: <?php echo $rating ?? '4'; ?>/5</span>
    </p>
    <p class="review-card__text"><?php echo $text ?? '"KODJIMA IS GENIUS"'; ?></p>
    <div class="review-card__like-info">
      <a href="#" class="review-card__like-button">
        <img
          class="review-card__like-icon"
          src="/echolog-template/assets/svgs/heart-outline.svg"
          alt="Like Icon" />
        <span class="review-card__like-count"><?php echo $like_count; ?></span>
      </a>
    </div>
  </div>
</div>
<?php
$game_image = null;
$game_title = null;
$username = null;
$rating = null;
$text = null;
$like_count = null;
?>