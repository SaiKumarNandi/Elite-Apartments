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

    <!--External java script for click events on images to display the description-->
    <script type="text/javascript" src="./policy.js"></script>
</head>

<body>
    <div id="header-package" class="container">
        <div class="logo">
            <img id="houselogo" src="images/headerlogo.PNG" alt="images/logo.ico" height="150px" width="150px">
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
                <li class="list active">
                    <a href="#">
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

    <!--privacy policies for different sectors in the apartment-->
    <div class="policy">
        <div class="policy-image">
            <img id="policyImage1" src="images/policy1.png" alt="Image" class="policy-image-hover" width="200px" height="200px">
        </div>
        <div class="policy-description">
            <h3>Pets Policy</h3>
            <p id="policyDescription1">Click on the image to see description!!</p>
        </div>
    </div>

    <div class="policy">
        <div class="policy-image">
            <img id="policyImage2" src="images/policy2.png" alt="Image" class="policy-image-hover" width="200px" height="200px">
        </div>
        <div class="policy-description">
            <h3>Utilities Policy</h3>
            <p id="policyDescription2">Click on the image to see description!!</p>
        </div>
    </div>

    <div class="policy">
        <div class="policy-image">
            <img id="policyImage3" src="images/policy3.png" alt="Image" class="policy-image-hover" width="200px" height="200px">
        </div>
        <div class="policy-description">
            <h3>Privacy Policy</h3>
            <p id="policyDescription3">Click on the image to see description!!</p>
        </div>
    </div>

    <div class="policy">
        <div class="policy-image">
            <img id="policyImage4" src="images/policy4.png" alt="Image" class="policy-image-hover" width="200px" height="200px">
        </div>
        <div class="policy-description">
            <h3>Maintenance Policy</h3>
            <p id="policyDescription4">Click on the image to see description!!</p>
        </div>
    </div>

    <div class="policy">
        <div class="policy-image">
            <img id="policyImage5" src="images/policy5.png" alt="Image" class="policy-image-hover" width="200px" height="200px">
        </div>
        <div class="policy-description">
            <h3>Bills Policy</h3>
            <p id="policyDescription5">Click on the image to see description!!</p>
        </div>
    </div>

    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>
</body>

</html>