@extends('layouts.app')
@section('content')
    <style>
        #content {
            margin-bottom: 0 !important;
            margin-top: 0 !important;
        }

        .bgimg {
            background-image: url('/img/background_1.jpeg');
            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 25px;
        }

        .bgimg {
            height: calc(100vh - var(--nav-height));
        }

        .mask {
            background-color: rgba(0, 0, 0, 0.6);
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
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        hr {
            margin: auto;
            width: 40%;
        }

        div.alert.alert-warning {
            margin: 0;
            padding: 0;
            padding-top: 13px;
        }

    </style>

    <body>

        <div class="bgimg">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="mask">
                    <div class="middle">
                        <h1>COMING SOON</h1>
                        <hr>
                        <p id="demo"></p>
                        <div class="alert alert-warning" role="alert">
                            <marquee behavior="scroll" direction="left">please come back later! waktu sewaktu-waktu dapat
                                berubah!</marquee>
                        </div>
                    </div>
                    <div class="bottomleft">
                        <p>Salam, PN</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Aug 31, 2025 15:37:25").getTime();

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

                // Display the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
    </body>
@endsection
