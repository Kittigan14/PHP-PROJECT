<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/index.css">
    <script src="../Script/open_popup.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <title>Home Page</title>
</head>

<style>
    .message button {
        outline: none;
        border: none;
        background: none;
    }
</style>

<body>

    <div class="message">
        <button onclick='openFeedback()'>
            <img src="../Image/comment.png" alt="">
        </button>
    </div>

    <div class="navbar-container">

        <div class="navbar-logo">
            <img src="../Image/mediclinic.png" alt="Logo" width="64px">
        </div>

        <ul class="navbar-menu">
            <li><a href="#Container">Home</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Product">Package</a></li>
            <li><a href="#Reviews">Reviews</a></li>
            <li><a href="#Doctors">Doctors</a></li>
            <li><a href="#Contact">Contact</a></li>
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

        <div class="banner-title"> ความงามมาจากใจและเทคโนโลยีเลเซอร์ที่ทันสมัย <br>
            <button class="get-detail" onclick="location.href='./services.php'" >GET DETAIL</button>
        </div>

        <div class="box-content-list">

            <div class="box-content">
                คลินิกเลเซอร์ที่นี่เสนอบริการเทคโนโลยีเลเซอร์ทันสมัยสำหรับการดูแลผิวพรรณที่ปลอดภัยและมีประสิทธิภาพ
                ด้วยผู้เชี่ยวชาญทางการแพทย์และเทคโนโลยีที่ทันสมัย
                เรามุ่งมั่นในการให้บริการที่ทันสมัยเพื่อความสวยสุขภาพของผิวคุณ
            </div>

            <div class="box-line"></div>

            <div class="box-content-image">
                <div class="image-laser">
                    <p>Before</p>
                </div>
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

        <div class="form-popup" id="feedback">
            <form action="../Php/feedback_customer.php" method="post" class="form-container">
                <h1>Feedback</h1>
                
                <?php
                
                    if (isset($_SESSION['fname'])) {
                        $fname = $_SESSION['fname'];
                        echo "<input type='hidden' name='customer_name' value='$fname' required></button> ";
                        echo "<label for='feedback'> Comment </label>";
                        echo "<input type='text' name='feedback' id='message' required>";
                    } else {
                        echo "Customer Name not found";
                    }
                ?>
    
                <input type="submit" name="submit_feedback" value="Comment" class="btn"></input>
                <input type="submit" name="close" value="Close" onclick="closeFeedback()" class="btn cancel"></input>
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

                <label for="phone"> Phone </label> <br>
                <input type="text" placeholder="Enter Phone" name="phone" min="1" maxlength="10" required> <br>

                <label for="address"> Address </label>
                <input type="text" placeholder="Enter your Address" name="address" id="address" required>

                <label for="psw"> Password </label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <input type="submit" name="signup" value="Sign up" class="btn"></input>
                <input type="submit" name="close" value="Close" onclick="closeSignup()" class="btn cancel"></input>
            </form>
        </div>
    </div>

    <div class="explain-container" id="Services">

        <div class="explain-content">

            <div class="explain-title">
                <span>Services</span><br>
                <div class="line-span"></div>
                <b>บริการของเรา</b>
                <p>ไม่ว่าจะเป็นเรื่องโรคผิวหนัง ทรีทเม้นท์บำรุงผิว<br>หรือหัตถกรรมความงามต่างๆ เรายินดีให้คำปรึกษา <br>
                    และพร้อมให้ความดูแลคุณ</p>
            </div>

            <div class="explain-banner">
                <div class="explain-list">
                    <div class="img-list-banner">
                        <img src="../Image/tighten-skin.png" alt="" width="64px" height="64px">
                    </div>
                    <h1>รักษาสิว</h1>
                    <p>รอยสิว และ หลุมสิว</p>
                    <button>
                        <a href="./services.php#list-1"> View </a>
                    </button>
                </div>
                <div class="explain-list">
                    <div class="img-list-banner">
                        <img src="../Image/pores.png" alt="" width="64px" height="64px">
                    </div>
                    <h1>รักษาฝ้า</h1>
                    <p>กระ และ จุดด่างดำ</p>
                    <button>
                        <a href="./services.php#list-2"> View </a>
                    </button>
                </div>
                <div class="explain-list">
                    <div class="img-list-banner">
                        <img src="../Image/laser.png" alt="" width="64px" height="64px">
                    </div>
                    <h1>หัตถการความงาม</h1>
                    <p>ใฝ ขี้แมลงวัน</p>
                    <button>
                        <a href="./services.php#list-3"> View </a>
                    </button>
                </div>
                <div class="explain-list">
                    <div class="img-list-banner">
                        <img src="../Image/anti-age.png" alt="" width="64px" height="64px">
                    </div>
                    <h1>บริการอื่น ๆ</h1>
                    <p>บริการความงามที่น่าสนใจ</p>
                    <button>
                        <a href="./services.php#list-4"> View </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="Product-container" id="Product">
        <div class="product-content">

            <div class="product-title">
                <span>Package</span>
                <div class="line-product"></div>
                <p>แพ็คเกจ</p>
                <button class="get-detail">
                    <a href="./package.php">
                        GET DETAIL
                    </a>
                </button>
            </div>

            <div class="product-list-container">
                <div class="product-list">
                    <div class="image-product">
                        <img src="../Image/Product/1.png" alt="" width="320px">
                    </div> <br>
                    <span>เลเซอร์กำจัด ขน</span>
                    <p>เราเลือกใช้เลเซอร์กำจัดขนรุ่นใหม่ล่าสุดจากอเมริกา <br> ลงลึก
                        จับเส้นขนได้อย่างแม่นยำ</p>
                    <button class="get-detail" onclick="location.href='./package.php'">GET DETAIL</button>
                </div>
                <div class="product-list">
                    <div class="image-product">
                        <img src="../Image/Product/2.png" alt="" width="320px">
                    </div> <br>
                    <span>เลเซอร์กำจัด รักแร้</span>
                    <p>การกำจัดขนรักแร้ด้วยการยิงพลังงานจากคลื่นแสงเลเซอร์ ลดการเกิดใหม่ของเส้นขน</p>
                    <button class="get-detail" onclick="location.href='./package.php'">GET DETAIL</button>
                </div>
                <div class="product-list">
                    <div class="image-product">
                        <img src="../Image/Product/3.png" alt="" width="320px">
                    </div> <br>
                    <span>เลเซอร์กำจัด ฝ้า</span>
                    <p>การใช้พลังงานแสงยิ่งไปที่ผิวหนังบริเวณเป้าหมาย <br> เพื่อช่วยกระตุ้นให้คอลลาเจนผลิตเซลล์ใหม่ๆ</p>
                    <button class="get-detail" onclick="location.href='./package.php'">GET DETAIL</button>
                </div>
            </div>

        </div>
    </div>

    <div class="Reviews-container" id="Reviews">

        <div class="reviews-title">
            <span>Customer reviews</span>
            <p>ลูกค้าพูดถึงเรายังไง</p>
        </div>

        <div class="comment-container">
            <div class="reviews-content">
                <div class="comment">
                    <span>ผมมีปัญหาเรื่องสิวที่หลัง ไปรักษาที่คลินิกชื่อดังเป็นปีก็ไม่หาย
                        สุดท้ายผมมารักษากับหมอหนึ่งแล้วอาการดีขึ้นตั้งแต่ครั้งแรก จนตอนนี้หายดีแล้ว
                        เสียดายที่ไม่ได้มาที่ Clinic Laser ก่อนหน้านี้</span>
                </div>
                <div class="user-comment">
                    <img src="../Image/user.png" alt="">
                    <p>User</p>
                </div>
            </div>
            <div class="reviews-content">
                <div class="comment">
                    <span>น้องสาวเป็นคนแนะนำให้มารักษา คุณหมอแนะนำเป็นกันเอง อาการฝ้าที่มารักษาก็จางลงอย่างเห็นได้ชัด
                        ประทับใจคนที่คลินิก เพราะว่าทุกคนน่ารัก เป็นกันเอง ใครสนใจ ไม่ต้องลังเล มาที่นี่ได้เลย</span>
                </div>
                <div class="user-comment">
                    <img src="../Image/user.png" alt="">
                    <p>User</p>
                </div>
            </div>
            <div class="reviews-content">
                <div class="comment">
                    <span>ผมมีปัญหาเรื่องสิวที่หลัง ไปรักษาที่คลินิกชื่อดังเป็นปีก็ไม่หาย
                        สุดท้ายผมมารักษากับหมอหนึ่งแล้วอาการดีขึ้นตั้งแต่ครั้งแรก จนตอนนี้หายดีแล้ว
                        เสียดายที่ไม่ได้มาที่ Clinic Laser ก่อนหน้านี้</span>
                </div>
                <div class="user-comment">
                    <img src="../Image/user.png" alt="">
                    <p>User</p>
                </div>
            </div>
            <div class="reviews-content">
                <div class="comment">
                    <span>มารักษาสิว Acne Clear Laser Program ค่ะ แต่ก่อนมีสิว มีรอยสิว และหน้ามัน หลังการรักษา
                        สิวแทบไม่ขึ้นเลย ความมันบนใบหน้าก็ลดลง แค่ครั้งที่ 2 ที่มาหาคลินิก สิวก็ลดน้อยลงกว่า 50%
                        แล้ว</span>
                </div>
                <div class="user-comment">
                    <img src="../Image/user.png" alt="">
                    <p>User</p>
                </div>
            </div>
        </div>
    </div>

    <div class="Doctor-container" id="Doctors">

        <div class="Doctor-title">
            <h1> Doctor </h1>
            <p>แพทย์ผู้ดูแล</p>
        </div>

        <div class="doctor-content">
            <div class="doctor-list">
                <img src="../Image/Doctor-1.jpg" alt="">
                <span>Alexander</span>
                <p>Doctor</p>
            </div>
            <div class="doctor-list">
                <img src="../Image/Doctor-2.jpg" alt="">
                <span>Olivia</span>
                <p>Doctor</p>
            </div>
            <div class="doctor-list">
                <img src="../Image/Doctor-3.jpg" alt="">
                <span>Sophia</span>
                <p>Doctor</p>
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