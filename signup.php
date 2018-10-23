<?php
include("header.php");
?>

<main>

  <div class = "wrapCard">
    <div class = "card">
      <h2 class = "cardTitle cardTitleH2">Signup</h2>
      <form class = "logsign">
        <input type = "text" class = "text" name = "name" placeholder = "Display Name" required>
        <input type = "email" class = "text" name = "email" placeholder = "Email Address" required>
        <input type = "password" class = "text" name = "password" placeholder = "Password" required>
        <input type = "submit" class = "btn" name = "submitSignup" value = "Signup">
      </form>
    </div>
  </div>

</main>

<?php
include("footer.php");
?>
