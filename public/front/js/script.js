let watsappIcon = document.querySelector('.watsapp-icon') 
let hero_icon = document.querySelector('.hero_icon') 
window.onscroll = function (){
    if (scrollY > 60) {
        hero_icon.style.display = "block"
        watsappIcon.style.display = "block"
    }else{
        hero_icon.style.display = "none"
        watsappIcon.style.display = "none"
    }
}


hero_icon.onclick = function (){
    window.scrollTo(0,0);
}

