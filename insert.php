<?php

$servername = "localhost";
$username = "lun_root";
$password = "980525!";
$dbname = "lun_123";

$mysqli = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection failed.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = mysqli_real_escape_string($mysqli, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($mysqli, $_POST["lastname"]);
    $email = mysqli_real_escape_string($mysqli, $_POST["email"]);

    $sql = "INSERT INTO usersd (firstname, lastname, email)
            VALUES ('$firstname', '$lastname', '$email')";

    if (mysqli_query($mysqli, $sql)) {
        echo "New record created successfully.";
    } else {
        echo "Unable to insert record.";
    }
}

mysqli_close($mysqli);

?>

<p><a href="dataentry.html">Return to Data Entry</a></p>
<p><a href="report.php">View All Records</a></p>