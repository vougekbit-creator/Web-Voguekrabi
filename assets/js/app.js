const toggleButton = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

if (toggleButton && navLinks) {
    toggleButton.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
}

const langLinks = document.querySelectorAll('.lang-link');
langLinks.forEach((link) => {
    link.addEventListener('click', () => {
        langLinks.forEach((item) => item.classList.remove('active'));
        link.classList.add('active');
    });
});
