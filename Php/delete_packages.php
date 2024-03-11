<?php

    session_start();
    include 'config.php';

    if (isset($_GET['package_id'])) {
        $package_id = mysqli_real_escape_string($connect, $_GET['package_id']);

        if (isset($_SESSION['fname'])) {
            $delete_sql = "DELETE FROM packages WHERE id = $package_id";

            $delete_result = mysqli_query($connect, $delete_sql);

            if ($delete_result) {
                echo "
                <script>
                    alert('Package deleted successfully.');
                    window.location = '../views/data_package.php';
                </script>";
            }
            else echo "Error deleting package: " . mysqli_error($connect);
        }
        else echo "Invalid session. Please log in.";
    }
    else echo "Invalid package ID.";

?>