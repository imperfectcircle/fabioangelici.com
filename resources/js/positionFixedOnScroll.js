const navbarElement = document.querySelector('#navbar');
const originOffsetY = navbarElement.offsetTop;
const topElement = document.querySelector('#hero');
// const mediaQuery = window.matchMedia('(min-width: 769px)');

// if (mediaQuery.matches) {
document.addEventListener('scroll', () => {
    if (window.scrollY >= originOffsetY) {
        navbarElement.style.position = 'fixed';
        navbarElement.style.top = 0;
        topElement.classList.add('mt-[6.75rem]');
    } else {
        navbarElement.style.position = 'relative';
        topElement.classList.remove('mt-[6.75rem]');
    }
});
// }
