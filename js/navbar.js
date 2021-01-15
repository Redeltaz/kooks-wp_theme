let menu = document.querySelector("#menu-header")
let burgerIcon = document.querySelector('.divBurger')
let burgerClose = document.getElementsByClassName("close")[0]
let burgerOpen = document.getElementsByClassName("open")[0]
let choice = document.querySelectorAll(".nav .navItem")

burgerOpen.addEventListener("click", () => {
    menu.style.height = "200px"
    for (i = 0; i < choice.length; i++) {
        choice[i].style.display = "block";
    }
    burgerOpen.style.display = "none";
    burgerClose.style.display = "block";
})

burgerClose.addEventListener("click", () => {
    menu.style.height = "0px"
    for (i = 0; i < choice.length; i++) {
        choice[i].style.display = "none";
    }
    burgerOpen.style.display = "block";
    burgerClose.style.display = "none";
})
