<?php
$pageTitle = '404 Not Found';
$additionalCSS = ['/echolog-template/pages/404/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="outer-container">
  <div class="container">
    <p class="standby-text">War… war never changes. But this page is gone forever. 404 Not Found.</p>
  </div>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>