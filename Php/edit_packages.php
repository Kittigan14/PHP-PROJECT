<?php

    session_start();
    include 'config.php';

    if (isset($_POST['submit_edit'])) {
        $package_id = mysqli_real_escape_string($connect, $_POST['package_id']);
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $price = mysqli_real_escape_string($connect, $_POST['price']);
        $detail = mysqli_real_escape_string($connect, $_POST['detail']);
        $image = mysqli_real_escape_string($connect, $_POST['image']);
        $amount = mysqli_real_escape_string($connect, $_POST['amount']);

        $update_sql = "UPDATE packages SET
                       name = '$name',
                       price = '$price',
                       detail = '$detail',
                       image = '$image',
                       amount = '$amount'
                       WHERE id = $package_id";

        $update_result = mysqli_query($connect, $update_sql);

        if ($update_result) {
            echo "
            <script>
                alert('Package updated successfully.');
                window.location = '../views/data_package.php';
            </script>";
        } else {
            echo "Error updating package: " . mysqli_error($connect);
        }
    }

?>

<?php
    if (isset($_GET['edit_package'])) {
        $package_id = mysqli_real_escape_string($connect, $_GET['edit_package']);
        $edit_sql = "SELECT * FROM packages WHERE id = $package_id";
        $edit_result = mysqli_query($connect, $edit_sql);
        $package_data = mysqli_fetch_assoc($edit_result);
?>

    <link rel="stylesheet" href="../Css/packages.css">
    <form action="./edit_packages.php" method="post">

        <input type="hidden" name="package_id" value="<?php echo $package_data['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $package_data['name']; ?>" required>

        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo $package_data['price']; ?>" required>

        <label for="detail">Detail:</label>
        <textarea name="detail" required><?php echo $package_data['detail']; ?></textarea>

        <label for="image">Image:</label>
        <input type="text" name="image" value="<?php echo $package_data['image']; ?>" required>

        <label for="amount">Amount:</label>
        <input type="text" name="amount" value="<?php echo $package_data['amount']; ?>" required>

        <center>
            <input type="submit" name="submit_edit" value="Save Changes">
        </center>

    </form>

<?php
    }
?>