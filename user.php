<?php
include("header.php");
?>

<main class = "cols2">
  <div class = "content card">
    <h2 class = "cardTitle cardTitleH2">Recent Quacks</h2>
    <div class = "quack">
    <h4>First Quack!</h4>
      <p>welcome to Quack</p>
      <div class = "quackPlus"><img class = "plus" alt = "more icon" title = "Options" src = "menu.png"></div>
    </div>
  </div>
  <div class = "sidebar card">
    <h2 class = "cardTitle cardTitleH2">John Sarbak</h2>
    <a href = "#" class = "btn" style = "margin-bottom: 25px">New Quack</a>
    <label class = "label">Bio</label>
    <p>Hi, I'm the dev of Quack! I have my web dev class blog and more here.</p>
    <label class = "label">Stats</label>
    <div class = "sidebarIn">
      <div class = "sidebarInItem"><img class = "sidebarInImg" src = "quack.png" alt = "quack icon" title = "quack icon">15 Quacks</div>
      <div class = "sidebarInItem"><img class = "sidebarInImg" src = "stream.png" alt = "quackstream icon" title = "quackstream icon">3 Quackstreams</div>
    </div>
    <label class = "label">My Quackstreams</label>
    <div>
      <div class = "sidebarIn sidebarInSmall">
        <a href = "#" class = "sidebarInItemColored">Devnotes</a>
        <a href = "#" class = "sidebarInItemColored">Life</a>
        <a href = "#" class = "sidebarInItemColored">Politics</a>
        <a href = "#" class = "sidebarInItemColored">Quack Dev</a>
        <div class = "sidebarPlus"><img class = "plus" alt = "more icon" title = "Options" src = "plus.png"></div>
      </div>
    </div>

  </div>
</main>

<?php
include("footer.php");
?>
