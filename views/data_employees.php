<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Employee</title>
</head>
<body>
    
    <?php

        session_start();
        include '../Php/config.php';

        if (isset($_SESSION['fname'])) {
            $fname = $_SESSION['fname'];

            $sql = "SELECT * FROM employees WHERE firstname = '$fname' ";
            $result = mysqli_query($connect, $sql);

            if ($result && mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);

                echo "<p>First Name   " . $row['firstname']  . "</p>";
                echo "<p>Last Name    " . $row['lastname']   . "</p>";
                echo "<p>Gender       " . $row['gender']     . "</p>";
                echo "<p>Birthday     " . $row['birthday']   . "</p>";
                echo "<p>Age          " . $row['age']        . "</p>";
                echo "<p>Email        " . $row['email']      . "</p>";
                echo "<p>Password     " . $row['password']   . "</p>";
                echo "<p>Address      " . $row['address']    . "</p>";
                echo "<p>Jobposition  " . $row['jobposition']. "</p>";
                echo "<p>Salary       " . $row['salary']     . "</p>";

            } else echo "<p>No employee data found.</p>";

        } else echo "<p>Please log in to view employee information.</p>";

    ?>

</body>
</html>