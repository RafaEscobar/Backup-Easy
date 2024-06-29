import Lottie from "lottie-web";

export const loadingElement = () => {
    Lottie.loadAnimation({
        container: document.querySelector("#loadingElementContainer"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        path: 'storage/animations/loading.json'
    })
}