<?php
if (!isset($additionalCSS)) $additionalCSS = [];
array_push($additionalCSS, '/echolog-template/ui/game-add/style.css');
if (!isset($additionalJS)) $additionalJS = [];
array_push($additionalJS, '/echolog-template/ui/game-add/script.js');
?>
<div class="overlay" style="display: none;">
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
</div>