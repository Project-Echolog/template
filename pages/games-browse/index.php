<?php
$pageTitle = 'Browse Games';
$additionalCSS = ['/echolog-template/pages/games-browse/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="container">
  <h1 class="browse-title">Browse Games</h1>
  <section class="browse-games">
    <div class="filters">
      <h3>Filters</h3>
      <ul class="filter-list">
        <li>
          <label>
            Action
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Adventure
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Casual
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Racing
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Online
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Co-op
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Story-Driven
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Stealth
            <input type="checkbox" checked>
          </label>
        </li>
        <li>
          <label>
            Horror
            <input type="checkbox" checked>
          </label>
        </li>
      </ul>
    </div>
    <div class="all-game-list">
      <section class="search-bar">
        <input type="text" placeholder="Search Game" class="search-input">
      </section>
      <section class="game-images">
        <div class="carousel-two">
          <div class="carousel-two-items">
            <div class="card-popular">
              <img src="./images/detroit.png" alt="Detroit">
            </div>
            <div class="card-popular">
              <img src="./images/metal-gear-solid-two.png" alt="Metal Gear Solid Two">
            </div>
            <div class="card-popular">
              <img src="./images//metal-gear-solid-three.png" alt="Metal Gaer Solid Three">
            </div>
            <div class="card-popular">
              <img src="./images/the-last-of-us.png" alt="The Last Of Us">
            </div>
            <div class="card-popular">
              <img src="./images/the-evil-within.png" alt="The Evil Within">
            </div>
            <div class="card-popular">
              <img src="./images/uncharted-four.png" alt="Uncharted Four">
            </div>
          </div>
          <div class="carousel-two-items">
            <div class="card-popular">
              <img src="./images/detroit.png" alt="Detroit">
            </div>
            <div class="card-popular">
              <img src="./images/metal-gear-solid-two.png" alt="Metal Gear Solid Two">
            </div>
            <div class="card-popular">
              <img src="./images//metal-gear-solid-three.png" alt="Metal Gaer Solid Three">
            </div>
            <div class="card-popular">
              <img src="./images/the-last-of-us.png" alt="The Last Of Us">
            </div>
            <div class="card-popular">
              <img src="./images/the-evil-within.png" alt="The Evil Within">
            </div>
            <div class="card-popular">
              <img src="./images/uncharted-four.png" alt="Uncharted Four">
            </div>
          </div>
          <div class="carousel-two-items">
            <div class="card-popular">
              <img src="./images/detroit.png" alt="Detroit">
            </div>
            <div class="card-popular">
              <img src="./images/metal-gear-solid-two.png" alt="Metal Gear Solid Two">
            </div>
            <div class="card-popular">
              <img src="./images//metal-gear-solid-three.png" alt="Metal Gaer Solid Three">
            </div>
            <div class="card-popular">
              <img src="./images/the-last-of-us.png" alt="The Last Of Us">
            </div>
            <div class="card-popular">
              <img src="./images/the-evil-within.png" alt="The Evil Within">
            </div>
            <div class="card-popular">
              <img src="./images/uncharted-four.png" alt="Uncharted Four">
            </div>
          </div>
          <div class="carousel-two-items">
            <div class="card-popular">
              <img src="./images/detroit.png" alt="Detroit">
            </div>
            <div class="card-popular">
              <img src="./images/metal-gear-solid-two.png" alt="Metal Gear Solid Two">
            </div>
            <div class="card-popular">
              <img src="./images//metal-gear-solid-three.png" alt="Metal Gaer Solid Three">
            </div>
            <div class="card-popular">
              <img src="./images/the-last-of-us.png" alt="The Last Of Us">
            </div>
            <div class="card-popular">
              <img src="./images/the-evil-within.png" alt="The Evil Within">
            </div>
            <div class="card-popular">
              <img src="./images/uncharted-four.png" alt="Uncharted Four">
            </div>
          </div>
        </div>
      </section>
      <button class="next-button" type="submit">Next</button>
    </div>

  </section>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>