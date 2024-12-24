<?php
$pageTitle = 'Sign In';
$additionalCSS = ['/echolog-template/pages/login/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="container">
  <form class="popup" action="#" method="post">
    <h1>SIGN IN</h1>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Continue</button>
    <hr class="divider">
    <a href="/echolog-template/pages/register_page/index.html">Create Account</a>
  </form>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>