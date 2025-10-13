document.addEventListener('DOMContentLoaded', (event) => {
    const navbar = document.querySelector('.navbar');
    const heroContainer = document.querySelector('.hero-container');
    const scrollableContent = document.querySelector('.scrollable-content');
    const heroContent = document.querySelector('.hero-content');
    const isHomePage = document.body.classList.contains('home-page');

    function handleScroll() {
        let scrollPosition = window.scrollY;
        let navbarOpacity = Math.min(scrollPosition / 300, 0.8);
        
        let heroBlur = Math.min(scrollPosition / 50, 15);
        
        navbar.style.backgroundColor = `rgba(15, 40, 80, ${navbarOpacity})`;
        navbar.style.backdropFilter = `blur(${Math.min(heroBlur, 10)}px)`;
        
        if (heroContainer) {
            heroContainer.style.setProperty('--blur', `${heroBlur}px`);
        }

        if (isHomePage && scrollableContent && heroContent) {
            scrollableContent.classList.remove('initial-hide');
            if (scrollPosition > heroContent.offsetHeight / 2) {
                scrollableContent.classList.add('fade-in');
            } else {
                scrollableContent.classList.remove('fade-in');
            }
        }
    }

    window.addEventListener('scroll', handleScroll);
    
    if (isHomePage) {
        // Dodajte razred za začetno skrivanje
        if (scrollableContent) {
            scrollableContent.classList.add('initial-hide');
        }
        
        // Zakasnitev prvega izvajanja handleScroll
        setTimeout(() => {
            handleScroll();
        }, 100);
    } else {
        handleScroll();
    }
});