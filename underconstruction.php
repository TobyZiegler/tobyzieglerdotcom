<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Toby, Ziegler, Toby Ziegler, TobyZiegler, designer, developer, programmer, graphic, graphics, construction, under construction, underconstruction, remodeling" />
    <title>Counting Down...</title>
    <link rel="stylesheet" href="css/reset.css">
    <!--    <link rel="stylesheet" href="css/navbarstyle.css">-->
    <!--    <link rel="stylesheet" href="css/socialstyles.css">-->
    <link rel="stylesheet" href="css/tobystyles.css">
    <style>
        body {
            text-align: center;
            font-family: verdana, arial, sans-serif;
            font-weight: 100;
            margin: 0;
            background: #000000;
        }
        
        .photocontainer {
            position: sticky;
            z-index: 0;
        }
        
        .photocontainer:before {
            content: '';
            display: block;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.8;
            background-image: url('images/backgrounds/NationalMuseumUSAF2014lt.jpg');
            background-repeat: no-repeat;
            -ms-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-size: cover;
        }
        
        div.cleared {
            margin: 1rem 2rem;
            padding: 1rem;
            background-color: white;
            border-radius: 1rem;
            min-width: 15rem;
            opacity: 0.5;
            display: inline-block;
        }
        
        h1 {
            color: red;
            font-family: Monospace, Courier New, Lucida Console;
            font-weight: 800;
            font-size: 3rem;
            margin: 0.5rem 0rem 1rem;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }
        
        p {
            margin: 1rem 0.5rem;
        }
        
        #clockdiv {
            color: papayawhip;
            display: inline-block;
            font-weight: 800;
            text-align: center;
            font-size: 2.5rem;
        }
        
        #clockdiv > div {
            padding: 1rem;
            border-radius: 10%;
            background: orange;
            display: inline-block;
            margin: 0.25rem;
        }
        
        #clockdiv div > span {
            padding: 1rem;
            border-radius: 50%;
            background: red;
            display: inline-block;
        }
        
        .smalltext {
            padding-top: .5rem;
            font-size: 1.5rem;
            font-weight: 400
        }

    </style>
</head>

<body>
    <div class="photocontainer">
        <div></div>
        <nav>
            <?php include("pages/templates/navbar.php");?>
        </nav>
        <!-- page content -->
        <h1>UNDER CONSTRUCTION</h1>
        <div id="clockdiv">
            <div><span class="days"></span>
                <div class="smalltext">Days</div>
            </div>
            <div><span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div><span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div><span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>
        <br/>
        <div class="cleared">
            <p>You've located a page down for heavy remodeling.</p>
            <p>The whole site is undergoing major renovations.</p>
            <p>If all goes as planned, it will be done at the end of the countdown.</p>
            <p>Meanwhile, new content is added daily, so don't let this page dissuade you!</p>
        </div>
        <footer>
            <div>
                <?php include("pages/templates/socialicons.php");?>
            </div>
            <p class="copyright">&copy; 2017 <a href=http://tobyziegler.com>Toby Ziegler</a>, all rights reserved.</p>
        </footer>
        <br/>
        <div class="cleared">
            <h3>About this page's design</h3>
            <p>This page is intended as a placeholder during times of change on the site.</p>
            <p>As such, most of the page is coded without dependencies to the rest of the site. If the site's styles need to change, this page will stay independent.</p>
            <p>The exceptions are the navigation bar at the top, and the footer with social media and copyright at the bottom. Both of these are loaded with php require calls and styled with the site's stylesheets.</p>
            <p>note to self: add atribution</p>
        </div>
    </div>
</body>
<script>
    var deadline = 'February 28 2018 23:59:59 GMT-0500';

    function time_remaining(endtime) {
        var timecalc = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((timecalc / 1000) % 60);
        var minutes = Math.floor((timecalc / 1000 / 60) % 60);
        var hours = Math.floor((timecalc / (1000 * 60 * 60)) % 24);
        var days = Math.floor(timecalc / (1000 * 60 * 60 * 24));
        return {
            'total': timecalc,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function run_clock(id, endtime) {
        var clock = document.getElementById(id);
        // get spans where our clock numbers are held
        var days_span = clock.querySelector('.days');
        var hours_span = clock.querySelector('.hours');
        var minutes_span = clock.querySelector('.minutes');
        var seconds_span = clock.querySelector('.seconds');

        function update_clock() {
            var timecount = time_remaining(endtime);
            // update the numbers in each part of the clock
            days_span.innerHTML = ('0' + timecount.days).slice(-2);
            hours_span.innerHTML = ('0' + timecount.hours).slice(-2);
            minutes_span.innerHTML = ('0' + timecount.minutes).slice(-2);
            seconds_span.innerHTML = ('0' + timecount.seconds).slice(-2);
            if (timecount.total <= 0) {
                clearInterval(timeinterval);
            }
        }
        update_clock();
        var timeinterval = setInterval(update_clock, 1000);
    }
    run_clock('clockdiv', deadline);

</script>
<script>
    function goBack() {
        window.history.back();
    }

</script>

</html>
