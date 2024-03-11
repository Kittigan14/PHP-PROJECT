<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Data Employee</title>

    <style>
        body {
            font-family: "Kanit", sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .employee-table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 400px;
            width: 100%;
        }

        .employee-table th,
        .employee-table td {
            padding: 10px;
        }

        .employee-table th {
            width: 100px;
            background-color: #f2f2f2;
            border-radius: 10px;
        }

        .back-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
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
    ?>

    <table class="employee-table">
        <?php
            $row = mysqli_fetch_assoc($result);
            if ($result && mysqli_num_rows($result) > 0) {
                
                echo "<tr>";
                echo "<th>First Name </th>";
                echo "<td>" . $row['firstname'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Last Name  </th>";
                echo "<td>" . $row['lastname'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Gender     </th>";
                echo "<td>" . $row['gender'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Birthday   </th>";
                echo "<td>" . $row['birthday'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Age        </th>";
                echo "<td>" . $row['age'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Email      </th>";
                echo "<td>" . $row['email'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Password   </th>";
                echo "<td>" . ($row['password']) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Address    </th>";
                echo "<td>" . $row['address'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Jobposition</th>";
                echo "<td>" . $row['jobposition'] ."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Salary     </th>";
                echo "<td>" . $row['salary'] ."</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <?php
            } else {
                echo "<p>No employee data found.</p>";
            }
        } else {
            echo "<p>Please log in to view employee information.</p>";
        }
    ?>

    <button class="back-button" onclick="location.href='./manager.php'">Go Back</button>

</body>
</html>