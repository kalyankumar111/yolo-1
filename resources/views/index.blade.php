<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yolo Studio - Photography & Design Studio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Fav.ico">
    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Icon Font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/et-line.css">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <style>
        body {
            scroll-behavior: smooth !important;
        }

        .img-height {
            height: 120px;
        }

        @media (min-width: 768px) {
            .img-height {
                height: 80px;
            }


        }

        @media (max-width: 500px) {
            .img-height {
                width: 100%;
                height: 40px;
                padding: 3px;
                object-fit: cover;
            }

            .res-height {
                max-height: 235px !important;
                height: 400px;
                object-fit: cover;
            }

            .txt-show {
                display: block;
            }

            .mainbanner {
                top: 70px !important;
            }

            .fs-1 {
                font-size: 1rem !important;
            }

            .lh {
                line-height: 10px !important
            }

            .depth {
                left: -22px !important;
            }


            /* .depth>.lh>.mt-4 {
                margin: 0 !important;
            } */
        }

        input[type="number"] {
            background-color: #100f3c !important;
            border: 1px solid #23233a !important;

            border-radius: 5px !important;

            color: #a5a5a5 !important;

            display: block !important;

            font-size: 13px !important;

            height: 44px;
            line-height: 24px;
            margin-bottom: 18px;
            padding: 9px 20px;
            width: 100%;
        }


        .bg-yellow:hover {
            background-color: #fbb03b !important;
            color: black !important;
        }

    </style>
    <!--Creative Header-->
    <div class="cr-header-section header-section header-transparent header-sticky section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <!--Logo-->
                    <div class="float-left">
                        <a href="/" class="header-logo">
                            <img src="img/img/YoloLogoFinalcopy.png" class="img-height" style="object-fit: cover" alt=""></a>


                    </div>
                </div>
                <!--Menu Toggle-->
                <div class="col-auto">
                    <button class="menu-toggle text-white"><i class="ion-android-menu"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!--Creative Menu-->
    <div class="cr-menu-section menu-section">
        <div class="container">
            <nav class="cr-menu one-page-menu">
                <ul>
                    <li class="active"><a href="#cr-home">home</a></li>
                    <li><a href="#cr-about">about</a></li>
                    <li><a href="#cr-portfolio">portfolio</a></li>
                    <li><a href="#cr-service">services</a></li>
                    <li><a href="#cr-testimonial">testimonial</a></li>
                    <li><a href="#cr-contact">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <style>
        .lh {
            line-height: 35px;
        }

    </style>
    <!--Creative Hero-->
    <!-- <div id="cr-home" class="cr-hero-section section parallax-window" data-parallax="scroll"  data-speed="0.5" data-image-src="img/creative/bg/hero.jpg">
    <div class="container">
        <div class="row">
            <!--Hero Content-->
    <!-- <div id="scene" class="cr-hero-content  text-center col-xs-12">
                <div data-depth="0.5" class="p">
                    <span class="fs-1 display-1 fw-bold text-white mb-5 pb-5">
                        <p class="lh">Photography</p>

                        <p class="lh mt-4">&</p>

                       <p class="lh">Design Studio&nbsp;</p></span >

                  <p class="my-5"> <a href="#cr-about" class="btn btn-border-white btn-hover-cr" data-scroll>Let's Begin</a> </p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div> -->


    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators ">
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="3"></li>
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="4"></li>
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="5"></li>
            <li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="6"></li>

            <!--<li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="7"></li>-->
            <!--<li style="width:15px" data-bs-target="#carouselId" data-bs-slide-to="8"></li>-->



        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <!--<img class="res-height vh-100 w-100" src="img/creative/bg/hero.jpg" class="vh-100 w-100" alt="First slide">-->
                <img class="res-height vh-100 w-100" src="img/img/DSC04613.jpg" class="vh-100 w-100" alt="First slide" style="object-fit:cover">
                <div class="carousel-caption ">
                    <div class="container position-relative mainbanner" style="top: -200px;">
                        <div class="row">
                            <!--Hero Content-->
                            <div id="scene" class="cr-hero-content  text-center col-xs-12">
                                <div data-depth="0.5" class="depth">
                                    <span class="fs-1 display-1 fw-bold text-white mb-5 pb-5">
                                        <p class="lh">Photography</p>

                                        <p class="lh mt-lg-4">&</p>

                                        <p class="lh">Design Studio&nbsp;</p>
                                    </span>

                                    <p class="mt-3 my-lg-5"> <a href="#cr-contact" class="btn btn-border-white btn-hover-cr" data-scroll>Let's go</a> </p>


                                    <p>&nbsp;</p>
                                </div>
                            </div>

                            <div id="scene" class=" text-center col-xs-12 txt-show" hidden>
                                <div data-depth="0.5">
                                    <span class="fs-5 display- fw-bold text-white mb-5 pb-5">
                                        <p class="lh">Photography</p>

                                        <p class="lh mt-4">&</p>

                                        <p class="lh">Design Studio&nbsp;</p>
                                    </span>

                                    <p class="my-5"> <a href="#cr-contact" class="btn btn-border-white btn-hover-cr" data-scroll>Let's Begin</a> </p>


                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="res-height vh-100 w-100" src="img/creative/bg/hero-3.jpg" class="vh-100  w-100" style="object-fit: cover" alt="First slide">

                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item ">
                <img class="res-height vh-100 w-100" src="img/creative/bg/hero-1.jpg" style="object-fit: cover" style="object-fit: cover" class="vh-100  w-100" alt="First slide">

                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <!--<div class="carousel-item ">-->
            <!--    <img class="res-height vh-100 w-100" src="img/img/hero-2.jpg" style="object-fit: cover" class="vh-100  w-100" alt="First slide">-->

            <!--    <div class="carousel-caption d-none d-md-block">-->

            <!--    </div>-->
            <!--</div>-->
            <div class="carousel-item ">
                <img class="res-height vh-100 w-100" src="img/creative/bg/hero-4.jpg" style="object-fit: cover" class="vh-100  w-100" alt="First slide">

                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>




            <!--<div class="carousel-item ">-->
            <!--    <img class="res-height vh-100 w-100" src="img/img/Banner-01.jpg" style="object-fit: cover" class="vh-100  w-100" alt="First slide">-->
            <!--    <div class="carousel-caption d-none d-md-block">-->

            <!--    </div>-->
            <!--</div>-->

            <div class="carousel-item ">
                <img class="res-height vh-100 w-100" src="img/img/Banner.jpg" style="object-fit: cover" class="vh-100  w-100" alt="First slide">

                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

            <div class="carousel-item ">
                {{-- <embed src="img/img/C0018.mp4" class="res-height vh-100 w-100"> --}}

                {{-- <div class="ratio ratio-16x9">
                    <iframe list src="img/img/C0018.mp4" title="YouTube video" repeat></iframe>

                </div> --}}

                <img class="res-height vh-100 w-100" src="img/img/DSC07308_ED_1.jpg" style="object-fit: cover" class="vh-100  w-100" alt="First slide">

                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item ">
                <img class="res-height vh-100 w-100 " src="img/img/Banner-06.jpg" style="object-fit: cover" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!--Creative About-->
    <div id="cr-about" class="cr-about-section section parallax-window pt-150 pb-110" data-parallax="scroll" data-speed="0.5" data-image-src="img/creative/bg/about.jpg">
        <div class="container">

            <!--Section Title-->
            <div class="row">
                <div class="cr-section-title text-center col-12 mb-100">
                    <h3>About Yolo</h3>
                    <p>Yolo, founded by a group of young enthusiastic photographers, is passionate about making your
                        timeless moments special. We document carefully every moment and emotion to weave a story that
                        you can revisit. Our crew tells the stories in a winsome manner with all the beautiful elements
                        included. Our portfolio will definitely show you how beautifully we capture that whirlwind of
                        emotions in the stillness of a photograph. You only live once, but If you do it right, once is
                        enough.<br>
                    </p>
                </div>
            </div>

            <div class="row flex-column flex-lg-row-reverse">

                <!--About Video-->
                <div class="col-lg-6 col-12 mb-40">

                    <div class="cr-about-video">
                        <img src="img/creative/about/1.jpg" alt="">
                        <a href="https://player.vimeo.com/video/607502514?h=76ab162e61" class="video-popup"><img src="img/creative/icon/play.png" alt=""></a>
                    </div>

                </div>

                <!--About Content-->
                <div class="col-lg-6 col-12 mb-40">

                    <div class="cr-about-content">
                        <p>We provide a range of design options that help you make your products more appealing. Our
                            videos keep your products in the limelight as we transform them into mesmerizing piece of
                            art. From simple photoshoots to aerial photography and campaign shoot, we can deliver stunning photos that make you stand out from your competitors.</p>
                        <p>&nbsp;</p>
                        <a href="#cr-contact" class="btn btn-cr btn-hover-border-cr" data-scroll>contact us</a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!--Creative Portfolio-->
    <div id="cr-portfolio" class="cr-portfolio-section section">
        <div class="container-fluid">
            <div class="row">

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/1.jpg" alt="">
                    <a href="img/creative/portfolio/big-1.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Campaign shoot</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/2.jpg" alt="">
                    <a href="img/creative/portfolio/big-2.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Photo Book design</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/3.jpg" alt="">
                    <a href="img/creative/portfolio/big-3.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Pre-Wedding</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/4.jpg" alt="">
                    <a href="img/creative/portfolio/big-4.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Jewellery Photography</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/5.jpg" alt="">
                    <a href="img/creative/portfolio/big-5.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Kids Photography</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/6.jpg" alt="">
                    <a href="img/creative/portfolio/big-6.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Pre-Wedding</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/7.jpg" alt="">
                    <a href="img/creative/portfolio/big-7.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Contact us for Safari</span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/8.jpg" alt="">
                    <a href="img/creative/portfolio/big-8.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Product Photography</span>
                    </a>
                </div>
                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/img/Gallery-07-1.jpg" class="object-responsive w-100 h-100" alt="" style="object-fit:cover">
                    <a href="img/img/Gallery-07.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Join Upcoming Safari</span>
                    </a>
                </div>

                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/pic.jpeg" class="object-responsive w-100 h-100" alt="" style="object-fit:cover" alt="">

                    <a href="img/creative/portfolio/pic.jpeg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Branding & UI Design
                        </span>
                    </a>
                </div>
                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/big3.jpg" alt="" class="object-responsive w-100 h-100" alt="" style="object-fit:cover">

                    <a href="img/creative/portfolio/big3.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Custom Illustrations
                        </span>
                    </a>
                </div>
                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/creative/portfolio/idly.jpg" alt="" class="object-responsive w-100 h-100" alt="" style="object-fit:cover">
                    <a href="img/creative/portfolio/idly.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Food Photography
                        </span>
                    </a>
                </div>



                <!--Single Portfolio-->
                {{-- <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/img/DSC08092-2.jpg" alt="">
                    <a href="img/img/DSC08092-2.jpg " class="cr-portfolio-content gallery-popup">


                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Birthday Photography
                        </span>
                    </a>
                </div> --}}

                <!--Single Portfolio-->

                <!--Single Portfolio-->
                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/img/Gallery-06-1.jpg" alt="">
                    <a href="img/img/Gallery-06.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Product Photography
                        </span>
                    </a>
                </div>

                <!--Single Portfolio-->

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/img/Gallery-03-01.jpg" alt="">
                    <a href="img/img/Gallery-03.jpg" class="cr-portfolio-content gallery-popup">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Event Photography
                        </span>
                    </a>
                </div>

                <!--Single Portfolio-->

                <!--Single Portfolio-->
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12">
                    <img src="img/img/Gallery-09-1.jpg" alt="">

                    <a href="img/img/Gallery-09.jpg" class="cr-portfolio-content gallery-popup">

                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">Event Photography
                        </span>
                    </a>
                </div>

                <!--Single Portfolio-->
                <?php
