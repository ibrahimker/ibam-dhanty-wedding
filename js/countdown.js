// Set the date we're counting down to
var countDownDate = new Date("Aug 17, 2017 18:45:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="countdown-timer"
  document.getElementById("countdown-timer-day").innerHTML = days + " </br>days ";
  document.getElementById("countdown-timer-hour").innerHTML = hours + " </br>hours ";
  document.getElementById("countdown-timer-min").innerHTML = minutes + " </br>minutes ";
  document.getElementById("countdown-timer-sec").innerHTML = seconds + " </br>seconds ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown-timer").innerHTML = "EXPIRED";
  }
}, 1000);