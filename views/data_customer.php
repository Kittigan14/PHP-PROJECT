<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Data Customer</title>

    <style>
        /* ส่วน CSS ที่มีอยู่ */

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

        .customer-table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            width: 1200px;
        }

        .customer-table th,
        .customer-table td {
            padding: 10px;
        }

        .customer-table th {
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

            $sql = "SELECT * FROM customers";
            $result = mysqli_query($connect, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
    ?>

    <table class="customer-table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>feed Back</th>
            <th>Reserve</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <?php
            } else {
                echo "<p>No customer data found.</p>";
            }
        } else {
            echo "<p>Please log in to view customer information.</p>";
        }
    ?>

    <button class="back-button" onclick="location.href='./manager.php'">Go Back</button>
    
</body>
</html>
