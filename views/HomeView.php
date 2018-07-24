<?php
    $pageName = "360 Canopy Design &amp; Rental | Wedding Drapery Lights";
    require_once("views/HeaderView.php");
?>

    <!-- # welcome image and logo -->
    <div class="container-fluid background-pic1">
        <div class="row justify-content-center padding-top-menu">
            <img src="images/logo.png" class="img-responsive">
        </div>
    </div>
    <!-- # sections for services, gallery, promotions -->
    <div class="container-fluid color-purple-bg py-4 px-4">
        <!-- ## description of services -->
        <div class="container color-grey2-bg align-center-text width-med1 py-4 mt-1 mb-4">
            <div class="font-2"> 
                <p>Tents &bull; Drapery &bull; Lighting design</p>
                <p><em>Transforming your space<br>into the perfect venue.</em></p>
                <p font-size-bigger3 font-2>It's what we do.</p>
            </div>
                <img class="mb-4" src="images/tent_small.jpg">
            <p class="capitalize font-3">
                Serving all of Utah County &amp; the Greater Salt Lake<br>
                area, including Cache Valley &amp; Sanpete County 
            </p>
        </div>
        <!-- ## gallery and promotions -->
        <div class="container-fluid px-2 pt-1 mb-4 background-split">
            <div class="container">
                <!-- row for pictures -->
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/drapery1.jpg" class="img-responsive width-full">
                        <!-- setting width to 100% fixes img-responsive bug -->
                    </div>
                    <div class="col-sm-6">
                        <img src="images/drapery2.jpg" class="img-responsive width-full">
                    </div>
                </div>
                <!-- row for text -->
                <div class="row py-4">
                    <div class="col-sm-6">
                        <div class="height-med1 color-grey3-bg align-center-text">
                            <div class="capitalize font-2">GALLERY</div>
                            <div class="font-5 font-6 font-7 font-size-bigger4 mb-3">
                                360 Canopy<br>
                                Transformations for Every<br>
                                Style and Occasion
                            </div>
                            <a href="index.php?page=gallery" class="button1 button-padding2 
                                    capitalize font-5 font-7 font-size-bigger1">
                                Discover
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="height-med1 color-grey3-bg p-4 align-center-text">
                            <p class="font-5 font-size-bigger5 pt-2">
                                We are currently offering<br>
                                30% off if you book with us<br>
                                in February or March for<br>
                                your event in 2018!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ## who we are -->
        <div class="container color-grey2-bg width-med1 py-3">
            <!-- row for pictures -->
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/drapery3.jpg" class="img-responsive width-full">
                        <!-- setting width to 100% fixes img-responsive bug -->
                    </div>
                    <div class="col-sm-6">
                        <img src="images/drapery4.jpg" class="img-responsive width-full">
                    </div>
                </div>
            <!-- text -->
            <div class="row justify-content-center pt-5 mb-3">
                <div class="col-sm-9 font-4">
                    <h1>An overview of who we are...</h1>

                    <h2>TENT RENTAL</h2>
                    <p>When you use a tent for your event, your venue is up to you!  No need for wait lists or high-priced venues; Celebrate in the beautiful outdoors, rain or shine, and with plenty of shade from Utah’s harsh sun.
                    </p>

                    <h2>TENT DESIGN</h2>
                    <p>Want more than just a tent?  You have come to the perfect place!  We can transform your tent into a luxurious canopy of drapery and lights.  Whether you have a picture of the exact design you would like, or you would like our assistance in designing your tent, we have you covered.  360 Canopy specializes in draping and lighting tents, because we set up the tent and design it we can go above and beyond the competition.  We know each tent and how to create that perfect look for you.  We fully customize your design with you and work with you to get your design just right!
                    </p>

                    <h2>DRAPERY &amp; LIGHTING DESIGN</h2>
                    <p>If you aren’t wanting a tent, and already have a venue in mind, we would love to provide for you top-notch professional drapery and/or our lighting design.  We have a passion for the design side of things and we would love to set up a complimentary design consultation on-site of your venue and start working our magic!  And as always, we fully customize your design to fit exactly what you are wanting to create for your special event.  If you can dream it, we can create it!
                    </p>

                    <h2>HOLIDAY LIGHTING</h2>
                    <p>Starting in September we also offer Holiday Lights for the season!  Get your lights put up professionally by us to create your own magical Winter Wonderland that is sure to brighten your Holidays - without any of the stress!  We'll make the process seamless for you, set-up and take down, just say when.  
                    </p>

                    <p class="mt-4">Tents, drapery, lighting - Please don’t hesitate to call us with any of your questions, so we can start collaborating together on the perfect design for your special day or event.
                    </p>

                    <a href="index.php?page=services" 
                            class="button1 button-padding1 width-med1 margin-auto font-size-bigger2 mt-4 align-center-text">
                        SERVICES WE OFFER
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- # Review Slides -->
    <div id="reviewContainer" class="container-fluid">
        <!-- Arrow Left -->
        <div class="float-left margin-left-big1 height-med2-padding">
            <svg viewbox="0 0 39 11" class="color-gold1-stroke width-med3 cursor-pointer" onclick="previousReview()">
                <polygon points="
                    5.5,0
                    6.2,0.7
                    1.9,5
                    39,5
                    39,6
                    1.9,6
                    6.2,10.3
                    5.5,11
                    0,5.5  ">
                </polygon>
               &lt;
            </svg> 
        </div>
        <!-- Arrow Right -->
        <div class="float-right margin-right-big1 height-med2-padding align-right-text">                    
            <svg viewbox="0 0 39 11" class="color-gold1-stroke width-med3 cursor-pointer" onclick="nextReview()">
                <polygon points="
                    33.5,0
                    32.8,0.7
                    37.1,5
                    0,5 0,6
                    37.1,6
                    32.8,10.3
                    33.5,11
                    39,5.5  ">
                </polygon>
               &lt;
            </svg>
        </div>
        <!-- Review -->
            <!-- do later - see if this is garamond or something? -->
            <input class="display-none" id="whichReview">
            <div class="align-center-text align-top height-med2">
                <img id="reviewQuotes" class="mb-3 mt-4" src="images/quotes.png">
                <div id="reviewText" class="font-1 font-7 font-size-bigger3 mb-3">
                    We transform your space into the <br>
                    perfect venue. You choose the location, meet <br>
                    with us to choose the design and we'll <br>
                    take it from there.
                </div>
                <div id="reviewAuthor" class="font-5 color-purple-font">
                    Andrew Willis, Owner
                </div>
            </div>

    </div> <!-- close container-fluid -->

<?php
    require_once("views/FooterView.php");
?>

    <script src="code.js"></script>

<?php
    require_once("views/HTMLFooterView.php");
?>
