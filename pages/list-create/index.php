<?php
$pageTitle = 'Create List';
$additionalCSS = ['/echolog-template/pages/list-create/style.css'];
$additionalJS = ['/echolog-template/pages/list-create/script.js'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<section class="new-list">
  <h1>New List</h1>
  <hr class="custom-hr">
  <form action="">
    <div class="list-name-description">
      <label class="list-name">
        Name of the List
        <input type="text" id="list-name" placeholder="Enter Name">
      </label>

      <label class="description" for="description">
        Description
        <textarea name="description" id="description"
          placeholder="Write Description of your list"></textarea>
      </label>
    </div>

    <div class="game-name-buttons">
      <div class="search-container">
        <input type="text" id="search-input" placeholder="Enter Game Name" class="search-input" />
        <span class="short-title">*Enter game’s name correctly without shortyfing</span>
        <ul class="dropdown" id="dropdown">
          <li class="first-child">Metal Gear Solid</li>
          <li>Metal Gear Solid 2: Sons of Liberty</li>
          <hr>
          <li>Detroit: Become Human</li>
          <hr>
          <li>Horizon Zero Dawn</li>
          <hr>
          <li>Red Dead Redemption 2</li>
        </ul>
      </div>

      <div class="buttons">
        <button class="cancel-button" type="button">Cancel</button>
        <button class="save-button" type="submit">Save</button>
      </div>
    </div>

    <div class="add-game-list">
      <p class="list-empty-text">Your list is empty</p>
      <p class="add-games-text">Add games to your list by searching name</p>

      <div class="add-game-list-container">
        <ul class="game-list">
          <li class="game">
            <img src="./images/detroit-new-list.png" alt="Detroit">
            <button class="trash-button">
              <svg width="10" height="13" class="trash-icon">
                <use href="./icon.svg#trash-icon"></use>
              </svg>
            </button>
          </li>
          <li class="game">
            <img src="./images/metal-gear-solid-two-new-list.png" alt="Metal Gear Solid Two">
            <button class="trash-button">
              <svg width="10" height="13" class="trash-icon">
                <use href="./icon.svg#trash-icon"></use>
              </svg>
            </button>
          </li>
          <li class="game">
            <img src="./images/metal-gear-solid-three-new-list.png" alt="Metal Gear Solid Three">
            <button class="trash-button">
              <svg width="10" height="13" class="trash-icon">
                <use href="./icon.svg#trash-icon"></use>
              </svg>
            </button>
          </li>
          <li class="game">
            <img src="./images/the-evil-within-new-list.png" alt="The Evil Within">
            <button class="trash-button">
              <svg width="10" height="13" class="trash-icon">
                <use href="./icon.svg#trash-icon"></use>
              </svg>
            </button>
          </li>
          <li class="game">
            <img src="./images/uncharted-four-new-list.png" alt="Uncharted Four">
            <button class="trash-button">
              <svg width="10" height="13" class="trash-icon">
                <use href="./icon.svg#trash-icon"></use>
              </svg>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </form>
</section>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>