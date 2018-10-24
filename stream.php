<?php
include("header.php");
?>

<main class = "cols2">
  <div class = "content list">
    <div class = "quack card">
      <h4>Welcome to devnotes</h4>
      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus risus, pharetra ut erat ut, scelerisque luctus urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin cursus est a est eleifend, eu posuere justo ultricies. Praesent venenatis, mi eu condimentum faucibus, risus neque viverra urna, vel bibendum neque neque ac diam. Nunc fermentum urna tellus, nec porttitor risus maximus laoreet. Aenean commodo hendrerit ante, eget sollicitudin nunc fermentum eu. Curabitur nec nulla nec orci varius egestas ut quis quam. In luctus tortor a nibh mollis, id sagittis magna maximus. </p>
      <div class = "quackPlus"><img class = "plus" alt = "more icon" title = "Options" src = "menu.png"></div>
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
    </div>
    <label class = "label">About the author</label>
    <p>Hi, I'm the dev of Quack! I have my web dev class blog and more here.</p>
    <a href = "#" class = "btn btnLight" style = "margin-bottom: 25px">User Page</a>
  </div>
</main>

<?php
include("footer.php");
?>
