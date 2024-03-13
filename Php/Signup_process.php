<?php

    include 'config.php';

    if (isset($_POST['signup'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $psw = $_POST['psw'];
        $phone = $_POST['phone'];

        $currentDate = new DateTime();
        $birthdate = new DateTime($birthday);
        $age = $currentDate->diff($birthdate)->y;

        $sql = "INSERT INTO customers (firstname, lastname, gender, birthday, age, email, address, password, phone) 
        VALUES ('$fname', '$lname', '$gender', '$birthday', '$age', '$email', '$address', '$psw', '$phone')";
        $result = mysqli_query($connect , $sql);
        if ($result) {
            header('location: ../views/index.php'); 
            exit;
        } else echo "Error: " . mysqli_error($connect);
    }

?>