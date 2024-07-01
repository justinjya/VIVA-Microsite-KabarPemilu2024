<nav>
  <img src="img/tvone-logo.svg" />
  <div class="nav-sections-container desktop-only">
    <a href="#home">Home</a>
    <a href="#artikel">Artikel</a>
    <a href="#video">Video</a>
    <a href="#data-pemilu">Data Pemilu</a>
  </div>
  <div class="nav-buttons-container desktop-only">
    <button class="button small-button-alt">Log In</button>
    <button class="button small-button" style="margin-left: 8px">Sign Up</button>
  </div>
  <button class="hamburger-menu-button mobile-only" onclick="toggleMenu()">
    <?php require "img/icon/menu.svg" ?>
  </button>
  <button class="close-button mobile-only" onclick="toggleMenu()">
    <?php require "img/icon/close copy.svg" ?>
  </button>
  <div class="hamburger-menu-container mobile-only" id="hamburgerMenu">
    <a href="#home">Home</a>
    <a href="#artikel">Artikel</a>
    <a href="#video">Video</a>
    <a href="#data-pemilu">Data Pemilu</a>
    <div class="hamburger-menu-buttons-container">
      <button class="button small-button-alt" style="color: #2D2D2D; border: 1px #E13148 solid;">Log In</button>
      <button class="button small-button">Sign Up</button>
      <button class="button small-button" style="background-color: #757575;">Bagikan</button>
    </div>
  </div>
  <script src="js/togglemenu.js"></script>
</nav>