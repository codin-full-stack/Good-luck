var btn = document.querySelector(".first .menu-btn button");
var navbarlist = document.querySelector(".first .navbarlist");
var btn2 = document.querySelector(".first .navbarlist button");

btn.addEventListener('click', function (e){
    console.log(navbarlist);
    if (navbarlist.classList.contains("menu-active")){
               
    } else {
        navbarlist.classList.add("menu-active");
    }
});

btn2.addEventListener('click', function(e){
    navbarlist.classList.remove("menu-active")
});