const redirectToHomePage = () => {
    let timeInSeconds = 6;
    const backParagraphElement = document.querySelector('#backParagraph');
    setInterval(() => {
        timeInSeconds -= 1;

        const textToShow = `Tornerai all'Homepage in ${timeInSeconds.toString()}`;

        timeInSeconds === 1
            ? (backParagraphElement.innerHTML = `${textToShow} secondo`)
            : (backParagraphElement.innerHTML = `${textToShow} secondi`);

        if (timeInSeconds === 0) {
            window.location.replace('/');
        }
    }, 1000);
};

if (document.querySelector('#backParagraph')) {
    redirectToHomePage();
}
