<?php
$pageTitle = 'Add Game to Collection';
$additionalCSS = ['/echolog-template/pages/game-add/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="popup">
  <div class="popup-header">
    <h2>Add "Red Dead Redemption II" to Collection</h2>
    <button class="close-btn">&times;</button>
  </div>
  <ul class="collection-list">
    <li>+ New Collection</li>
    <li>Test Collection</li>
  </ul>
  <button class="add-btn">Add</button>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>