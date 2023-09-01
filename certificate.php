<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vaccination Certificate</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .certificate-container {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #ccc;
        }
        .certificate-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .certificate-details {
            margin-bottom: 20px;
        }
        .certificate-details p {
            margin: 5px;
        }
        .certificate-details p strong {
            display: inline-block;
            width: 150px;
        }
        .certificate-message {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    // Check if the Aadhaar number is provided in the query string
    if (isset($_GET['aadhaar'])) {
        $aadhaar = $_GET['aadhaar'];

        $servername = "web_development-db-1";
        $username = "root";
        $password = "1234";
        $dbname = "kalyan";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve user information from the database based on Aadhaar number
        $sql = "SELECT * FROM users WHERE Aadhaar_no = '$aadhaar'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $fname = $row['F_name'];
            $lname = $row['L_name'];
            $vaccineType = $row['vaccine_type'];
            $vaccineDose = $row['dose_no'];

            // Generate a unique certificate number
            $certificateNumber = uniqid();

            // Format the date
            $certificateDate = date("F j, Y");
            ?>

            <div class="certificate-container">
                <h2>Vaccination Certificate</h2>
                <div class="certificate-details">
                    <p><strong>Full Name:</strong> <?php echo $fname . " " . $lname; ?></p>
                    <p><strong>Vaccine Type:</strong> <?php echo $vaccineType; ?></p>
                    <p><strong>Vaccine Dose:</strong> <?php echo $vaccineDose; ?></p>
                    <p><strong>Certificate Number:</strong> <?php echo $certificateNumber; ?></p>
                    <p><strong>Date:</strong> <?php echo $certificateDate; ?></p>
                </div>
                <p class="certificate-message">This is to certify that <?php echo $fname . " " . $lname; ?> has been vaccinated with <?php echo $vaccineType; ?> for <?php echo $vaccineDose; ?> dose(s).</p>
            </div>

            <?php
        } else {
            echo "<p>No data found for the provided Aadhaar number.</p>";
        }

        // Close the connection
        mysqli_close($conn);
    } else {
        echo "<p>No Aadhaar number provided.</p>";
    }
    ?>
</body>
</html>
