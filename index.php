
<!DOCTYPE HTML>
<html>
<head>
    <title>Hospital Management System</title>
    <link href="css/mystyle.css" rel="stylesheet" type="text/css"  media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>

    <script>
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                maxwidth: 1900,
                speed: 600
            });
        });
    </script>
</head>
<body>
<div class="header">
    <div class="wrap">
        <!--start-logo-->
        <div class="logo">
            <a href="index.php" style="font-size: 30px;">Nile Hospital Management system</a>
        </div>
        <!--end-logo-->
        <!--start-top-nav-->
        <div class="top-nav">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>

                <li><a href="contact.php">contact</a></li>
            </ul>
        </div>
        <div class="clear"> </div>
        <!--end-top-nav-->
    </div>
    <!--end-header-->
</div>
<div class="clear"> </div>
<!--start-image-slider---->
<div >
    <!-- Slideshow 1 -->
    <ul class=" section" id="slider1">
        <li><img src="pi/slidetwo.jpg" alt="" ></li>
        <li><img src="pi/slideone.jpg" alt="" ></li>
        <li><img src="pi/slidethree.jpg" alt=""></li>
    </ul>
    <!-- Slideshow 2 -->
</div>
<!--End-image-slider---->
<div class="clear"> </div>
<div class="content-grids">
    <div class="wrap">
        <div class="section group">


            <div class="listview_1_of_3 images_1_of_3">
                <div class="listimg listimg_1_of_2">
                    <img src="pi/grid-img3.png">
                </div>
                <div class="text list_1_of_2">
                    <h3>Patients</h3>
                    <p>Register & Book Appointment</p>
                    <div class="button"><span><a href="user-login.php">Click Here</a></span></div>
                </div>
            </div>

            <div class="listview_1_of_3 images_1_of_3">
                <div class="listimg listimg_1_of_2">
                    <img src="pi/grid-img1.png">
                </div>
                <div class="text list_1_of_2">
                    <h3>Doctors Login</h3>

                    <div class="button"><span><a href="doctor-login.php">Click Here</a></span></div>
                </div>
            </div>


            <div class="listview_1_of_3 images_1_of_3">
                <div class="listimg listimg_1_of_2">
                    <img src="pi/grid-img2.png">
                </div>
                <div class="text list_1_of_2">
                    <h3>Admin Login</h3>

                    <div class="button"><span><a href="admin-login.php">Click Here</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="content-box">
        <div class="section group">
            <div class="col_1_of_3 span_1_of_3 frist">

            </div>
            <div class="col_1_of_3 span_1_of_3 second">

            </div>
            <div class="col_1_of_3 span_1_of_3 frist">


            </div>
        </div>
    </div>
</div>
<div class="clear"> </div>
<div class="footer">
    <div class="wrap">
        <div class="footer-left">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </div>

        <div class="clear"> </div>
    </div>
</div>
<!--end-wrap-->
</body>
</html>