$test = [
    [
        "image"=>"img/img/WhiteGlow_SkinCream-1.jpg",
        "eventType"=>"Produt Photography",
        "css"=>"height:100%;object-fit:cover;transform:scale(1.3); margin-top: -20px;"
        ],
          [
        "image"=>"img/img/DSC00485.jpg",
        "eventType"=>"Event Photography",
        "css"=>"height:100%;object-fit:cover"
        ],
          [
        "image"=>"img/img/DSC01375.jpg",
        "eventType"=>"Event Photography",
        "css"=>"height:100%;object-fit:cover"
        ],
         [
        "image"=>"img/img/DSC04613.jpg",
        "eventType"=>"Event Photography",
        "css"=>"height:100%;object-fit:cover"
        ],
          [
        "image"=>"img/img/DSC00653-3 copy.jpg",
        "eventType"=>"Fashion & Portfolio",
        "css"=>"height:100%;object-fit:cover;object-position: 20%;"
        ],
          [
        "image"=>"img/img/FacialKit-1.jpg",
        "eventType"=>"Product Photography",
        "css"=>"height:100%;object-fit:cover;object-position: 38%;"

        ],
           [
        "image"=>"img/img/Gallery-09.jpg",
        "eventType"=>"Event Photography",
        "css"=>"height:100%;object-fit:cover"
        ],
           [
        "image"=>"img/img/DSC00403_ED.jpg",
        "eventType"=>"Event Photography",
        "css"=>"height:100%;object-fit:cover"
        ],
        [
        "image"=>"img/img/KidsPortfolio.jpg",
        "eventType"=>"Event Photography",
        "css"=>"height:100%;object-fit:cover"
         ],
            [
            "image"=>"img/img/DSC00673copy.jpg",
            "eventType"=>"Product & Event",
            "css"=>"height:100%;object-fit:cover"
            ],
             [
             "image"=>"img/img/WeddingPhotography.jpg",
             "eventType"=>"Wedding Photography",
             "css"=>"height:100%;object-fit:cover;object-position: center 75%;"

            ],
              [
              "image"=>"img/img/Raahi.jpg",

              "eventType"=>"Event Photography",
              "css"=>"height:100%;object-fit:cover;object-position: center 75%;"

            ],
                [
                "image"=>"img/img/Birthday.jpg",

                "eventType"=>"Birthday Photography",
                "css"=>"height:100%;object-fit:cover;object-position: center 75%;"

                ]




    ]
