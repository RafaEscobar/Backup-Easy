import Lottie from "lottie-web";

export const loadingScreen = () => {
    Lottie.loadAnimation({
        container: document.querySelector('#loadingScreenContainer'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'storage/animations/loadingScreen.json'
    });
}