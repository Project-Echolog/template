<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'Echolog'; ?></title>
  <meta
    name="description"
    content="<?php echo $metaDescription ? "$metaDescription | Echolog" : 'Track your games, share your thoughts, build your collection'; ?>">
  <link rel="stylesheet" href="/echolog-template/layout/modern-normalise.css">
  <link rel="stylesheet" href="/echolog-template/layout/base.css">
  <link rel="stylesheet" href="/echolog-template/layout/utils.css">
  <link rel="stylesheet" href="/echolog-template/layout/style.css">
  <?php
  if (isset($additionalCSS)) {
    foreach ($additionalCSS as $css) {
      echo "<link rel='stylesheet' href='$css'>";
    }
  }
  ?>
</head>

<body>
  <header class="header">
    <a class="header__logo" href="/echolog-template/">
      <img src="/echolog-template/assets/svgs/logo.svg" alt="My Website Logo" />
    </a>
    <nav class="header__nav">
      <?php
      $pageTitle = $pageTitle ?? '';
      $menuItems = [
        'Games' => 'games',
        'Collections' => 'collections',
        'Profile' => 'profile',
      ];

      foreach ($menuItems as $title => $link) {
        $activeClass = ($pageTitle === $title) ? 'active' : '';
        echo "<a class='header__nav-link $activeClass' href='/echolog-template/pages/$link'>$title</a>";
      }
      ?>
    </nav>
    <a class="header__login" href="/echolog-template/pages/login">Login</a>
  </header>

  <main>
    <?php echo $content ?? ''; ?>
  </main>

  <footer class="footer mt-5">
    <p class="footer__text">&copy; 2025 Echolog. All rights reserved.</p>
  </footer>

  <?php
  if (isset($additionalJS)) {
    foreach ($additionalJS as $js) {
      echo "<script src='$js'></script>";
    }
  }
  ?>
</body>

</html>