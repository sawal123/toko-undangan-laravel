const btnBurger = document.getElementById("btnBurger")
const sideBar = document.getElementById("sideBar")
const closeSidebar = document.getElementById("closeSidebar")
btnBurger.addEventListener("click", function(){
    sideBar.classList.remove("hidden")
})

closeSidebar.addEventListener("click", function(){
    sideBar.classList.add("hidden")
})

const nav = document.getElementById("nav")
var prevScrollpos = window.pageYOffset;
console.log(window.scrollY)
window.addEventListener("scroll", function(){
    if(window.scrollY > 80){
        nav.classList.add("hidden")
    }else{
        nav.classList.remove("hidden")
    }
})
