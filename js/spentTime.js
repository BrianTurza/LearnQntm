(function(){ "use strict";

var secondsSpentElement = document.getElementById("seconds-spent");
var millisecondsSpentElement = document.getElementById("milliseconds-spent");
var spentElement = document.getElementById("minutes-spent");

requestAnimationFrame(function updateTimeSpent(){
    var timeNow = performance.now();
    spentElement.innerText = round(timeNow / (1000 * 60));
    console.log("test");
    
    requestAnimationFrame(updateTimeSpent);
});
var performance = window.performance, round = Math.round;
})();