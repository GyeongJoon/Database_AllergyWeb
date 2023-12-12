<?php 
$con = mysqli_connect("localhost", "korea", "1234", "allergy");
$c2_d = $_POST["c2"];
$sql = "SELECT distinct AllergyTypes.AllergyTypeName
        FROM Foods, Users, AllergyTypes, Allergy_Food, User_Allergy
        WHERE Users.UserID = User_Allergy.UserID
        AND User_Allergy.AllergyTypeID = AllergyTypes.AllergyTypeID
        AND User_Allergy.UserAllergyID = Allergy_Food.UserAllergyID
        AND Allergy_Food.FoodID = Foods.FoodID
        AND Users.Name LIKE '%$c2_d'";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>검색 결과</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
    h3 {
        margin-top: 100px;
        font-size: 50px; /* 글씨 크기 조절 */
        font-weight: bold; /* 굵게 설정 */
        background: linear-gradient(to right top, #ff9f31, #ff7f00);
        color: transparent;
        -webkit-background-clip: text;
    }

    table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    th,td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 12px;
        font-size: 20px;
    }

    th {
        background-color: #f2f2f2;
        font-size: 30px; /* 헤더 글씨 크기 조절 */
    }
</style>
    </style>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h4>DataBase<img src="assets/images/logo-icon.png" alt=""></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li>
                            <li class="scroll-to-section"><a href="#features">Allergy features</a></li>
                            <!--  <li class="scroll-to-section"><div class="main-blue-button"><a href="#contact">비어있음!!</a></div></li> 
           -->
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <!--이름 검색-->
                                    <div class="main-content">
                                        <section class="page-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <h3><?php echo $c2_d;?>의 알레르기 유형</h3>
                                                        <table>
                                                            <tr>
                                                                <th>알레르기 유형</th>
                                                            </tr>
                                                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                                            <tr>
                                                                <td><?php echo $row['AllergyTypeName']; ?></td>
                                                            </tr>
                                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/banner-right-image.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.html" class="logo">
                            <h4>DataBase<img src="assets/images/logo-icon.png" alt=""></h4>
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html#top">HOME</a></li>
                            <li class="scroll-to-section"><a href="index.html#features">Allergy features</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->


    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2021 SEO Dream Co., Ltd. All Rights Reserved.
                        <br>Web Designed by <a rel="nofollow" href="https://templatemo.com"
                            title="free CSS templates">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>