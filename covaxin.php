<?php
ob_start();
if (isset($_POST['submit'])) {
    $fname = $_POST['name1'];
    $lname = $_POST['name2'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $Aadhaar = $_POST['Aadhaar'];
    $dob = $_POST['dob'];
    $vaccine = $_POST['vaccine']; // Updated form field name
    $vaccineno = $_POST['vaccineno'];

    $servername = "web_development-db-1";
    $username = "root";
    $password = "1234";
    $dbname = "kalyan";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql_check = "SELECT dose_no FROM users WHERE Aadhaar_no = '$Aadhaar'";
    $result = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $doseNo = $row['dose_no'];

        if ($doseNo == 1) {
            $sql_update = "UPDATE users SET dose_no = 2 WHERE Aadhaar_no = '$Aadhaar'";
            if (mysqli_query($conn, $sql_update)) {
                echo "Congratulations! You have successfully registered for Dose 2.";
            } else {
                echo "Error updating data: " . mysqli_error($conn);
            }
        } elseif ($doseNo == 2) {
            echo "Oops! You have already received both doses of the vaccine.";
        } else {
            echo "Invalid dose number. Please try again.";
        }
    } else {
        $sql_insert = "INSERT INTO users (Aadhaar_no, F_name, L_name, P_no, DOB, vaccine_type, dose_no, email)
            VALUES ('$Aadhaar', '$fname', '$lname', '$mobile', '$dob', '$vaccine', '$vaccineno', '$email')";

        if (mysqli_query($conn, $sql_insert)) {
            echo "Congratulations! You have successfully registered for Dose 1.";

            // Redirect to the certificate page with Aadhaar number as a query parameter
            $redirectURL = "certificate.php?aadhaar=$Aadhaar";
            ob_end_clean(); // Clear the buffer before sending headers
            header("Location: $redirectURL");
            exit();
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COVAXIN Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-image: url("bg3.jpg");
            font-family: 'Times New Roman', Times, serif;
        }
        .form-container {
            text-align: center;
            margin-top: 50px;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
        }
        .form-container input, .form-container select {
            width: 300px;
            padding: 5px;
            margin-bottom: 10px;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #b84040;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <!-- ... your navigation ... -->
    </nav>

    <div class="form-container">
        <h2>Registration</h2>
        <form action="" method="post">
            <label for="fname">First Name:</label>
            <input type="text" name="name1" id="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" name="name2" id="lname" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="mobile">Mobile number:</label>
            <input type="tel" name="mobile" id="mobile" pattern="[0-9]{10}" required>

            <label for="aadhaar">Aadhaar number:</label>
            <input type="tel" name="Aadhaar" id="aadhaar" pattern="[0-9]{12}" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" required>

            <label for="vaccine">Vaccine type:</label>
            <select name="vaccine" id="vaccine" required>
                <option value="">Select Vaccine</option>
                <option value="covaxin">Covaxin</option>
                <option value="covishield">Covishield</option>
            </select>

            <label for="dose">Dose number:</label>
            <select name="vaccineno" id="dose" required>
                <option value="">Select Dose Number</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>

            <button type="submit" name="submit">Register</button>
        </form>
    </div>

    <!-- ... your JavaScript and footer ... -->
</body>
</html>
