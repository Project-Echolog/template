<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/collection-card/style.css');
$_alt_view = $alt_view ?? false;
?>
<a href="#" class="collection-card <?php echo $_alt_view ? 'alt mb-2' : ''; ?>">
  <div class="collection-card__image-frame <?php echo $_alt_view ? 'alt' : ''; ?>">
    <div class="collection-card__overlay collection-card__image--1">
      <img
        class="collection-card__image collection-card__image--1"
        src="<?php echo $src ?? '/echolog-template/assets/images/image-16.png'; ?>"
        alt="<?php echo $title ?? 'Collection Image'; ?>" />
    </div>
    <div class="collection-card__overlay collection-card__image--2">
      <img
        class="collection-card__image collection-card__image--2"
        src="<?php echo $src ?? '/echolog-template/assets/images/image-11.png'; ?>"
        alt="<?php echo $title ?? 'Collection Image'; ?>" />
    </div>
    <div class="collection-card__overlay collection-card__image--3">
      <img
        class="collection-card__image collection-card__image--3"
        src="<?php echo $src ?? '/echolog-template/assets/images/image-12.png'; ?>"
        alt="<?php echo $title ?? 'Collection Image'; ?>" />
    </div>
    <div class="collection-card__overlay collection-card__image--4">
      <img
        class="collection-card__image collection-card__image--4"
        src="<?php echo $src ?? '/echolog-template/assets/images/image-14.png'; ?>"
        alt="<?php echo $title ?? 'Collection Image'; ?>" />
    </div>
    <div class="collection-card__overlay collection-card__image--5">
      <img
        class="collection-card__image collection-card__image--5"
        src="<?php echo $src ?? '/echolog-template/assets/images/image-10.png'; ?>"
        alt="<?php echo $title ?? 'Collection Image'; ?>" />
    </div>
  </div>
  <?php if ($_alt_view) : ?>
    <div class="pl-1">
    <?php endif; ?>
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
    <?php if ($_alt_view) : ?>
      <p class="gray m-0"><?php echo $collection_description ?></p>
    </div>
  <?php endif; ?>
</a>
<?php
$src = null;
$title = null;
$username = null;
$like_count = null;
$comment_count = null;
$collection_description = null;
?>