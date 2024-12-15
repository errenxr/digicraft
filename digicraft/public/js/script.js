// toggle
const navbarNav = document.querySelector('.navbar-nav');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};

// untuk menghilangkan menu saat membuka di hp
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function (e) {
  if (!hamburger.constaint(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});