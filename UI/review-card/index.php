<?php
if (!isset($additionalCSS)) $additionalCSS = [];
if (!isset($additionalJS)) $additionalJS = [];
if (!in_array('/echolog-template/ui/review-card/style.css', $additionalCSS)) {
  array_push($additionalCSS, '/echolog-template/ui/review-card/style.css');
}
if (!in_array('/echolog-template/ui/review-card/script.js', $additionalJS)) {
  array_push($additionalJS, '/echolog-template/ui/review-card/script.js');
}
$_hide_like_button = $hide_like_button ?? false;
$_alt_view = $alt_view ?? false;
?>
<div class="review-card mb-3">
  <div class="review-card__left">
    <img
      class="<?php echo $_alt_view ? 'review-card__game-image alt' : 'review-card__game-image' ?>"
      src="<?php echo $_alt_view ? $avatar : $game_image; ?>"
      alt="Game Image" />
    <?php if ($_alt_view) : ?>
      <p class="m-0 text-center fs-1-2">
        <?php echo $username ?? 'Deacon'; ?>
      </p>
    <?php endif; ?>
  </div>
  <div class="review-card__right">
    <p class="<?php echo $_alt_view ? 'review-card__game-title fs-2 hide' : 'review-card__game-title fs-2' ?>">
      <?php echo $game_title ?? 'Death Stranding'; ?>
    </p>
    <p class="<?php echo $_alt_view ? 'review-card__adjoining-info hide' : 'review-card__adjoining-info' ?>">
      <span class="<?php echo $_alt_view ? 'review-card__username hide' : 'review-card__username' ?>">
        <?php echo $username ?? 'Deacon'; ?>
      </span>
      <span class="<?php echo $_alt_view ?? 'hide' ?>">|</span>
      <span class="<?php echo $_alt_view ? 'review-card__rating hide' : 'review-card__rating' ?>">
        Rating: <?php echo $rating ?? '4'; ?>/5
      </span>
    </p>
    <p class="<?php echo $_alt_view ? 'review-card__rating-alt m-0 alt' : 'review-card__rating-alt m-0' ?>">9/10</p>
    <p class="<?php echo $_alt_view ? 'review-card__text m-0' : 'review-card__text' ?>">
      <?php echo $text ?? '"KODJIMA IS GENIUS"'; ?>
    </p>
    <?php if ($_hide_like_button !== true) : ?>
      <div class="review-card__like-info">
        <a href="#" class="review-card__like-button">
          <img
            class="review-card__like-icon"
            src="/echolog-template/assets/svgs/heart-outline.svg"
            alt="Like Icon" />
          <span class="review-card__like-count"><?php echo $like_count ?? '200'; ?></span>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php
$hide_like_button = false;
$alt_view = false;
$game_image = null;
$game_title = null;
$username = null;
$rating = null;
$text = null;
$like_count = null;
?>