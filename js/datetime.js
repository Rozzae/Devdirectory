var display_time = new Date();

document.getElementById("date-time").innerHTML = display_time.getFullYear();


var myVar = setInterval(myTimer, 1000);

function myTimer() {

    var counting_time = new Date();

    document.getElementById("counting").innerHTML = counting_time.toLocaleTimeString();

}

