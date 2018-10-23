<?php
include("header.php");
?>

<main>

  <div class = "wrapCard">
    <div class = "card">
      <h2 class = "cardTitle cardTitleH2">Signup</h2>
      <form class = "logsign">
        <label class = "label">Display Name</label>
        <input type = "text" class = "text" name = "name" placeholder = "Display Name" required>
        <label class = "label">Email Address</label>
        <input type = "email" class = "text" name = "email" placeholder = "you@yours.com" required>
        <label class = "label">Password</label>
        <input type = "password" class = "text" name = "password" placeholder = "Password" required>
        <input type = "submit" class = "btn" name = "submitSignup" value = "Signup">
      </form>
    </div>
  </div>

</main>

<?php
include("footer.php");
?>
