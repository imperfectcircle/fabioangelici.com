const navbarElement = document.querySelector('#navbar');
const originOffsetY = navbarElement.offsetTop;
// const mediaQuery = window.matchMedia('(min-width: 769px)');

// if (mediaQuery.matches) {
    document.addEventListener('scroll', () => {
        window.scrollY >= originOffsetY ?
            navbarElement.style.position = 'fixed' :
            navbarElement.style.position = 'relative';
    });
// }
