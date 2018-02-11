<!DOCTYPE html>

<html>

<!-- Toby Ziegler -->
<!-- 14SP-CIS-130-W01-WEB SITE DEVELOPMENT I -->
<!-- School Page Independent Project - Graphics, Tables & CSS 1 -->
<!-- Assignment Due February 27th, 2014 -->

<head>
    <meta name="keywords" content="CIW, HTML5, CSS, School" />
    <meta name="description" content="Assignment: Create a web page with information about either your former high school or your favorite college." />
    <meta charset="UTF-8" />
    <title>OTC Summary Page</title>
    <link rel="stylesheet" href="../../../css/navbarstyle.css" />
    <link rel="stylesheet" type="text/css" href="OTCSummaryStyle.css" />
</head>

<body>
    <!-- The top of page is marked here for easy link access. -->
    <a id="TopofPage"></a>

    <nav>
        <?php include("../../templates/navbar.php");?>
    </nav>

    <!-- This is an experiment to lighten the background for reading, while allowing it to be vibrant elsewhere. -->
    <div class="transbox">

        <h1 class="center">Ozarks Technical Community College</h1>
        <h4><em>This page was built for Web Site Development class in the spring of 2014.</em></h4>
        <p>Be aware, most of the links on this page lead off-site.</p>

        <!-- Another experiment to allow an image to feel like it is with the text, rather than above and/or separate -->
        <a href="http://www.otc.edu"><img src="OTCSummaryimages/OTCwebiconSm.jpg" alt="OTC" class="floatright" /></a>
        <!-- proper use of class rule -->

        <p>
            Our assignment for this page is to "Create a web page with information about either your former high school or your favorite college." I have three former high schools,
            <a href="http://bearkat.fathomthesin.org/index.php">one</a> of which one no longer exists (even the building has been <a href="http://www.panoramio.com/photo/50946708">razed</a>) and <a href="http://www.waynesville.k12.mo.us/Page/9">another</a> moved to a new building wherein I have never stepped foot.
        </p>

        <p>I also have three colleges so far, and I am unsure if I have a favorite. Perhaps one I have never attended is really my favorite? Perhaps not. I considered my <a href="https://www.mst.edu">first college</a>, but it no longer even has the same <a href="http://chancellor.mst.edu/history/">name</a>. Since I have already done more classes at OTC than my <a href="http://www.stlcc.edu/mc/">second college</a>, I decided <a href="http://www.otc.edu">OTC</a> was the way to go.
        </p>

        <h2>About OTC</h2>

        <p>
            OTC's current top administrator is <a href="http://www.otc.edu/about/chancellor.php">Hal L. Higdon, Ph.D.</a>, Chancellor and President.
        </p>

        <p>
            OTC does not appear to have a mascot. At least not an official one I could locate. Since I know of no athletics teams on campus, this makes sense of a sort. While I also could not locate an official source for the college's school colors, it seems abundantly obvious they are blue and white. You may notice the links and background coordinate accordingly.
        </p>

        <!-- Another image experiment, this time on the left. -->
        <a href="https://www.otc.edu/profiles/the-robotic-revolution.php"><img src="OTCSummaryimages/pf_ttc_g_Robotic_Revolution_7_rdax_800x533.jpg" alt="Tiffany Archer" width="200" height="133" class="floatleft" /></a>
        <!-- proper use of class rule -->
        <!-- I'm not yet pleased with how this left image is coming out.  I will need more time and experimentation to get this one right. -->

        <h2>Fun Sidebar...</h2>

        <p>
            There is certainly a ton of information which can easily go here, but all I am going to load in is this interesting article I found regarding robotics at OTC. It is entitled,
            <a href="https://www.otc.edu/profiles/the-robotic-revolution.php">The Robotic Revolution</a> and it features our own beloved Mz. Ford (n&eacute;e Tiffany Archer) in the starring role of Roboticist.
        </p>

        <p></p>
        <p></p>
        <blockquote>
            <h3>Contact</h3>
            <div id="contact">
                <!-- proper use of id selector rule -->
                <p>
                    <strong class="darkblue">Ozarks Technical Community College</strong>
                    <br/>
                    <!-- proper use of dependent class -->
                    1001 East Chestnut Expressway, Springfield, Missouri 65802
                    <br/> (417) 447-7500
                </p>
            </div>
        </blockquote>
        <!-- I am unconvinced or unsure of whether I prefer blockquotes or paragraphs or both.  I tried to experiment here.  Unsure of results. -->

    </div>

    <!-- Every index page needs a horizontal rule, right? -->
    <hr style="width:80%; height:5px;" />

    <!-- Toby Ziegler, February 27th, 2014. This code validates to HTML5 -->

    <p style="text-align:center">&copy; - well, not really copyright by anybody, since all these images were filched from OTC for a class assignment.</p>

    <p style="text-align:center"><a href="#TopofPage">Back to the top...</a></p>

    <!-- This code validates to HTML5, the W3C validation icons only list as high as 4.01 -->
    <!-- W3C validation icons located at http://www.w3.org/QA/Tools/Icons -->
    <!-- W3C validation icons code adapted from http://validator.w3.org/docs/help.html#icon-usage -->
    <p>
        <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401.gif" alt="Valid XHTML 4.01!" height="31" width="88" /></a>
    </p>
    <!-- This code validates to CSS level 3, the code below is taken from the link provided -->
    <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
        </a>
    </p>
</body>

</html>
