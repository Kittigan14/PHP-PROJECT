<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Data package</title>

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
        }

        .package-table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            width: 1400px;
            margin-top: 200px;
        }

        .package-table th,
        .package-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .package-table th {
            background-color: #f2f2f2;
            border-radius: 10px;
            text-align: center;
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

        .add-button {
            background-color: #84e067;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        #btn-active {
            background-color: #e18774;
        }

    </style>

</head>

<body>

    <?php
        session_start();
        include '../Php/config.php';

        if (isset($_SESSION['fname'])) {
            $fname = $_SESSION['fname'];

            $sql = "SELECT * FROM packages";
            $result = mysqli_query($connect, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
    ?>

    <div class="add-cons">

    </div>

    <table class="package-table">
        <tr>
            <?php

                $firstRow = mysqli_fetch_assoc($result);
                foreach ($firstRow as $key => $value) {
                    echo "<th>$key</th>";
                }
                echo "<th> Edit </th>";
                echo "<th> Delete </th>";

            ?>
        </tr>
        <?php

            mysqli_data_seek($result, 0);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                    
                }
                echo "<td> <button class='back-button' onclick=\"location.href='../Php/edit_packages.php?edit_package={$row['id']}'\"> edit </button> </td>";
                echo "<td> <button class='back-button' id='btn-active' onclick=\"location.href='../Php/delete_packages.php?package_id={$row['id']}'\"> delete </button> </td>";
                echo "</tr>";
            }

        ?>

    </table>

    <?php

            } else echo "<p>No package data found.</p>";
        } else echo "<p>Please log in to view package information.</p>";

    ?>

    <div class="btn-cons">
        <button class="back-button" onclick="location.href='./manager.php'">Go Back</button>
        <button class="add-button" onclick="location.href='../Php/add_packages.php'">Add Package</button>
    </div>

</body>
</html>