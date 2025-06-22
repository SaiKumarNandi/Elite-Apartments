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


    <!--Javascript code for changing the images with respect to selected option-->
    <script type="text/javascript" src="./aminities.js"></script>
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
                <li class="list active">
                    <a href="#">
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


    <div class="row-container">
        <div class="row-amenities">
            <div class="col-amenities">
                <h4>Select Amenities Category to View Images</h4>
                <select name="example" class="select-amenities" id="amenitiesSelect">
                    <option value="outdoor">Outdoor</option>
                    <option value="kitchen">Kitchen</option>
                    <option value="bathroom">Bathroom</option>
                    <option value="bedroom">Bedroom</option>
                    <option value="livingroom">Living Room</option>
                </select>
            </div>
        </div>

        <div class="row-amenities">
            <div class="col-amenities">
                <img id="amenitiesImg1" class="img-amenities" src="images/outdoor1.jpg" alt="Image 1">
            </div>
            <div class="col-amenities">
                <img id="amenitiesImg2" class="img-amenities" src="images/outdoor2.jpg" alt="Image 2">
            </div>
            <div class="col-amenities">
                <img id="amenitiesImg3" class="img-amenities" src="images/outdoor3.jpg" alt="Image 3">
            </div>
        </div>

        <div class="row-amenities">
            <div class="col-amenities">
                <img id="amenitiesImg4" class="img-amenities" src="images/outdoor4.jpg" alt="Image 4">
            </div>
            <div class="col-amenities">
                <img id="amenitiesImg5" class="img-amenities" src="images/outdoor5.jpg" alt="Image 5">
            </div>
            <div class="col-amenities">
                <img id="amenitiesImg6" class="img-amenities" src="images/outdoor6.jpg" alt="Image 6">
            </div>
        </div>
    </div>


    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>
</body>

</html>