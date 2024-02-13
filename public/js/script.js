(() => {

    let button = document.querySelector(".header__button");
    let header = document.querySelector("header");

    let open = () => {
        header.classList.toggle("open-menu");
    }

    button.addEventListener('click', () => {
        open();
    })

})();