const burger = document.querySelector(".burgerbtn")
const menu = document.querySelector(".right-menu")
burger.addEventListener("click", ()=> {
    burger.classList.toggle("is-active")
    menu.classList.toggle("active")
})