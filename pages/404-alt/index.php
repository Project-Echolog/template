<?php
$pageTitle = '404 Not Found';
$additionalCSS = ['/echolog-template/pages/404-alt/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="outer-container">
  <div class="container">
    <p class="standby-text">You’re lost, partner. Looks like this page has ridden off into the sunset.</p>
  </div>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>