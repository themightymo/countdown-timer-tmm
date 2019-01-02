<script>
var today = new Date();

// Set the date we're counting down to
var countDownDate = today.setHours(24,0,0,0);

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  //Wait until entire page loads
  window.onload = function () {
  
  // Output the result in an element with id="demo"
  document.getElementById("wordpress-support").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  }
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("wordpress-support").innerHTML = "EXPIRED";
  }
}, 1000);
</script>