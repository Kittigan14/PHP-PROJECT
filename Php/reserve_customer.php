<?php

    session_start();
    include 'config.php';

    if (isset($_POST['getbuy'])) {
        if (isset($_POST['customer_name']) && isset($_POST['package_name'])) {
            $customer_name = $_POST['customer_name'];
            $package_name = $_POST['package_name'];
    
            $package_info_sql = "SELECT price, amount FROM packages WHERE name = '$package_name'";
            $package_info_result = mysqli_query($connect, $package_info_sql);
    
            if ($package_info_result && mysqli_num_rows($package_info_result) > 0) {

                $row = mysqli_fetch_assoc($package_info_result);
                $price = $row['price'];
                $amount = $row['amount'];

                if ($amount >= 0) {
                    $insert_sql = "INSERT INTO reserve (customer_name, package_name, price) 
                                   VALUES ('$customer_name', '$package_name', '$price')";

                    $insert_result = mysqli_query($connect, $insert_sql);

                    if ($insert_result) {
                        $update_amount_sql = "UPDATE packages SET amount = amount + 1 WHERE name = '$package_name'";
                        $update_amount_result = mysqli_query($connect, $update_amount_sql);

                        if (!$update_amount_result) {
                            echo "Error updating package amount: " . mysqli_error($connect);
                            exit;
                        }

                        header('location: ../views/package.php');
                        exit;
                    } else {
                        echo "Error inserting reservation: " . mysqli_error($connect);
                        exit;
                    }
                } else {
                    echo "Package '$package_name' is out of stock.";
                    exit;
                }
            } else {
                echo "Error fetching package information: " . mysqli_error($connect);
                exit;
            }
        } else {
            echo "Customer Name or Package Name not found";
            exit;
        }
    }

?>
