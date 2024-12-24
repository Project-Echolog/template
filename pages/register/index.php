<?php
$pageTitle = 'Sign In';
$additionalCSS = ['/echolog-template/pages/register/style.css'];
define('ROOTPATH', __DIR__);

ob_start();
?>
<div class="container">
  <form class="popup" action="#" method="post">
    <h1>SIGN UP</h1>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="nickname" placeholder="Nickname" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" onclick="this.form.classList.add('redirecting')">Continue</button>
    <p class="success-message">Sign Up Succeeded</p>
    <hr class="divider">
    <a href="/echolog-template/pages/login_page/index.html">Have an account? Login</a>
  </form>
</div>
<?php
$content = ob_get_clean();

include '../../layout/index.php';
?>