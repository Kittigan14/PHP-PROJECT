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
        } else {
            $sqlmanager = "SELECT * FROM employees WHERE firstname = '$fname' AND password = '$psw' ";
            $resultmanager = mysqli_query($connect, $sqlmanager);

            if (mysqli_num_rows($resultmanager) == 1) {
                $_SESSION['fname'] = $fname;
                header('location: ../views/manager.php');
                exit;
            } else {
                echo "
                <script>
                    alert('Login failed. Please check your username and password.');
                    window.location = '../views/index.php';
                </script>";
            }
        }
    }

?>