<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <script src="../Script/script.js"></script>
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
                echo "<button class='open-button' onclick='openGetbuy()'>Buy</button>";
                echo "</div>";
            }

            mysqli_close($connect);
        ?>

            </div>
        </div>

    </div>

    <div class="form-popup" id="login">
        <form action="../Php/Login_process.php" method="post" class="form-container">
            <h1>Login</h1>

            <label for="name"> First Name </label>
            <input type="text" placeholder="Enter name" name="fname" required>

            <label for="psw"> Password </label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <input type="submit" name="login" value="Log in" class="btn"></input>
            <input type="submit" name="close" value="Close" onclick="closelogin()" class="btn cancel"></input>
        </form>
    </div>

    <div class="form-popup" id="signup">
        <form action="../Php/Signup_process.php" method="post" class="form-container" id="signup-container">
            <h1>Sign up</h1>

            <label for="fname"> First Name</label>
            <input type="text" placeholder="Enter Firstname..." name="fname" required>

            <label for="lname"> Last Name </label>
            <input type="text" placeholder="Enter Lastname..." name="lname" required>

            <input class="radio" type="radio" name="gender" value="male" checked required>
            <label>Male</label>

            <input class="radio" type="radio" name="gender" value="female" required>
            <label>Female</label> <br> <br>

            <label for="birthday">Birthday</label> <br>
            <input type="date" id="birthday" name="birthday" required> <br>

            <label for="email"> Email </label> <br>
            <input type="email" placeholder="Enter Email..." name="email" required> <br>

            <label for="phone"> Phone </label> <br>
            <input type="text" placeholder="Enter Phone..." name="phone" min="1" maxlength="10" required> <br>

            <label for="address"> Address </label>
            <input type="text" placeholder="Enter your Address..." name="address" id="address" required>

            <label for="psw"> Password </label>
            <input type="password" placeholder="Enter Password..." name="psw" required>

            <input type="submit" name="signup" value="Sign up" class="btn"></input>
            <input type="submit" name="close" value="Close" onclick="closeSignup()" class="btn cancel"></input>
        </form>
    </div>


    <div class="form-popup" id="getbuy">
        <form action="" method="post" class="form-container">

            <label for="fname">First Name</label>
            <input type="text" placeholder="Enter First name..." name="fname" required>

            <label for="phone">Phone</label>
            <input type="text" placeholder="Enter phone..." name="phone" required>

            <input type="submit" name="getbuy" value="Submit" class="btn"></input>
            <input type="submit" name="close" value="Close" onclick="closeGetbuy()" class="btn cancel"></input>

        </form>
    </div>

    <script>
        function openGetbuy() {
            document.getElementById("getbuy").style.display = "block";
        }

        function closeGetbuy() {
            document.getElementById("getbuy").style.display = "none";
        }
    </script>

</body>

</html>