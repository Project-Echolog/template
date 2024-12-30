<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/button/style.css');
?>
<p class="button <?php echo $class ?? ''; ?>" id="<?php echo $id ?? ''; ?>">
  <a href="<?php echo $href ?? '#'; ?>" class="button <?php echo $class ?? ''; ?>">
    <?php echo $text ?? 'Button'; ?>
  </a>
</p>
<?php
$class = null;
$id = null;
$href = null;
$text = null;
?>