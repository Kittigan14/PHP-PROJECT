<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/manager.css">
    <title>Employees</title>
</head>
<body>
    
    <div class="container-manager">

        <div class="manager-content">

            <?php

                session_start();
                $fname = $_SESSION['fname'];

                echo "<p> ยินดีต้อนรับ คุณ $fname </p>";

            ?>

            <div class="menu-cons">
                
                <div class="menu-list">
                    <p>ข้อมูลส่วนตัว</p>
                    <button>
                        <a href="./data_employees.php"> View </a>
                    </button>
                </div>
                <div class="menu-list">
                    <p>รายละเอียด Package</p>
                    <button>
                        <a href="./data_package.php"> View </a>
                    </button>
                </div>
                <div class="menu-list">
                    <p>ข้อมูล ลูกค้า</p>
                    <button>
                        <a href="./data_customer.php"> View </a>
                    </button>
                </div>
                <div class="menu-list">
                    <p>ยอดการขาย</p>
                    <button>
                        <a href="./data_sale.php"> View </a>
                    </button>
                </div>
            
            </div>

            <div class="button-active">
                <button type="submit" onclick="location.href='../Php/Logout_process.php' "> ออกจากระบบ </button>
            </div>


        </div>

    </div>

</body>
</html>