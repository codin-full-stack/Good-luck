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

var days =  Math.floor(leftDay);
var hours = Math.floor(leftDay % hourMiliseconds);
var minutes = Math.floor((lefttime / minuteMiliseconds));
var seconds = Math.floor(lefttime / secondsMiliseconds);


console.log(days, "Dienos ", hours);
       