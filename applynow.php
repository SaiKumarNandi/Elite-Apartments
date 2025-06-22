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
                <li class="list active">
                    <a href="#">
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

    <div id="apply-now" class="container">
        <div class="title">
            <h3>Get Your Quotation</h3>
        </div>
        <div class="get-quotation">
            <div class="apply form">
                <form action="applynow.php" method="POST">
                    <div class="form-box">

                        <div class="rows10">
                            <div class="input-box">
                                <span>First Name</span>
                                <input type="text" name="firstName" required>
                            </div>
                            <div class="input-box">
                                <span>Last Name</span>
                                <input type="text" name="lastName" required>
                            </div>
                        </div>

                        <div class="rows10">
                            <div class="input-box">
                                <span>Email</span>
                                <input type="text" name="email" required>
                            </div>
                            <div class="input-box">
                                <span>Mobile</span>
                                <input type="tel" name="mobile" placeholder="123-456-6868" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            </div>
                        </div>

                        <div class="rows">
                            <div class="input-box">
                                <span>Type</span>
                                <select name="type">
                                    <option value="1B1B">1 Bed 1 Bath</option>
                                    <option value="2B1B">2 Bed 1 Bath</option>
                                    <option value="2B2B">2 Bed 2 Bath</option>
                                    <option value="3B2B">3 Bed 2 Bath</option>
                                    <option value="3B3B">3 Bed 3 Bath</option>
                                </select>
                            </div>
                        </div>

                        <div class="rows">
                            <div class="input-box">
                                <span>Do you have pet?</span>
                                <input type="checkbox" name="petCheckBox" value="yes">
                            </div>
                            <div class="input-box">
                                <span>Do you need Garage?</span>
                                <label for="yes">YES</label>
                                <input type="radio" name="garage" value="yes">
                                <label for="no">NO</label>
                                <input type="radio" name="garage" value="no">
                            </div>
                        </div>

                        <div class="rows">
                            <div class="input-box">
                                <input type="submit" name="submitButton" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="apply contact">

            </div>
            <div class="apply location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5130.9364594249655!2d-94.40479485203507!3d38.93189785032571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c11fdf4f539e77%3A0x1596c8035da503c7!2sUniversity%20of%20Central%20Missouri%20Lee&#39;s%20Summit!5e0!3m2!1sen!2sus!4v1680898626621!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="results">
        <p>
            <?php
            $error_message = ""; // initialize error message variable
            $total = intval('0');
            define('SERVICE', intval('10'));
            define('PEST', intval('5'));
            define('TRASH', intval('3'));
            define('VALETTRASH', intval('25'));
            define('WATER', intval('100'));
            define('GARAGECHARGE', intval('100'));
            define('PETCHARGE', intval('10'));
            if (isset($_POST['submitButton'])) {
                $fname = $_POST['firstName'];
                if (strlen(trim($fname)) > 0) {
                    $lname = $_POST['lastName'];
                    if (strlen(trim($lname)) > 0) {
                        $email = $_POST['email'];
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $mobile_number = $_POST['mobile'];
                            if (!preg_match('/^[0-9]{10}+$/', $mobile_number)) {
                                $type = $_POST['type'];
                                if (strlen(trim($type)) > 0) {
                                    //assign value for rent using another function
                                    $rent = assignValue($type);
                                    $pet = isset($_POST['petCheckBox']) ? 'Y' : 'N';
                                    $garage = ($_POST['garage'] == 'Yes') ? 'Y' : 'N';


                                    include 'Intermediary.php';
                                    //$conn = mysqli_connect($host, $username, $password, $database);
                                    //if (mysqli_connect_error()) {
                                    //   die("Connection failed: " . mysqli_connect_error());
                                    //}
                                    //call the constructor for connection from Intermediary class
                                    $intermediary = new Intermediary();
                                    //$queryMaxId = "SELECT MAX(request_id) as max_request_id FROM requests";

                                    // Execute the query
                                    //$result = $conn->query($queryMaxId);

                                    // Check if the query was successful
                                    //if ($result->num_rows > 0) {
                                    // Fetch the result as an associative array
                                    //$row = $result->fetch_assoc();

                                    // Get the maximum request_id
                                    //$max_request_id = $row["max_request_id"];

                                    // Store the maximum request_id in a PHP variable
                                    //$maxID = intval($max_request_id + 1);
                                    //} else {
                                    //$maxID = intval('1');
                                    //}

                                    $queryInsertRequest = $intermediary->insertRequestRecords($fname, $lname, $email, $mobile_number, $type, $pet, $garage);
                                    if ($queryInsertRequest) {
                                        //when the data is inserted successfully

                                        echo "<p>Apartment Rent Per Month = <b>" . $rent . "$</b></p>";
                                        echo "<p>Service Charges Per Month = <b>" . SERVICE . "$</b></p>";
                                        echo "<p>Pest Charges Per Month = <b>" . PEST . "$</b></p>";
                                        echo "<p>Trash Charges Per Month = <b>" . TRASH . "$</b></p>";
                                        echo "<p>Valet Trash Charges Per Month = <b>" . VALETTRASH . "$</b></p>";
                                        echo "<p>Water Charges Per Month Approximately = <b>" . WATER . "$</b></p>";
                                        if ($pet === 'Y') {
                                            echo "<p>Pet Charges Per Month = <b>" . PETCHARGE . "$</b></p>";
                                            $total = intval($total + PETCHARGE);
                                        }
                                        if ($garage === 'Y') {
                                            echo "<p>Garage Charges Per Month = <b>" . GARAGECHARGE . "$</b></p>";
                                            $total = intval($total + GARAGECHARGE);
                                        }

                                        $total = intval($total + $rent + SERVICE + PEST + TRASH + VALETTRASH + WATER);
                                        echo "<p>Approximate Total Bill For A Month Based On Your Priority = <b>" . $total . "</b></p>";
                                        echo "<p>We have recieved your request. We will contact you soon!! Thanks</p>";
                                    } else {
                                        echo "Error: " . $queryInsertRequest . "<br>" . mysqli_error($conn);
                                    }
                                }
                            }
                        }
                    }
                }
            }

            function assignValue($selectedOption)
            {
                // Assign a value to the variable depending on the selected option
                if ($selectedOption === '1B1B') {
                    $rent = intval('1160');
                } elseif ($selectedOption === '2B1B') {
                    $rent = intval('1360');
                } elseif ($selectedOption === '2B2B') {
                    $rent = intval('1500');
                } elseif ($selectedOption === '3B2B') {
                    $rent = intval('1860');
                } elseif ($selectedOption === '3B3B') {
                    $rent = intval('2000');
                } else {
                    // Handle invalid input
                    $rent = null;
                }

                // Return the variable
                return $rent;
            }
            ?>
        </p>
    </div>


    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>
</body>

</html>