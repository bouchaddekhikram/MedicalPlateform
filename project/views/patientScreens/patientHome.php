


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="..\..\css\homeStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<header>

    <div class="mainheader">

        <div class="logo">
            <img src="../../img/profileAvatar.svg">


            <div class="dropdown">
                <div class="menubtn">
                    <button> Profile</button>
                </div>
                <div class="dropdown-options">
                    <a href="../commun_Screens/settingProfile.php">Setting</a>
                    <a href="../commun_Screens/authentication/signIn.php">Logout</a>
                </div>
            </div>
        </div>
        <nav>
            <a href="#">home</a>
            <a href="doctorsList.php">Doctors</a>
            <a href="#">Medical folder</a>
            <a href="#contactUs">contact</a>
        </nav>

        <div class="menubtn">
            <button> HelpLine</button>
        </div>



    </div>

    <!--   DONATION FOR SUPPORT:    PhonePay = vinodbahadur@ybl      GooglePay: vbthapa55@oksbi
     Believe me, all this money will be used to make more quality videos and to make my channel grow. So that I can always provide you awesome free videos :) -->

    <main>
        <section class="left-sec">
            <h2> We Are Here For Your Care</h2>
            <h1>  We are The Best Doctors</h1>
            <p>We are here for your care 24/7. Any help just call us.</p>
            <button>
                Make an appointment
            </button>
        </section>

        <section class="right-sec">
            <figure>
                <img src="../../img/homebg.svg">
            </figure>
        </section>
    </main>
</header>




<!--footer Section : Contact Us-->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">

                <a id="contactUs"> <h1 class="adderss_text">Contact Us</h1></a>
                <div class="map_icon"><img src="../../img/map-icon.png"><span class="paddlin_left_0">Page when looking at its</span></div>
                <div class="map_icon"><img src="../../img/call-icon.png"><span class="paddlin_left_0">+216 22 222 222</span></div>
                <div class="map_icon"><img src="../../img/mail-icon.png"><span class="paddlin_left_0">doctors@gmail.com</span></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="adderss_text">Doctors</h1>
                <div class="hiphop_text_1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="adderss_text">Useful Links</h1>
                <div class="Useful_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered ,</div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="adderss_text">Newsletter</h1>
                <input type="text" class="Enter_text" placeholder="Enter your Email" name="Enter your Eamil">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="../../img/fb-icon.png"></a></li>
                        <li><a href="#"><img src="../../img/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="../../img/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="../../img/instagram-icon.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>