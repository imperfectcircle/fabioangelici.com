const menuBtnElement = document.querySelector('#menu-btn');
const menuElement = document.querySelector('#menu');

menuBtnElement.addEventListener('click', () => {
    menuBtnElement.classList.toggle('open');
    menuElement.classList.toggle('flex');
    menuElement.classList.toggle('hidden');
});