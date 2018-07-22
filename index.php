<?php
require 'functions.php';
head();
session_start();
if (isset($_SESSION['prisijunges'])) {
    session_unset();
}
//if ($_SESSION['prisijunges'] === true) {
//     
// }
?>

  <body class="text-center">
      <form class="form-signin" method="post" action="login.php">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
<?php
      footer();
?>