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

<body>
    <div id="header-package" class="container">
        <div class="logo">
            <img id="househeaderlogo" src="images/headerlogo.PNG" alt="images/logo.ico" height="150px" width="150px">
        </div>
        <!--navigation  bar-->
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="./index.php">
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
                <li class="list active">
                    <a href="#">
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


    <!--Below div is for all the responsive image slider-->
    <div id="imageSlider" class="container">
        <div class="slider">
            <!--First image that will be loaded on page load-->
            <img class="sliderimage" src="images/gallery1.jpg" alt="image" />
            <div class="btn">
                <!--Buttons to move forward or backward-->
                <button id="backward"><ion-icon name="chevron-back-outline"></ion-icon></button>
                <button id="forward"><ion-icon name="chevron-forward-outline"></ion-icon></button>
            </div>
        </div>
    </div>

    <!--For content below the image slider-->
    <div id="galleryContent" class="container">
        <div class="content1">
            <h1>Image Gallery</h1>
            <p>View a virtual tour that demonstrates the outstanding features of our one- and two-bedroom townhomes. In addition to
                comfort, our apartments in Overland Park, Kansas, reward you with grace and an unrivaled sense of style. So whether
                you want to relax by the pool, start a rigorous exercise routine, or hang out with friends on the tennis and basketball
                courts, you can do it all at Pointe Royal Apartments.
            </p>
        </div>
        <div class="content2">
            <h1>Overland Park, Kansas, Townhouses</h1>
            <p>The high quality and comfort of our properties are reflected in our assortment of upmarket amenities. Choose a home that
                meets your requirement for space because they are all equipped with modern appliances, ceiling fans, washer/dryer sets,
                and fireplaces that offer an extra layer of coziness. The patio is suitable so that you may breathe in the fresh air
                each morning, and air conditioning is a bonus when staying indoors is preferable. Our townhomes in Overland Park, Kansas
                also have cable connections, internet access, breathtaking views, and even updated units for more comfort.
            </p>
            <br><br>
            <p>We cordially invite you to become a part of our community, which offers the most pleasurable chances for both your body
                and mind to unwind. Every day feels invigorating and resolute thanks to modern sporting facilities like a gym, a spin
                room, a racquetball court, and a variety of fields for different sports. We also offer two swimming pools, which are
                enhanced by lovely landscape and make your downtime even more relaxing. You will also benefit from our considerate
                services, which include trash collection, a resident rewards program, and an online payment system.
            </p>
        </div>
    </div>

    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>

    <!--Javascript code for responsive image scroller-->
    <script type="text/javascript" src="./gallery.js"></script>

</body>

</html>