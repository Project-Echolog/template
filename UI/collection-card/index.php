<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/collection-card/style.css');
?>
<a href="#" class="collection-card">
  <div class="collection-card__image-frame">
    <img
      class="collection-card__image"
      src="<?php echo $src ?? '/echolog-template/assets/svgs/300x200.svg'; ?>"
      alt="<?php echo $title ?? 'Collection Image'; ?>" />
  </div>
  <p class="collection-card__title fs-2 m-0">
    <?php echo $title ?? 'Collection Title'; ?>
  </p>
  <p class="collection-card__info m-0">
    <span class="collection-card__username">
      <?php echo $username ?? 'Deacon'; ?>
    </span>
    <span>|</span>
    <span><?php echo $like_count ?? '198K' ?> likes</span>
    <span>|</span>
    <span><?php echo $comment_count ?? '1.2K' ?> comments</span>
  </p>
</a>
<?php
$src = null;
$title = null;
$username = null;
$like_count = null;
$comment_count = null;
?>