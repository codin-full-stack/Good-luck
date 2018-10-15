function myFunction() {
    window.alert("hello world");
}

var kaleduData = new Date("Dec 25, 2018 00:00:01").getTime();
var today = new Date().getTime();

// var dayMiliseconds = (1000 * 60 * 60 * 24);
// var hourMiliseconds = (1000 * 60 * 60);
// var minuteMiliseconds = (1000 * 60);
// var secondsMiliseconds = 1000;

var secondsMiliseconds = 1000;
var minuteMiliseconds = (secondsMiliseconds * 60);
var hourMiliseconds = (minuteMiliseconds * 60);
var dayMiliseconds = (hourMiliseconds * 24);

var lefttime = kaleduData - today;


var leftDay = lefttime / dayMiliseconds;

var days =  Math.floor(lefttime / dayMiliseconds);
var hours = Math.floor(lefttime / hourMiliseconds);
var minutes = Math.floor(lefttime / minuteMiliseconds);
var seconds = Math.floor(lefttime / secondsMiliseconds);


// console.log(days, "Dienos ");


/**________________________________________________ */


var nav = document.querySelector(".leftTime");
// nav.innerHTML = 'Liko: ' + days + ' Dienos';
nav.style.backgroundColor = "green";
nav.style.color = 'pink';
nav.innerHTML += days + " Dienos";


// var th = document.querySelector('.table-head tr th:nth-child(2)');


/** LOOP POSTU ATVAIZDAVIME */
var content = document.querySelectorAll(".content-box");
var contentArray = Array.prototype.slice.call(content); /** NODELIST TO ARRAY PAVERTIMAS */
var trim = contentArray.slice(2, 3); /** APKERPAM(REDAGUOJAM) NUO ANTRO ELEMENTO IKI TRECIO */

for (var i = 0; i < trim.length; ++i) {

    trim[i].style.backgroundImage = "url(monkey.jpg)";
    trim[i].style.backgroundSize = "100%";
    trim[i].style.borderColor = "green";
}


var title = document.querySelectorAll(".content-title");

for (var j = 0; j < title.length; ++j) {
    
    title[j].style.fontStyle = "italic";
    title[j].style.fontSize = "25px";
}

/** LOOP VARTOTOJU LENTELEI */
var trs = document.querySelectorAll(".vartotoju-lentele tbody tr:nth-child(2n)");

for (var g = 0; g < trs.length; ++g) {
    trs[g].style.backgroundColor = "#EDECFE";
}



/** KNOPKES */

function showBlue(){
    alert("you picked Blue");
}

function showGreen() {
    alert("you picked Green");
}





var red = document.querySelector(".navbarlist .red button");
var navbar = document.querySelector(".navbar");
// function showRed() {
//     alert("you picked Red");
// }
console.log(red);

red.addEventListener('click', function (event){

    console.log(event);

    navbar.style.backgroundColor = "red";
});


