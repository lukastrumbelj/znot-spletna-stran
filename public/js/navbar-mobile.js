document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const body = document.body;

    // Ustvarimo overlay element
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    body.appendChild(overlay);

    navbarToggler.addEventListener('click', function() {
        navbarCollapse.classList.toggle('show');
        overlay.classList.toggle('show');
        body.classList.toggle('menu-open');
    });

    overlay.addEventListener('click', function() {
        navbarCollapse.classList.remove('show');
        overlay.classList.remove('show');
        body.classList.remove('menu-open');
    });

    // Zapri meni ob kliku na povezavo
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navbarCollapse.classList.remove('show');
            overlay.classList.remove('show');
            body.classList.remove('menu-open');
        });
    });
});