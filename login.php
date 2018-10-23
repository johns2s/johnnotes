<?php
include("header.php");
?>

<main>

  <div class = "wrapCard">
    <div class = "card">
      <h2 class = "cardTitle cardTitleH2">Login</h2>
      <form class = "logsign">
        <label class = "label">Email Address</label>
        <input type = "email" class = "text" name = "email" placeholder = "you@yours.com" required>
        <label class = "label">Password</label>
        <input type = "password" class = "text" name = "password" placeholder = "Password" required>
        <input type = "submit" class = "btn" name = "submitSignup" value = "Login">
      </form>
    </div>
  </div>

</main>

<?php
include("footer.php");
?>
