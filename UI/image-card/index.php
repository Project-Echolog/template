<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/image-card/style.css');
?>
<a href="#" class="image-card" title="<?php echo $title ?? $title; ?>">
  <img
    class="image-card__image"
    src="<?php echo $src; ?>"
    alt="<?php echo $title ? "Image of $title" : 'Card image'; ?>"
    title="<?php echo $title ?? $title ?>" />
</a>
<?php
$src = null;
$title = null;
?>