?>

                @forelse($test as $t)
                <div class="cr-isotop-item col-xl-3 col-lg-4 col-md-6 col-12" style="height:457px">
                    <img src="{{$t['image']}}" alt="" style="{{$t['css']}}">

                    <a href="{{$t['image']}}" class="cr-portfolio-content gallery-popup">

                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="text">{{$t['eventType']}}
                        </span>
                    </a>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div class="text-center" style="background-color:#060c2f">
        <a href="#cr-contact" class=" my-5 btn btn-cr btn-hover-border-cr" data-scroll>contact us</a>
    </div>
    <!--Creative Service-->
    <div id="cr-service" class="cr-service-section section parallax-window pt-150 pb-50 " data-parallax="scroll" data-speed="0.5" data-image-src="img/creative/bg/service.jpg">
        <div class="container">

            <!--Section Title-->
            <div class="row">
                <div class="cr-section-title text-center col-xs-12 mb-100">
                    <h3>What We do</h3>
                    <p>Immersing in your business with a structured approach,&nbsp;Research &amp; understanding the
                        audience.&nbsp;Bringing Creative Design &amp; applying it to Strategic Landscape. Expertise
                        i<br>
                        &nbsp;e -commerce and product photography.</p>
                </div>
            </div>

            <div class="row">

                <!--Single Service-->
                <div class="cr-single-service col-lg-4 col-md-6 col-12 mb-100">
                    <i class="icon-camera"></i>
                    <h3>Photography</h3>
                    <p>What words cannot sell , our pictures can .We create high-resolution product photos that capture
                        and highlight the product’s unique details to make the most significant visual impact. </p>
                </div>

                <!--Single Service-->
                <div class="cr-single-service col-lg-4 col-md-6 col-12 mb-100">
                    <i class="icon-tools"></i>
                    <h3>Art &amp; Graphic Design&nbsp;</h3>
                    <p>We help you connect with your customers using Graphic Design to grab the viewer’s attention and
                        transmitting your brand values and message using visual elements.
                        Our album designs are chapters , they are part of a story ‘ . Our customised photo books will be
                        an ideal gift for your loved ones .</p>
                </div>

                <!--Single Service-->
                <div class="cr-single-service col-lg-4 col-md-6 col-12 mb-100">
                    <i class="icon-browser"></i>
                    <h3>UI Design</h3>
                    <p>Our passionate team understand the overall journey of your users and improve the user experience.
                        We use real world client challenges and project based learning to design the user interface.</p>
                </div>

                <!--Single Service-->
                <div class="cr-single-service col-lg-4 col-md-6 col-12 mb-100">
                    <i class="icon-laptop"></i>
                    <h3>Video Production</h3><br>
                    <p>We create engaging and informative product videos by combining creative story telling and
                        marketing strategies. We use stunning aesthetics to make your product the star of the show.</p>
                </div>

                <!--Single Service-->
                <div class="cr-single-service col-lg-4 col-md-6 col-12 mb-100">
                    <i class="icon-video"></i>
                    <h3>Campaign &amp; TVC&nbsp;</h3><br>
                    <p>Which is your favourite advertisement ? Let it be a product , a commercial advertisement or a
                        corporate event. We have it covered for you in the most unique way. Our videos will definitely
                        make you stand out.</p>
                </div>

                <!--Single Service-->
                <div class="cr-single-service col-lg-4 col-md-6 col-12 mb-100">
                    <i class="icon-mobile"></i>
                    <h3>Social Media Management &amp; Marketing</h3>
                    <p>Don't you want the power of social media to boost your product. We are here to help you and make
                        your product reach a different level.</p>
                </div>

            </div>

        </div>
    </div>

    <!--Creative Testimonial-->
    <div id="cr-testimonial" class="cr-testimonial-section section parallax-window pt-150 pb-150" data-parallax="scroll" data-speed="0.5" data-image-src="img/creative/bg/testimonial.jpg">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">

                    <!--Testimonial Slider-->
                    <div class="cr-testimonial-slider">

                        <!--Single Testimonial-->
                        <div class="cr-single-testimonial text-center">
                            <img src="img/creative/testimonial/bg-quote.png" alt="" class="cr-bg-quote">
                            <img src="img/creative/testimonial/icon2.png" alt="" class="cr-testimonial-client">
                            <p>THANK YOU!!! The photos are absolutely perfect! We could not be more thrilled with how
                                wonderful they have turned out. You are truly a magician! We have no idea how you
                                managed to make the darkest, wettest day in a century look light and bright and warm…
                                Thank you.</p>
                            <h5>Rajib Sarkar</h5>
                            <span>Creative Conslutant</span>
                        </div>

                        <!--Single Testimonial-->
                        <div class="cr-single-testimonial text-center">
                            <img src="img/creative/testimonial/bg-quote.png" alt="" class="cr-bg-quote">
                            <img src="img/creative/testimonial/icon2.png" alt="" class="cr-testimonial-client">
                            <p>Wow we are both blown away, these photos are beautiful. Thank you so much for capturing
                                our wedding day. We love our photos and how you’ve captured every precious moment of our
                                ceremony in detail. We can’t thank you enough. It was wonderful to meet you, you have
                                left a lasting memory with us. Thanking once again.</p>
                            <h5>Edward Allen</h5>
                            <span>CEO at ABNER CREATIVE</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <!--Creative Footer-->
    <div id="cr-contact" class="cr-footer-section section parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="img/creative/bg/footer.jpg">

        <!--Contact-->
        <div class="cr-contact-section section pt-150 pb-70">
            <div class="container">

                <!--Section Title-->
                <div class="row">
                    <div class="cr-section-title text-center col-12 mb-100 ">
                        <h3>Get IN Touch</h3>
                        <p>TELL US MORE ABOUT YOURSELVES<br>
                            YOUR PLANS AND ASK ANY QUESTIONS YOU MIGHT HAVE...</p>
                    </div>
                </div>

                <div class="row">

                    <!--Contact Form-->
                    <div class="col-lg-10 col-12 mx-auto">

                        <div class="cr-contact-form">

                            <form action="/contactus" method="post">
                                @csrf
                                <input type="text" placeholder="Name" name="name">
                                <input type="email" placeholder="Email" name="email">
                                <input type="number" placeholder="Phone Number" name="number">
                                <textarea placeholder="Message" name="message"></textarea>
                                <input type="submit" class="bg-yellow" value="submit">
                            </form>

                            <p class="form-messege"></p>

                        </div>

                    </div>

                    <!--Footer Social-->
                    <div class="col-xs-12 mt-50">

                        <div class="cr-footer-social text-center">


                            <a href=" https://www.facebook.com/YoloStudioOfficial/"><i class="fa-brands fa-facebook-f text-white fa-lg"></i></a>
                            <a href="https://www.instagram.com/yolostudioofficial/"><i class="fa-solid fa-hashtag text-white fa-lg"></i></a>
                            <a href="https://www.flickr.com/people/studioyolo/">
                                <i class="fa-brands fa-flickr text-white fa-lg"></i></a>
                            <a href="https://vimeo.com/user145581541"><i class="fa-brands fa-vimeo text-white fa-lg"></i></a>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--Footer-->
        <div class="cr-footer section">
            <div class="container">
                <div class="row">

                    <!--Copyright-->
                    <div class="col-md-3 col-12">
                        <div class="cr-footer-copyright">
                            <p> © 2022&nbsp;<a href="https://hasthemes.com/">Yolo Studio</a>.</p>
                        </div>
                    </div>

                    <!--Footer Menu-->
                    <div class="col-md-9 col-12">
                        <div class="cr-footer-menu text-center">
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    {{-- <a class="btn btn-primary" d role="button">Open first modal</a> --}}



    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jQuery latest version -->
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Ajax Mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- Main js -->
    <script src="js/main.js"></script>
    <!-- Parallax -->
    <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);

    </script>

</body>

</html>
