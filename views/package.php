<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/services.css">
    <title>Document</title>
</head>

<body>

    <div class="navbar-container">

        <div class="navbar-logo">
            <img src="../Image/mediclinic.png" alt="Logo" width="64px">
        </div>

        <ul class="navbar-menu">
            <li><a href="./index.php#Container">Home</a></li>
            <li><a href="./index.php#Services">Services</a></li>
            <li><a href="./index.php#Product">Package</a></li>
            <li><a href="./index.php#Reviews">Reviews</a></li>
            <li><a href="./index.php#Doctors">Doctors</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>

        <div class="navbar-button">

            <?php

                session_start();

                if (isset($_SESSION['fname'])) {
                    $fname = $_SESSION['fname'];
                    echo "<button class='open-button'> $fname </button> 
                         <button class='open-button' onclick=\"location.href='../Php/Logout_process.php'\">Log out</button>";
                } else {
                    echo "<button class='open-button' onclick='openSignup()'>Sign up</button>
                          <button class='open-button' onclick='openlogin()'>Log in</button>";
                }
            ?>

        </div>
    </div>

    <div class="package-container">

    <div class="package-content">

        <div class="package-title">
                <span> Package </span>
                <p> แพ็คเกจ </p>
        </div>

        <div class="card-container">

        <?php

            include '../Php/config.php';

            $sql = "SELECT * FROM packages";
            $result = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<img src='{$row['image']}' alt='Package Image'>";
                echo "<h2>{$row['name']}</h2>";
                echo "<p>{$row['detail']}</p>";
                echo "<p class='price-content'>Price: {$row['price']}</p>";
                echo "<button class='button-reserve'>Reserve</button>";
                echo "</div>";
            }

            mysqli_close($connect);
        ?>

        </div>
    </div>


    </div>

</body>

</html>