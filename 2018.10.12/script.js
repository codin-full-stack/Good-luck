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



var content = document.querySelectorAll(".content-box");

for (i = 0; i < content.length; ++i) {
    content[i].style.backgroundImage = "url(monkey.jpg)";
    content[i].style.backgroundSize = "100%";
    content[i].style.borderColor = "green";
}


// var contentBox = document.querySelector(".content");
// // console.log(contentBox);
// if (contentBox !== 0 || contentBox !== ''){
// // var contentBox = document.querySelector(".content");
// contentBox.style.backgroundColor = "transparent";
// }

var trs = document.querySelectorAll(".vartotoju-lentele tbody tr:nth-child(2n)");
// console.log(table);
// table.style.backgroundColor = "#EDECFE";

for (i = 0; i < trs.length; ++i) {
    trs[i].style.backgroundColor = "#EDECFE";
}