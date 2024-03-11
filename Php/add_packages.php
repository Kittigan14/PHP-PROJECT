<?php

    session_start();
    include 'config.php';

    if (isset($_POST['submit_edit'])) {

        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $image = $_POST['image'];

        $sql = "INSERT INTO packages (name, price, detail, image)
                VALUES ('$name', '$price', '$detail', '$image')";

        $result = mysqli_query($connect , $sql);

        if ($result) {
            echo "
            <script>
                alert('Add Packages successfully.');
                window.location = '../views/data_package.php';
            </script>";

        } else echo "Error: " . mysqli_error($connect);
    }

?>

<link rel="stylesheet" href="../Css/packages.css">

<form action="./add_packages.php" method="post" id="add_packages">

    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Enter Package name..." required>

    <label for="price">Price:</label>
    <input type="text" name="price" placeholder="Enter Price..." required>

    <label for="detail">Detail:</label>
    <textarea name="detail" placeholder="Enter Detail..." required></textarea>

    <label for="image">Image:</label>
    <input type="text" name="image" placeholder="Enter image(../image/Product/image name)..." required>

    <center>
        <input type="submit" name="submit_edit" value="Add Package">
    </center>

</form>