document.addEventListener('DOMContentLoaded', (event) => {
    const navbar = document.querySelector('.navbar');
    const heroContainer = document.querySelector('.hero-container');
    const heroBackground = document.querySelector('.hero-background');
    const scrollableContent = document.querySelector('.scrollable-content');
    const heroContent = document.querySelector('.hero-content');
    const isHomePage = document.body.classList.contains('home-page');
    
    // Detekcija iOS
    const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    
if (isIOS && heroBackground) {
    // Za iOS nastavi višino na točno višino viewporta
    const setIOSHeight = () => {
        const vh = window.innerHeight;
        heroBackground.style.height = vh + 'px';
        const overlay = document.querySelector('.hero-container::before');
        if (heroContainer) {
            heroContainer.style.setProperty('--vh', `${vh}px`);
        }
    };
    
    setIOSHeight();
    
    // Posodobi samo ob resize, ne ob scroll
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(setIOSHeight, 250);
    });
}

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
    
    // Posodobi višino ob spremembah orientacije na iOS
    if (isIOS) {
        window.addEventListener('resize', () => {
            if (heroBackground) {
                heroBackground.style.height = window.innerHeight + 'px';
            }
        });
    }
    
    if (isHomePage) {
        if (scrollableContent) {
            scrollableContent.classList.add('initial-hide');
        }
        
        setTimeout(() => {
            handleScroll();
        }, 100);
    } else {
        handleScroll();
    }
});