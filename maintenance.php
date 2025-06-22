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
                <li class="list active">
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

    <div id="maintenance" class="container">
        <div class="title">
            <h3>Maintenance Request And Records</h3>
        </div>
        <div class="maintenance-box">
            <div class="mform1">
                <h5 class="heading5">Raise Maintainence Request</h5>
                <form action="maintenance.php" method="POST">
                    <div class="form-group">
                        <label for="apartment-no">Apartment Number:</label>
                        <input type="text" id="apartment-no" name="apartmentNo" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description In 5-10 Words:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="msubmitButton">Submit</button>
                </form>
                <p class="mresultsform1">
                    <?php
                    include 'Intermediary.php';
                    if (isset($_POST['msubmitButton'])) {
                        //validation for all the fields in the form
                        $apartmentNo = $_POST['apartmentNo'];
                        if (strlen(trim($apartmentNo)) > 0) {
                            //call the constructor for connection from Intermediary class
                            $intermediary = new Intermediary();
                            //call the method apartmentCheck() and pass the apartment number to it
                            $occupied = $intermediary->apartmentCheck($apartmentNo);
                            if (mysqli_num_rows($occupied) != 0) {
                                $row = mysqli_fetch_assoc($occupied);
                                if ($row['is_occupied'] === 'Y') {
                                    $reqDate = date('Y/m/d');

                                    $description = $_POST['description'];
                                    //get the user id from tenants table
                                    $user = $intermediary->getUserId($apartmentNo);

                                    if ($row = mysqli_fetch_assoc($user)) {
                                        $userId = $row['user_id'];
                                        // You can now use the $apartment_no variable
                                    }

                                    //call the insertMaintenance method to insert the data into maintenance table
                                    $result = $intermediary->insertMaintenance($apartmentNo, $description, $userId, $reqDate);

                                    //condition to check the value fo result and see if data is actually inserted
                                    if ($result) {
                                        echo "We have recorded your problem, a technician would be assigned to it soon!!";
                                    }
                                } else {
                                    echo "Apartment is not taken by any of the tenant!! Request cannot be raised for this apartment";
                                }
                            } else {
                                echo "Invalid Apartment Number!!";
                            }
                        } else {
                            echo "Error: Apartment Number cannot be Empty!!";
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="mform2">
                <h5 class="heading5">View History</h5>
                <form action="maintenance.php" method="POST">
                    <div class="form-group">
                        <label for="apartment-no">Enter Apartment Number:</label>
                        <input type="text" id="apartment-no" name="apartmentNoId" required>
                    </div>
                    <button type="submit" name="mrsubmitButton">Show Records</button>
                </form>
                <p class="mresultsform2">
                    <?php
                    if (isset($_POST['mrsubmitButton'])) {
                        //validation for all the fields in the form
                        $apartmentNo = $_POST['apartmentNoId'];
                        if (strlen(trim($apartmentNo)) > 0) {
                            //call the constructor for connection from Intermediary class
                            $intermediary = new Intermediary();
                            //call the method apartmentCheck() and pass the apartment number to it
                            $occupied = $intermediary->apartmentCheck($apartmentNo);
                            if (mysqli_num_rows($occupied) != 0) {
                                $row = mysqli_fetch_assoc($occupied);
                                if ($row['is_occupied'] === 'Y') {
                                    //code goes here
                                    $result = $intermediary->showMaintenanceRecords($apartmentNo);

                                    if (mysqli_num_rows($result) > 0) {
                                        echo '<table class="maintenance-table"><thead><tr><th>User ID</th><th>Description</th><th>Request Status</th></tr></thead><tbody>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // output each row as a table row
                                            echo '<tr>';
                                            echo '<td>' . $row['user_id'] . '</td>';
                                            echo '<td>' . $row['description'] . '</td>';
                                            echo '<td>' . $row['req_status'] . '</td>';
                                            echo '</tr>';
                                        }
                                        echo '</tbody></table>';
                                    } else {
                                        echo "No maintenance requests found for apartment number $apartmentNo";
                                    }
                                } else {
                                    echo "Apartment is not taken by any of the tenant!! Hence there are no requests found!!";
                                }
                            } else {
                                echo "Invalid Apartment Number!!";
                            }
                        } else {
                            echo "Error: Apartment Number cannot be Empty!!";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>
</body>

</html>