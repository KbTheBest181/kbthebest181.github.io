<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='style.css'>
    <title>hehuhehu</title>
</head>
<body>
    <header>
        <div class="overlay">
    <h1>Hahahha</h1>
            </div>
    
<!--     <h1>hahahahh</h1> -->
    <!-- Display the countdown timer in an element -->
        <br>
        <br>
    <button onclick="myFunction()">Closseeeeee</button>
    <script>
    function myFunction() {
      if (confirm('Are you sure you want to close')) {
          // Save it!
          window.close();
        } else {
          // Do nothing!
        }
    }
    </script>
    <h4>10 sec timer - </h4>
    <p id="demo"></p>
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date().getTime() + 1000 * 10;

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
//       document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//       + minutes + "m " + seconds + "s ";
        document.getElementById("demo").innerHTML = seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Hehu";
      }
    }, 1000);
    </script>
    </header>
</body>
</html>
