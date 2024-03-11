<?php

    session_start();
    include 'config.php';
    
    if (isset($_POST['submit_feedback'])) {
        if (isset($_POST['customer_name'])) {
            $customer_name = $_POST['customer_name'];
        
            $select_id_sql = "SELECT id FROM customers WHERE firstname = '$customer_name'";
            $result = mysqli_query($connect, $select_id_sql);
        
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $customer_id = $row['id'];
            
                $feedback = mysqli_real_escape_string($connect, $_POST['feedback']);
            
                $sql = "INSERT INTO feedbacks (customer_id, feedback) 
                        VALUES ('$customer_id', '$feedback')";
    
                $insert_result = mysqli_query($connect, $sql);
            
                if ($insert_result) {
                    header('location: ../views/index.php');
                    exit;
                } else {
                    echo "Error inserting feedback: " . mysqli_error($connect);
                    exit;
                }
            } else {
                echo "Error selecting customer ID: " . mysqli_error($connect);
                exit;
            }
        } else {
            echo "Customer Name not found";
            exit;
        }
    }

?>
