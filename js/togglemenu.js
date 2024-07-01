function toggleMenu() {
  var hamburgerMenu = document.querySelector('.hamburger-menu-container');
  var menuIcon = document.querySelector('.hamburger-menu-button');
  var closeIcon = document.querySelector('.close-button');
  var body = document.body;
  
  if (hamburgerMenu.style.display === "flex") {
    hamburgerMenu.style.display = "none";
    menuIcon.style.display = "block";
    closeIcon.style.display = "none";
    body.style.overflow = "auto"; // Re-enable scrolling
  } else {
    hamburgerMenu.style.display = "flex";
    menuIcon.style.display = "none";
    closeIcon.style.display = "block";
    body.style.overflow = "hidden"; // Disable scrollingu k
  }
}

document.querySelectorAll('#hamburgerMenu a').forEach(item => {
  item.addEventListener('click', function() {
    var hamburgerMenu = document.querySelector('.hamburger-menu-container');
    var menuIcon = document.querySelector('.hamburger-menu-button');
    var closeIcon = document.querySelector('.close-button');
    var body = document.body;

    hamburgerMenu.style.display = "none";
    menuIcon.style.display = "block";
    closeIcon.style.display = "none";
    body.style.overflow = "auto"; // Re-enable scrolling
  });
});