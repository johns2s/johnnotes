<?php
include("header.php");
?>

<main class = "cols2">
  <div class = "content list">
    <div class = "quack card">
    <h4>First Quack!</h4>
      <p>welcome to Quack</p>
      <div class = "details sidebarIn sidebarInSmall">
        <div class = "detailItem"><img class = "sidebarInImg" alt = "calendar icon" title = "calendar icon" src = "calendar.png">Posted 8/20/18</div>
      </div>
    </div>
  </div>
  <div class = "sidebar card">
    <h2 class = "cardTitle cardTitleH2">devnotes</h2>
    <a href = "#" class = "btn" style = "margin-bottom: 25px">New Quack</a>
    <label class = "label">Description</label>
    <p>Hi, I'm the dev of Quack! This is devnotes for web dev class.</p>
    <label class = "label">Stats</label>
    <div class = "sidebarIn">
      <div class = "sidebarInItem"><img class = "sidebarInImg" src = "quack.png" alt = "quack icon" title = "quack icon">15 Quacks</div>
      <div class = "sidebarInItem"><img class = "sidebarInImg" src = "stream.png" alt = "quackstream icon" title = "quackstream icon">Created 5/6/17</div>
      <div class = "sidebarInItem"><img class = "sidebarInImg" src = "user.png" alt = "user profile icon" title = "user profile icon">Created by <a href = "#">John Sarbak</a></div>
    </div>
    <label class = "label">About the author</label>
    <p>Hi, I'm the dev of Quack! I have my web dev class blog and more here.</p>
    <a href = "#" class = "btn btnLight" style = "margin-bottom: 25px">User Page</a>
  </div>
</main>

<?php
include("footer.php");
?>
