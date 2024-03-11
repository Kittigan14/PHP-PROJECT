<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/services.css">
    <script src="../Script/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <title>Document</title>
</head>

<style>
    .box-content-list {
        position: relative;
    }

    .banner-title span {
        font-family: "Kanit", sans-serif;
        color: #ffffffa9;
    }

    #box-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;

        & p {
            font-family: "Kanit", sans-serif;
            font-size: 30px;
        }
    }
    
    .navbar-menu li a {
        font-family: "Kanit", sans-serif;
    }
</style>

<body>


    <div class="navbar-container">

        <div class="navbar-logo">
            <img src="../Image/mediclinic.png" alt="Logo" width="64px">
        </div>

        <ul class="navbar-menu">
            <li><a href="./index.php#Container">Home</a></li>
            <li><a href="#list-1">รักษาสิว</a></li>
            <li><a href="#list-2">รักษาฝ้า</a></li>
            <li><a href="#list-3">หัตถการ</a></li>
            <li><a href="#list-4">บริการอื่น</a></li>
            <li><a href="#Contact">Contact</a></li>
            <!-- <li><a href="./index.php#Container">Home</a></li>
            <li><a href="./index.php#Services">Services</a></li>
            <li><a href="./index.php#Product">Package</a></li>
            <li><a href="./index.php#Reviews">Reviews</a></li>
            <li><a href="./index.php#Doctors">Doctors</a></li>
            <li><a href="#Contact">Contact</a></li> -->
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


    <div class="Container" id="Container">

        <div class="banner-title">
            <span>SERVICES</span>
            <br>
            บริการของเรา
        </div>

        <div class="box-content-list">

            <div class="box-content" id="box-content">
                <p>
                    ไม่ว่าจะเป็นเรื่องโรคผิวหนัง ทรีทเม้นท์บำรุงผิว
                    หรือหัตถกรรมความงามต่างๆ เรายินดีให้คำปรึกษา
                    และพร้อมให้ความดูแลคุณ
                </p>
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
                <input type="text" placeholder="Enter Firstname" name="fname" required>

                <label for="lname"> Last Name </label>
                <input type="text" placeholder="Enter Lastname" name="lname" required>

                <input class="radio" type="radio" name="gender" value="male" checked required>
                <label>Male</label>

                <input class="radio" type="radio" name="gender" value="female" required>
                <label>Female</label> <br> <br>

                <label for="birthday">Birthday</label> <br>
                <input type="date" id="birthday" name="birthday" required> <br>

                <label for="email"> Email </label> <br>
                <input type="email" placeholder="Enter Email" name="email" required> <br>

                <label for="address"> Address </label>
                <input type="text" placeholder="Enter your Address" name="address" id="address" required>

                <label for="psw"> Password </label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <input type="submit" name="signup" value="Sign up" class="btn"></input>
                <input type="submit" name="close" value="Close" onclick="closeSignup()" class="btn cancel"></input>
            </form>
        </div>
    </div>


    <div class="services-list-1" id="list-1">

        <div class="detail-content">
            <div class="content">
                <div class="title-content">
                    <p>รักษาสิว</p>
                </div>
                <div class="text-detail">
                    <p id="text-list-1">
                        สำหรับผู้ที่มีปัญหาสิวและหลุมสิว คงรู้สึกกังวลและรำคาญใจไม่น้อย
                        เพราะถือว่าเป็นปัญหาผิวหน้าอันดับต้น ๆ ที่ส่งผลต่อสภาพจิตใจ
                        บางคนถึงขั้นเสียความมั่นใจกันเลยทีเดียว โดยสิวเกิดขึ้นได้ทุกเพศ ทุกวัย ทุกประเภท ไม่ว่าจะเป็น
                        สิวอุดตัน สิวอักเสบ สิวหนอง หรือสิวหัวช้าง

                        หลาย ๆ คนพยายามรักษาสิวด้วยตัวเอง อาทิ บีบสิว กดสิว ซื้อยาแต้มสิวยี่ห้อดัง ๆ
                        แต่ก็ยังรักษาไม่หายขาด บางคนกดสิวบ่อยจนกลายเป็นรอยแผลเป็นหรือหลุมสิวที่กวนใจยิ่งกว่าเดิม
                        คุณจึงควรเข้ารับการรักษาสิวกับแพทย์ที่มีความรู้เฉพาะทางและรักษาอย่างถูกวิธี
                        เพื่อให้สิวและหลุมสิวจางลง
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="services-list-2" id="list-2">

        <div class="detail-content">
            <div class="content">
                <div class="title-content">
                    <p>รักษาฝ้า</p>
                </div>
                <div class="text-detail">
                    <p id="text-list-2">
                        ฝ้า กระ เป็นปัญหาผิวหน้าที่ใครหลายคนกังวลใจ แม้จะบำรุงด้วยครีมมาแล้วหลายยี่ห้อ ใช้ครีมกันแดด SPF
                        สูง PA+++ มาแล้วมากมาย แต่ปัญหาฝ้า กระ ก็ยังไม่หายไป และปล่อยไว้นานเข้า
                        ผิวหน้ากลับยิ่งแย่กว่าเดิม เพราะสีผิวที่ไม่สม่ำเสมอ มีรอยปื้น
                        หรือจุดสีเข้มที่ปรากฎให้เห็นบนใบหน้าอย่างชัดเจน
                        ทำให้หลายคนสูญเสียความมั่นใจกับเรื่องปัญหาความหมองคล้ำบนใบหน้ามากยิ่งขึ้น จนไม่รู้ว่าปัญหาฝ้า
                        กระ จะรักษาอย่างไร? รักษาแล้วหายขาดมั้ย? หรือต้องรักษานานแค่ไหน?
                        ทั้งนี้เราต้องเข้าใจถึงต้นเหตุของปัญหาเสียก่อน

                        สาเหตุของฝ้า กระ อาจเกิดจากการได้รับรังสี UV จากแสงแดดมากเกินไป,
                        การแพ้สารเคมีบางชนิดจากเครื่องสำอาง, การเปลี่ยนแปลงของฮอร์โมน หรืออาจเกิดจากความเครียด
                        และการพักผ่อนไม่เพียงพอ ฯลฯ ปัจจัยดังกล่าวข้างต้นสามารถกระตุ้นให้เกิดฝ้า กระ จุดด่างดำ
                        ได้ซึ่งเกิดได้ทั้งหญิงและชายในทุกช่วงวัย และแตกต่างกันไปตามการใช้ชีวิตประจำวันของแต่ละคน
                        ที่จริงแล้วปัญหา ฝ้า กระ ไม่ว่าจะประเภทไหนก็สามารถรักษาให้ดีขึ้นได้โดยการรักษาให้ตรงจุด
                        แก้ที่ต้นเหตุของปัญหา และรักษาตามสภาพผิวของแต่ละบุคคล
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="services-list-3" id="list-3">

        <div class="detail-content">
            <div class="content">
                <div class="title-content">
                    <p>หัตถการความงาม</p>
                </div>
                <div class="text-detail">
                    <p id="text-list-3">
                        Clinic Laser เป็นคลินิกเวชกรรมความงามที่ดูแลทุกปัญหาผิวหน้าอย่างตรงจุด โดยหมอหนึ่ง
                        อายุรแพทย์ผู้ชำนาญการด้านผิวหนังที่มีประสบการณ์มาอย่างยาวนาน
                        ดูแลคนไข้ที่มีปัญหาด้านผิวหนังหลากหลายรูปแบบ
                        และเป็นผู้คัดสรรวิธีการรักษาพร้อมด้วยเทคโนโลยีที่ได้รับมาตรฐานทางการแพทย์ด้วยตนเองทั้งหมด
                        โดยมีเป้าหมายที่สำคัญคือการให้บริการตามมาตรฐานวิชาชีพ เน้นถึงปัญหาของผู้รับบริการเป็นสำคัญ
                        เพื่อตอบโจทย์ทุกความต้องการของผู้รับบริการเฉพาะบุคคล ทำให้เห็นผลลัพธ์ได้อย่างชัดเจน
                        ในราคาที่เข้าถึงได้
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="services-list-4" id="list-4">

        <div class="detail-content">
            <div class="content">
                <div class="title-content">
                    <p>บริการความงามที่น่าสนใจ</p>
                </div>
                <div class="text-detail">
                    <p id="text-list-4">
                        1. ปัญหารูขุมขนกว้าง มีหลุมสิว ใบหน้าดูหยาบกร้าน มีฝ้า มีกระ ใบหน้าดูหมองคล้ำ ไม่สดใส <br>
                        2. ปัญหาไฝ ขี้แมลงวัน ต่อมไขมันโต สิวหิน สิวข้าวสาร กระเนื้อ ต้องการเลเซอร์ออก <br>
                        3. ปัญหาแผลเป็น เช่น แผลเป็นนูน หรือ หลุมสิว เป็นต้น <br>
                        4. ปัญหาริ้วรอยเหี่ยวย่นบนใบหน้า ทำให้หน้าดูแก่ก่อนวัย <br>
                        5. ปัญหาใบหน้าหย่อนคล้อย มีไขมันส่วนเกิน มีเหนียงเห็นเป็นคางสองชั้น <br>
                        6. ปัญหากับขน หนวด เครา บริเวณใบหน้าที่ต้องการกำจัด <br>
                        7. ปัญหารอยสัก ที่ต้องการเลเซอร์ออก หรือทำให้จางลง <br>
                        8. ปัญหาผมร่วงบาง จนเห็นหนังศีรษะชัดเจน <br>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <footer class="site-footer" id="Contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">
                        <i>วันจันทร์</i> 12.00 - 20.00 น. <br>
                        <i>วันอังคาร</i> 12.00 - 20.00 น. <br>
                        <i>วันพุธ</i> ปิดทำการ <br>
                        <i>วันพฤหัสบดี</i> 12.00 - 20.00 น. <br>
                        <i>วันศุกร์</i> 12.00 - 20.00 น. <br>
                        <i>วันเสาร์/วันอาทิตย์</i> 11.00 - 19.00 น. <br>
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Contact</h6>
                    <ul class="footer-links">
                        <li><a href="">Phone</a></li>
                        <li><a href="">Address</a></li>
                        <li><a href="">Email</a></li>
                        <li><a href="">Line</a></li>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Menu</h6>
                    <ul class="footer-links">
                        <li><a href="#Container">Home</a></li>
                        <li><a href="#Services">Services</a></li>
                        <li><a href="#Product">Package</a></li>
                        <li><a href="#Reviews">Reviews</a></li>
                        <li><a href="#Doctors">Doctors</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                        <a href="#">Laser Clinic</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>