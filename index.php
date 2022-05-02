<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="theme-color" content="#CB567C">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#CB567C">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#CB567C">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>foodina</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./file/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./file/css/home.css" />
    <link rel="stylesheet" type="text/css" href="./file/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./file/css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="./file/css/bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="./file/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./file/css/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./file/fonts/fa/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./file/fonts/iconfont/material-icons.css">
    <link rel="stylesheet" href="./file/css/swiper.min.css">
	<link rel="stylesheet" href="./file/fonts/iransans/css/fontiran.css">
</head>

<body>
    <header>
        <nav>
            <div class="mynav" id="navigation-menu">
                <div class="container">
                    <div class="navbar navbar-expand-lg navbar-light justify-content-between">
                        <div class="collapse navbar-collapse ">
                            <ul class="navbar-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="javascript:void(0);"> فودینا صفحه نخست </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./menu"> منو </a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo">
                            <a href="#">
                                <img src="./file/img/logo.png" alt="foodina">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="HomeSlider HomeScrooller" id="Home">
        <div class="swiper-container homeswiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./file/img/152666466022438.jpg" class="swiper-lazy">
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                </div>
                <div class="swiper-slide">
                    <img src="./file/img/152666474641577.jpg" class="swiper-lazy">
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                </div>
                <div class="swiper-slide">
                    <img src="./file/img/152666496077657.jpg" class="swiper-lazy">
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- <div class="customNP">
            <button class="right">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="left">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div> -->
        <div class="OSliderContent">
            <h1 class="title">سفارش آنلاین غذا فودینا</h1>
            <p class="desc"> بهترین کیفیت در سریع ترین زمان</p>
            <div class="btns mt-4">
                <a href="./menu" class="menu">
                    <span> سفارش از منو </span>
                </a>
            </div>
        </div>
        <div class="bilakTop">
            <img src="./file/img/sliderDown.png">
        </div>
    </div>
    <div class="HomeAbout">
         <div class="container">
            <h1 class="abouttitle text-center mb-4 ">
                به
                <strong> فودینا</strong> خوش آمدید
            </h1>
            <p class="aboutdesk text-center">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان
                امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
        </div>

    </div>
    <div class="bestday">
        <h3 class="title text-center"> غذا های مخصوص امروز </h3>
        <div class="swiper-container BestDayFood">
            <div class="swiper-wrapper">
				<?php
				$foods = [];
				array_push($foods, (object)[
					'name' => 'کباب کوبیده',
					'price' => '32,000',
				]);
				array_push($foods, (object)[
					'name' => 'خوراک جوجه',
					'price' => '23,000',
				]);
				array_push($foods, (object)[
					'name' => 'خوراک کوبیده',
					'price' => '25,000',
				]);
				array_push($foods, (object)[
					'name' => 'لوبیا پلو',
					'price' => '25,000',
				]);
				array_push($foods, (object)[
					'name' => 'خورشت بادمجان',
					'price' => '25,000',
				]);
				foreach ($foods as $key => $value) { ?>
					 <div class="swiper-slide">
                    <div class="Cart">
                        <div class="img">
                            <img src="./file/img/152666466022438.jpg" alt="">
                        </div>
                        <p class="cartTitle">
                            <?php echo $value->name ?>
                        </p>
						<div class="cartPrice text-center">
							<?php echo $value->price ?> تومان
						</div>
                        <div class="BTNS text-center">
                            <button class="mybtns yellow">
								<span> افزودن به سبد خرید </span>
							</button>

                        </div>
                    </div>
                </div>
				<?php } ?>
               
            </div>
        </div>
    </div>
    <div class="homeapp">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="appinfo d-flex">
                        <div class="d-flex flex-row">
                            <img src="./file/img/Appicon.svg" alt="Appicon">
                            <div class="info mr-2">
                                <h2> اپلیکیشن فودینا </h2>
                                <p>نسخه اندروید و IOS</p>
                            </div>
                        </div>
                    </div>
                    <div class="AboutApp">
					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
                    </div>
                    <div class="DlApp">
                        <p class="title text-center android">
                            <i class="fab fa-android"></i> دریافت نسخه اندروید
                        </p>
                        <div class="d-flex androiddl">
                            <a href="#">
                                <img src="./file/img/Googleplay.png"> </a>
                        </div>
                        <hr>
                        <p class="title text-center IOS">
                            <i class="fab fa-apple"></i> دریافت نسخه IOS
                        </p>
                        <div class="d-flex androiddl">
                            <a href="#">
                                <img src="./file/img/appleStore.png"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="appimg">
                        <img src="./file/img/Appimg.png" alt="application">
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="WhyChooseUs">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item1 text-center p-2">
                        <img src="./file/img/icon1.svg" alt="">
                        <p class="text-center"> کیفیت عالی </p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item1 text-center p-2">
                        <img src="./file/img/icon2.svg" alt="">
                        <p class="text-center">ارسال سریع</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item1 text-center p-2">
                        <img src="./file/img/icon3.svg" alt="">
                        <p class="text-center"> تجهیزات به روز </p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item1 text-center p-2">
                        <img src="./file/img/icon4.svg" alt="">
                        <p class="text-center">تیم متخصص</p>

                    </div>
                </div>


            </div>

        </div>

    </div>
    <footer>
        <div class="footer">
            <div class="footerasli">
                <div class="container">
                    <div class="logofooter text-center">
                        <img src="./file/img/footerLogo.svg">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="footertitle text-center font-weight-bold"> تماس با ما </h4>
                                <p class="footerdesk"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و</p>
                                <p class="num"> شماره تماس :
                                    <a class="text-left" href="tel:071-1234567">071-1234567</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="footertitle text-center font-weight-bold"> لینک های مفید</h4>
                                <div class="row text-center links">
                                    <div class="col-md-6 ">
                                        <a class="d-block mb-3" href="#">تماس با ما</a>
                                        <a class="d-block mb-3" href="#">منو</a>
                                    </div>
                                    <div class="col-md-6 d-block">
                                        <a class="d-block mb-3" href="#">منطقه تحت پوشش</a>
                                        <a class="d-block mb-3" href="#">درباره ما</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4 class="footertitle text-center font-weight-bold"> ما را در شبکه های اجتماعی دنبال کنید</h4>
                                <div class="SocialNetwork text-center">
                                    <ul class=" d-inline text-center p-0 ">
                                        <li class="d-inline pl-2 pr-1">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline pl-2 pr-1">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline pl-2 pr-1">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline pl-2 pr-1">
                                            <a href="#">
                                                <i class="fab fa-telegram-plane"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="powerby text-center">
                <p class="text-center">
                    تمامی حقوق مادی و معنوی برای
                    <span>
                        <a href="#"> فودینا </a>
                    </span> محفوظ میباشد. طراحی و توسعه توسط
                    <span>
                        <a href="https://www.linkedin.com/in/mohammadkarimi99/" target="_blank" class="copyright">محمد کریمی</a>
                    </span>
                </p>

            </div>
        </div>
    </footer>


    <script src="./file/js/bootstrap/bootstrap.min.js"></script>
    <script src="./file/js/jquery.min.js"></script>
    <script src="./file/js/home.js"></script>
    <script src="./file/js/swiper.min.js"></script>
    <script src="./file/js/jquery.min.js"></script>
</body>

</html>