<?php
    session_start();
    include 'config.php';

    if (isset($_POST['login'])) {
        $fname = $_POST['fname'];
        $psw = $_POST['psw'];

        $sql = "SELECT * FROM customers WHERE firstname='$fname' AND password='$psw'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['fname'] = $fname;
            header('location: ../views/index.php');
            exit;
        } else echo "Login failed. Please check your username and password.";
    }
?>


<!-- $sql = "SELECT * FROM employees WHERE firstname = '$fname' AND password = '$psw' ";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) == 1) {
    $_SESSION['fname'] = $fname;
    header('location: ../Html/index.html');
    exit;
}
else echo "<script>alert('Login failed. Please check your username and password.');</script>"; -->