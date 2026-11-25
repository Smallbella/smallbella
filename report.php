<!DOCTYPE html>
<html>
    <head>
        <title>Database Report</title>
    </head>
    <body>

        <h1>All Records from the Database</h1>

        <?php

        $servername = "localhost";
        $username = "lun_root";
        $password = "980525!";
        $dbname = "lun_123";

        $mysqli = mysqli_connect($servername, $username, $password, $dbname);

        if (mysqli_connect_errno()) {
            die("Connection failed.");
        }

        $sql = "SELECT * FROM usersd";

        $res = mysqli_query($mysqli, $sql);

        if ($res && mysqli_num_rows($res) > 0) {

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Email</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {

                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . htmlspecialchars($row["firstname"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["lastname"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "</tr>";

            }

            echo "</table>";

        } else {
            echo "No records available.";
        }

        mysqli_close($mysqli);

        ?>

        <p><a href="dataentry.html">Return to Data Entry</a></p>

    </body>
</html>