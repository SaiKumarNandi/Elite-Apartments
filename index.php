<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Renting System</title>
    <!--icon for website-->
    <link rel="icon" href="images/logo.ico">

    <!--ionicons reference for icons in navigation bar-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--External style sheet specifically for navigation bar-->
    <link rel="stylesheet" href="default.css" type="text/css">

    <!--External style sheet for applying custom google fonts-->
    <link rel="stylesheet" href="customgooglefonts.css" type="text/css">

</head>
<!--Created by Sai Kumar Nandi-->

<body>
    <div id="header-package" class="container">
        <div class="logo">
            <img id="houselogo" src="images/headerlogo.PNG" alt="images/logo.ico" height="150px" width="150px">
        </div>
        <!--navigation  bar-->
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./maintenance.php">
                        <span class="icon"><ion-icon name="build-outline"></ion-icon></span>
                        <span class="text">Maintenance</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./gallery.php">
                        <span class="icon"><ion-icon name="image-outline"></ion-icon></span>
                        <span class="text">Gallery</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./amenities.php">
                        <span class="icon"><ion-icon name="bicycle-outline"></ion-icon></span>
                        <span class="text">Amenities</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./sustainability.php">
                        <span class="icon"><ion-icon name="water-outline"></ion-icon></span>
                        <span class="text">Sustainability</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./applynow.php">
                        <span class="icon"><ion-icon name="arrow-forward-circle-outline"></ion-icon></span>
                        <span class="text">Apply Now</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./policy.php">
                        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                        <span class="text">Privacy Policy</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./aboutus.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="text">About Us</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </div>

    <!--below script is for the navigation bar to move from one page to other and make the link active
    <script type="text/javascript" src="default.js"></script>-->
    <div id="index-start" class="container">
        <div class="for-index">
            <h2>The Lifestyle You've Been Searching For</h2>
            <img src="images/index1.jpg" alt="" width="600px" height="400px">
            <p>At Elite Apartments, "home" is characterized by elegant architecture, lush landscape, and a wealth of superior services.
                This tranquil area invites you to find a personal hideaway in our Overland Park townhomes for rent, where spacious one
                and two bedrooms await with all the luxuries of an affluent living.
            </p>
        </div>
    </div>

    <div id="index-package" class="container">
        <div class="index-container">
            <div class="for-gallery">
                <img src="images/index2.jpg" alt="Example Image" class="index-image">
                <h3>Come explore the comfort and style waiting for you in our stunning gallery.</h3>
                <p class="index-para">Immerse yourself in the magnificence of our exquisitely made places, where each and every element
                    has been skillfully created to provide you a remarkable living experience. Our slideshow highlights the finest of
                    what our neighborhood has to offer, from sleek and contemporary residences to opulent amenities. Discover the
                    finest in comfort and style in your ideal home.
                </p>
                <button onclick="window.location.href='./gallery.php'" class="index-button">View Gallery</button>
            </div>
            <div class="for-aminities">
                <img src="images/index3.jpg" alt="Example Image" class="index-image">
                <h3>Modern and Effortless Aminities</h3>
                <p class="index-para">We provide a selection of convenient amenities that are intended to improve your quality of life.
                    Our amenities are thoughtfully chosen to enhance your comfort and ease your life so you can concentrate on what is
                    most important to you.
                </p>
                <button onclick="window.location.href='./amenities.php'" class="index-button">View Aminities</button>
            </div>
            <div class="for-sustainability">
                <img src="images/index4.jpg" alt="Example Image" class="index-image">
                <h3>Living green is at the heart of protecting our future.</h3>
                <p class="index-para">We are dedicated to sustainability at our apartments and think it is our duty to contribute to
                    environmental protection. We are constantly looking for innovative ways to lessen our carbon footprint and encourage
                    eco-friendly living since we feel that sustainability is more than just a trend.
                </p>
                <button onclick="window.location.href='./sustainability.php'" class="index-button">View Sustainability</button>
            </div>
            <div class="for-applynow">
                <img src="images/index5.jpg" alt="Example Image" class="index-image">
                <h3>Get Your Quotation</h3>
                <p class="index-para">Excellent residential quarters are available for a fair price. Our apartments' roomy floor layouts,
                    top-notch features, and attentive service provide the ideal blend of usability and comfort. We provide everything you
                    need to turn your home into a haven, from fully functional kitchens to in-unit laundry facilities.
                </p>
                <button onclick="window.location.href='./applynow.php'" class="index-button">Get Quotation</button>
            </div>
            <div class="for-policy">
                <img src="images/index6.jpg" alt="Example Image" class="index-image">
                <p class="index-para">We are dedicated to making sure that using our services is safe and enjoyable for you. To make sure
                    you are familiar with our terms and conditions, please take a moment to go through our policies, which can be found
                    on our policy page.
                </p>
                <button onclick="window.location.href='./policy.php'" class="index-button">View Policies</button>
            </div>
            <div class="for-aboutus">
                <img src="images/index8.jpg" alt="Example Image" class="index-image">
                <p class="index-para">Please feel free to call or email us if you have any questions about renting one of our flats or
                    if you are interested in doing so. The kind and educated team at our office will be pleased to help you; see our
                    about us page for office hours.
                </p>
                <button onclick="window.location.href='./aboutus.php'" class="index-button">View About Us</button>
            </div>
        </div>
    </div>

    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>

</body>

</html>