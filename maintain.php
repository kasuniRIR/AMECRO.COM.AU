<!DOCTYPE html>
<html>
<style>
body,
html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('./images/maintain.png');
    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}

/**Responsive CSS */

@media only screen and (max-width: 1533px) {
    .middle{
        top: 10%;
        left: 50%;
        font-size: 30px;
    }

    #demo {
        font-size:100px;
    }

    .bgimg{
        /* background-position: center; */
        background-repeat: no-repeat;
        background-size: cover;
        height:100%;
        transform: scale(0.9);
    }

}
</style>

<body>

    <div class="bgimg">
        <div class="middle">
            <p><img src="./images/logo.png" alt="logo-amecro" style="width:40%;" /></p>
            <h1 style="color:#333">Under Construction</h1>
            <hr>
            <p id="demo" class="dayCount" style="font-size:40px; color:#333;"></p>
        </div>
    </div>

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Aug 11, 2021 15:37:25").getTime();

    // Update the count down every 1 second
    var countdownfunction = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

</body>

</html>