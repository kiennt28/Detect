<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Antidetect</title>
    <script type="text/javascript">
        const D1 = new Date().getTime(),
            dvw = document.defaultView.getComputedStyle(
                document.documentElement,
                null
            );
        let defaultFamily = dvw.getPropertyValue("font-family"),
            defaultSize = dvw.getPropertyValue("font-size");
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png"/>

    <!-- Dependency Styles -->
    <link
            rel="stylesheet"
            href="dependencies/bootstrap/css/bootstrap.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/fontawesome/css/all.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/select2/css/select2.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/flaticon/flaticon.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/wow/css/animate.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/page-piling/css/jquery.pagepiling.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/nivo-slider/css/nivo-slider.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/meanmenu/css/meanmenu.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/magnific-popup/css/magnific-popup.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/owl.carousel/css/owl.carousel.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/owl.carousel/css/owl.theme.default.min.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/slick/css/slick.css"
            type="text/css"
    />
    <link
            rel="stylesheet"
            href="dependencies/slick/css/slick-theme.css"
            type="text/css"
    />

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    <!-- Animation Stylesheet -->
    <link
            rel="stylesheet"
            href="dependencies/animation-css/animation-css.css"
            type="text/css"
    />

    <!-- Google Web Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"
            rel="stylesheet"
    />
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
</head>

<body>
<div class="abs"></div>
<div id="divsml" style="display: none; height: 60px"></div>

<div id="vid"></div>

<div id="stk" style="display: none; height: 55px"></div>

<div
        id="overlay"
        class="overlay"
        onclick="overlayoff();"
        style="z-index: 95; display: none"
></div>
<div id="preloader" class="tlp-preloader">
    <div class="animation-preloader">
        <div class="tlp-spinner"></div>
        <img src="media/preloader.png" alt="Preloader"/>
    </div>
</div>

<div id="wrapper" class="wrapper">
    <a href="#main_content" data-type="section-switch" class="return-to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <div id="main_content">
        <!--=====================================-->
        <!--=            Navbar Start           =-->
        <!--=====================================-->
        <header class="sticky-on">
            <div id="sticky-placeholder"></div>
            <div id="navbar-wrap" class="navbar-wrap">
                <div class="navbar-layout1">
                    <div class="container">
                        <div
                                class="row no-gutters d-flex align-items-center position-relative"
                        >
                            <div class="col-lg-2 d-flex justify-content-start">
                                <div class="temp-logo text-center">
                                    <a href="index.html" class="default-logo">
                                        <img
                                                src="media/logo-light.png"
                                                alt="logo"
                                                class="img-fluid"
                                        />
                                    </a>
                                    <a href="index.html" class="sticky-logo">
                                        <img
                                                src="media/logo-dark.png"
                                                alt="logo"
                                                class="img-fluid"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div
                                    class="col-lg-8 d-flex justify-content-end possition-static"
                            >
                                <nav id="dropdown" class="template-main-menu">
                                    <ul>
                                        <li class="position-static d-none d-lg-block">
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Detect</a>
                                        </li>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-end">
                                <ul class="header-action-items">
                                    <li class="single-item mr-2">
                                        <a href="#" class="item-btn btn-ghost btn-light"
                                        >Download <i class="icon-download fas fa-download"></i
                                            ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================-->
        <!--=              Navbar End           =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=         Main Banner Start         =-->
        <!--=====================================-->
        <section
                class="main-banner-wrap-layout6 has-animation"
                data-bg-image="media/banner/banner1.png"
        >
            <ul class="animated-figure">
                <li>
                    <div
                            class="translate-right-75 opacity-animation transition-200 transition-delay-500"
                    >
                        <svg width="478px" height="406px">
                            <defs>
                                <linearGradient
                                        id="shape-gradient2"
                                        x1="0%"
                                        x2="50%"
                                        y1="86.603%"
                                        y2="0%"
                                >
                                    <stop
                                            offset="0%"
                                            stop-color="rgb(241,161,32)"
                                            stop-opacity="0.21"
                                    />
                                    <stop
                                            offset="100%"
                                            stop-color="rgb(255,141,0)"
                                            stop-opacity="0.21"
                                    />
                                </linearGradient>
                            </defs>
                            <path
                                    fill="url(#shape-gradient2)"
                                    d="M57.512,28.844 C41.937,43.215 29.659,61.585 21.596,80.726 C10.238,107.690 5.415,136.934 2.113,166.013 C-8.559,260.013 20.528,368.419 121.400,397.331 C189.062,416.723 262.433,396.867 324.343,368.126 C415.304,325.900 543.497,194.454 436.347,96.738 C378.745,44.207 285.697,64.026 217.602,35.418 C185.699,22.011 155.662,-2.674 119.276,0.267 C95.545,2.187 74.555,13.118 57.512,28.844 Z"
                            />
                        </svg>
                    </div>
                </li>
            </ul>
            <div id="otherUsers" style="display: none"></div>
            <div class="container">
                <div class="col-sm-12 text-center pm">
                    <div class="main-title">Your Fingerprint Brower</div>
                    <div id="div_score" class="tvd view-print">
                        <div class="vr">
                            <div>Please wait</div>
                            <img class="pr"/>
                        </div>
                        <div class="rv">
                            <div id="user" class="rgd" onclick="new_dev(this);">
                                REGISTER THIS DEVICE
                            </div>

                            <div
                                    class="rsk1"
                                    style="
                      display: table;
                      margin: auto;
                      padding: 20px;
                      width: 100%;
                    "
                                    onclick="viewScore(this);"
                            >
                                <div
                                        style="
                        font-weight: bold;
                        font-size: 16px;
                        text-align: center;
                      "
                                >
                                    RISK SCORE
                                </div>
                                <div
                                        style="
                        margin-top: 10px;
                        font-weight: bold;
                        font-size: 34px;
                        font-family: Verdana, sans-serif;
                      "
                                >
                                    9.6
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-info">
                        <div class="brower-data">
                            <div class="brower-name">
                                <span>BROWER:</span>
                            </div>
                            <div id="brower_value">
                                <span></span>
                            </div>
                            <div id="brower_icon">
                                <img/>
                            </div>
                        </div>
                        <div class="system-data">
                            <div class="system-name">
                                <span>SYSTEM:</span>
                            </div>
                            <div id="system_value">
                                <span></span>
                            </div>
                            <div id="system_icon">
                                <img/>
                            </div>
                        </div>
                        <div class="location-data">
                            <div class="location-name">
                                <span>LOCATION:</span>
                            </div>
                            <div id="location_value">
                                <span></span>
                            </div>
                            <div id="location_icon">
                                <img/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=           Main Banner End         =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=    Gallery Section Area Start     =-->
        <!--=====================================-->
        <div style="overflow: hidden; width: 0px; height: 0px">
            <div
                    id="scrl"
                    style="overflow: scroll; height: 50px; width: 50px; border: none"
            ></div>
        </div>
        <section
                class="gallery-wrap-layout9 section-padding-md-equal bg-color-accent2"
        >
            <div class="container">
                <div class="row zoom-gallery">
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_browser" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>BROWSER</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">BROWSER</div>
                                    <div class="card_value">
                                        <b><span></span></b>
                                        <img/>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Version</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Languages</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Default Language</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_hash">
                                    <div class="card_param">HASH</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_system" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>SYSTEM</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">SYSTEM</div>
                                    <div class="card_value">
                                        <img/>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">OS Version</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">OS Platform</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">CPU Cores</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_hash">
                                    <div class="card_param">HASH</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_display" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>DISPLAY</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">DISPLAY</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/aresolution.png" alt=""/>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Resolution</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Browser Bar</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Taskbar Size</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_hash">
                                    <div class="card_param">HASH</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_fonts" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>FONTS</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">FONTS</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/afonts.png" alt=""/>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Fonts Glyphs</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">CSS Fonts</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">DPI Scale</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_hash">
                                    <div class="card_param">HASH</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_location" class="tvd">
                            <div class="vr">
                                <div>LOCATION</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">LOCATION</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/alocation.png" alt=""/>
                                    </div>
                                </div>
                                <div class="card_null">NOT AVAILABLE</div>
                                <div class="card_info" style="display: none">
                                    <div class="card_data">
                                        <div id="altacuracy" class="card_param">Altitude</div>
                                        <div id="alt" class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Latitude</div>
                                        <div id="lat" class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Longitude</div>
                                        <div id="lon" class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_geo">
                                        <div id="geotabcolor">
                                            <div id="geocity" class="card_param">
                                                <span></span>
                                            </div>
                                            <div id="geocountry" class="card_value">
                                                <span></span>
                                            </div>
                                            <div class="card_icon">
                                                <img id="geocountryimg" class="flags"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_webgl" class="tvd">
                            <div class="vr">
                                <div>WebGL</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">WebGL</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/gl.png"/>
                                    </div>
                                </div>
                                <div class="card_null">NOT AVAILABLE</div>
                                <div class="card_info" style="display: none">
                                    <div class="card_data">
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Graphic Type</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Non Unique</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_hash">
                                        <div class="card_param">HASH</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_canvas" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>CANVAS</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">CANVAS</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/acanvas.png"/>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Graphics</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Rating</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Non Unique</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_hash">
                                    <div class="card_param">HASH</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_media" class="tvd">
                            <div class="vr">
                                <div>MEDIA</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">MEDIA</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/amedia.png"/>
                                    </div>
                                </div>
                                <div class="card_null">NOT AVAILABLE</div>
                                <div class="card_info" style="display: none">
                                    <div class="card_data">
                                        <div class="card_param">Sample Rate</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Тип канала</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Devices</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_hash">
                                        <div class="card_param">HASH</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_webrtc" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>WebRTC</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">WebRTC</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/rtc.png" alt=""/>
                                    </div>
                                </div>
                                <div class="card_null">NOT AVAILABLE</div>
                                <div class="card_info" style="display: none">
                                    <div class="card_data">
                                        <div id="udptitle" class="card_param">UDP IP</div>
                                        <div
                                                id="udp"
                                                title="webRTC IP address"
                                                class="card_value"
                                        ></div>
                                    </div>
                                    <div class="card_data">
                                        <div id="utctitle" class="card_param">TCP IP</div>
                                        <div
                                                id="utc"
                                                title="remote IP address"
                                                class="card_value"
                                        ></div>
                                    </div>
                                    <div class="card_data">
                                        <div id="localtitle" class="card_param">LOCAL IP</div>
                                        <div
                                                id="local"
                                                title="local IP address"
                                                class="card_value"
                                        ></div>
                                    </div>
                                    <div class="card_geo">
                                        <div id="webrttabcolor">
                                            <div class="card_param">
                                                <span id="ipcity"></span>
                                            </div>
                                            <div class="card_value">
                                                <span id="ipcountry"></span>
                                            </div>
                                            <div class="card_icon">
                                                <img id="ipflag" class="flags"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_time" class="tvd">
                            <div class="vr" style="display: table-cell">
                                <div>DATE / TIME</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">DATE / TIME</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/atime.png"/>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">
                                        <span>GMT</span> / <span>UTC</span> TIME
                                    </div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param">Format Date</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="card_data">
                                    <div class="card_param"><span></span></div>
                                    <div class="card_value">
                                        <div id="timecountry"></div>
                                        <div class="card_icon">
                                            <img
                                                    id="timecountryimg"
                                                    style="width: 34px; height: 32px"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="card_hash">
                                    <div class="card_param">HASH</div>
                                    <div class="card_value">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_flash" class="tvd">
                            <div class="vr">
                                <div>FLASH</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">FLASH</div>
                                    <div class="card_value">
                                        <img src="./media/privacy/aflash.png"/>
                                    </div>
                                </div>
                                <div class="card_null">NOT AVAILABLE</div>
                                <div class="card_info" style="display: block">
                                    <div class="card_data">
                                        <div class="card_param">Filename</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Shockwave</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param">Ask to activate</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_hash">
                                        <div class="card_param">HASH</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 has-animation">
                        <div id="div_plugins" class="tvd">
                            <div class="vr">
                                <div>PLUGINS</div>
                                <img class="pr"/>
                            </div>
                            <div class="rv">
                                <div class="card_title">
                                    <div class="card_param">PLUGINS</div>
                                    <div class="card_value">
                                        <img src="./media//privacy/aplugins.png"/>
                                    </div>
                                </div>
                                <div class="card_null">NOT AVAILABLE</div>
                                <div class="card_info" style="display: none">
                                    <div class="card_data">
                                        <div class="card_param wrap"><span></span></div>
                                        <div class="card_value wrap">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param wrap"><span></span></div>
                                        <div class="card_value wrap">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_data">
                                        <div class="card_param wrap"><span></span></div>
                                        <div class="card_value wrap">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card_hash">
                                        <div class="card_param">HASH</div>
                                        <div class="card_value">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=     Gallery Section Area End      =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=     Footer Section Area Start     =-->
        <!--=====================================-->
        <footer class="footer-wrap-layout5 bg-color-accent7">
            <div class="footer-top-layout5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="footer-widgets">
                                <div class="footer-logo">
                                    <a href="index.html"
                                    ><img src="media/logo.png" alt="Logo"
                                        /></a>
                                </div>
                                <p class="about-paragraph">
                                    Grursus mal suada faci Lorem to the ipsum dolarorit more
                                    ametion more consectetur elit.
                                </p>
                                <ul class="footer-social">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 d-none d-xl-block">
                            <div class="footer-widgets">
                                <h3 class="footer-widget-heading">Workflows</h3>
                                <ul class="footer-menu">
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                            <div class="footer-widgets">
                                <h3 class="footer-widget-heading">Important Link</h3>
                                <ul class="footer-menu">
                                    <li><a href="about.html">About Us</a></li>

                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                            <div class="footer-widgets">
                                <h3 class="footer-widget-heading">Our Services</h3>
                                <ul class="footer-menu">
                                    <li><a href="#">Detect</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="footer-widgets">
                                <h3 class="footer-widget-heading">Contact Info</h3>
                                <p>
                                    Grursus mal suada faci lisis Lorem to ipsum consectetur.
                                </p>
                                <ul class="footer-contact">
                                    <li>
                                        <i class="flaticon-placeholder"></i>Tầng 9, 23 Lạc
                                        Trung, Vĩnh Tuy, Hai Bà Trưng, Hà Nội, Việt Nam
                                    </li>
                                    <li>
                                        <i class="flaticon-plane"></i>brower@minhhoangjsc.com
                                    </li>
                                    <li><i class="flaticon-telephone"></i>0963 106 661</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-layout5 bg-color-accent7">
                <div class="container">
                    <div class="copy-right-wrap">
                        <p class="copy-right-text">
                            © 2020
                            <a
                                    href="https://www.radiustheme.com"
                                    rel="nofollow"
                                    target="_blank"
                            >RadiusTheme.</a
                            >
                            All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================-->
        <!--=      Footer Section Area End      =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=       Template Search Start       =-->
        <!--=====================================-->
        <div id="template-search" class="template-search">
            <button type="button" class="close">×</button>
            <form class="search-form">
                <input type="search" value="" placeholder="Type here........"/>
                <button type="submit" class="search-btn">
                    <i class="flaticon-search"></i>
                </button>
            </form>
        </div>
        <!--=====================================-->
        <!--=        Template Search End        =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=         Offcanvas Start           =-->
        <!--=====================================-->
        <div
                class="offcanvas-menu-wrap"
                id="offcanvas-wrap"
                data-position="left"
        >
            <div class="close-btn offcanvas-close">
                <i class="fas fa-times"></i>
            </div>
            <div class="offcanvas-content">
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="media/logo.png" alt="logo"/></a>
                </div>
                <nav>
                    <ul class="offcanvas-nav">
                        <li class="nav-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="service-layout1.html">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="gallery-grid-2-column.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="team.html">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog-grid.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="offcanvas-footer">
                    <div class="item-title">Follow Me</div>
                    <ul class="offcanvas-social">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-rss"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--=====================================-->
        <!--=           Offcanvas End           =-->
        <!--=====================================-->
    </div>
</div>

<!-- Dependency Scripts -->
<script src="dependencies/popper.js/popper.min.js"></script>
<script src="dependencies/jquery/jquery.min.js"></script>
<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="dependencies/jquery.appear/jquery.appear.js"></script>
<script src="dependencies/jquery.parallax-scroll/jquery.parallax-scroll.js"></script>
<script src="dependencies/gmap3/js/gmap3.min.js"></script>
<script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
<script src="dependencies/slick/js/slick.min.js"></script>
<script src="dependencies/counter-up/jquery.counterup.min.js"></script>
<script src="dependencies/waypoints/jquery.waypoints.min.js"></script>
<script src="dependencies/select2/js/select2.min.js"></script>
<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
<script src="dependencies/Parallaxie-master/parallaxie.js"></script>
<script src="dependencies/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="dependencies/nivo-slider/js/home.js"></script>
<script src="dependencies/wow/js/wow.min.js"></script>
<script src="dependencies/knob/jquery.knob.js"></script>
<script src="dependencies/countdown/jquery.countdown.min.js"></script>
<script src="dependencies/page-piling/js/jquery.pagepiling.min.js"></script>
<script src="dependencies/tilt/tilt.jquery.min.js"></script>
<script src="dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
<script src="dependencies/theia-sticky-sidebar/resize-sensor.min.js"></script>
<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="dependencies/validator/validator.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>

<!-- Site Scripts -->
<script src="assets/js/app.js"></script>
<script type="text/javascript">
    let osVersion,
        osType,
        brName,
        brVers,
        ov =
            (ert =
                box_browser =
                    box_sistem =
                        box_display =
                            box_fonts =
                                box_location =
                                    box_flash =
                                        box_webgl =
                                            box_canvas =
                                                box_webrtc =
                                                    box_time =
                                                        box_media =
                                                            box_plugins =
                                                                0),
        browserName =
            (browserVers =
                dataGeo =
                    geozip =
                        geostreet =
                            geocity =
                                geostate =
                                    geocountry =
                                        geocountryCode =
                                            "");

    let hashFonts =
        (hashLocation =
            hashFlash =
                hashWebGL =
                    hashCanvas =
                        hashWebRTC =
                            hashTimeDate =
                                hashMedia =
                                    hashPlugins =
                                        "n/a");

    const xModules = [
        "div_location",
        "div_flash",
        "div_webgl",
        "div_media",
        "div_plugins",
        "div_webrtc",
    ];

    const iso3 = {
        BD: "BGD",
        BE: "BEL",
        BF: "BFA",
        BG: "BGR",
        BA: "BIH",
        BB: "BRB",
        WF: "WLF",
        BL: "BLM",
        BM: "BMU",
        BN: "BRN",
        BO: "BOL",
        BH: "BHR",
        BI: "BDI",
        BJ: "BEN",
        BT: "BTN",
        JM: "JAM",
        BV: "BVT",
        BW: "BWA",
        WS: "WSM",
        BQ: "BES",
        BR: "BRA",
        BS: "BHS",
        JE: "JEY",
        BY: "BLR",
        BZ: "BLZ",
        RU: "RUS",
        RW: "RWA",
        RS: "SRB",
        TL: "TLS",
        RE: "REU",
        TM: "TKM",
        TJ: "TJK",
        RO: "ROU",
        TK: "TKL",
        GW: "GNB",
        GU: "GUM",
        GT: "GTM",
        GS: "SGS",
        GR: "GRC",
        GQ: "GNQ",
        GP: "GLP",
        JP: "JPN",
        GY: "GUY",
        GG: "GGY",
        GF: "GUF",
        GE: "GEO",
        GD: "GRD",
        GB: "GBR",
        GA: "GAB",
        SV: "SLV",
        GN: "GIN",
        GM: "GMB",
        GL: "GRL",
        GI: "GIB",
        GH: "GHA",
        OM: "OMN",
        TN: "TUN",
        JO: "JOR",
        HR: "HRV",
        HT: "HTI",
        HU: "HUN",
        HK: "HKG",
        HN: "HND",
        HM: "HMD",
        VE: "VEN",
        PR: "PRI",
        PS: "PSE",
        PW: "PLW",
        PT: "PRT",
        SJ: "SJM",
        PY: "PRY",
        IQ: "IRQ",
        PA: "PAN",
        PF: "PYF",
        PG: "PNG",
        PE: "PER",
        PK: "PAK",
        PH: "PHL",
        PN: "PCN",
        PL: "POL",
        PM: "SPM",
        ZM: "ZMB",
        EH: "ESH",
        EE: "EST",
        EG: "EGY",
        ZA: "ZAF",
        EC: "ECU",
        IT: "ITA",
        VN: "VNM",
        SB: "SLB",
        ET: "ETH",
        SO: "SOM",
        ZW: "ZWE",
        SA: "SAU",
        ES: "ESP",
        ER: "ERI",
        ME: "MNE",
        MD: "MDA",
        MG: "MDG",
        MF: "MAF",
        MA: "MAR",
        MC: "MCO",
        UZ: "UZB",
        MM: "MMR",
        ML: "MLI",
        MO: "MAC",
        MN: "MNG",
        MH: "MHL",
        MK: "MKD",
        MU: "MUS",
        MT: "MLT",
        MW: "MWI",
        MV: "MDV",
        MQ: "MTQ",
        MP: "MNP",
        MS: "MSR",
        MR: "MRT",
        IM: "IMN",
        UG: "UGA",
        TZ: "TZA",
        MY: "MYS",
        MX: "MEX",
        IL: "ISR",
        FR: "FRA",
        IO: "IOT",
        SH: "SHN",
        FI: "FIN",
        FJ: "FJI",
        FK: "FLK",
        FM: "FSM",
        FO: "FRO",
        NI: "NIC",
        NL: "NLD",
        NO: "NOR",
        NA: "NAM",
        VU: "VUT",
        NC: "NCL",
        NE: "NER",
        NF: "NFK",
        NG: "NGA",
        NZ: "NZL",
        NP: "NPL",
        NR: "NRU",
        NU: "NIU",
        CK: "COK",
        XK: "XKX",
        CI: "CIV",
        CH: "CHE",
        CO: "COL",
        CN: "CHN",
        CM: "CMR",
        CL: "CHL",
        CC: "CCK",
        CA: "CAN",
        CG: "COG",
        CF: "CAF",
        CD: "COD",
        CZ: "CZE",
        CY: "CYP",
        CX: "CXR",
        CR: "CRI",
        CW: "CUW",
        CV: "CPV",
        CU: "CUB",
        SZ: "SWZ",
        SY: "SYR",
        SX: "SXM",
        KG: "KGZ",
        KE: "KEN",
        SS: "SSD",
        SR: "SUR",
        KI: "KIR",
        KH: "KHM",
        KN: "KNA",
        KM: "COM",
        ST: "STP",
        SK: "SVK",
        KR: "KOR",
        SI: "SVN",
        KP: "PRK",
        KW: "KWT",
        SN: "SEN",
        SM: "SMR",
        SL: "SLE",
        SC: "SYC",
        KZ: "KAZ",
        KY: "CYM",
        SG: "SGP",
        SE: "SWE",
        SD: "SDN",
        DO: "DOM",
        DM: "DMA",
        DJ: "DJI",
        DK: "DNK",
        VG: "VGB",
        DE: "DEU",
        YE: "YEM",
        DZ: "DZA",
        US: "USA",
        UY: "URY",
        YT: "MYT",
        UM: "UMI",
        LB: "LBN",
        LC: "LCA",
        LA: "LAO",
        TV: "TUV",
        TW: "TWN",
        TT: "TTO",
        TR: "TUR",
        LK: "LKA",
        LI: "LIE",
        LV: "LVA",
        TO: "TON",
        LT: "LTU",
        LU: "LUX",
        LR: "LBR",
        LS: "LSO",
        TH: "THA",
        TF: "ATF",
        TG: "TGO",
        TD: "TCD",
        TC: "TCA",
        LY: "LBY",
        VA: "VAT",
        VC: "VCT",
        AE: "ARE",
        AD: "AND",
        AG: "ATG",
        AF: "AFG",
        AI: "AIA",
        VI: "VIR",
        IS: "ISL",
        IR: "IRN",
        AM: "ARM",
        AL: "ALB",
        AO: "AGO",
        AQ: "ATA",
        AS: "ASM",
        AR: "ARG",
        AU: "AUS",
        AT: "AUT",
        AW: "ABW",
        IN: "IND",
        AX: "ALA",
        AZ: "AZE",
        IE: "IRL",
        ID: "IDN",
        UA: "UKR",
        QA: "QAT",
        MZ: "MOZ",
    };

    const isoFull = {
            BD: "Bangladesh",
            BE: "Belgium",
            BF: "Burkina Faso",
            BG: "Bulgaria",
            BA: "222",
            BB: "Barbados",
            WF: "Wallis and Futuna",
            BL: "Saint Barthelemy",
            BM: "Bermuda",
            BN: "Brunei",
            BO: "Bolivia",
            BH: "Bahrain",
            BI: "Burundi",
            BJ: "Benin",
            BT: "Bhutan",
            JM: "Jamaica",
            BV: "Bouvet Island",
            BW: "Botswana",
            WS: "Samoa",
            BQ: "Bonaire, Saint Eustatius and Saba ",
            BR: "Brazil",
            BS: "Bahamas",
            JE: "Jersey",
            BY: "Belarus",
            BZ: "Belize",
            RU: "Russia",
            RW: "Rwanda",
            RS: "Serbia",
            TL: "East Timor",
            RE: "Reunion",
            TM: "Turkmenistan",
            TJ: "Tajikistan",
            RO: "Romania",
            TK: "Tokelau",
            GW: "Guinea-Bissau",
            GU: "Guam",
            GT: "Guatemala",
            GS: "South Georgia and the South Sandwich Islands",
            GR: "Greece",
            GQ: "Equatorial Guinea",
            GP: "Guadeloupe",
            JP: "Japan",
            GY: "Guyana",
            GG: "Guernsey",
            GF: "French Guiana",
            GE: "Georgia",
            GD: "Grenada",
            GB: "United Kingdom",
            GA: "Gabon",
            SV: "El Salvador",
            GN: "Guinea",
            GM: "Gambia",
            GL: "Greenland",
            GI: "Gibraltar",
            GH: "Ghana",
            OM: "Oman",
            TN: "Tunisia",
            JO: "Jordan",
            HR: "Croatia",
            HT: "Haiti",
            HU: "Hungary",
            HK: "Hong Kong",
            HN: "Honduras",
            HM: "Heard Island and McDonald Islands",
            VE: "Venezuela",
            PR: "Puerto Rico",
            PS: "Palestinian Territory",
            PW: "Palau",
            PT: "Portugal",
            SJ: "Svalbard and Jan Mayen",
            PY: "Paraguay",
            IQ: "Iraq",
            PA: "Panama",
            PF: "French Polynesia",
            PG: "Papua New Guinea",
            PE: "Peru",
            PK: "Pakistan",
            PH: "Philippines",
            PN: "Pitcairn",
            PL: "Poland",
            PM: "Saint Pierre and Miquelon",
            ZM: "Zambia",
            EH: "Western Sahara",
            EE: "Estonia",
            EG: "Egypt",
            ZA: "South Africa",
            EC: "Ecuador",
            IT: "Italy",
            VN: "Vietnam",
            SB: "Solomon Islands",
            ET: "Ethiopia",
            SO: "Somalia",
            ZW: "Zimbabwe",
            SA: "Saudi Arabia",
            ES: "Spain",
            ER: "Eritrea",
            ME: "Montenegro",
            MD: "Moldova",
            MG: "Madagascar",
            MF: "Saint Martin",
            MA: "Morocco",
            MC: "Monaco",
            UZ: "Uzbekistan",
            MM: "Myanmar",
            ML: "Mali",
            MO: "Macao",
            MN: "Mongolia",
            MH: "Marshall Islands",
            MK: "Macedonia",
            MU: "Mauritius",
            MT: "Malta",
            MW: "Malawi",
            MV: "Maldives",
            MQ: "Martinique",
            MP: "Northern Mariana Islands",
            MS: "Montserrat",
            MR: "Mauritania",
            IM: "Isle of Man",
            UG: "Uganda",
            TZ: "Tanzania",
            MY: "Malaysia",
            MX: "Mexico",
            IL: "Israel",
            FR: "France",
            IO: "British Indian Ocean Territory",
            SH: "Saint Helena",
            FI: "Finland",
            FJ: "Fiji",
            FK: "Falkland Islands",
            FM: "Micronesia",
            FO: "Faroe Islands",
            NI: "Nicaragua",
            NL: "Netherlands",
            NO: "Norway",
            NA: "Namibia",
            VU: "Vanuatu",
            NC: "New Caledonia",
            NE: "Niger",
            NF: "Norfolk Island",
            NG: "Nigeria",
            NZ: "New Zealand",
            NP: "Nepal",
            NR: "Nauru",
            NU: "Niue",
            CK: "Cook Islands",
            XK: "Kosovo",
            CI: "Ivory Coast",
            CH: "Switzerland",
            CO: "Colombia",
            CN: "China",
            CM: "Cameroon",
            CL: "Chile",
            CC: "Cocos Islands",
            CA: "Canada",
            CG: "Republic of the Congo",
            CF: "Central African Republic",
            CD: "Democratic Republic of the Congo",
            CZ: "Czech Republic",
            CY: "Cyprus",
            CX: "Christmas Island",
            CR: "Costa Rica",
            CW: "Curacao",
            CV: "Cape Verde",
            CU: "Cuba",
            SZ: "Swaziland",
            SY: "Syria",
            SX: "Sint Maarten",
            KG: "Kyrgyzstan",
            KE: "Kenya",
            SS: "South Sudan",
            SR: "Suriname",
            KI: "Kiribati",
            KH: "Cambodia",
            KN: "Saint Kitts and Nevis",
            KM: "Comoros",
            ST: "Sao Tome and Principe",
            SK: "Slovakia",
            KR: "South Korea",
            SI: "Slovenia",
            KP: "North Korea",
            KW: "Kuwait",
            SN: "Senegal",
            SM: "San Marino",
            SL: "Sierra Leone",
            SC: "Seychelles",
            KZ: "Kazakhstan",
            KY: "Cayman Islands",
            SG: "Singapore",
            SE: "Sweden",
            SD: "Sudan",
            DO: "Dominican Republic",
            DM: "Dominica",
            DJ: "Djibouti",
            DK: "Denmark",
            VG: "British Virgin Islands",
            DE: "Germany",
            YE: "Yemen",
            DZ: "Algeria",
            US: "United States",
            UY: "Uruguay",
            YT: "Mayotte",
            UM: "United States Minor Outlying Islands",
            LB: "Lebanon",
            LC: "Saint Lucia",
            LA: "Laos",
            TV: "Tuvalu",
            TW: "Taiwan",
            TT: "Trinidad and Tobago",
            TR: "Turkey",
            LK: "Sri Lanka",
            LI: "Liechtenstein",
            LV: "Latvia",
            TO: "Tonga",
            LT: "Lithuania",
            LU: "Luxembourg",
            LR: "Liberia",
            LS: "Lesotho",
            TH: "Thailand",
            TF: "French Southern Territories",
            TG: "Togo",
            TD: "Chad",
            TC: "Turks and Caicos Islands",
            LY: "Libya",
            VA: "Vatican",
            VC: "Saint Vincent and the Grenadines",
            AE: "United Arab Emirates",
            AD: "Andorra",
            AG: "Antigua and Barbuda",
            AF: "Afghanistan",
            AI: "Anguilla",
            VI: "U.S. Virgin Islands",
            IS: "Iceland",
            IR: "Iran",
            AM: "Armenia",
            AL: "Albania",
            AO: "Angola",
            AQ: "Antarctica",
            AS: "American Samoa",
            AR: "Argentina",
            AU: "Australia",
            AT: "Austria",
            AW: "Aruba",
            IN: "India",
            AX: "Aland Islands",
            AZ: "Azerbaijan",
            IE: "Ireland",
            ID: "Indonesia",
            UA: "Ukraine",
            QA: "Qatar",
            MZ: "Mozambique",
        },
        countryMode = "3",
        hex_chr = "0123456789abcdef".split(""),
        gif =
            "data:image/gif;base64,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";

    const dataBROWSER = {};
    const dataSYSTEM = {};
    const dataDISPLAY = {};
    const dataFONTS = {};
    const dataLOCATION = {};
    const dataCANVAS = {};
    const dataGL = {};
    const dataTIME = {};
    const dataMEDIA = {};
    const dataRTC = {};
    const iconExt = ".png",
        flagPath = "media/flags/",
        dpix = window.devicePixelRatio,
        noGL = "graphics card name is not available";

    window.onload = function () {
        startProcessing();
    };

    function new_dev(elm) {
        if (elm.className == "rgd") {
            document.getElementById("overlay").innerHTML =
                document.getElementById("register").innerHTML;
            overlayon();
        }
    }

    function overlayoff() {
        if (ov == 0) {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("overlay").innerHTML = "";
        }
    }

    function overlayon() {
        document.getElementById("overlay").style.display = "block";
    }

    function viewScore(elm) {
        if (elm.className != "rsk1") {
            document.getElementById("overlay").innerHTML =
                document.getElementById("otherUsers").innerHTML;
            overlayon();
        } else {
            document.getElementById("otherUsers").innerHTML = "";
            ov = 0;
            overlayoff();
        }
    }

    function setUser() {
        var pan = document.getElementById("overlay"),
            susermsg = pan.getElementsByTagName("div")[9];
        susermsg.innerHTML = "";
        susermsg.style.display = "none";
        var usr = pan.getElementsByTagName("input")[0];
        usr.style.border = "1px solid #000";
        if (usr.value.length < 6 || usr.value.length > 20) {
            if (usr.value != "") {
                susermsg.innerHTML = "BETWEEN 6 TO 20 CHARACTERS";
                susermsg.style.display = "block";
            }
            usr.style.border = "1px solid red";
        } else {
            usr.value = usr.value.toUpperCase();
            var myRegEx = /[^a-z\d]/i,
                isValid = !myRegEx.test(usr.value);
            if (!isValid) {
                susermsg.innerHTML = "ONLY ALPHANUMERIC ALLOWED";
                susermsg.style.display = "block";
            } else {
                regUser(pan, usr.value);
            }
        }
    }

    function regUser(pan, val) {
        pan.getElementsByTagName("div")[6].style.display = "none";
        pan.getElementsByTagName("div")[12].innerHTML =
            "<img src='" + gif + "' style='margin-top:10px;width:30px;'>";
        pan.getElementsByTagName("div")[10].style.display = "block";
        document.getElementById("user").innerHTML = val;
        document.getElementById("user").className = "rgd1";
        ov = 0;
        overlayoff();
    }

    function statusBoxes(sTime) {
        var eTime = new Date().getTime(),
            xTime = eTime - sTime;

        if (xTime < 5000) {
            if (
                box_browser == 0 ||
                box_sistem == 0 ||
                box_display == 0 ||
                box_fonts == 0 ||
                box_location == 0 ||
                box_flash == 0 ||
                box_webgl == 0 ||
                box_canvas == 0 ||
                box_webrtc == 0 ||
                box_time == 0 ||
                box_media == 0 ||
                box_plugins == 0
            ) {
                setTimeout(function () {
                    statusBoxes(sTime);
                }, 0);
            } else {
                initFingerprintJS();
            }
        } else {
            initFingerprintJS();
        }
    }

    function startProcessing() {
        box_browser =
            box_sistem =
                box_display =
                    box_fonts =
                        box_location =
                            box_flash =
                                box_webgl =
                                    box_canvas =
                                        box_webrtc =
                                            box_time =
                                                box_media =
                                                    box_plugins =
                                                        ov =
                                                            0;

        document.getElementById("overlay").style.display = "none";
        document.getElementById("overlay").innerHTML = "";
        document.getElementById("otherUsers").innerHTML = "";

        let tvd = document.getElementsByClassName("tvd");
        for (i = 0; i < tvd.length; i++) {
            tvd[i].getElementsByTagName("img")[0].src = gif;
        }

        disableModule("div_location", 1);
        disableModule("div_flash", 1);
        disableModule("div_webgl", 1);
        disableModule("div_media", 1);
        disableModule("div_plugins", 1);

        setTimeout(function () {
            browserModule();
        }, 100);
        setTimeout(function () {
            sistemModule();
        }, 200);
        setTimeout(function () {
            displayModule();
        }, 300);
        setTimeout(function () {
            fontsModule();
        }, 400);
        setTimeout(function () {
            locationModule();
        }, 500);
        setTimeout(function () {
            flashModule();
        }, 600);
        setTimeout(function () {
            webglModule();
        }, 700);
        setTimeout(function () {
            canvasModule();
        }, 800);
        setTimeout(function () {
            webrtcModule();
        }, 800);
        setTimeout(function () {
            timeModule();
        }, 800);
        setTimeout(function () {
            mediaModule();
        }, 800);
        setTimeout(function () {
            pluginsModule();
        }, 800);

        setTimeout(function () {
            var sTime = new Date().getTime();
            statusBoxes(sTime);
        }, 0);
    }

    function browserModule() {
        box_browser = 0;
        var defLang = navigator.language || navigator.userLanguage;
        var allLang = navigator.languages;

        var userAgent = navigator.userAgent;

        if (defLang === undefined || defLang === null || defLang == "") {
            defLang = "n/a";
        }
        if (allLang === undefined || allLang === null || allLang == "") {
            allLang = "n/a";
        }
        if (userAgent === undefined || userAgent === null || userAgent == "") {
            userAgent = "n/a";
        }
        userAgent = userAgent.toString();

        defLang = defLang.toString();
        allLang = allLang.toString();

        var agent = exAgent(userAgent.toString());

        browserName = agent[0];
        browserVers = agent[1];
        osVersion = agent[2];
        osType = agent[3];

        browserName = browserName.toUpperCase();

        var browserIcon = browserName.toLowerCase();

        if (browserIcon.indexOf("microsoft edge") != -1) {
            browserIcon = "edge";
        }
        if (browserIcon.indexOf("internet explorer") != -1) {
            browserIcon = "explorer";
        }

        dataBROWSER.HASH = md5(
            browserName +
            "," +
            browserVers +
            "," +
            defLang +
            "," +
            allLang +
            "," +
            userAgent
        ).toUpperCase();

        document
            .getElementById("brower_value")
            .getElementsByTagName("span")[0].innerHTML = browserName;
        document
            .getElementById("div_browser")
            .getElementsByTagName("span")[0].innerHTML = browserName;
        document
            .getElementById("brower_icon")
            .getElementsByTagName("img")[0].src =
            "media/icons/" + browserIcon + iconExt;
        document
            .getElementById("div_browser")
            .getElementsByTagName("img")[1].src =
            "media/icons/" + browserIcon + iconExt;
        document
            .getElementById("div_browser")
            .getElementsByTagName("span")[1].innerHTML = browserVers;
        document
            .getElementById("div_browser")
            .getElementsByTagName("span")[2].innerHTML = allLang;
        document
            .getElementById("div_browser")
            .getElementsByTagName("span")[3].innerHTML = defLang;
        document
            .getElementById("div_browser")
            .getElementsByTagName("span")[4].innerHTML = dataBROWSER.HASH;

        enableModule("div_browser");
    }

    function sistemModule() {
        box_sistem = 0;
        osVersion = osVersion.toUpperCase();
        document
            .getElementById("div_system")
            .getElementsByTagName("span")[0].innerHTML = osVersion;

        document
            .getElementById("system_value")
            .getElementsByTagName("span")[0].innerHTML = osVersion;

        var osIcon = osVersion.toLowerCase();
        if (osIcon.indexOf("windows") != -1) {
            osIcon = "windows";
        }

        var cpuCore = window.navigator.hardwareConcurrency;
        if (cpuCore === undefined) {
            cpuCore = "unknown";
        }

        dataSYSTEM.HASH = md5(
            osVersion + "," + osType + "," + cpuCore
        ).toUpperCase();

        document
            .getElementById("div_system")
            .getElementsByTagName("img")[1].src =
            "media/icons/" + osIcon + iconExt;
        document
            .getElementById("system_icon")
            .getElementsByTagName("img")[0].src =
            "media/icons/" + osIcon + iconExt;

        document
            .getElementById("div_system")
            .getElementsByTagName("span")[1].innerHTML = osType;
        document
            .getElementById("div_system")
            .getElementsByTagName("span")[2].innerHTML = cpuCore;
        document
            .getElementById("div_system")
            .getElementsByTagName("span")[3].innerHTML = dataSYSTEM.HASH;

        enableModule("div_system");
    }

    function displayModule() {
        box_display = 0;
        var scrl = document.getElementById("scrl");
        var scrlBarSize = scrl.offsetWidth - scrl.clientWidth;

        var isMax = 0;

        var avlH = screen.availHeight;
        var outH = window.outerHeight;
        var avlW = screen.availWidth;
        var outW = window.outerWidth;

        var difH = outH - avlH;
        difW = outW - avlW;

        var browserBarSize = "";

        var sY = window.screenY;
        var mozSY = window.mozInnerScreenY;

        if (scrlBarSize == 0) {
            scrlBarSize = scrl.offsetHeight - scrl.clientHeight;
        }

        if (scrlBarSize != 0) {
            if (dpix != 1) {
                scrlBarSize = scrlBarSize * dpix;

                scrlBarSize = Math.round(scrlBarSize);
            }
        }

        if (difH >= 0 && difH == difW) {
            isMax = 1;
        }
        if (sY < 0) {
            sY = 0;
        }

        if (!isNaN(mozSY)) {
            browserBarSize = mozSY - sY;

            browserBarSize = browserBarSize * window.devicePixelRatio;

            browserBarSize = Math.round(browserBarSize);
        } else {
            var w, v, r, u, t;

            try {
                w = window.visualViewport.height;
            } catch (err) {
            }

            if (w === undefined || w == "") {
                v = window.innerHeight;

                r = v * window.devicePixelRatio;
                u = window.outerHeight * window.devicePixelRatio;
                t = u - r;
            } else {
                v = w;
                r = v * window.devicePixelRatio;
                t = window.outerHeight - r;
            }

            browserBarSize = Math.round(t);

            if (isMax == 0) {
                browserBarSize = browserBarSize - 8;
            } else {
                if (w === undefined || w == "") {
                    browserBarSize = browserBarSize - 16;
                }
            }
        }

        if (browserBarSize < 0) {
            browserBarSize = 0;
        }

        var dpix1 = 1;

        var tvv = "";
        try {
            tvv = window.visualViewport.height;
        } catch (err) {
        }
        if (!isNaN(mozSY) || tvv == "") {
            dpix1 = dpix;
        }

        var taskBarPosition = "vertical";
        var taskbarSize = screen.width - screen.availWidth;
        taskbarSize = taskbarSize * dpix;

        if (taskbarSize < 1) {
            var vvh = 0;
            try {
                vvh = window.visualViewport.height;
                vvh = vvh - Math.floor(vvh);
            } catch (err) {
                vvh = screen.height;
            }

            if (vvh > 0.5) {
                vvh = 0;
            }

            var xvvh = screen.height + vvh;

            taskbarSize = xvvh - screen.availHeight;
            taskbarSize = taskbarSize * dpix1;
            if (vvh != 0 && dpix1 > 0.99) {
                taskbarSize = Math.round(taskbarSize);
            } else {
                taskbarSize = Math.floor(taskbarSize);
            }
            taskBarPosition = "horizontal";
        }

        dataDISPLAY.HASH = md5(
            window.screen.width +
            "," +
            window.screen.height +
            "," +
            browserBarSize +
            "," +
            taskbarSize +
            "," +
            scrlBarSize +
            "," +
            window.screen.colorDepth +
            "," +
            window.screen.pixelDepth +
            "," +
            window.devicePixelRatio +
            "," +
            taskBarPosition
        ).toUpperCase();

        document
            .getElementById("div_display")
            .getElementsByTagName("span")[0].innerHTML =
            screen.width + " x " + screen.height;
        document
            .getElementById("div_display")
            .getElementsByTagName("span")[1].innerHTML = browserBarSize;
        document
            .getElementById("div_display")
            .getElementsByTagName("span")[2].innerHTML = taskbarSize;
        document
            .getElementById("div_display")
            .getElementsByTagName("span")[3].innerHTML = dataDISPLAY.HASH;

        enableModule("div_display");
    }

    function fontsModule() {
        box_fonts = 0;
        var dpix2 = Math.round(dpix * 100) / 100;
        var dpiscale = dpix2 * 100;

        dpiscale = Math.round(dpiscale);

        if (screen.deviceYDPI != undefined) {
            dpiscale = screen.deviceYDPI;
            dpiscale = (dpiscale / 24) * 25;
            dpiscale = Math.round(dpiscale);
        }

        var fontsData = getFonts();

        var fontsmd5 = getFontg();

        if (fontsmd5.length != 8) {
            fontsmd5 = "n/a";
        } else {
            fontsmd5 = fontsmd5.toUpperCase();
        }
        if (fontsData[0] < 1) {
            fontsData[0] = "n/a";
        }
        if (fontsData[1].length != 32) {
            fontsData[1] = "n/a";
        } else {
            fontsData[1] = fontsData[1].toUpperCase();
        }

        dataFONTS.HASH = md5(
            fontsData[1] +
            "|" +
            defaultFamily +
            "," +
            defaultSize +
            "," +
            dpiscale
        ).toUpperCase();

        document
            .getElementById("div_fonts")
            .getElementsByTagName("span")[0].innerHTML = fontsmd5;
        document
            .getElementById("div_fonts")
            .getElementsByTagName("span")[1].innerHTML = fontsData[0];
        document
            .getElementById("div_fonts")
            .getElementsByTagName("span")[2].innerHTML = dpiscale + "%";
        document
            .getElementById("div_fonts")
            .getElementsByTagName("span")[3].innerHTML = dataFONTS.HASH;

        enableModule("div_fonts");
    }

    function locationModule() {
        (box_location = ert = 0),
            (dataGeo =
                geozip =
                    geostreet =
                        geocity =
                            geostate =
                                geocountry =
                                    geocountryCode =
                                        "");
        if (!!navigator.geolocation) {
            setTimeout(function () {
                var sTime = new Date().getTime();
                accessLocation(sTime);
            }, 0);
        } else {
            disableModule("div_location");
        }
    }

    function locationDecision(data) {
        if (data.length == 11) {
            var xAdr = "",
                geoStreetNR = "",
                geoStreetName = "",
                geoFullAddress = "",
                geocounty = "";

            if (data[0] != "") {
                geoStreetNR = data[0];
            }
            if (data[1] != "") {
                geoStreetName = data[1];
            }

            if (data[4] != "") {
                geocity = data[4];
            } else {
                if (data[2] != "") {
                    geocity = data[2];
                }
            }

            if (data[5] != "") {
                geocounty = data[5];
            }
            if (geocity == "") {
                geocity = geocounty;
            }

            if (data[6] != "") {
                geostate = data[6];

                if (data[3] != "") {
                    if (geocity.toLowerCase() == geostate.toLowerCase()) {
                        geostate = data[3];
                    } else {
                        if (geocity.toLowerCase() != data[3].toLowerCase()) {
                            geostate = data[3] + " / " + geostate;
                        }
                    }
                }
            } else {
                if (data[3] != "") {
                    geostate = data[3];
                }
            }

            if (data[7] != "") {
                geocountry = data[7];
            }
            if (data[8] != "") {
                geocountryCode = data[8];
            }
            if (data[9] != "") {
                geozip = data[9];
            }
            if (data[10] != "") {
                geoFullAddress = data[10];
            }

            if (geoFullAddress.indexOf(",") != -1) {
                geoFullAddress = geoFullAddress.substring(
                    0,
                    geoFullAddress.indexOf(",")
                );

                if (geoFullAddress != "") {
                    xAdr = geoFullAddress.toLowerCase();
                }
            }

            if (xAdr != "") {
                if (geoStreetName != "") {
                    if (xAdr.indexOf(geoStreetName.toLowerCase()) != -1) {
                        geostreet = geoFullAddress;
                    } else {
                        if (xAdr1.indexOf(geoStreetNR.toLowerCase()) != -1) {
                            geostreet = geoStreetNR + " " + geoStreetName;
                        } else {
                            geostreet = geoStreetName;
                        }
                    }
                } else {
                    geostreet = geoFullAddress;
                }
            } else {
                if (geoStreetName != "") {
                    if (geoStreetNR != "") {
                        geostreet = geoStreetNR + " " + geoStreetName;
                    } else {
                        geostreet = geoStreetName;
                    }
                }
            }

            (xAdr = ""), (geoFullAddress = "");

            if (geostreet != "") {
                geoFullAddress = geoFullAddress + geostreet;
            }
            if (geocity != "") {
                geoFullAddress = geoFullAddress + ", " + geocity;
            }
            if (geozip != "") {
                geoFullAddress = geoFullAddress + ", " + geozip;
            }
            if (geostate != "") {
                geoFullAddress = geoFullAddress + ", " + geostate;
            }
            if (geocountry != "") {
                geoFullAddress = geoFullAddress + ", " + geocountry;
            }

            if (geocity.length > 1 && geocountry.length > 1) {
                geocity = geocity.toUpperCase();
                geocountry = geocountry.toUpperCase();

                var finalCountryCode = "";

                if (geocountry.length == 2) {
                    if (countryMode == "3") {
                        if (iso3[geocountry]) {
                            geocountry = iso3[geocountry];
                        }
                    }
                }

                if (geocountryCode.length == 2) {
                    geocountryCode = geocountryCode.toLowerCase();
                } else {
                    geocountryCode = "UNKNOWN";
                }

                document.getElementById("geocity").innerHTML = geocity;
                document.getElementById("geocountry").innerHTML = geocountry;
                document.getElementById("geocountryimg").src =
                    flagPath + geocountryCode + iconExt;
                document
                    .getElementById("location_value")
                    .getElementsByTagName("span")[0].innerHTML = geocountry;
                document
                    .getElementById("location_icon")
                    .getElementsByTagName("img")[0].src =
                    flagPath + geocountryCode + iconExt;
                if (box_webrtc) {
                    checkCountries(1);
                }

                enableModule("div_location");
            } else {
                disableModule("div_location");
            }
        } else {
            disableModule("div_location");
        }
    }

    function locationResponse(data) {
        if (data != 3 || dataGeo == "") {
            disableModule("div_location");
        } else {
            let latitude = dataGeo[0],
                longitude = dataGeo[1],
                altitude = dataGeo[2],
                accuracy = dataGeo[3],
                altitudeAccuracy = dataGeo[4],
                heading = dataGeo[5],
                speed = dataGeo[6],
                timestamp = dataGeo[7],
                altacuracy = "Altitude";
            if (altitude != null && altitude != undefined) {
                alt = altitude;
            } else {
                if (accuracy != null && accuracy != undefined) {
                    alt = accuracy;
                    altacuracy = "Accuracy";
                } else {
                    alt = "n/a";
                }
            }
            (document.getElementById("altacuracy").innerHTML = altacuracy),
                (document.getElementById("lat").innerHTML = latitude),
                (document.getElementById("lon").innerHTML = longitude),
                (document.getElementById("alt").innerHTML = alt);
            if (altitude == null) {
                altitude = "none";
            } else {
                altitude = altitude.toString();
            }
            if (accuracy == null) {
                accuracy = "none";
            } else {
                accuracy = accuracy.toString();
            }
            if (altitudeAccuracy == null) {
                altitudeAccuracy = "none";
            } else {
                altitudeAccuracy = altitudeAccuracy.toString();
            }
            (latitude = latitude.toString()),
                (longitude = longitude.toString()),
                (hashLocation = md5(
                    latitude +
                    "," +
                    longitude +
                    "," +
                    altitude +
                    "," +
                    accuracy +
                    "," +
                    altitudeAccuracy
                ));

            (dataLOCATION.latitude = latitude),
                (dataLOCATION.longitude = longitude);

            var rnd = Math.floor(Math.random() * 1000) + 100;
            getData(
                "http://www.ivanovation.ro/detection/location/?" + rnd,
                {
                    latitude: latitude,
                    longitude: longitude,
                },
                "locationResp"
            );
        }
    }

    function locationResp(data) {
        if (data != "" && data != null) {
            try {
                data = JSON.parse(data);
            } catch (err) {
                data = "error";
            }
            if (typeof data != "object") {
                data = "error";
            }
        } else {
            data = "error";
        }
        if (data == "error") {
            try {
                var rnd = Math.floor(Math.random() * 1000) + 100;
                var script = document.createElement("script");
                script.setAttribute(
                    "src",
                    // Sửa link Location
                    "https://www.ivanovation.ro/detection/location/?" +
                    rnd +
                    '&o={"latitude":"' +
                    dataLOCATION.latitude +
                    '","longitude":"' +
                    dataLOCATION.longitude +
                    '"}'
                );
                script.setAttribute("type", "text/javascript");
                script.setAttribute("id", "scgeo");
                script.setAttribute("onload", "locationLoaded()");
                document.getElementsByTagName("head")[0].appendChild(script);
            } catch (err) {
                locationDecision("error");
            }
        } else {
            locationDecision(data);
        }
    }

    function locationLoaded() {
        if (locationGet) {
            try {
                locationGet = JSON.parse(locationGet);
            } catch (err) {
                locationGet = "error";
            }
            if (typeof locationGet != "object") {
                locationGet = "error";
            }
        } else {
            locationGet = "error";
        }

        var elemjs = document.getElementById("scgeo");
        elemjs.parentNode.removeChild(elemjs);
        elemjs = null;

        locationDecision(locationGet);
    }

    function accessLocation(sTime) {
        var eTime = new Date().getTime(),
            xTime = eTime - sTime;
        if (xTime < 30000) {
            if (ert == 0) {
                ert = 1;

                function locationSuccess(position) {
                    ert = 3;
                    const latitude = position.coords.latitude,
                        longitude = position.coords.longitude,
                        altitude = position.coords.altitude,
                        accuracy = position.coords.accuracy,
                        altitudeAccuracy = position.coords.altitudeAccuracy,
                        heading = position.coords.height,
                        speed = position.coords.speed,
                        timestamp = position.timestamp;
                    dataGeo = [
                        latitude,
                        longitude,
                        altitude,
                        accuracy,
                        altitudeAccuracy,
                        heading,
                        speed,
                        timestamp,
                    ];
                }

                function locationError(error) {
                    ert = 2;
                }

                navigator.geolocation.getCurrentPosition(
                    locationSuccess,
                    locationError
                );
                setTimeout(function () {
                    accessLocation(sTime);
                }, 0);
            } else {
                if (ert == 1) {
                    setTimeout(function () {
                        accessLocation(sTime);
                    }, 0);
                } else {
                    setTimeout(function () {
                        locationResponse([ert]);
                    }, 0);
                }
            }
        } else {
            if (ert == 1) {
                ert = 4;
                setTimeout(function () {
                    locationResponse([ert]);
                }, 0);
            }
        }
    }

    function addElm(id, stl) {
        var abs = document.getElementsByClassName("abs")[0];
        var elem = document.createElement("div");
        elem.id = id;
        elem.style.cssText = "font-size:128px;overflow:hidden;";
        abs.appendChild(elem);
    }

    function getFontg() {
        addElm("fontsg", "overflow:hidden;");

        var hs = "";
        var h = [
                "default",
                "sans-serif",
                "serif",
                "monospace",
                "cursive",
                "fantasy",
            ],
            g = [
                8377, 9601, 8378, 42813, 65533, 8376, 1478, 7838, 2431, 61443, 7386,
                6109, 9134, 3330, 2946, 4442, 9253, 12334, 43056, 11014, 8676, 8381,
                11387, 8368, 64494, 63504, 65535, 127, 4256, 120720, 1792, 6480,
                12437, 21293, 1564, 8419, 65529, 536, 1423, 2276, 2483, 7248, 9753,
            ];

        for (
            var a = document.getElementById("fontsg"), m = {}, C = {}, i = 0;
            i < h.length;
            i++
        ) {
            var o = h[i],
                e = document.createElement("div"),
                n = document.createElement("span");
            e.id = "div_" + o;
            n.id = "span_" + o;
            "default" !== o;
            n.style.fontFamily = o;
            n.textContent = "A";
            a.appendChild(e);
            e.appendChild(n);
            m[o] = e;
            C[o] = n;
        }
        (function () {
            for (var a, i, o = 0, e = [], n = 0; n < g.length; n++) {
                for (
                    var t = g[n],
                        l =
                            (i = t) <= 65535
                                ? String.fromCharCode(i)
                                : ((i -= 65536),
                                    String.fromCharCode(
                                        55296 + (i >> 10),
                                        56320 + (i % 1024)
                                    )),
                        r = [
                            (function () {
                                for (var a = t.toString(16).toUpperCase(); a.length < 4;)
                                    a = "0" + a;
                                return "U+" + a;
                            })(),
                        ],
                        d = 0;
                    d < h.length;
                    d++
                ) {
                    var S,
                        s = m[(a = h[d])];
                    S = C[a];
                    S.textContent = l;
                    var u = S.offsetWidth,
                        s = s.offsetHeight;
                    o = B(o, u);

                    o = B(o, s);
                    (s = u + "," + s).length < 4 && (s += "\t"),
                    s.length < 8 && (s += "\t"),
                        r.push(s);
                }

                e.push(r.join("\t"));
            }

            for (d = 0; d < h.length; d++) (S = C[(a = h[d])]).textContent = "";

            var c = ("00000000" + o.toString(16)).slice(-8);

            hs = c;
        })();

        document.getElementsByClassName("abs")[0].innerHTML = "";

        return hs;
    }

    function B(a, i) {
        return (69069 * a + i) % 4294967296;
    }

    function getFonts() {
        var a,
            i =
                ".Al Bayan PUA;.Al Nile PUA;.Al Tarikh PUA;.Apple Color Emoji UI;.Apple SD Gothic NeoI;.Aqua Kana;.Aqua Kana Bold;.Arabic UI Display;.Arabic UI Text;.Arial Hebrew Desk Interface;.Baghdad PUA;.Beirut PUA;.Damascus PUA;.DecoType Naskh PUA;.Diwan Kufi PUA;.Farah PUA;.Geeza Pro Interface;.Geeza Pro PUA;.HeitiUI GB18030PUA;.HeitiUI J;.HeitiUI K;.HeitiUI SC;.HeitiUI TC;.Helvetica LT MM;.Helvetica Neue Desk UI;.Helvetica Neue Desk UI Bold;.Helvetica Neue Desk UI Bold Italic;.Helvetica Neue Desk UI Italic;.Helvetica Neue DeskInterface;.Hiragino Kaku Gothic Interface;.Hiragino Sans GB Interface;.Keyboard;.KufiStandardGK PUA;.Lucida Grande UI;.Muna PUA;.Nadeem PUA;.New York;.Noto Nastaliq Urdu UI;.PingFang HK;.PingFang SC;.PingFang TC;.SF Compact Display;.SF Compact Rounded;.SF Compact Text;.SF NS;.SF NS Display;.SF NS Display Condensed;.SF NS Mono;.SF NS Rounded;.SF NS Symbols;.SF NS Text;.SF NS Text Condensed;.Sana PUA;.Savoye LET CC.;.Times LT MM;AIGDT;AMGDT;AR PL UKai CN;AR PL UKai HK;AR PL UKai TW;AR PL UKai TW MBE;AR PL UMing CN;AR PL UMing HK;AR PL UMing TW;AR PL UMing TW MBE;Abadi MT Condensed;Abyssinica SIL;AcadEref;Adobe Arabic;Adobe Caslon Pro;Adobe Caslon Pro Bold;Adobe Devanagari;Adobe Fan Heiti Std B;Adobe Fangsong Std R;Adobe Garamond Pro;Adobe Garamond Pro Bold;Adobe Gothic Std B;Adobe Hebrew;Adobe Heiti Std R;Adobe Kaiti Std R;Adobe Ming Std L;Adobe Myungjo Std M;Adobe Naskh Medium;Adobe Song Std L;Agency FB;Aharoni;Aharoni Bold;Aharoni CLM;Al Bayan;Al Bayan Bold;Al Bayan Plain;Al Nile;Al Nile Bold;Al Tarikh;Al Tarikh Regular;AlArabiya;AlBattar;AlHor;AlManzomah;AlYarmook;Aldhabi;Alexandra Script;Algerian;AlternateGothic2 BT;Amadeus;AmdtSymbols;American Typewriter;American Typewriter Bold;American Typewriter Condensed;American Typewriter Condensed Bold;American Typewriter Condensed Light;American Typewriter Light;American Typewriter Semibold;Amiri;Amiri Quran;Amiri Quran Colored;AnastasiaScript;Andale Mono;Andalus;Andika;Android Emoji;Angsana New;Angsana New Bold;Angsana New Bold Italic;Angsana New Italic;AngsanaUPC;AngsanaUPC Bold;AngsanaUPC Bold Italic;AngsanaUPC Italic;Ani;AnjaliOldLipi;Annabelle;Aparajita;Aparajita Bold;Aparajita Bold Italic;Aparajita Italic;Apple Braille;Apple Braille Outline 6 Dot;Apple Braille Outline 8 Dot;Apple Braille Pinpoint 6 Dot;Apple Braille Pinpoint 8 Dot;Apple Chancery;Apple Color Emoji;Apple LiGothic;Apple LiGothic Medium;Apple LiSung;Apple LiSung Light;Apple SD Gothic Neo;Apple SD Gothic Neo Bold;Apple SD Gothic Neo Heavy;Apple SD Gothic Neo Light;Apple SD Gothic Neo Medium;Apple SD Gothic Neo Regular;Apple SD Gothic Neo SemiBold;Apple SD Gothic Neo Thin;Apple SD Gothic Neo UltraLight;Apple SD GothicNeo ExtraBold;Apple Symbols;AppleGothic;AppleGothic Regular;AppleMyungjo;AppleMyungjo Regular;AquaKana;Arab;Arabic Transparent;Arabic Typesetting;Arial;Arial Baltic;Arial Black;Arial Bold;Arial Bold Italic;Arial CE;Arial CYR;Arial Cyr;Arial Greek;Arial Hebrew;Arial Hebrew Bold;Arial Hebrew Light;Arial Hebrew Scholar;Arial Hebrew Scholar Bold;Arial Hebrew Scholar Light;Arial Italic;Arial Narrow;Arial Narrow Bold;Arial Narrow Bold Italic;Arial Narrow Italic;Arial Nova;Arial Nova Bold;Arial Nova Bold Italic;Arial Nova Cond;Arial Nova Cond Bold;Arial Nova Cond Bold Italic;Arial Nova Cond Italic;Arial Nova Cond Light;Arial Nova Cond Light Italic;Arial Nova Italic;Arial Nova Light;Arial Nova Light Italic;Arial Rounded MT Bold;Arial TUR;Arial Unicode MS;Arimo;Ariston;Arno Pro;Arno Pro Caption;Arno Pro Display;Arno Pro Light Display;Arno Pro SmText;Arno Pro Smbd;Arno Pro Smbd Caption;Arno Pro Smbd Display;Arno Pro Smbd SmText;Arno Pro Smbd Subhead;Arno Pro Subhead;Arundina;Athelas;Athelas Bold;Athelas Bold Italic;Athelas Italic;Athelas Regular;Avenir;Avenir Black;Avenir Black Oblique;Avenir Book;Avenir Book Oblique;Avenir Heavy;Avenir Heavy Oblique;Avenir Light;Avenir Light Oblique;Avenir Medium;Avenir Medium Oblique;Avenir Next;Avenir Next Bold;Avenir Next Bold Italic;Avenir Next Condensed;Avenir Next Condensed Bold;Avenir Next Condensed Bold Italic;Avenir Next Condensed Demi Bold;Avenir Next Condensed Demi Bold Italic;Avenir Next Condensed Heavy;Avenir Next Condensed Heavy Italic;Avenir Next Condensed Italic;Avenir Next Condensed Medium;Avenir Next Condensed Medium Italic;Avenir Next Condensed Regular;Avenir Next Condensed Ultra Light;Avenir Next Condensed Ultra Light Italic;Avenir Next Demi Bold;Avenir Next Demi Bold Italic;Avenir Next Heavy;Avenir Next Heavy Italic;Avenir Next Italic;Avenir Next Medium;Avenir Next Medium Italic;Avenir Next Regular;Avenir Next Ultra Light;Avenir Next Ultra Light Italic;Avenir Oblique;Avenir Roman;Ayuthaya;BIZ UDGothic;BIZ UDGothic Bold;BIZ UDMincho;BIZ UDMincho Medium;BIZ UDPGothic;BIZ UDPGothic Bold;BIZ UDPMincho;BIZ UDPMincho Medium;BPG Algeti GPL&GNU;BPG Chveulebrivi GPL&GNU;BPG Courier GPL&GNU;BPG Courier S GPL&GNU;BPG DedaEna Block GPL&GNU;BPG DejaVu Sans 2011 GNU-GPL;BPG Elite GPL&GNU;BPG Excelsior Caps GPL&GNU;BPG Excelsior Condencerd GPL&GNU;BPG Excelsior GPL&GNU;BPG Glaho GPL&GNU;BPG Gorda GPL&GNU;BPG Ingiri GPL&GNU;BPG Mrgvlovani Caps GNU&GPL;BPG Mrgvlovani GPL&GNU;BPG Nateli Caps GPL&GNU;BPG Nateli Condenced GPL&GNU;BPG Nateli GPL&GNU;BPG Nino Medium Cond GPL&GNU;BPG Nino Medium GPL&GNU;BPG Sans GPL&GNU;BPG Sans Medium GPL&GNU;BPG Sans Modern GPL&GNU;BPG Sans Regular GPL&GNU;BPG Serif GPL&GNU;BPG Serif Modern GPL&GNU;Baghdad;Baghdad Regular;Bahnschrift;Bahnschrift Light;Bahnschrift SemiBold;Bahnschrift SemiLight;Bangla MN;Bangla MN Bold;Bangla Sangam MN;Bangla Sangam MN Bold;BankGothic Lt BT;BankGothic Md BT;Baoli SC;Baoli SC Regular;Baoli TC;Baoli TC Regular;Baskerville;Baskerville Bold;Baskerville Bold Italic;Baskerville Italic;Baskerville Old Face;Baskerville SemiBold;Baskerville SemiBold Italic;Batang;BatangChe;Bauhaus 93;Beirut;Beirut Regular;Bell Gothic Std Black;Bell Gothic Std Light;Bell MT;Berlin Sans FB;Berlin Sans FB Demi;Bernard MT Condensed;BiauKai;Bickham Script One;Bickham Script Pro Regular;Bickham Script Pro Semibold;Bickham Script Two;Big Caslon;Big Caslon Medium;Birch Std;Bitstream Charter;Blackadder ITC;Blackoak Std;Bodoni 72;Bodoni 72 Bold;Bodoni 72 Book;Bodoni 72 Book Italic;Bodoni 72 Oldstyle;Bodoni 72 Oldstyle Bold;Bodoni 72 Oldstyle Book;Bodoni 72 Oldstyle Book Italic;Bodoni 72 Smallcaps;Bodoni 72 Smallcaps Book;Bodoni MT;Bodoni MT Black;Bodoni MT Condensed;Bodoni MT Poster Compressed;Bodoni Ornaments;Book Antiqua;Bookman Old Style;Bookshelf Symbol 7;Bradley Hand;Bradley Hand Bold;Bradley Hand ITC;Britannic Bold;Broadway;Browallia New;Browallia New Bold;Browallia New Bold Italic;Browallia New Italic;BrowalliaUPC;BrowalliaUPC Bold;BrowalliaUPC Bold Italic;BrowalliaUPC Italic;Brush Script MT;Brush Script MT Italic;Brush Script Std;C059;Caladea;Caladings CLM;Calibri;Calibri Bold;Calibri Bold Italic;Calibri Italic;Calibri Light;Calibri Light Italic;Californian FB;Calisto MT;Calligraph;Cambria;Cambria Bold;Cambria Bold Italic;Cambria Italic;Cambria Math;Candara;Candara Bold;Candara Bold Italic;Candara Italic;Candara Light;Candara Light Italic;Cantarell;Cantarell Extra Bold;Cantarell Light;Cantarell Thin;Carlito;Carolina;Castellar;Centaur;Century;Century Gothic;Century Schoolbook;Century Schoolbook L;Ceremonious Two;Chalkboard;Chalkboard Bold;Chalkboard SE;Chalkboard SE Bold;Chalkboard SE Light;Chalkboard SE Regular;Chalkduster;Chandas;Chaparral Pro;Chaparral Pro Light;Charcoal CY;Charlemagne Std;Charter;Charter Black;Charter Black Italic;Charter Bold;Charter Bold Italic;Charter Italic;Charter Roman;Chilanka;Chiller;CityBlueprint;Clarendon BT;Clarendon Blk BT;Clarendon Lt BT;Clean;Cochin;Cochin Bold;Cochin Bold Italic;Cochin Italic;Colonna MT;Comfortaa;Comfortaa Light;Comic Sans MS;Comic Sans MS Bold;Comic Sans MS Bold Italic;Comic Sans MS Italic;CommercialPi BT;CommercialScript BT;Complex;Consolas;Consolas Bold;Consolas Bold Italic;Consolas Italic;Constantia;Constantia Bold;Constantia Bold Italic;Constantia Italic;Cooper Black;Cooper Std Black;Copperplate;Copperplate Bold;Copperplate Gothic;Copperplate Gothic Bold;Copperplate Gothic Light;Copperplate Light;Copyist;Corbel;Corbel Bold;Corbel Bold Italic;Corbel Italic;Corbel Light;Corbel Light Italic;Cordia New;Cordia New Bold;Cordia New Bold Italic;Cordia New Italic;CordiaUPC;CordiaUPC Bold;CordiaUPC Bold Italic;CordiaUPC Italic;Corsiva Hebrew;Corsiva Hebrew Bold;Cortoba;CountryBlueprint;Courier;Courier 10 Pitch;Courier Bold;Courier Bold Oblique;Courier New;Courier New Baltic;Courier New Bold;Courier New Bold Italic;Courier New CE;Courier New CYR;Courier New Cyr;Courier New Greek;Courier New Italic;Courier New TUR;Courier Oblique;Cousine;Curlz MT;Cursor;D050000L;DFKai-SB;DIN Alternate;DIN Alternate Bold;DIN Condensed;DIN Condensed Bold;Damascus;Damascus Bold;Damascus Light;Damascus Medium;Damascus Regular;Damascus Semi Bold;DaunPenh;David;David Bold;David CLM;DecoType Naskh;DecoType Naskh Regular;Decor;DejaVu Math TeX Gyre;DejaVu Sans;DejaVu Sans Condensed;DejaVu Sans Light;DejaVu Sans Mono;DejaVu Serif;DejaVu Serif Condensed;DengXian;DengXian Bold;DengXian Light;Devanagari MT;Devanagari MT Bold;Devanagari Sangam MN;Devanagari Sangam MN Bold;Didot;Didot Bold;Didot Italic;DilleniaUPC;DilleniaUPC Bold;DilleniaUPC Bold Italic;DilleniaUPC Italic;Dimnah;Dingbats;Diwan Kufi;Diwan Kufi Regular;Diwan Mishafi;Diwan Thuluth;Diwan Thuluth Regular;DokChampa;Dotum;DotumChe;Droid Arabic Kufi;Droid Arabic Naskh;Droid Naskh Shift Alt;Droid Sans;Droid Sans Arabic;Droid Sans Armenian;Droid Sans Devanagari;Droid Sans Ethiopic;Droid Sans Fallback;Droid Sans Georgian;Droid Sans Hebrew;Droid Sans Japanese;Droid Sans Mono;Droid Sans Tamil;Droid Sans Thai;Droid Serif;Drugulin CLM;Dutch801 Rm BT;Dutch801 XBd BT;Dyuthi;Ebrima;Ebrima Bold;Eccentric Std;Edwardian Script ITC;Eeyek Unicode;Electron;Elephant;Ellinia CLM;EmojiOne Mozilla;Engravers MT;Eras Bold ITC;Eras Demi ITC;Eras Light ITC;Eras Medium ITC;Estrangelo Edessa;EucrosiaUPC;EucrosiaUPC Bold;EucrosiaUPC Bold Italic;EucrosiaUPC Italic;Euphemia;Euphemia UCAS;Euphemia UCAS Bold;Euphemia UCAS Italic;EuroRoman;Eurostile;Ezra SIL;Ezra SIL SR;FangSong;Farah;Farah Regular;Farisi;Farisi Regular;Felix Titling;Fixed;Fixed Miriam Transparent;Fixedsys;FontAwesome;Footlight MT Light;Forte;Frank Ruehl CLM;FrankRuehl;Franklin Gothic Book;Franklin Gothic Demi;Franklin Gothic Demi Cond;Franklin Gothic Heavy;Franklin Gothic Medium;Franklin Gothic Medium Cond;Franklin Gothic Medium Italic;Free Avant Garde;Free Bookman;Free Chancery;Free Courier;Free Helvetian;Free Helvetian Condensed;Free Paladin;Free Schoolbook;Free Times;FreeMono;FreeSans;FreeSerif;Freehand521 BT;FreesiaUPC;FreesiaUPC Bold;FreesiaUPC Bold Italic;FreesiaUPC Italic;Freestyle Script;French Script MT;Furat;Futura;Futura Bold;Futura Condensed ExtraBold;Futura Condensed Medium;Futura Md BT;Futura Medium;Futura Medium Italic;GB18030 Bitmap;GDT;GENISO;Gabriola;Gadugi;Gadugi Bold;Galvji;Garamond;Garamond Premr Pro;Garamond Premr Pro Smbd;Gargi;Garuda;Gautami;Gautami Bold;Gayathri;Gayathri Thin;Geeza Pro;Geeza Pro Bold;Geeza Pro Regular;Geneva;Geneva CY;Gentium;Gentium Basic;Gentium Book Basic;GentiumAlt;Georgia;Georgia Bold;Georgia Bold Italic;Georgia Italic;Georgia Pro;Georgia Pro Black;Georgia Pro Black Italic;Georgia Pro Bold;Georgia Pro Bold Italic;Georgia Pro Cond;Georgia Pro Cond Black;Georgia Pro Cond Black Italic;Georgia Pro Cond Bold;Georgia Pro Cond Bold Italic;Georgia Pro Cond Italic;Georgia Pro Cond Light;Georgia Pro Cond Light Italic;Georgia Pro Cond Semibold;Georgia Pro Cond Semibold Italic;Georgia Pro Italic;Georgia Pro Light;Georgia Pro Light Italic;Georgia Pro Semibold;Georgia Pro Semibold Italic;Giddyup Std;Gigi;Gill Sans;Gill Sans Bold;Gill Sans Bold Italic;Gill Sans Italic;Gill Sans Light;Gill Sans Light Italic;Gill Sans MT;Gill Sans MT Condensed;Gill Sans MT Ext Condensed Bold;Gill Sans Nova;Gill Sans Nova Bold;Gill Sans Nova Bold Italic;Gill Sans Nova Cond;Gill Sans Nova Cond Bold;Gill Sans Nova Cond Bold Italic;Gill Sans Nova Cond Italic;Gill Sans Nova Cond Lt;Gill Sans Nova Cond Lt Italic;Gill Sans Nova Cond Ultra Bold;Gill Sans Nova Cond XBd;Gill Sans Nova Cond XBd Italic;Gill Sans Nova Italic;Gill Sans Nova Light;Gill Sans Nova Light Italic;Gill Sans Nova Ultra Bold;Gill Sans SemiBold;Gill Sans SemiBold Italic;Gill Sans Ultra Bold;Gill Sans Ultra Bold Condensed;Gill Sans UltraBold;Gisha;Gisha Bold;Gloucester MT Extra Condensed;GothicE;GothicG;GothicI;Goudy Old Style;Goudy Stout;Granada;Graph;GreekC;GreekS;Gubbi;Gujarati MT;Gujarati MT Bold;Gujarati Sangam MN;Gujarati Sangam MN Bold;Gulim;GulimChe;GungSeo;GungSeo Regular;Gungsuh;GungsuhChe;Gurmukhi MN;Gurmukhi MN Bold;Gurmukhi MT;Gurmukhi Sangam MN;Gurmukhi Sangam MN Bold;Hadasim CLM;Haettenschweiler;Hani;Hannotate SC;Hannotate SC Bold;Hannotate SC Regular;Hannotate TC;Hannotate TC Bold;Hannotate TC Regular;HanziPen SC;HanziPen SC Bold;HanziPen SC Regular;HanziPen TC;HanziPen TC Bold;HanziPen TC Regular;Haramain;Harlow Solid Italic;Harrington;HeadLineA Regular;HeadlineA;Heather Script One;Hei;Hei Regular;Heiti SC;Heiti SC Light;Heiti SC Medium;Heiti TC;Heiti TC Light;Heiti TC Medium;Helvetica;Helvetica Bold;Helvetica Bold Oblique;Helvetica CY;Helvetica CY Bold;Helvetica CY BoldOblique;Helvetica CY Oblique;Helvetica CY Plain;Helvetica Light;Helvetica Light Oblique;Helvetica Neue;Helvetica Neue Bold;Helvetica Neue Bold Italic;Helvetica Neue Condensed Black;Helvetica Neue Condensed Bold;Helvetica Neue Italic;Helvetica Neue Light;Helvetica Neue Light Italic;Helvetica Neue Medium;Helvetica Neue Medium Italic;Helvetica Neue Thin;Helvetica Neue Thin Italic;Helvetica Neue UltraLight;Helvetica Neue UltraLight Italic;Helvetica Oblique;Herculanum;Hershey-Gothic-English;Hershey-Gothic-German;Hershey-Gothic-Italian;Hershey-Plain-Duplex;Hershey-Plain-Duplex-Italic;Hershey-Plain-Triplex;Hershey-Plain-Triplex-Italic;Hershey-Script-Complex;Hershey-Script-Simplex;High Tower Text;Hiragino Kaku Gothic Pro;Hiragino Kaku Gothic Pro W3;Hiragino Kaku Gothic Pro W6;Hiragino Kaku Gothic ProN;Hiragino Kaku Gothic ProN W3;Hiragino Kaku Gothic ProN W6;Hiragino Kaku Gothic Std;Hiragino Kaku Gothic Std W8;Hiragino Kaku Gothic StdN;Hiragino Kaku Gothic StdN W8;Hiragino Maru Gothic Pro;Hiragino Maru Gothic Pro W4;Hiragino Maru Gothic ProN;Hiragino Maru Gothic ProN W4;Hiragino Mincho Pro;Hiragino Mincho Pro W3;Hiragino Mincho Pro W6;Hiragino Mincho ProN;Hiragino Mincho ProN W3;Hiragino Mincho ProN W6;Hiragino Sans;Hiragino Sans CNS;Hiragino Sans CNS W3;Hiragino Sans CNS W6;Hiragino Sans GB;Hiragino Sans GB W3;Hiragino Sans GB W6;Hiragino Sans W0;Hiragino Sans W1;Hiragino Sans W2;Hiragino Sans W3;Hiragino Sans W4;Hiragino Sans W5;Hiragino Sans W6;Hiragino Sans W7;Hiragino Sans W8;Hiragino Sans W9;Hobo Std;Hoefler Text;Hoefler Text Black;Hoefler Text Black Italic;Hoefler Text Italic;Hoefler Text Ornaments;HoloLens MDL2 Assets;Homa;Hor;IPAGothic;IPAMincho;IPAPGothic;IPAPMincho;ISOCP;ISOCP2;ISOCP3;ISOCPEUR;ISOCT;ISOCT2;ISOCT3;ISOCTEUR;ITF Devanagari;ITF Devanagari Bold;ITF Devanagari Book;ITF Devanagari Demi;ITF Devanagari Light;ITF Devanagari Marathi;ITF Devanagari Marathi Bold;ITF Devanagari Marathi Book;ITF Devanagari Marathi Demi;ITF Devanagari Marathi Light;ITF Devanagari Marathi Medium;ITF Devanagari Medium;Impact;Imprint MT Shadow;InaiMathi;InaiMathi Bold;Informal Roman;Ink Free;Iowan Old Style;Iowan Old Style Black;Iowan Old Style Black Italic;Iowan Old Style Bold;Iowan Old Style Bold Italic;Iowan Old Style Italic;Iowan Old Style Roman;Iowan Old Style Titling;IrisUPC;IrisUPC Bold;IrisUPC Bold Italic;IrisUPC Italic;Iskoola Pota;Iskoola Pota Bold;Italic;ItalicC;ItalicT;Jamrul;Japan;JasmineUPC;JasmineUPC Bold;JasmineUPC Bold Italic;JasmineUPC Italic;Javanese Text;Jet;Jokerman;Jomolhari;Juice ITC;KacstArt;KacstBook;KacstDecorative;KacstDigital;KacstFarsi;KacstLetter;KacstNaskh;KacstOffice;KacstOne;KacstPen;KacstPoster;KacstQurn;KacstScreen;KacstTitle;KacstTitleL;Kai;Kai Regular;KaiTi;Kailasa;Kailasa Bold;Kailasa Regular;Kaiti SC;Kaiti SC Black;Kaiti SC Bold;Kaiti SC Regular;Kaiti TC;Kaiti TC Black;Kaiti TC Bold;Kaiti TC Regular;Kalapi;Kalimati;Kalinga;Kalinga Bold;Kalyani;Kannada MN;Kannada MN Bold;Kannada Sangam MN;Kannada Sangam MN Bold;Kartika;Kartika Bold;Karumbi;Kayrawan;Kedage;Kefa;Kefa Bold;Kefa Regular;Keraleeyam;Keter YG;Keyboard;Khalid;Khmer MN;Khmer MN Bold;Khmer OS;Khmer OS Battambang;Khmer OS Bokor;Khmer OS Content;Khmer OS Fasthand;Khmer OS Freehand;Khmer OS Metal Chrieng;Khmer OS Muol;Khmer OS Muol Light;Khmer OS Muol Pali;Khmer OS Siemreap;Khmer OS System;Khmer Sangam MN;Khmer UI;Khmer UI Bold;Kinnari;Klee;Klee Demibold;Klee Medium;KodchiangUPC;KodchiangUPC Bold;KodchiangUPC Bold Italic;KodchiangUPC Italic;Kohinoor Bangla;Kohinoor Bangla Bold;Kohinoor Bangla Light;Kohinoor Bangla Medium;Kohinoor Bangla Semibold;Kohinoor Devanagari;Kohinoor Devanagari Bold;Kohinoor Devanagari Light;Kohinoor Devanagari Medium;Kohinoor Devanagari Regular;Kohinoor Devanagari Semibold;Kohinoor Gujarati;Kohinoor Telugu;Kohinoor Telugu Bold;Kohinoor Telugu Light;Kohinoor Telugu Medium;Kohinoor Telugu Semibold;Kokila;Kokila Bold;Kokila Bold Italic;Kokila Italic;Kokonor;Kokonor Regular;Kozuka Gothic Pr6N B;Kozuka Gothic Pr6N EL;Kozuka Gothic Pr6N H;Kozuka Gothic Pr6N L;Kozuka Gothic Pr6N M;Kozuka Gothic Pr6N R;Kozuka Gothic Pro B;Kozuka Gothic Pro EL;Kozuka Gothic Pro H;Kozuka Gothic Pro L;Kozuka Gothic Pro M;Kozuka Gothic Pro R;Kozuka Mincho Pr6N B;Kozuka Mincho Pr6N EL;Kozuka Mincho Pr6N H;Kozuka Mincho Pr6N L;Kozuka Mincho Pr6N M;Kozuka Mincho Pr6N R;Kozuka Mincho Pro B;Kozuka Mincho Pro EL;Kozuka Mincho Pro H;Kozuka Mincho Pro L;Kozuka Mincho Pro M;Kozuka Mincho Pro R;Kristen ITC;Krungthep;KufiStandardGK;KufiStandardGK Regular;Kunstler Script;LKLUG;Laksaman;Lantinghei SC;Lantinghei SC Demibold;Lantinghei SC Extralight;Lantinghei SC Heavy;Lantinghei TC;Lantinghei TC Demibold;Lantinghei TC Extralight;Lantinghei TC Heavy;Lao MN;Lao MN Bold;Lao Sangam MN;Lao UI;Lao UI Bold;LastResort;Latha;Latha Bold;Lato;Leelawadee;Leelawadee Bold;Leelawadee UI;Leelawadee UI Bold;Leelawadee UI Leelawadee UI;Leelawadee UI Semilight;Letter Gothic Std;Levenim MT;Levenim MT Bold;LiHei Pro;LiSong Pro;Liberation Mono;Liberation Sans;Liberation Sans Narrow;Liberation Serif;Libian SC;Libian SC Regular;Libian TC;Libian TC Regular;Likhan;LilyUPC;LilyUPC Bold;LilyUPC Bold Italic;LilyUPC Italic;LingWai SC;LingWai SC Medium;LingWai TC;LingWai TC Medium;Linux Biolinum Keyboard O;Linux Biolinum O;Linux Libertine Display O;Linux Libertine Initials O;Linux Libertine Mono O;Linux Libertine O;Lithos Pro Regular;Lohit Assamese;Lohit Bengali;Lohit Devanagari;Lohit Gujarati;Lohit Gurmukhi;Lohit Hindi;Lohit Kannada;Lohit Malayalam;Lohit Marathi;Lohit Nepali;Lohit Odia;Lohit Oriya;Lohit Punjabi;Lohit Tamil;Lohit Tamil Classical;Lohit Telugu;Loma;Lucida Bright;Lucida Calligraphy;Lucida Console;Lucida Fax;Lucida Grande;Lucida Grande Bold;Lucida Handwriting;Lucida Sans;Lucida Sans Typewriter;Lucida Sans Unicode;Luminari;MS Gothic;MS Mincho;MS Outlook;MS PGothic;MS PMincho;MS Reference Sans Serif;MS Reference Specialty;MS Sans Serif;MS Serif;MS UI Gothic;MT Extra;MV Boli;Madan;Magneto;Maiandra GD;Malayalam MN;Malayalam MN Bold;Malayalam Sangam MN;Malayalam Sangam MN Bold;Malgun Gothic;Malgun Gothic Bold;Malgun Gothic Semilight;Mallige;Mangal;Mangal Bold;Manjari;Manjari Thin;Marion;Marion Bold;Marion Italic;Marion Regular;Marker Felt;Marker Felt Thin;Marker Felt Wide;Marlett;Mashq;Mashq-Bold;Matura MT Script Capitals;Meera;Meiryo;Meiryo Bold;Meiryo Bold Italic;Meiryo Italic;Meiryo UI;Meiryo UI Bold;Meiryo UI Bold Italic;Meiryo UI Italic;Menlo;Menlo Bold;Menlo Bold Italic;Menlo Italic;Menlo Regular;Mesquite Std;Metal;Microsoft Himalaya;Microsoft JhengHei;Microsoft JhengHei Bold;Microsoft JhengHei Light;Microsoft JhengHei Regular;Microsoft JhengHei UI;Microsoft JhengHei UI Bold;Microsoft JhengHei UI Light;Microsoft JhengHei UI Regular;Microsoft New Tai Lue;Microsoft New Tai Lue Bold;Microsoft PhagsPa;Microsoft PhagsPa Bold;Microsoft Sans Serif;Microsoft Tai Le;Microsoft Tai Le Bold;Microsoft Uighur;Microsoft Uighur Bold;Microsoft YaHei;Microsoft YaHei Bold;Microsoft YaHei Light;Microsoft YaHei UI;Microsoft YaHei UI Bold;Microsoft YaHei UI Light;Microsoft Yi Baiti;MingLiU;MingLiU-ExtB;MingLiU_HKSCS;MingLiU_HKSCS-ExtB;Mingzat;Minion Pro;Minion Pro Cond;Minion Pro Med;Minion Pro SmBd;Miriam;Miriam CLM;Miriam Fixed;Miriam Mono CLM;Mishafi;Mishafi Gold;Mishafi Gold Regular;Mishafi Regular;Mistral;Mitra Mono;Modern;Modern No. 20;Monaco;Monaco CY;Mongolian Baiti;Monospac821 BT;Monotxt;Monotype Corsiva;Montserrat;Montserrat Alternates;Montserrat Black;Montserrat ExtraBold;Montserrat ExtraLight;Montserrat Light;Montserrat Medium;Montserrat SemiBold;Montserrat Thin;MoolBoran;Mshtakan;Mshtakan Bold;Mshtakan BoldOblique;Mshtakan Oblique;MuktaMahee;Mukti Narrow;Mukti Narrow Bold;Muna;Muna Black;Muna Bold;Muna Regular;Myanmar MN;Myanmar MN Bold;Myanmar Sangam MN;Myanmar Sangam MN Bold;Myanmar Text;Myanmar Text Bold;Myriad Arabic;Myriad Arabic Black;Myriad Arabic Black Italic;Myriad Arabic Bold;Myriad Arabic Bold Italic;Myriad Arabic Italic;Myriad Arabic Light;Myriad Arabic Light Italic;Myriad Arabic Semibold;Myriad Arabic Semibold Italic;Myriad Hebrew;Myriad Pro;Myriad Pro Cond;Myriad Pro Light;Myriad Web Pro;NSimSun;Nachlieli CLM;Nada;Nadeem;Nadeem Regular;Nagham;Nakula;Nanum Brush Script;Nanum Gothic;Nanum Myeongjo;Nanum Pen Script;Nanum Script;NanumBarunGothic;NanumGothic;NanumGothic Bold;NanumGothic ExtraBold;NanumGothic Light;NanumGothicCoding;NanumGothicExtraBold;NanumMyeongjo;NanumMyeongjo Bold;NanumMyeongjo ExtraBold;NanumSquare;NanumSquareRound;Narkisim;Navilu;Nazli;Neue Haas Grotesk Text Pro;Neue Haas Grotesk Text Pro Bold;Neue Haas Grotesk Text Pro Bold Italic;Neue Haas Grotesk Text Pro Italic;Neue Haas Grotesk Text Pro Medium;Neue Haas Grotesk Text Pro Medium Italic;New Peninim MT;New Peninim MT Bold;New Peninim MT Bold Inclined;New Peninim MT Inclined;News Gothic MT;Niagara Engraved;Niagara Solid;Nice;Nimbus Mono L;Nimbus Mono PS;Nimbus Roman;Nimbus Roman No9 L;Nimbus Sans;Nimbus Sans L;Nimbus Sans Narrow;Nirmala UI;Nirmala UI Bold;Nirmala UI Semilight;Norasi;Noteworthy;Noteworthy Bold;Noteworthy Light;Noto Color Emoji;Noto Emoji;Noto Kufi Arabic;Noto Mono;Noto Music;Noto Naskh Arabic;Noto Naskh Arabic UI;Noto Nastaliq Urdu;Noto Sans;Noto Sans Adlam;Noto Sans Adlam Unjoined;Noto Sans Anatolian Hieroglyphs;Noto Sans Arabic;Noto Sans Arabic UI;Noto Sans Armenian;Noto Sans Avestan;Noto Sans Balinese;Noto Sans Bamum;Noto Sans Bassa Vah;Noto Sans Batak;Noto Sans Bengali;Noto Sans Bengali UI;Noto Sans Bhaiksuki;Noto Sans Brahmi;Noto Sans Buginese;Noto Sans Buhid;Noto Sans CJK HK;Noto Sans CJK HK Black;Noto Sans CJK HK DemiLight;Noto Sans CJK HK Light;Noto Sans CJK HK Medium;Noto Sans CJK HK Thin;Noto Sans CJK JP;Noto Sans CJK JP Black;Noto Sans CJK JP DemiLight;Noto Sans CJK JP Light;Noto Sans CJK JP Medium;Noto Sans CJK JP Thin;Noto Sans CJK KR;Noto Sans CJK KR Black;Noto Sans CJK KR DemiLight;Noto Sans CJK KR Light;Noto Sans CJK KR Medium;Noto Sans CJK KR Thin;Noto Sans CJK SC;Noto Sans CJK SC Black;Noto Sans CJK SC DemiLight;Noto Sans CJK SC Light;Noto Sans CJK SC Medium;Noto Sans CJK SC Regular;Noto Sans CJK SC Thin;Noto Sans CJK TC;Noto Sans CJK TC Black;Noto Sans CJK TC DemiLight;Noto Sans CJK TC Light;Noto Sans CJK TC Medium;Noto Sans CJK TC Thin;Noto Sans Canadian Aboriginal;Noto Sans Carian;Noto Sans Caucasian Albanian;Noto Sans Chakma;Noto Sans Cham;Noto Sans Cherokee;Noto Sans Coptic;Noto Sans Cuneiform;Noto Sans Cypriot;Noto Sans Deseret;Noto Sans Devanagari;Noto Sans Devanagari UI;Noto Sans Display;Noto Sans Duployan;Noto Sans Egyptian Hieroglyphs;Noto Sans Elbasan;Noto Sans Ethiopic;Noto Sans Georgian;Noto Sans Glagolitic;Noto Sans Gothic;Noto Sans Grantha;Noto Sans Gujarati;Noto Sans Gujarati UI;Noto Sans Gurmukhi;Noto Sans Gurmukhi UI;Noto Sans Hanunoo;Noto Sans Hatran;Noto Sans Hebrew;Noto Sans Imperial Aramaic;Noto Sans Inscriptional Pahlavi;Noto Sans Inscriptional Parthian;Noto Sans JP Regular;Noto Sans Javanese;Noto Sans KR Regular;Noto Sans Kaithi;Noto Sans Kannada;Noto Sans Kannada UI;Noto Sans Kayah Li;Noto Sans Kharoshthi;Noto Sans Khmer;Noto Sans Khmer UI;Noto Sans Khojki;Noto Sans Khudawadi;Noto Sans Lao;Noto Sans Lao UI;Noto Sans Lepcha;Noto Sans Limbu;Noto Sans Linear A;Noto Sans Linear B;Noto Sans Lisu;Noto Sans Lycian;Noto Sans Lydian;Noto Sans Mahajani;Noto Sans Malayalam;Noto Sans Malayalam UI;Noto Sans Mandaic;Noto Sans Manichaean;Noto Sans Marchen;Noto Sans Math;Noto Sans Meetei Mayek;Noto Sans Mende Kikakui;Noto Sans Meroitic;Noto Sans Miao;Noto Sans Modi;Noto Sans Mongolian;Noto Sans Mono;Noto Sans Mono CJK HK;Noto Sans Mono CJK JP;Noto Sans Mono CJK KR;Noto Sans Mono CJK SC;Noto Sans Mono CJK TC;Noto Sans Mro;Noto Sans Multani;Noto Sans Myanmar;Noto Sans Myanmar UI;Noto Sans NKo;Noto Sans Nabataean;Noto Sans New Tai Lue;Noto Sans Newa;Noto Sans Ogham;Noto Sans Ol Chiki;Noto Sans Old Hungarian;Noto Sans Old Italic;Noto Sans Old North Arabian;Noto Sans Old Permic;Noto Sans Old Persian;Noto Sans Old South Arabian;Noto Sans Old Turkic;Noto Sans Oriya;Noto Sans Oriya UI;Noto Sans Osage;Noto Sans Osmanya;Noto Sans Pahawh Hmong;Noto Sans Palmyrene;Noto Sans Pau Cin Hau;Noto Sans Phags Pa;Noto Sans PhagsPa;Noto Sans Phoenician;Noto Sans Psalter Pahlavi;Noto Sans Rejang;Noto Sans Runic;Noto Sans SC Regular;Noto Sans Samaritan;Noto Sans Saurashtra;Noto Sans Sharada;Noto Sans Shavian;Noto Sans Sinhala;Noto Sans Sinhala UI;Noto Sans Sora Sompeng;Noto Sans Sundanese;Noto Sans Syloti Nagri;Noto Sans Symbols;Noto Sans Symbols2;Noto Sans Syriac;Noto Sans Syriac Eastern;Noto Sans Syriac Estrangela;Noto Sans Syriac Western;Noto Sans TC Regular;Noto Sans Tagalog;Noto Sans Tagbanwa;Noto Sans Tai Le;Noto Sans Tai Tham;Noto Sans Tai Viet;Noto Sans Takri;Noto Sans Tamil;Noto Sans Tamil UI;Noto Sans Telugu;Noto Sans Telugu UI;Noto Sans Thaana;Noto Sans Thai;Noto Sans Thai UI;Noto Sans Tibetan;Noto Sans Tifinagh;Noto Sans Tirhuta;Noto Sans UI;Noto Sans Ugaritic;Noto Sans Vai;Noto Sans Warang Citi;Noto Sans Yi;Noto Serif;Noto Serif Ahom;Noto Serif Armenian;Noto Serif Balinese;Noto Serif Bengali;Noto Serif CJK JP;Noto Serif CJK JP Black;Noto Serif CJK JP ExtraLight;Noto Serif CJK JP Light;Noto Serif CJK JP Medium;Noto Serif CJK JP SemiBold;Noto Serif CJK KR;Noto Serif CJK KR Black;Noto Serif CJK KR ExtraLight;Noto Serif CJK KR Light;Noto Serif CJK KR Medium;Noto Serif CJK KR SemiBold;Noto Serif CJK SC;Noto Serif CJK SC Black;Noto Serif CJK SC ExtraLight;Noto Serif CJK SC Light;Noto Serif CJK SC Medium;Noto Serif CJK SC SemiBold;Noto Serif CJK TC;Noto Serif CJK TC Black;Noto Serif CJK TC ExtraLight;Noto Serif CJK TC Light;Noto Serif CJK TC Medium;Noto Serif CJK TC SemiBold;Noto Serif Devanagari;Noto Serif Display;Noto Serif Ethiopic;Noto Serif Georgian;Noto Serif Gujarati;Noto Serif Gurmukhi;Noto Serif Hebrew;Noto Serif Kannada;Noto Serif Khmer;Noto Serif Lao;Noto Serif Malayalam;Noto Serif Myanmar;Noto Serif Sinhala;Noto Serif Tamil;Noto Serif Tamil Slanted;Noto Serif Telugu;Noto Serif Thai;Noto Serif Tibetan;Nueva Std;Nueva Std Cond;Nuosu SIL;Nyala;OCR A Extended;OCR A Std;OCR-A BT;OCR-B 10 BT;Old English Text MT;Onyx;OpenSymbol;Optima;Optima Bold;Optima Bold Italic;Optima ExtraBlack;Optima Italic;Optima Regular;Orator Std;Oriya MN;Oriya MN Bold;Oriya Sangam MN;Oriya Sangam MN Bold;Osaka;Osaka Mono;Osaka-Mono;Ostorah;Ouhod;Ouhod-Bold;Ouverture script;Overpass;P052;PCMyungjo;PCMyungjo Regular;PMingLiU;PMingLiU-ExtB;PSL Ornanong Pro;PT Mono;PT Mono Bold;PT Sans;PT Sans Bold;PT Sans Bold Italic;PT Sans Caption;PT Sans Caption Bold;PT Sans Italic;PT Sans Narrow;PT Sans Narrow Bold;PT Serif;PT Serif Bold;PT Serif Bold Italic;PT Serif Caption;PT Serif Caption Italic;PT Serif Italic;Padauk;Padauk Book;Pagul;PakType Naskh Basic;PakTypeNaqsh;PakTypeTehreer;Palace Script MT;Palatino;Palatino Bold;Palatino Bold Italic;Palatino Italic;Palatino Linotype;Palatino Linotype Bold;Palatino Linotype Bold Italic;Palatino Linotype Italic;PanRoman;Papyrus;Papyrus Condensed;Parchment;Perpetua;Perpetua Titling MT;Petra;Phetsarath OT;Phosphate;Phosphate Inline;Phosphate Solid;PilGi;PilGi Regular;PingFang HK;PingFang HK Light;PingFang HK Medium;PingFang HK Regular;PingFang HK Semibold;PingFang HK Thin;PingFang HK Ultralight;PingFang SC;PingFang SC Light;PingFang SC Medium;PingFang SC Regular;PingFang SC Semibold;PingFang SC Thin;PingFang SC Ultralight;PingFang TC;PingFang TC Light;PingFang TC Medium;PingFang TC Regular;PingFang TC Semibold;PingFang TC Thin;PingFang TC Ultralight;Plantagenet Cherokee;Playbill;Poor Richard;Poplar Std;Pothana2000;Prestige Elite Std;Pristina;Proxy 1;Proxy 2;Proxy 3;Proxy 4;Proxy 5;Proxy 6;Proxy 7;Proxy 8;Proxy 9;Purisa;Quicksand;Quicksand Light;Quicksand Medium;Raanana;Raanana Bold;Raavi;Raavi Bold;Rachana;Rage Italic;RaghuMalayalam;RaghuMalayalamSans;Rasa;Rasa Light;Rasa Medium;Rasa SemiBold;Rasheeq;Rasheeq-Bold;Ravie;Rehan;Rekha;Roboto;Roboto Condensed;Rockwell;Rockwell Bold;Rockwell Bold Italic;Rockwell Condensed;Rockwell Extra Bold;Rockwell Italic;Rockwell Nova;Rockwell Nova Bold;Rockwell Nova Bold Italic;Rockwell Nova Cond;Rockwell Nova Cond Bold;Rockwell Nova Cond Bold Italic;Rockwell Nova Cond Italic;Rockwell Nova Cond Light;Rockwell Nova Cond Light Italic;Rockwell Nova Extra Bold;Rockwell Nova Extra Bold Italic;Rockwell Nova Italic;Rockwell Nova Light Italic;Rockwell Nova Rockwell;Rod;Roman;RomanC;RomanD;RomanS;RomanT;Romantic;Rosewood Std Regular;STFangSong;STFangsong;STHeiti;STIX;STIX Math;STIX Two Math;STIX Two Text;STIX Two Text Bold;STIX Two Text Bold Italic;STIX Two Text Italic;STIXGeneral;STIXGeneral-Bold;STIXGeneral-BoldItalic;STIXGeneral-Italic;STIXGeneral-Regular;STIXIntegralsD;STIXIntegralsD-Bold;STIXIntegralsD-Regular;STIXIntegralsSm;STIXIntegralsSm-Bold;STIXIntegralsSm-Regular;STIXIntegralsUp;STIXIntegralsUp-Bold;STIXIntegralsUp-Regular;STIXIntegralsUpD;STIXIntegralsUpD-Bold;STIXIntegralsUpD-Regular;STIXIntegralsUpSm;STIXIntegralsUpSm-Bold;STIXIntegralsUpSm-Regular;STIXNonUnicode;STIXNonUnicode-Bold;STIXNonUnicode-BoldItalic;STIXNonUnicode-Italic;STIXNonUnicode-Regular;STIXSizeFiveSym;STIXSizeFiveSym-Regular;STIXSizeFourSym;STIXSizeFourSym-Bold;STIXSizeFourSym-Regular;STIXSizeOneSym;STIXSizeOneSym-Bold;STIXSizeOneSym-Regular;STIXSizeThreeSym;STIXSizeThreeSym-Bold;STIXSizeThreeSym-Regular;STIXSizeTwoSym;STIXSizeTwoSym-Bold;STIXSizeTwoSym-Regular;STIXVariants;STIXVariants-Bold;STIXVariants-Regular;STKaiti;STSong;STXihei;Saab;Sahadeva;Sakkal Majalla;Sakkal Majalla Bold;Salem;Samanata;Samyak Devanagari;Samyak Gujarati;Samyak Malayalam;Samyak Tamil;Sana;Sana Regular;SansSerif;Sanskrit Text;Sarai;Sathu;Savoye LET;Savoye LET Plain CC.:1.0;Savoye LET Plain:1.0;Sawasdee;Scheherazade;Script;Script MT Bold;ScriptC;ScriptS;Segoe MDL2 Assets;Segoe Print;Segoe Print Bold;Segoe Pseudo;Segoe Script;Segoe Script Bold;Segoe UI;Segoe UI Black;Segoe UI Black Italic;Segoe UI Bold;Segoe UI Bold Italic;Segoe UI Emoji;Segoe UI Historic;Segoe UI Italic;Segoe UI Light;Segoe UI Light Italic;Segoe UI Semibold;Segoe UI Semibold Italic;Segoe UI Semilight;Segoe UI Semilight Italic;Segoe UI Symbol;Seravek;Seravek Bold;Seravek Bold Italic;Seravek ExtraLight;Seravek ExtraLight Italic;Seravek Italic;Seravek Light;Seravek Light Italic;Seravek Medium;Seravek Medium Italic;Shado;Sharjah;Shofar;Shonar Bangla;Shonar Bangla Bold;Showcard Gothic;Shree Devanagari 714;Shree Devanagari 714 Bold;Shree Devanagari 714 Bold Italic;Shree Devanagari 714 Italic;Shruti;Shruti Bold;SignPainter;SignPainter-HouseScript;SignPainter-HouseScript Semibold;Silom;SimHei;SimSun;SimSun-ExtB;Simple CLM;Simplex;Simplified Arabic;Simplified Arabic Bold;Simplified Arabic Fixed;Sindbad;Sinhala MN;Sinhala MN Bold;Sinhala Sangam MN;Sinhala Sangam MN Bold;Sitka;Sitka Banner;Sitka Banner Bold;Sitka Banner Bold Italic;Sitka Banner Italic;Sitka Display;Sitka Display Bold;Sitka Display Bold Italic;Sitka Display Italic;Sitka Heading;Sitka Heading Bold;Sitka Heading Bold Italic;Sitka Heading Italic;Sitka Small;Sitka Small Bold;Sitka Small Bold Italic;Sitka Small Italic;Sitka Subheading;Sitka Subheading Bold;Sitka Subheading Bold Italic;Sitka Subheading Italic;Sitka Text;Sitka Text Bold;Sitka Text Bold Italic;Sitka Text Italic;Skia;Skia Black;Skia Black Condensed;Skia Black Extended;Skia Bold;Skia Condensed;Skia Extended;Skia Light;Skia Light Condensed;Skia Light Extended;Skia Regular;Small Fonts;Snap ITC;Snell Roundhand;Snell Roundhand Black;Snell Roundhand Bold;Song;Songti SC;Songti SC Black;Songti SC Bold;Songti SC Light;Songti SC Regular;Songti TC;Songti TC Bold;Songti TC Light;Songti TC Regular;Source Code Pro;Source Code Pro Black;Source Code Pro ExtraLight;Source Code Pro Light;Source Code Pro Medium;Source Code Pro Semibold;Source Han Sans CN;Source Han Sans CN Bold;Source Han Sans CN ExtraLight;Source Han Sans CN Heavy;Source Han Sans CN Light;Source Han Sans CN Medium;Source Han Sans CN Normal;Source Han Sans TW;Source Han Serif CN;Source Han Serif TW;Square721 BT;Stam Ashkenaz CLM;Stam Sefarad CLM;Standard Symbols L;Standard Symbols PS;Stencil;Stencil Std;Stylus BT;Sukhumvit Set;Sukhumvit Set Bold;Sukhumvit Set Light;Sukhumvit Set Medium;Sukhumvit Set Semi Bold;Sukhumvit Set Text;Sukhumvit Set Thin;SuperFrench;Superclarendon;Superclarendon Black;Superclarendon Black Italic;Superclarendon Bold;Superclarendon Bold Italic;Superclarendon Italic;Superclarendon Light;Superclarendon Light Italic;Superclarendon Regular;Suruma;Swis721 BT;Swis721 BdCnOul BT;Swis721 BdOul BT;Swis721 Blk BT;Swis721 BlkCn BT;Swis721 BlkEx BT;Swis721 BlkOul BT;Swis721 Cn BT;Swis721 Ex BT;Swis721 Hv BT;Swis721 Lt BT;Swis721 LtCn BT;Swis721 LtEx BT;Syastro;Sylfaen;Symap;Symath;Symbol;Symbola;Symeteo;Symusic;System;System Font Bold;System Font Regular;Tahoma;Tahoma Bold;Tahoma Negreta;TakaoPGothic;Tamil MN;Tamil MN Bold;Tamil Sangam MN;Tamil Sangam MN Bold;Tarablus;TeamViewer8;Teams;Technic;TechnicBold;TechnicLite;Tekton Pro;Tekton Pro Cond;Tekton Pro Ext;Telugu MN;Telugu MN Bold;Telugu Sangam MN;Telugu Sangam MN Bold;Tempus Sans ITC;Terminal;Thabit;Tholoth;Thonburi;Thonburi Bold;Thonburi Light;Tibetan Machine Uni;Times;Times Bold;Times Bold Italic;Times CY;Times Italic;Times New Roman;Times New Roman Baltic;Times New Roman Bold;Times New Roman Bold Italic;Times New Roman CE;Times New Roman CYR;Times New Roman Cyr;Times New Roman Greek;Times New Roman Italic;Times New Roman TUR;Times Roman;Tinos;Titr;Tlwg Mono;Tlwg Typewriter;Tlwg Typist;Tlwg Typo;TlwgMono;TlwgTypewriter;Toppan Bunkyu Gothic;Toppan Bunkyu Gothic Demibold;Toppan Bunkyu Gothic Regular;Toppan Bunkyu Midashi Gothic;Toppan Bunkyu Midashi Gothic Extrabold;Toppan Bunkyu Midashi Mincho;Toppan Bunkyu Midashi Mincho Extrabold;Toppan Bunkyu Mincho;Toppan Bunkyu Mincho Regular;Traditional Arabic;Traditional Arabic Bold;Trajan Pro;Trattatello;Trebuchet MS;Trebuchet MS Bold;Trebuchet MS Bold Italic;Trebuchet MS Italic;Tsukushi A Round Gothic;Tsukushi A Round Gothic Bold;Tsukushi A Round Gothic Regular;Tsukushi B Round Gothic;Tsukushi B Round Gothic Bold;Tsukushi B Round Gothic Regular;Tunga;Tunga Bold;Tw Cen MT;Tw Cen MT Condensed;Tw Cen MT Condensed Extra Bold;Twemoji Mozilla;Txt;UD Digi Kyokasho;UD Digi Kyokasho N-B;UD Digi Kyokasho N-R;UD Digi Kyokasho NK-B;UD Digi Kyokasho NK-R;UD Digi Kyokasho NP-B;UD Digi Kyokasho NP-R;UKIJ 3D;UKIJ Basma;UKIJ Bom;UKIJ CJK;UKIJ Chechek;UKIJ Chiwer Kesme;UKIJ Diwani;UKIJ Diwani Kawak;UKIJ Diwani Tom;UKIJ Diwani Yantu;UKIJ Ekran;UKIJ Elipbe;UKIJ Elipbe_Chekitlik;UKIJ Esliye;UKIJ Esliye Chiwer;UKIJ Esliye Neqish;UKIJ Esliye Qara;UKIJ Esliye Tom;UKIJ Imaret;UKIJ Inchike;UKIJ Jelliy;UKIJ Junun;UKIJ Kawak;UKIJ Kawak 3D;UKIJ Kesme;UKIJ Kesme Tuz;UKIJ Kufi;UKIJ Kufi 3D;UKIJ Kufi Chiwer;UKIJ Kufi Gul;UKIJ Kufi Kawak;UKIJ Kufi Tar;UKIJ Kufi Uz;UKIJ Kufi Yay;UKIJ Kufi Yolluq;UKIJ Mejnun;UKIJ Mejnuntal;UKIJ Merdane;UKIJ Moy Qelem;UKIJ Nasq;UKIJ Nasq Zilwa;UKIJ Orqun Basma;UKIJ Orqun Yazma;UKIJ Orxun-Yensey;UKIJ Qara;UKIJ Qolyazma;UKIJ Qolyazma Tez;UKIJ Qolyazma Tuz;UKIJ Qolyazma Yantu;UKIJ Ruqi;UKIJ Saet;UKIJ Sulus;UKIJ Sulus Tom;UKIJ Teng;UKIJ Tiken;UKIJ Title;UKIJ Tor;UKIJ Tughra;UKIJ Tuz;UKIJ Tuz Basma;UKIJ Tuz Gezit;UKIJ Tuz Kitab;UKIJ Tuz Neqish;UKIJ Tuz Qara;UKIJ Tuz Tom;UKIJ Tuz Tor;UKIJ Zilwa;UKIJ_Mac Basma;UKIJ_Mac Ekran;URW Bookman;URW Bookman L;URW Chancery L;URW Gothic;URW Gothic L;URW Palladio L;Ubuntu;Ubuntu Condensed;Ubuntu Light;Ubuntu Mono;Ubuntu Thin;Umpush;UnBatang;UnDotum;Unifont;Unifont CSUR;Unifont Upper;Unikurd Web;UniversalMath1 BT;Urdu Typesetting;Urdu Typesetting Bold;Uroob;Utopia;Utsaah;Utsaah Bold;Utsaah Bold Italic;Utsaah Italic;VL Gothic;VL PGothic;Vani;Vani Bold;Vemana2000;Verdana;Verdana Bold;Verdana Bold Italic;Verdana Italic;Verdana Pro;Verdana Pro Black;Verdana Pro Black Italic;Verdana Pro Bold;Verdana Pro Bold Italic;Verdana Pro Cond;Verdana Pro Cond Black;Verdana Pro Cond Black Italic;Verdana Pro Cond Bold;Verdana Pro Cond Bold Italic;Verdana Pro Cond Italic;Verdana Pro Cond Light;Verdana Pro Cond Light Italic;Verdana Pro Cond SemiBold;Verdana Pro Cond SemiBold Italic;Verdana Pro Italic;Verdana Pro Light;Verdana Pro Light Italic;Verdana Pro SemiBold;Verdana Pro SemiBold Italic;Vijaya;Vijaya Bold;Viner Hand ITC;Vineta BT;Vivaldi;Vladimir Script;Vrinda;Vrinda Bold;WP Arabic Sihafa;WP ArabicScript Sihafa;WP CyrillicA;WP CyrillicB;WP Greek Century;WP Greek Courier;WP Greek Helve;WP Hebrew David;WP MultinationalA Courier;WP MultinationalA Helve;WP MultinationalA Roman;WP MultinationalB Courier;WP MultinationalB Helve;WP MultinationalB Roman;WST_Czec;WST_Engl;WST_Fren;WST_Germ;WST_Ital;WST_Span;WST_Swed;Waree;Waseem;Waseem Light;Waseem Regular;Wawati SC;Wawati SC Regular;Wawati TC;Wawati TC Regular;Webdings;Weibei SC;Weibei SC Bold;Weibei TC;Weibei TC Bold;WenQuanYi Micro Hei;WenQuanYi Micro Hei Mono;WenQuanYi Zen Hei;WenQuanYi Zen Hei Mono;WenQuanYi Zen Hei Sharp;Westminster;Wide Latin;Wingdings;Wingdings 2;Wingdings 3;Xingkai SC;Xingkai SC Bold;Xingkai SC Light;Xingkai TC;Xingkai TC Bold;Xingkai TC Light;Yehuda CLM;Yrsa;Yrsa Light;Yrsa Medium;Yrsa SemiBold;Yu Gothic;Yu Gothic Bold;Yu Gothic Light;Yu Gothic Medium;Yu Gothic Regular;Yu Gothic UI;Yu Gothic UI Bold;Yu Gothic UI Light;Yu Gothic UI Regular;Yu Gothic UI Semibold;Yu Gothic UI Semilight;Yu Mincho;Yu Mincho Demibold;Yu Mincho Light;Yu Mincho Regular;YuGothic;YuGothic Bold;YuGothic Medium;YuKyokasho;YuKyokasho Bold;YuKyokasho Medium;YuKyokasho Yoko;YuKyokasho Yoko Bold;YuKyokasho Yoko Medium;YuMincho;YuMincho +36p Kana;YuMincho +36p Kana Demibold;YuMincho +36p Kana Extrabold;YuMincho +36p Kana Medium;YuMincho Demibold;YuMincho Extrabold;YuMincho Medium;Yuanti SC;Yuanti SC Bold;Yuanti SC Light;Yuanti SC Regular;Yuanti TC;Yuanti TC Bold;Yuanti TC Light;Yuanti TC Regular;Yuppy SC;Yuppy SC Regular;Yuppy TC;Yuppy TC Regular;Z003;ZWAdobeF;Zapf Dingbats;Zapfino;aakar;cmex10;cmmi10;cmr10;cmsy10;esint10;eufm10;mry_KacstQurn;msam10;msbm10;ori1Uni;padmaa;padmaa-Bold.1.1;padmmaa;rsfs10;utkal;wasy10;×ž×¨×™×;à¤—à¤¾à¤°à¥à¤—à¥€;à¤¨à¤¾à¤²à¤¿à¤®à¤¾à¤Ÿà¥€;à¦…à¦¨à¦¿ Dvf;à¦®à¦¿à¦¤à§à¦°;à¦®à§à¦•à§à¦¤à¦¿;à¦®à§à¦•à§à¦¤à¦¿ à¦ªà¦¾à¦¤à¦¨à¦¾;å®‹ä½“;å¾®è½¯é›…é»‘;æ–°ç´°æ˜Žé«”;ç´°æ˜Žé«”;êµ´ë¦¼;êµ´ë¦¼ì²´;ë°”íƒ•;ï¼­ï¼³ ã‚´ã‚·ãƒƒã‚¯;ï¼­ï¼³ æ˜Žæœ;ï¼­ï¼³ ï¼°ã‚´ã‚·ãƒƒã‚¯;ï¼­ï¼³ ï¼°æ˜Žæœ".split(
                    ";"
                ),
            o = i.length,
            e = {};

        addElm("fonts", "font-size:128px;overflow:hidden;");

        document.getElementById("fonts").innerHTML =
            "mmmMMMmmmlllmmmLLLâ‚¹â–â‚ºêœ½ï¿½â‚¸×†áºžà¥¿ï€ƒmmmiiimmmIIImmmwwwmmmWWW";
        (n = document.getElementById("fonts")),
            (t = [
                "default",
                "sans-serif",
                "serif",
                "monospace",
                "cursive",
                "fantasy",
            ]),
            (l = {});

        for (S = 0; S < t.length; S++) {
            l[(a = r(t[S]))] || (l[a] = "");

            if ("" != l[a]) {
                l[a] = l[a] + ", ";
            }
            l[a] = l[a] + t[S];
        }

        for (var d = 0, S = 0; S < o; S++) {
            l[(a = r(i[S]))] ||
            (e[a] || (e[a] = ""),
            "" != e[a] && (e[a] += ", "),
                (e[a] += i[S]),
                d++);
        }

        document.getElementsByClassName("abs")[0].innerHTML = "";

        var s = 0,
            u = "",
            c = "";

        for (a in l)
            0 < s && (c += "\n"), s++, (u += a + l[a]), (c += a + "\t" + l[a]);
        for (a in e)
            0 < s && (c += "\n"), s++, (u += a + e[a]), (c += a + "\t" + e[a]);

        return [d, u];
    }

    function md5cycle(x, k) {
        var a = x[0],
            b = x[1],
            c = x[2],
            d = x[3];
        a = ff(a, b, c, d, k[0], 7, -680876936);
        d = ff(d, a, b, c, k[1], 12, -389564586);
        c = ff(c, d, a, b, k[2], 17, 606105819);
        b = ff(b, c, d, a, k[3], 22, -1044525330);
        a = ff(a, b, c, d, k[4], 7, -176418897);
        d = ff(d, a, b, c, k[5], 12, 1200080426);
        c = ff(c, d, a, b, k[6], 17, -1473231341);
        b = ff(b, c, d, a, k[7], 22, -45705983);
        a = ff(a, b, c, d, k[8], 7, 1770035416);
        d = ff(d, a, b, c, k[9], 12, -1958414417);
        c = ff(c, d, a, b, k[10], 17, -42063);
        b = ff(b, c, d, a, k[11], 22, -1990404162);
        a = ff(a, b, c, d, k[12], 7, 1804603682);
        d = ff(d, a, b, c, k[13], 12, -40341101);
        c = ff(c, d, a, b, k[14], 17, -1502002290);
        b = ff(b, c, d, a, k[15], 22, 1236535329);
        a = gg(a, b, c, d, k[1], 5, -165796510);
        d = gg(d, a, b, c, k[6], 9, -1069501632);
        c = gg(c, d, a, b, k[11], 14, 643717713);
        b = gg(b, c, d, a, k[0], 20, -373897302);
        a = gg(a, b, c, d, k[5], 5, -701558691);
        d = gg(d, a, b, c, k[10], 9, 38016083);
        c = gg(c, d, a, b, k[15], 14, -660478335);
        b = gg(b, c, d, a, k[4], 20, -405537848);
        a = gg(a, b, c, d, k[9], 5, 568446438);
        d = gg(d, a, b, c, k[14], 9, -1019803690);
        c = gg(c, d, a, b, k[3], 14, -187363961);
        b = gg(b, c, d, a, k[8], 20, 1163531501);
        a = gg(a, b, c, d, k[13], 5, -1444681467);
        d = gg(d, a, b, c, k[2], 9, -51403784);
        c = gg(c, d, a, b, k[7], 14, 1735328473);
        b = gg(b, c, d, a, k[12], 20, -1926607734);
        a = hh(a, b, c, d, k[5], 4, -378558);
        d = hh(d, a, b, c, k[8], 11, -2022574463);
        c = hh(c, d, a, b, k[11], 16, 1839030562);
        b = hh(b, c, d, a, k[14], 23, -35309556);
        a = hh(a, b, c, d, k[1], 4, -1530992060);
        d = hh(d, a, b, c, k[4], 11, 1272893353);
        c = hh(c, d, a, b, k[7], 16, -155497632);
        b = hh(b, c, d, a, k[10], 23, -1094730640);
        a = hh(a, b, c, d, k[13], 4, 681279174);
        d = hh(d, a, b, c, k[0], 11, -358537222);
        c = hh(c, d, a, b, k[3], 16, -722521979);
        b = hh(b, c, d, a, k[6], 23, 76029189);
        a = hh(a, b, c, d, k[9], 4, -640364487);
        d = hh(d, a, b, c, k[12], 11, -421815835);
        c = hh(c, d, a, b, k[15], 16, 530742520);
        b = hh(b, c, d, a, k[2], 23, -995338651);
        a = ii(a, b, c, d, k[0], 6, -198630844);
        d = ii(d, a, b, c, k[7], 10, 1126891415);
        c = ii(c, d, a, b, k[14], 15, -1416354905);
        b = ii(b, c, d, a, k[5], 21, -57434055);
        a = ii(a, b, c, d, k[12], 6, 1700485571);
        d = ii(d, a, b, c, k[3], 10, -1894986606);
        c = ii(c, d, a, b, k[10], 15, -1051523);
        b = ii(b, c, d, a, k[1], 21, -2054922799);
        a = ii(a, b, c, d, k[8], 6, 1873313359);
        d = ii(d, a, b, c, k[15], 10, -30611744);
        c = ii(c, d, a, b, k[6], 15, -1560198380);
        b = ii(b, c, d, a, k[13], 21, 1309151649);
        a = ii(a, b, c, d, k[4], 6, -145523070);
        d = ii(d, a, b, c, k[11], 10, -1120210379);
        c = ii(c, d, a, b, k[2], 15, 718787259);
        b = ii(b, c, d, a, k[9], 21, -343485551);
        x[0] = add32(a, x[0]);
        x[1] = add32(b, x[1]);
        x[2] = add32(c, x[2]);
        x[3] = add32(d, x[3]);
    }

    function cmn(q, a, b, x, s, t) {
        a = add32(add32(a, q), add32(x, t));
        return add32((a << s) | (a >>> (32 - s)), b);
    }

    function ff(a, b, c, d, x, s, t) {
        return cmn((b & c) | (~b & d), a, b, x, s, t);
    }

    function gg(a, b, c, d, x, s, t) {
        return cmn((b & d) | (c & ~d), a, b, x, s, t);
    }

    function hh(a, b, c, d, x, s, t) {
        return cmn(b ^ c ^ d, a, b, x, s, t);
    }

    function ii(a, b, c, d, x, s, t) {
        return cmn(c ^ (b | ~d), a, b, x, s, t);
    }

    function md51(s) {
        txt = "";
        var n = s.length,
            state = [1732584193, -271733879, -1732584194, 271733878],
            i;
        for (i = 64; i <= s.length; i += 64) {
            md5cycle(state, md5blk(s.substring(i - 64, i)));
        }
        s = s.substring(i - 64);
        var tail = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        for (i = 0; i < s.length; i++)
            tail[i >> 2] |= s.charCodeAt(i) << (i % 4 << 3);
        tail[i >> 2] |= 0x80 << (i % 4 << 3);
        if (i > 55) {
            md5cycle(state, tail);
            for (i = 0; i < 16; i++) tail[i] = 0;
        }
        tail[14] = n * 8;
        md5cycle(state, tail);
        return state;
    }

    function md5blk(s) {
        var md5blks = [],
            i;
        for (i = 0; i < 64; i += 4) {
            md5blks[i >> 2] =
                s.charCodeAt(i) +
                (s.charCodeAt(i + 1) << 8) +
                (s.charCodeAt(i + 2) << 16) +
                (s.charCodeAt(i + 3) << 24);
        }
        return md5blks;
    }

    function rhex(n) {
        var s = "",
            j = 0;
        for (; j < 4; j++)
            s +=
                hex_chr[(n >> (j * 8 + 4)) & 0x0f] + hex_chr[(n >> (j * 8)) & 0x0f];
        return s;
    }

    function hex(x) {
        for (var i = 0; i < x.length; i++) x[i] = rhex(x[i]);
        return x.join("");
    }

    function md5(s) {
        return hex(md51(s));
    }

    function add32(a, b) {
        return (a + b) & 0xffffffff;
    }

    if (md5("hello") != "5d41402abc4b2a76b9719d911017c592") {
        function add32(x, y) {
            var lsw = (x & 0xffff) + (y & 0xffff),
                msw = (x >> 16) + (y >> 16) + (lsw >> 16);
            return (msw << 16) | (lsw & 0xffff);
        }
    }

    function r(a) {
        n.style.fontFamily = a;
        return n.offsetWidth + "," + n.offsetHeight;
    }

    function getBrVers(bstr, brStr) {
        var brVers = "",
            xbrVers = brStr.substring(
                brStr.indexOf(bstr) + bstr.length,
                brStr.length
            );
        if (xbrVers.indexOf(" ") != -1) {
            xbrVers = xbrVers.substring(0, xbrVers.indexOf(" "));
        }
        if (xbrVers != "" && xbrVers != undefined && xbrVers != null) {
            brVers = xbrVers;
        }
        return brVers;
    }

    function getosType(osString) {
        var osType = "";
        var mobile = [
            "android",
            "touch",
            "mobile",
            "tablet",
            "phone",
            "iphone",
            "ipad",
            "ipod",
            "symbian",
            "symbos",
            "nokia",
            "blackberry",
        ];
        var a = 0;

        while (a < mobile.length) {
            if (
                osString.indexOf(" " + mobile[a] + " ") != -1 ||
                osString.indexOf(mobile[a] + ";") != -1 ||
                osString.indexOf("(" + mobile[a]) != -1 ||
                osString.indexOf(mobile[a] + "/") != -1 ||
                osString.indexOf(" " + mobile[a]) != -1
            ) {
                osType = "mobile";
            }
            a++;
        }

        if (osType == "") {
            if (osString.indexOf("blackberry") != -1) {
                osType = "mobile";
            }
        }

        return osType;
    }

    function exAgent(agent) {
        var browserString = "";
        var osString = "";

        var agentLow = agent.toLowerCase();
        if (agent.indexOf(")") != -1) {
            browserString = agent.substring(agent.indexOf(")") + 1, agent.length);
        } else {
            browserString = agent;
        }
        if (agent.indexOf(")") != -1) {
            osString = agent.substring(0, agent.indexOf(")"));
        }
        if (osString.indexOf("(") != -1) {
            osString = osString.substring(
                osString.indexOf("(") + 1,
                osString.length
            );
        }

        var brName = "";
        var brVers = "";

        var osVer = "";
        var osType = "";
        var bstr = "";

        if (browserString != "") {
            browserString = browserString.toLowerCase();
        }
        if (osString != "") {
            osString = osString.toLowerCase();
        }

        if (
            browserString.indexOf(" firefox/") != -1 ||
            browserString.indexOf(" fxios/") != -1
        ) {
            brName = "FIREFOX";
            bstr = " fxios/";
            if (browserString.indexOf(bstr) == -1) {
                bstr = " firefox/";
            }
            brVers = getBrVers(bstr, browserString);
        } else if (
            browserString.indexOf(" edg/") != -1 ||
            browserString.indexOf(" edge/") != -1
        ) {
            brName = "MICROSOFT EDGE";
            var keyEdg = " edge/";
            if (browserString.indexOf(" edg/") != -1) {
                keyEdg = " edg/";
            }
            brVers = getBrVers(keyEdg, browserString);
        } else if (browserString.indexOf(" opr/") != -1) {
            brName = "OPERA";
            brVers = getBrVers(" opr/", browserString);
        } else if (
            (browserString.indexOf(" chrome/") != -1 ||
                browserString.indexOf(" crios/") != -1) &&
            browserString.indexOf(" version/") == -1
        ) {
            brName = "CHROME";
            bstr = " crios/";
            if (browserString.indexOf(bstr) == -1) {
                bstr = " chrome/";
            }
            brVers = getBrVers(bstr, browserString);
        } else if (browserString.indexOf(" gsa/") != -1) {
            brName = "GOOGLE";
            brVers = getBrVers(" gsa/", browserString);
        } else if (
            browserString.indexOf(" safari/") != -1 &&
            browserString.indexOf(" version/") != -1
        ) {
            brName = "SAFARI";
            brVers = getBrVers(" version/", browserString);
        } else if (
            agentLow.indexOf("; trident/") != -1 ||
            agentLow.indexOf("iemobile") != -1 ||
            agentLow.indexOf(" msie ") != -1
        ) {
            brName = "INTERNET EXPLORER";

            if (agentLow.indexOf(" trident/") == -1) {
                if (agentLow.indexOf("msie 5.0") != -1) {
                    brVers = "5";
                }
                if (agentLow.indexOf("msie 6.0") != -1) {
                    brVers = "6";
                }
                if (agentLow.indexOf("msie 7.0") != -1) {
                    brVers = "7";
                }
                if (agentLow.indexOf("msie 9.0") != -1) {
                    brVers = "9";
                }
                if (agentLow.indexOf("msie 10.0") != -1) {
                    brVers = "10";
                }
                if (agentLow.indexOf("msie 11") != -1) {
                    brVers = "11";
                }
            } else {
                if (agentLow.indexOf(" trident/4.0") != -1) {
                    brVers = "8";
                }
                if (agentLow.indexOf(" trident/5.0") != -1) {
                    brVers = "9";
                }
                if (agentLow.indexOf(" trident/6.0") != -1) {
                    brVers = "10";
                }
                if (agentLow.indexOf(" trident/7.0") != -1) {
                    brVers = "11";
                }
            }

            if (brVers == "") {
                if (agentLow.indexOf("iemobile") != -1) {
                    brVers = getBrVers(" iemobile/", browserString);
                }
            }
        } else {
            brName = "UNKNOWN";
            brVers = "n/a";
        }

        var osv = "";
        osType = getosType(agentLow);

        if (osType == "mobile") {
            if (osString.indexOf("windows phone") != -1) {
                osVer = "Windows phone";
                osv = osString.substring(
                    osString.indexOf("windows phone") + osVer.length,
                    osString.length
                );

                if (osv.indexOf(";") != -1) {
                    osv = osv.substring(0, osv.indexOf(";"));
                    if (osv != "") {
                        osv = osv.split("os ").join("");
                    }
                    if (osv != "") {
                        osVer = osVer + osv;
                    }
                }
            } else if (
                osString.indexOf(" android") != -1 ||
                osString.indexOf("android;") != -1
            ) {
                osVer = "Android";
                osv = osString.substring(
                    osString.indexOf("android") + 7,
                    osString.length
                );

                if (osv.indexOf(";") != -1) {
                    osv = osv.substring(0, osv.indexOf(";"));
                    if (osv != "") {
                        osVer = osVer + osv;
                    }
                }
            } else if (
                osString.indexOf("(iphone") != -1 ||
                osString.indexOf("-iphone") != -1 ||
                osString.indexOf("iphone;") != -1
            ) {
                osVer = "iPhone";
            } else if (osString.indexOf("ipad;") != -1) {
                osVer = "iPad";
            } else if (osString.indexOf("ipod;") != -1) {
                osVer = "iPod";
            } else if (osString.indexOf("ipod;") != -1) {
                osVer = "iPod";
            } else if (
                osString.indexOf("nokia;") != -1 ||
                osString.indexOf(" nokia ") != -1
            ) {
                osVer = "Nokia";
            } else if (osString.indexOf("blackberry") != -1) {
                osVer = "BlackBerry";

                if (osString.indexOf(" blackberry ") != -1) {
                    osv = osString.substring(
                        osString.indexOf(" blackberry ") + 12,
                        osString.length
                    );

                    if (osv.indexOf(";") != -1) {
                        osv = osv.substring(0, osv.indexOf(";"));
                        if (osv != "") {
                            osVer = osVer + osv;
                        }
                    }
                } else {
                    osv = osString.substring(
                        osString.indexOf("blackberry") + 10,
                        osString.length
                    );

                    if (osv.indexOf("/") != -1) {
                        osv = osv.substring(0, osv.indexOf("/"));
                        if (osv != "") {
                            osVer = osVer + osv;
                        }
                    }
                }
            }
        } else {
            if (osString.indexOf("windows nt") != -1) {
                if (osString.indexOf("windows nt 10") != -1) {
                    osVer = "Windows 10";
                }
                if (osString.indexOf("windows nt 6.3") != -1) {
                    osVer = "Windows 8.1";
                }
                if (osString.indexOf("windows nt 6.2") != -1) {
                    osVer = "Windows 8";
                }
                if (osString.indexOf("windows nt 6.1") != -1) {
                    osVer = "Windows 7";
                }
                if (osString.indexOf("windows nt 6.0+") != -1) {
                    osVer = "Windows 2008";
                }
                if (osString.indexOf("windows nt 6.0") != -1) {
                    osVer = "Windows Vista";
                }
                if (osString.indexOf("windows nt 5.2") != -1) {
                    osVer = "Windows XP(x64)";
                }
                if (osString.indexOf("windows nt 5.1") != -1) {
                    osVer = "Windows XP";
                }
                if (osString.indexOf("windows nt 5.0") != -1) {
                    osVer = "Windows 2000";
                }
            } else if (
                osString.indexOf("(linux") != -1 ||
                osString.indexOf(" linux ") != -1 ||
                osString.indexOf(" linux;") != -1 ||
                osString.indexOf("debian") != -1
            ) {
                osVer = "Linux";
            } else if (
                osString.indexOf("(macintosh;") != -1 ||
                osString.indexOf("mac os") != -1
            ) {
                osVer = "Mac OS";
            }

            if (osVer != "") {
                osType = "desktop";
            }
        }

        if (osVer == "") {
            osVer = "UNKNOWN";
        }
        if (osType == "") {
            osType = "UNKNOWN";
        }

        return [brName, brVers, osVer, osType];
    }

    function flashModule() {
        box_flash = 0;

        var flashName = "";
        var flashFile = "";
        var flashDesc = "";

        var flashMimes = "";
        var flashMimeDesc = "";
        var flashMimesufix = "";
        var flashMimeStatus = "";

        try {
            var numPlugins = navigator.plugins.length;

            for (i = 0; i < numPlugins; i++) {
                var plugin = navigator.plugins[i];

                if (plugin.name.toLowerCase().indexOf("flash") != -1) {
                    flashName = plugin.name;

                    if (plugin.filename.length > 5) {
                        flashFile = plugin.filename;
                    }
                    if (plugin.description.length > 5) {
                        flashDesc = plugin.description;
                    }

                    var numTypes = plugin.length;

                    for (j = 0; j < numTypes; j++) {
                        mimetype = plugin[j];

                        if (mimetype) {
                            var flashMimeEnabled = "no";

                            enabledPlugin = mimetype.enabledPlugin;

                            if (enabledPlugin && enabledPlugin.name == plugin.name) {
                                flashMimeEnabled = "yes";

                                if (flashMimes != "") {
                                    flashMimes = flashMimes + "|";
                                }

                                flashMimes =
                                    flashMimes +
                                    mimetype.type +
                                    "," +
                                    mimetype.description +
                                    "," +
                                    mimetype.suffixes +
                                    "," +
                                    flashMimeEnabled;
                            }
                        }
                    }

                    i = numPlugins;
                }
            }
        } catch (err) {
        }

        if (
            flashName != "" &&
            flashFile != "" &&
            flashDesc != "" &&
            flashMimes != ""
        ) {
            hashFlash = md5(
                flashName +
                "," +
                flashFile +
                "," +
                flashDesc +
                ",[" +
                flashMimes +
                "]"
            );

            document
                .getElementById("div_flash")
                .getElementsByTagName("span")[0].innerHTML = flashFile;
            document
                .getElementById("div_flash")
                .getElementsByTagName("span")[1].innerHTML = flashDesc;
            document
                .getElementById("div_flash")
                .getElementsByTagName("span")[3].innerHTML = hashFlash;

            enableModule("div_flash");
        } else {
            disableModule("div_flash");
        }
    }

    const modules =
        "div_location,div_flash,div_webgl.div_media,div_plugins,div_webrtc";

    function disableModule(id, mod) {
        var a = document.getElementById(id);
        a.className = "tvd";

        var b = a.getElementsByClassName("rv")[0];

        if (xModules.indexOf(id) != -1) {
            b.getElementsByTagName("div")[4].style.display = "none";
            b.getElementsByTagName("div")[3].style.display = "block";
        }

        if (!!mod) {
            a.getElementsByClassName("rv")[0].style.display = "none";
            a.getElementsByClassName("vr")[0].style.display = "table-cell";
        } else {
            a.getElementsByClassName("vr")[0].style.display = "none";
            a.getElementsByClassName("rv")[0].style.display = "table-cell";

            window[id.split("div_").join("box_")] = 1;
        }

        if (modules.indexOf(id) != -1) {
            document.getElementById(id).getElementsByTagName("img")[1].className =
                "gr";
        }
    }

    function enableModule(id) {
        var a = document.getElementById(id);
        a.className = "tv";

        var b = a.getElementsByClassName("rv")[0];

        if (xModules.indexOf(id) != -1) {
            b.getElementsByTagName("div")[3].style.display = "none";
            b.getElementsByTagName("div")[4].style.display = "block";
        }

        a.getElementsByClassName("vr")[0].style.display = "none";
        a.getElementsByClassName("rv")[0].style.display = "table-cell";

        window[id.split("div_").join("box_")] = 1;

        if (modules.indexOf(id) != -1) {
            document.getElementById(id).getElementsByTagName("img")[1].className =
                "";
        }
    }

    function webglModule() {
        box_webgl = 0;

        let span_webgl = document
            .getElementById("div_webgl")
            .getElementsByTagName("span");

        const GL1 = _GL(1),
            GL2 = _GL(2);

        if (GL2 === "T") {
            _GL(2, 1);
        } else {
            if (GL1 === "T") {
                _GL(1, 1);
            }
        }

        dataGL.IMAGE = glHash();

        if (dataGL.length != 0) {
            span_webgl[0].className = "known";
            span_webgl[1].className = "known";
            span_webgl[1].style.fontWeight = "normal";
            span_webgl[2].style.letterSpacing = "";

            if (dataGL.IMAGE.length == "32") {
                var rnd = Math.floor(Math.random() * 1000) + 100;
                getData(
                    "https://www.ivanovation.ro/detection/webgl/?" + rnd,
                    {
                        webgl: [
                            dataGL.IMAGE,
                            {
                                browser: browserName,
                                system: osVersion,
                            },
                        ],
                    },
                    "webglResp"
                );
            } else {
                document
                    .getElementById("div_webgl")
                    .getElementsByTagName("div")[14].innerHTML = "Shading";

                var glRender = GL_mask(dataGL.UNMASKED_RENDERER);

                span_webgl[0].innerHTML = glRender;
                if (glRender == noGL) {
                    span_webgl[0].className = "unknownOrange";
                }

                span_webgl[1].innerHTML = "unavailable";
                span_webgl[1].className = "unknownRed";
                span_webgl[1].style.fontWeight = "bold";
                span_webgl[2].innerHTML = dataGL.LANGUAGE;
                span_webgl[2].style.letterSpacing = "1px";

                dataGL.HASH = md5(GL_()).toUpperCase();
                span_webgl[3].innerHTML = dataGL.HASH;

                enableModule("div_webgl");
                box_webgl = 1;
            }
        } else {
            disableModule("div_webgl");
            box_webgl = 1;
        }

        const D2 = new Date().getTime();
        const D3 = D2 - D1;
    }

    function webglResp(data) {
        if (data != "" && data != null) {
            try {
                data = JSON.parse(data);
            } catch (err) {
                data = "error";
            }
            if (typeof data != "object") {
                data = "error";
            }
        } else {
            data = "error";
        }

        if (data == "error") {
            try {
                var rnd = Math.floor(Math.random() * 1000) + 100;
                var script = document.createElement("script");
                script.setAttribute(
                    "src",
                    "https://www.ivanovation.ro/detection/webgl/?" +
                    rnd +
                    '&o={"webgl":["' +
                    dataGL.IMAGE +
                    '",{"browser":"' +
                    browserName +
                    '","system":"' +
                    osVersion +
                    '"}]}'
                );
                script.setAttribute("type", "text/javascript");
                script.setAttribute("id", "scwebgl");
                script.setAttribute("onload", "webglLoaded()");
                document.getElementsByTagName("head")[0].appendChild(script);
            } catch (err) {
                webglLoaded();
            }
        } else {
            webglDecision(data);
        }
    }

    function webglLoaded() {
        if (webglGet) {
            try {
                webglGet = JSON.parse(webglGet);
            } catch (err) {
                webglGet = "error";
            }
            if (typeof webglGet != "object") {
                webglGet = "error";
            }
        } else {
            webglGet = "error";
        }

        var elemjs = document.getElementById("scwebgl");
        elemjs.parentNode.removeChild(elemjs);
        elemjs = null;

        webglDecision(webglGet);
    }

    function webglDecision(data) {
        var span_webgl = document
            .getElementById("div_webgl")
            .getElementsByTagName("span");
        var title_webgl = document
            .getElementById("div_webgl")
            .getElementsByTagName("div");

        var glRender = GL_mask(dataGL.UNMASKED_RENDERER);

        span_webgl[0].innerHTML = glRender;
        if (glRender == noGL) {
            span_webgl[0].className = "unknownOrange";
        }

        if (data[0] == "true") {
            span_webgl[1].innerHTML = data[1];
            span_webgl[2].innerHTML = data[0].toUpperCase();
        } else {
            if (data[0] == "false") {
                span_webgl[1].innerHTML = "unknown";
                span_webgl[1].className = "unknownRed";
                span_webgl[1].style.fontWeight = "bold";
                span_webgl[2].innerHTML = data[0].toUpperCase();
            } else {
                document
                    .getElementById("div_webgl")
                    .getElementsByTagName("div")[14].innerHTML = "Shading";

                span_webgl[1].innerHTML = "unknown";
                span_webgl[1].className = "unknownRed";

                span_webgl[2].innerHTML = dataGL.LANGUAGE;
                span_webgl[2].style.letterSpacing = "1px";
            }
        }

        dataGL.HASH = md5(GL_()).toUpperCase();
        span_webgl[3].innerHTML = dataGL.HASH;

        enableModule("div_webgl");
        box_webgl = 1;
    }

    function GL_mask(glRender) {
        if (glRender != undefined && glRender != null && glRender != "") {
            if (
                glRender.toLowerCase().substring(0, 7) == "angle (" &&
                glRender.toLowerCase().indexOf(" direct3d") != -1
            ) {
                glRender = glRender.substring(
                    7,
                    glRender.toLowerCase().indexOf(" direct3d")
                );
            }
        } else {
            glRender = noGL;
        }
        return glRender;
    }

    function GL_() {
        let e = [];
        e = e.concat(
            dataGL.SUPPORT +
            "|" +
            dataGL.ANTIALIAS +
            "|" +
            dataGL.ANGLE +
            "|" +
            dataGL.UNMASKED_RENDERER +
            "|" +
            dataGL.PRECISION +
            "|" +
            dataGL.ANISOTROPY +
            "|" +
            dataGL.CAVEAT +
            "|" +
            dataGL.EXTENSIONS +
            "|" +
            dataGL.ATTRIBUTES +
            "|" +
            dataGL.CONTEXT
        );
        e = e.toString();
        return e;
    }

    function _GL(X, Y) {
        if (X != 2) {
            X = "";
        }

        let R = "F";

        const T = eval("window.WebGL" + X + "RenderingContext");

        if (!!T) {
            const C = document.createElement("can" + "vas"),
                W = "webgl" + X,
                N = [W, "experimental-" + W, "moz-" + W, "fake-" + W],
                M = [];

            for (var i = 0; i < N.length; i++) {
                try {
                    var ty = C,
                        ry = "";
                    try {
                        ry =
                            ty.getContext("webgl2", {
                                preserveDrawingBuffer: !0,
                            }) ||
                            ty.getContext("experimental-webgl2", {
                                preserveDrawingBuffer: !0,
                            }) ||
                            ty.getContext("webgl", {
                                preserveDrawingBuffer: !0,
                            }) ||
                            ty.getContext("experimental-webgl", {
                                preserveDrawingBuffer: !0,
                            }) ||
                            ty.getContext("moz-webgl", {
                                preserveDrawingBuffer: !0,
                            });
                    } catch (es) {
                        ry = null;
                    }

                    const x = C.getContext(N[i]);

                    if (typeof x.getParameter === "function") {
                        if (Y != 1) {
                            M.push(N[i]);
                            R = "T";
                        } else {
                            dataGL.ANGLE =
                                dataGL.CAVEAT =
                                    dataGL.VERSION =
                                        dataGL.LANGUAGE =
                                            dataGL.VENDOR =
                                                dataGL.RENDERER =
                                                    dataGL.UNMASKED_VENDOR =
                                                        dataGL.UNMASKED_RENDERER =
                                                            dataGL.ANTIALIAS =
                                                                dataGL.PRECISION =
                                                                    dataGL.ANISOTROPY =
                                                                        [];
                            (dataGL.EXTENSIONS = []),
                                (dataGL.ATTRIBUTES = []),
                                (dataGL.CONTEXT = []);

                            i = N.length;

                            let a = x.getParameter(x.ALIASED_LINE_WIDTH_RANGE),
                                r = x.getParameter(x.RENDERER);

                            if (
                                r != "Internet Explorer" &&
                                r != "Microsoft Edge" &&
                                (navigator.platform == "Win32" ||
                                    navigator.platform == "Win64") &&
                                a !== "1,1"
                            ) {
                                if (
                                    MV(x.getParameter(x.MAX_VERTEX_UNIFORM_VECTORS)) &&
                                    MV(x.getParameter(x.MAX_FRAGMENT_UNIFORM_VECTORS))
                                ) {
                                    dataGL.ANGLE = "Direct3D 11";
                                } else {
                                    dataGL.ANGLE = "Direct3D 9";
                                }
                            } else {
                                dataGL.ANGLE = "False";
                            }

                            a = null;

                            let k = x.getExtension("WEBGL_debug_renderer_info"),
                                b = x.getExtension("EXT_texture_filter_anisotropic");
                            dataGL.UNMASKED_VENDOR = x.getParameter(
                                k.UNMASKED_VENDOR_WEBGL
                            );
                            dataGL.UNMASKED_RENDERER = x.getParameter(
                                k.UNMASKED_RENDERER_WEBGL
                            );
                            dataGL.VERSION = x.getParameter(x.VERSION);
                            dataGL.LANGUAGE = x.getParameter(x.SHADING_LANGUAGE_VERSION);
                            dataGL.VENDOR = x.getParameter(x.VENDOR);
                            dataGL.RENDERER = x.getParameter(x.RENDERER);
                            dataGL.ANTIALIAS = x.getContextAttributes().antialias;
                            dataGL.PRECISION = wb(x, x.VERTEX_SHADER);
                            dataGL.ANISOTROPY = x.getParameter(
                                b.MAX_TEXTURE_MAX_ANISOTROPY_EXT
                            );

                            b = k = null;

                            let x1 = document.createElement("can" + "vas");
                            let f = x1.getContext(N[i], {
                                failIfMajorPerformanceCaveat: !0,
                            });

                            if (f === null) {
                                dataGL.CAVEAT = "True";
                            } else {
                                dataGL.CAVEAT = "False";
                            }
                            xl = f = null;

                            let ex = x.getSupportedExtensions();

                            if (ex.length > 0) {
                                ex = ex.sort();

                                var ar = [
                                    "TIMESTAMP_EXT",
                                    "GPU_DISJOINT_EXT",
                                    "MAX_VIEWS_OVR",
                                ];

                                for (
                                    let w = 0;
                                    w < x.getSupportedExtensions().length;
                                    w++
                                ) {
                                    let ext = x.getSupportedExtensions()[w];
                                    let et = x.getExtension(ext);
                                    let es = ext.toString();

                                    dataGL.EXTENSIONS.push([es]);

                                    var u = 0;

                                    for (let nm in et) {
                                        u++;

                                        dataGL.EXTENSIONS[w].push([nm]);

                                        if (ar.indexOf(nm) != -1) {
                                            dataGL.EXTENSIONS[w][u].push(x.getParameter(et[nm]));
                                        }
                                    }

                                    u = null;
                                }

                                ar = null;
                            }

                            ex = ext = et = es = null;

                            for (let na in x.getContextAttributes()) {
                                dataGL.ATTRIBUTES.push(na);
                            }

                            var CTX =
                                    "VERSION,SHADING_LANGUAGE_VERSION,VENDOR,RENDERER,MAX_VERTEX_ATTRIBS,MAX_VERTEX_UNIFORM_VECTORS,MAX_VERTEX_TEXTURE_IMAGE_UNITS,MAX_VARYING_VECTORS,ALIASED_LINE_WIDTH_RANGE,ALIASED_POINT_SIZE_RANGE,MAX_FRAGMENT_UNIFORM_VECTORS,MAX_TEXTURE_IMAGE_UNITS,RED_BITS,GREEN_BITS,BLUE_BITS,ALPHA_BITS,DEPTH_BITS,STENCIL_BITS,MAX_RENDERBUFFER_SIZE,MAX_VIEWPORT_DIMS,MAX_TEXTURE_SIZE,MAX_CUBE_MAP_TEXTURE_SIZE,MAX_COMBINED_TEXTURE_IMAGE_UNITS,MAX_VERTEX_UNIFORM_COMPONENTS,MAX_VERTEX_UNIFORM_BLOCKS,MAX_VERTEX_OUTPUT_COMPONENTS,MAX_VARYING_COMPONENTS,MAX_TRANSFORM_FEEDBACK_INTERLEAVED_COMPONENTS,MAX_TRANSFORM_FEEDBACK_SEPARATE_ATTRIBS,MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS,MAX_FRAGMENT_UNIFORM_COMPONENTS,MAX_FRAGMENT_UNIFORM_BLOCKS,MAX_FRAGMENT_INPUT_COMPONENTS,MIN_PROGRAM_TEXEL_OFFSET,MAX_PROGRAM_TEXEL_OFFSET,MAX_DRAW_BUFFERS,MAX_COLOR_ATTACHMENTS,MAX_SAMPLES,MAX_3D_TEXTURE_SIZE,MAX_ARRAY_TEXTURE_LAYERS,MAX_TEXTURE_LOD_BIAS,MAX_UNIFORM_BUFFER_BINDINGS,MAX_UNIFORM_BLOCK_SIZE,UNIFORM_BUFFER_OFFSET_ALIGNMENT,MAX_COMBINED_UNIFORM_BLOCKS,MAX_COMBINED_VERTEX_UNIFORM_COMPONENTS,MAX_COMBINED_FRAGMENT_UNIFORM_COMPONENTS",
                                CTX1 =
                                    ",READ_BUFFER,UNPACK_ROW_LENGTH,UNPACK_SKIP_ROWS,UNPACK_SKIP_PIXELS,PACK_ROW_LENGTH,PACK_SKIP_ROWS,PACK_SKIP_PIXELS,UNPACK_SKIP_IMAGES,UNPACK_IMAGE_HEIGHT,MAX_ELEMENTS_VERTICES,MAX_ELEMENTS_INDICES,DRAW_BUFFER0,DRAW_BUFFER1,DRAW_BUFFER2,DRAW_BUFFER3,DRAW_BUFFER4,DRAW_BUFFER5,DRAW_BUFFER6,DRAW_BUFFER7,FRAGMENT_SHADER_DERIVATIVE_HINT,RASTERIZER_DISCARD,MAX_SERVER_WAIT_TIMEOUT,TRANSFORM_FEEDBACK_PAUSED,TRANSFORM_FEEDBACK_ACTIVE,MAX_ELEMENT_INDEX,MAX_CLIENT_WAIT_TIMEOUT_WEBGL,BLEND_EQUATION,BLEND_EQUATION_RGB,BLEND_EQUATION_ALPHA,BLEND_DST_RGB,BLEND_SRC_RGB,BLEND_DST_ALPHA,BLEND_SRC_ALPHA,BLEND_COLOR,CULL_FACE,BLEND,DITHER,STENCIL_TEST,DEPTH_TEST,SCISSOR_TEST,POLYGON_OFFSET_FILL,SAMPLE_ALPHA_TO_COVERAGE,SAMPLE_COVERAGE,LINE_WIDTH,CULL_FACE_MODE,FRONT_FACE,DEPTH_RANGE,DEPTH_WRITEMASK,DEPTH_CLEAR_VALUE,DEPTH_FUNC,STENCIL_CLEAR_VALUE,STENCIL_FUNC,STENCIL_FAIL,STENCIL_PASS_DEPTH_FAIL,STENCIL_PASS_DEPTH_PASS,STENCIL_REF,STENCIL_VALUE_MASK,STENCIL_WRITEMASK,STENCIL_BACK_FUNC,STENCIL_BACK_FAIL,STENCIL_BACK_PASS_DEPTH_FAIL,STENCIL_BACK_PASS_DEPTH_PASS,STENCIL_BACK_REF,STENCIL_BACK_VALUE_MASK,STENCIL_BACK_WRITEMASK,VIEWPORT,SCISSOR_BOX,COLOR_CLEAR_VALUE,COLOR_WRITEMASK,UNPACK_ALIGNMENT,PACK_ALIGNMENT,SUBPIXEL_BITS,POLYGON_OFFSET_UNITS,POLYGON_OFFSET_FACTOR,SAMPLE_BUFFERS,SAMPLES,SAMPLE_COVERAGE_VALUE,SAMPLE_COVERAGE_INVERT,COMPRESSED_TEXTURE_FORMATS,GENERATE_MIPMAP_HINT,ACTIVE_TEXTURE,IMPLEMENTATION_COLOR_READ_TYPE,IMPLEMENTATION_COLOR_READ_FORMAT,UNPACK_FLIP_Y_WEBGL,UNPACK_PREMULTIPLY_ALPHA_WEBGL,UNPACK_COLORSPACE_CONVERSION_WEBGL";

                            var CTS = CTX + CTX1,
                                CTS = CTS.split(",");
                            CTX = CTX1 = null;

                            for (nc in x) {
                                var lnc = nc.toString(),
                                    nf = "",
                                    ns = "";

                                if (typeof x[lnc] === "function") {
                                    ns = x[lnc].toString();
                                    ns = ns
                                        .split("\n")
                                        .join("")
                                        .split("function ")
                                        .join("")
                                        .split(" ")
                                        .join("")
                                        .split("	")
                                        .join("")
                                        .split(lnc + "()")
                                        .join("")
                                        .split(lnc + "()")
                                        .join("");
                                    ns = ns + "|" + typeof x[nc];
                                } else {
                                    if (CTS.indexOf(lnc) != -1) {
                                        if (
                                            (lnc == "SAMPLE_ALPHA_TO_COVERAGE" ||
                                                lnc == "SAMPLE_COVERAGE") &&
                                            browserName.indexOf("EXPLORER") != -1
                                        ) {
                                        } else {
                                            try {
                                                ns = x.getParameter(x[lnc]);
                                            } catch (err) {
                                            }
                                            ns = ns + "|" + typeof ns;
                                        }
                                    } else {
                                        ns = "null|" + typeof x[nc];
                                    }
                                }

                                nf = lnc + "|" + ns;
                                if (nf != "") {
                                    dataGL.CONTEXT.push(nf);
                                    nf = ns = lnc = null;
                                }
                            }

                            if (dataGL.CONTEXT.length > 0) {
                                dataGL.CONTEXT = dataGL.CONTEXT.sort();
                            }
                        }
                    }
                } catch (e) {
                }
            }

            if (Y != 1) {
                if (M != "") {
                    if (dataGL.SUPPORT) {
                        dataGL.SUPPORT.push(M);
                    } else {
                        dataGL.SUPPORT = [M];
                    }
                }
                if (R !== "T") {
                    R = "B";
                }
            }
        }

        return R;
    }

    function glHash() {
        var e;
        var s = "N/A",
            t = document.createElement("canvas");
        (t.width = 256), (t.height = 128);
        try {
            e =
                t.getContext("webgl2", {
                    preserveDrawingBuffer: !0,
                }) ||
                t.getContext("experimental-webgl2", {
                    preserveDrawingBuffer: !0,
                }) ||
                t.getContext("webgl", {
                    preserveDrawingBuffer: !0,
                }) ||
                t.getContext("experimental-webgl", {
                    preserveDrawingBuffer: !0,
                }) ||
                t.getContext("moz-webgl", {
                    preserveDrawingBuffer: !0,
                });
        } catch (es) {
            e = null;
        }

        if (e != null) {
            var er = "";

            try {
                var a = e.createBuffer();
                e.bindBuffer(e.ARRAY_BUFFER, a);
                var n = new Float32Array([
                    -0.2, -0.9, 0, 0.4, -0.26, 0, 0, 0.7321, 0,
                ]);
                e.bufferData(e.ARRAY_BUFFER, n, e.STATIC_DRAW),
                    (a.itemSize = 3),
                    (a.numItems = 3);
                var i = e.createProgram(),
                    o = e.createShader(e.VERTEX_SHADER);
                e.shaderSource(
                    o,
                    "attribute vec2 attrVertex;varying vec2 varyinTexCoordinate;uniform vec2 uniformOffset;void main(){varyinTexCoordinate=attrVertex+uniformOffset;gl_Position=vec4(attrVertex,0,1);}"
                ),
                    e.compileShader(o),
                    (n = e.createShader(e.FRAGMENT_SHADER)),
                    e.shaderSource(
                        n,
                        "precision mediump float;varying vec2 varyinTexCoordinate;void main() {gl_FragColor=vec4(varyinTexCoordinate,0,1);}"
                    ),
                    e.compileShader(n),
                    e.attachShader(i, o),
                    e.attachShader(i, n),
                    e.linkProgram(i),
                    e.useProgram(i),
                    (i.vertexPosAttrib = e.getAttribLocation(i, "attrVertex")),
                    (i.offsetUniform = e.getUniformLocation(i, "uniformOffset")),
                    e.enableVertexAttribArray(i.vertexPosArray),
                    e.vertexAttribPointer(
                        i.vertexPosAttrib,
                        a.itemSize,
                        e.FLOAT,
                        !1,
                        0,
                        0
                    ),
                    e.uniform2f(i.offsetUniform, 1, 1),
                    e.drawArrays(e.TRIANGLE_STRIP, 0, a.numItems);
            } catch (es) {
                er = 1;
            }

            if (er != 1) {
                var buf = "131072";
                try {
                    buf = e.drawingBufferWidth * e.drawingBufferHeight * 4;
                } catch (es) {
                    buf = "131072";
                }

                var _ = new Uint8Array(buf);
                if (
                    (e.readPixels(0, 0, 256, 128, e.RGBA, e.UNSIGNED_BYTE, _),
                    "" ==
                    (s = JSON.stringify(_).replace(/,?"[0-9]+":/g, "")).replace(
                        /^{[0]+}$/g,
                        ""
                    ))
                ) ;
            }
        }

        return md5(s).toUpperCase();
    }

    function MV(e) {
        return 0 !== e && 0 == (e & (e - 1));
    }

    function wb(e, t) {
        try {
            var r = e.getShaderPrecisionFormat(t, e.HIGH_FLOAT);
            var a = e.getShaderPrecisionFormat(t, e.MEDIUM_FLOAT),
                n = e.getShaderPrecisionFormat(t, e.LOW_FLOAT),
                i = r;

            return (
                0 === r.precision && (i = a),
                "[hight:" +
                r.rangeMin +
                "," +
                r.rangeMax +
                "," +
                r.precision +
                "],[medium:" +
                a.rangeMin +
                "," +
                a.rangeMax +
                "," +
                a.precision +
                "],[low:" +
                n.rangeMin +
                "," +
                n.rangeMax +
                "," +
                n.precision +
                "]"
            );
        } catch (e) {
            return "n/a";
        }
    }

    function msTime(s) {
        function pad(n, z) {
            z = z || 2;
            return ("00" + n).slice(-z);
        }

        var ms = s % 1000;
        s = (s - ms) / 1000;
        var secs = s % 60;
        s = (s - secs) / 60;
        var mins = s % 60;
        var hrs = (s - mins) / 60;

        return pad(hrs) + ":" + pad(mins) + ":" + pad(secs) + "." + pad(ms, 3);
    }

    function canvasModule() {
        box_canvas = 0;

        let canvasHash,
            fileColors,
            fileSize = "";

        var e,
            a,
            c = "BrowserLeaks,com <canvas> 1.0",
            o = document.createElement("canvas");

        if (o.getContext && (e = o.getContext("2d"))) {
            if ("function" == typeof o.getContext("2d").fillText) {
                o.setAttribute("style", "display:none;"),
                    o.setAttribute("width", 220),
                    o.setAttribute("height", 30),
                    (e.textBaseline = "top"),
                    (e.font = "14px 'Arial'"),
                    (e.textBaseline = "alphabetic"),
                    (e.fillStyle = "#f60"),
                    e.fillRect(125, 1, 62, 20),
                    (e.fillStyle = "#069"),
                    e.fillText(c, 2, 15),
                    (e.fillStyle = "rgba(102, 204, 0, 0.7)"),
                    e.fillText(c, 4, 17);

                if ("function" == typeof o.toDataURL) {
                    try {
                        if (
                            "boolean" == typeof (a = o.toDataURL("image/png")) ||
                            void 0 === a
                        )
                            throw 1;
                    } catch (t) {
                        a = "";
                    }

                    if (0 === a.indexOf("data:image/png")) {
                        var t = e;
                        e = a;
                        a = atob(e.replace("data:image/png;base64,", ""));

                        var n = 0;

                        try {
                            for (
                                var r = t.getImageData(0, 0, 220, 30),
                                    s = new Uint32Array(r.data.buffer),
                                    c = s.length,
                                    o = {},
                                    i = 0;
                                i < c;
                                i++
                            ) {
                                var l = "" + (16777215 & s[i]);
                                o[l] || (n++, (o[l] = 0)), o[l]++;
                            }
                        } catch (t) {
                        }

                        canvasHash = md5(a).toUpperCase();

                        fileColors = n;
                        fileSize = a.length;
                    }
                }
            }
        }

        var span_canvas = document
            .getElementById("div_canvas")
            .getElementsByTagName("span");

        span_canvas[0].className = "known";

        if (canvasHash.length == 32) {
            dataCANVAS.HASH = canvasHash;
            dataCANVAS.COLORS = fileColors;
            dataCANVAS.SIZE = fileSize;

            var IHDR = pngChunks(a, 0),
                SIGNATURE = pngChunks(a, 1),
                IEND = pngChunks(a, 2);

            if (IHDR != "") {
                IHDR = IHDR.toUpperCase();
            }
            if (SIGNATURE != "") {
                SIGNATURE = SIGNATURE.toUpperCase();
            }
            if (IEND != "") {
                IEND = IEND.toUpperCase();
            }

            dataCANVAS.IHDR = IHDR;
            dataCANVAS.SIGNATURE = SIGNATURE;
            dataCANVAS.IEND = IEND;

            var rnd = Math.floor(Math.random() * 1000) + 100;

            getData(
                "https://www.ivanovation.ro/detection/canvas/?" + rnd,
                {
                    canvas: [
                        canvasHash,
                        {
                            browser: browserName,
                            system: osVersion,
                        },
                    ],
                },
                "canvasResp"
            );
        } else {
            span_canvas[0].innerHTML = "unavailable";
            span_canvas[0].className = "unknownOrange";
            span_canvas[1].innerHTML = "unavailable";
            span_canvas[2].innerHTML = "unavailable";
            span_canvas[3].innerHTML = md5("unavailable");

            enableModule("div_canvas");
            box_canvas = 1;
        }
    }

    function canvasResp(data) {
        if (data != "" && data != null) {
            try {
                data = JSON.parse(data);
            } catch (err) {
                data = "error";
            }
            if (typeof data != "object") {
                data = "error";
            }
        } else {
            data = "error";
        }

        if (data == "error") {
            try {
                var rnd = Math.floor(Math.random() * 1000) + 100;
                var script = document.createElement("script");
                script.setAttribute(
                    "src",
                    "https://www.ivanovation.ro/detection/canvas/?" +
                    rnd +
                    '&o={"canvas":["' +
                    dataCANVAS.HASH +
                    '",{"browser":"' +
                    browserName +
                    '","system":"' +
                    osVersion +
                    '"}]}'
                );
                script.setAttribute("type", "text/javascript");
                script.setAttribute("id", "scrcanvas");
                script.setAttribute("onload", "canvasLoaded()");
                document.getElementsByTagName("head")[0].appendChild(script);
            } catch (err) {
                canvasLoaded();
            }
        } else {
            canvasDecision(data);
        }
    }

    function canvasLoaded() {
        if (canvasGet) {
            try {
                canvasGet = JSON.parse(canvasGet);
            } catch (err) {
                canvasGet = "error";
            }
            if (typeof canvasGet != "object") {
                canvasGet = "error";
            }
        } else {
            canvasGet = "error";
        }

        var elemjs = document.getElementById("scrcanvas");
        elemjs.parentNode.removeChild(elemjs);
        elemjs = null;

        canvasDecision(canvasGet);
    }

    function canvasDecision(data) {
        var span_canvas = document
            .getElementById("div_canvas")
            .getElementsByTagName("span");
        var title_canvas = document
            .getElementById("div_canvas")
            .getElementsByTagName("div");

        span_canvas[1].className = "known";

        if (data[0] == "true") {
            span_canvas[0].innerHTML = data[1];
            span_canvas[1].innerHTML = data[2];
            span_canvas[2].innerHTML = data[0].toUpperCase();
        } else {
            title_canvas[7].innerHTML = "Signature";
            span_canvas[0].innerHTML = dataCANVAS.SIGNATURE;

            title_canvas[13].innerHTML = "Colors";
            span_canvas[2].innerHTML = dataCANVAS.COLORS;

            if (data[0] == "false") {
                span_canvas[1].innerHTML = "NO";
            } else {
                span_canvas[1].className = "unknownOrange";

                if (data == "error") {
                    span_canvas[1].innerHTML = "unavailable";
                } else {
                    span_canvas[1].innerHTML = "UNKNOWN";
                }
            }
        }

        span_canvas[3].innerHTML = dataCANVAS.HASH;

        enableModule("div_canvas");
        box_canvas = 1;
    }

    function respData(func, data) {
        eval(func + "(data)");
    }

    function getData(url, params, func) {
        try {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", url, true);
            xhr.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded"
            );
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    respData(func, this.responseText);
                } else {
                    if (xhr.status === 404) {
                        xhr.abort();
                        respData(func, "error");
                    }
                }
            };

            xhr.onerror = function () {
                respData(func, "error");
            };

            xhr.send(JSON.stringify(params));
        } catch (e) {
            respData(func, "error");
        }
    }

    function pngChunks(i, y) {
        var m = "";
        try {
            for (
                var a = new ArrayBuffer(i.length), n = new Uint8Array(a), r = 0;
                r < i.length;
                r++
            ) {
                n[r] = i.charCodeAt(r);
            }
            var c,
                o = new DataView(a);
            c = getChunks(o.buffer, o);
            this.chunks = c.chunks;
            m = chunks[y].crc.toString(16);
        } catch (t) {
            m = "";
        }
        return m;
    }

    function Chunk(crc) {
        this.crc = crc;
    }

    function getChunks(buffer, view) {
        function getFourCC() {
            var v = getUint32(),
                c = String.fromCharCode;
            return (
                c(v >>> 24) + c((v >> 16) & 255) + c((v >> 8) & 255) + c(v & 255)
            );
        }

        function getUint32() {
            var i = view.getUint32(pos);
            pos += 4;
            return i >>> 0;
        }

        var pos = 8,
            len = buffer.byteLength,
            chunks = [];
        while (pos < len) {
            length = getUint32();
            pos = pos + length;
            fourCC = getFourCC();
            crc = getUint32();
            chunk = new Chunk(crc);
            chunks.push(chunk);
        }
        return {
            chunks: chunks,
        };
    }

    function timeModule() {
        box_time = 0;

        let o = new Date(1315481742000),
            locale = l("locale"),
            region = r(),
            zone = "";
        try {
            zone = l("timeZone");
        } catch (err) {
            zone = "";
        }
        if (zone == "" || zone === undefined) {
            zone = region;
        }
        let k1 = k("default"),
            k2 = k(locale),
            week = [k1, k2],
            calendar = l("calendar"),
            numbering = l("numberingSystem"),
            cycle = c();
        let f = o.toLocaleString().toString(),
            v = f.substring(0, 1);
        if (v.charCodeAt(0) == "8206") {
            f = f.split(v).join("");
        }
        let ft = o.toLocaleTimeString().toString(),
            vt = ft.substring(0, 1);
        if (vt.charCodeAt(0) == "8206") {
            ft = ft.split(vt).join("");
        }
        let format = [m(f, ft, 0), m(f, ft, 1)];

        function l(t) {
            return eval("new Intl.DateTimeFormat().resolvedOptions()." + t);
        }

        function k(t) {
            let s = "";
            try {
                s = new Intl.DateTimeFormat(t, {
                    month: "short",
                    week: "long",
                }).format(o);
            } catch (err) {
                s = "";
            }
            if (!s || s == "") {
                s = "none";
            }
            return s;
        }

        function r() {
            let sdate = o.toString();
            if (sdate.indexOf("(") != -1) {
                sdate = sdate.substring(sdate.indexOf("(") + 1, sdate.length - 1);
            }
            return sdate;
        }

        function c() {
            let r = "";
            try {
                r = new Intl.DateTimeFormat("default", {
                    hour: "numeric",
                }).resolvedOptions().hourCycle;
            } catch (err) {
                r = 1;
            }
            let t = "",
                sdate = o.toString(),
                str = o.toLocaleTimeString();
            str = str.split(" ")[0];
            str = str.replace(/[^0-9:]/g, "");
            t = "h12";
            if (sdate.indexOf(str.toString()) != -1) {
                t = "h24";
            }
            if (r == 1) {
                r = "none";
            }
            r = [r, t];
            return r;
        }

        function getDiscrepancy() {
            sistemTime = new Date();
            try {
                let script = document.createElement("script");
                script.setAttribute(
                    "src",
                    "https://worldclockapi.com/api/jsonp/utc/now?callback=mycallback"
                );
                script.setAttribute("type", "text/javascript");
                script.setAttribute("id", "scrtime");
                document.getElementsByTagName("head")[0].appendChild(script);
                setTimeout(function () {
                    var sTime = new Date().getTime();
                    statusTime(sTime);
                }, 0);
            } catch (e) {
                delayTime();
            }
        }

        function statusTime(sTime) {
            let eTime = new Date().getTime(),
                xTime = eTime - sTime;
            if (discrepancy == "") {
                if (xTime < 2000) {
                    setTimeout(function () {
                        statusTime(sTime);
                    }, 0);
                } else {
                    delayTime();
                }
            } else {
                delayTime();
            }
        }

        function m(f, ft, t) {
            let x = ["08", "09", "2011", 8, 9, 11, o.getHours(), "35", "42"],
                y = [
                    "DD",
                    "MM",
                    "YYYY",
                    "D",
                    "M",
                    "YY",
                    "hh",
                    "mm",
                    "ss",
                    "h",
                    "m",
                    "s",
                ];
            if (f.indexOf(ft) != -1) {
                f = f.split(ft).join("");
            }
            for (a = 0; a < 9; a++) {
                if (a < 6) {
                    f = f.split(x[a]).join(y[a]);
                } else {
                    ft = ft.split(x[a]).join(y[a]);
                }
            }
            ft = ft.replace(/[0-9]/g, "h");
            if (t == 1) {
                f = f.replace(/[^APDMYhms]/g, "");
                ft = ft.replace(/[^APDMYhms]/g, "");
            }
            return f + ft;
        }

        getDiscrepancy();
        (dataTIME.locale = locale),
            (dataTIME.region = region),
            (dataTIME.zone = zone),
            (dataTIME.week = week),
            (dataTIME.calendar = calendar),
            (dataTIME.numbering = numbering),
            (dataTIME.cycle = cycle),
            (dataTIME.format = format);

        var span_time = document
                .getElementById("div_time")
                .getElementsByTagName("span"),
            nameCOUNTRY = "",
            countryFLAG = countrysTimeZone[zone.toUpperCase()];

        var t = new Date();
        span_time[3].innerHTML = t.toLocaleString();
        span_time[4].innerHTML = zone;
        t = t.toString();

        var key = "";
        if (t.toUpperCase().indexOf(" GMT") > -1) {
            key = " GMT";
            span_time[0].style.fontWeight = "bold";
        } else {
            span_time[0].style.fontWeight = "normal";
        }
        if (t.toUpperCase().indexOf(" UTC") > -1) {
            key = " UTC";
            span_time[1].style.fontWeight = "bold";
        } else {
            span_time[1].style.fontWeight = "normal";
        }

        if (key) {
            key = t
                .toUpperCase()
                .substring(t.toUpperCase().indexOf(key) + key.length, t.lenght);

            if (key) {
                if (key.indexOf("(") > -1) {
                    key = key.split("(")[0];
                    if (key) {
                        span_time[2].innerHTML = key;
                    }
                }
            }
        }

        document.getElementById("timecountryimg").src =
            flagPath + "UNKNOWN" + iconExt;
        if (countryFLAG.toUpperCase()) {
            nameCOUNTRY = iso3[countryFLAG];
            if (nameCOUNTRY) {
                nameCOUNTRY = nameCOUNTRY.toUpperCase();
            } else {
                nameCOUNTRY = "N/A";
            }
        } else {
            countryFLAG = "UNKNOWN";
            nameCOUNTRY = "N/A";
        }
        console.log(countryFLAG);
        document.getElementById("timecountry").innerHTML = nameCOUNTRY;
        document.getElementById("timecountryimg").src =
            flagPath + countryFLAG.toLowerCase() + iconExt;
    }

    function mycallback1(myObj) {
        var serverFile = myObj.currentFileTime / 10000 - 11644473600000,
            endTime = new Date().getTime(),
            serverTime = new Date(serverFile),
            delayTime = endTime - sistemTime.getTime();
        delayTime = delayTime / 2;
        var sisTime = sistemTime.getTime() + delayTime,
            timeDifference = Math.abs(Math.ceil(sisTime - serverTime.getTime()));
        discrepancy = msToTime(timeDifference);
    }

    function msToTime(s) {
        function pad(n, z) {
            z = z || 2;
            return ("00" + n).slice(-z);
        }

        var ms = s % 1000;
        s = (s - ms) / 1000;
        var secs = s % 60;
        s = (s - secs) / 60;
        var mins = s % 60,
            hrs = (s - mins) / 60,
            c = pad(hrs) + "." + pad(mins) + "." + pad(secs);
        return c + "." + pad(ms, 3);
    }

    function delayTime() {
        if (discrepancy == "") {
            discrepancy = "none";
        }
        endTimeDate();
    }

    function endTimeDate() {
        try {
            var elemjs = document.getElementById("scrtime");
            elemjs.parentNode.removeChild(elemjs);
            elemjs = null;
        } catch (err) {
        }
        dataTIME.discrepancy = discrepancy;

        var jds = JSON.stringify(
            dataTIME.locale +
            "|" +
            dataTIME.week +
            "|" +
            dataTIME.calendar +
            "|" +
            dataTIME.numbering +
            "|" +
            dataTIME.cycle +
            "|" +
            dataTIME.format
        );
        dataTIME.HASH = md5(jds).toUpperCase();

        document
            .getElementById("div_time")
            .getElementsByTagName("span")[5].innerHTML = dataTIME.HASH;
        enableModule("div_time");
        box_time = 1;
    }

    let sistemTime = (discrepancy = "");

    const countrysTimeZone = {
        "AFRICA/ABIDJAN": "ci",
        "AFRICA/ACCRA": "gh",
        "AFRICA/ADDIS_ABABA": "et",
        "AFRICA/ALGIERS": "dz",
        "AFRICA/ASMARA": "er",
        "AFRICA/BAMAKO": "ml",
        "AFRICA/BANGUI": "cf",
        "AFRICA/BANJUL": "gm",
        "AFRICA/BISSAU": "gw",
        "AFRICA/BLANTYRE": "mw",
        "AFRICA/BRAZZAVILLE": "cg",
        "AFRICA/BUJUMBURA": "bi",
        "AFRICA/CAIRO": "eg",
        "AFRICA/CASABLANCA": "ma",
        "AFRICA/CEUTA": "es",
        "AFRICA/CONAKRY": "gn",
        "AFRICA/DAKAR": "sn",
        "AFRICA/DAR_ES_SALAAM": "tz",
        "AFRICA/DJIBOUTI": "dj",
        "AFRICA/DOUALA": "cm",
        "AFRICA/EL_AAIUN": "eh",
        "AFRICA/FREETOWN": "sl",
        "AFRICA/GABORONE": "bw",
        "AFRICA/HARARE": "zw",
        "AFRICA/JOHANNESBURG": "za",
        "AFRICA/JUBA": "ss",
        "AFRICA/KAMPALA": "ug",
        "AFRICA/KHARTOUM": "sd",
        "AFRICA/KIGALI": "rw",
        "AFRICA/KINSHASA": "cd",
        "AFRICA/LAGOS": "ng",
        "AFRICA/LIBREVILLE": "ga",
        "AFRICA/LOME": "tg",
        "AFRICA/LUANDA": "ao",
        "AFRICA/LUBUMBASHI": "cd",
        "AFRICA/LUSAKA": "zm",
        "AFRICA/MALABO": "gq",
        "AFRICA/MAPUTO": "mz",
        "AFRICA/MASERU": "ls",
        "AFRICA/MBABANE": "sz",
        "AFRICA/MOGADISHU": "so",
        "AFRICA/MONROVIA": "lr",
        "AFRICA/NAIROBI": "ke",
        "AFRICA/NDJAMENA": "td",
        "AFRICA/NIAMEY": "ne",
        "AFRICA/NOUAKCHOTT": "mr",
        "AFRICA/OUAGADOUGOU": "bf",
        "AFRICA/PORTO-NOVO": "bj",
        "AFRICA/SAO_TOME": "st",
        "AFRICA/TRIPOLI": "ly",
        "AFRICA/TUNIS": "tn",
        "AFRICA/WINDHOEK": "na",
        "AMERICA/ADAK": "us",
        "AMERICA/ANCHORAGE": "us",
        "AMERICA/ANGUILLA": "ai",
        "AMERICA/ANTIGUA": "ag",
        "AMERICA/ARAGUAINA": "br",
        "AMERICA/ARGENTINA/BUENOS_AIRES": "ar",
        "AMERICA/ARGENTINA/CATAMARCA": "ar",
        "AMERICA/ARGENTINA/CORDOBA": "ar",
        "AMERICA/ARGENTINA/JUJUY": "ar",
        "AMERICA/ARGENTINA/LA_RIOJA": "ar",
        "AMERICA/ARGENTINA/MENDOZA": "ar",
        "AMERICA/ARGENTINA/RIO_GALLEGOS": "ar",
        "AMERICA/ARGENTINA/SALTA": "ar",
        "AMERICA/ARGENTINA/SAN_JUAN": "ar",
        "AMERICA/ARGENTINA/SAN_LUIS": "ar",
        "AMERICA/ARGENTINA/TUCUMAN": "ar",
        "AMERICA/ARGENTINA/USHUAIA": "ar",
        "AMERICA/ARUBA": "aw",
        "AMERICA/ASUNCION": "py",
        "AMERICA/ATIKOKAN": "ca",
        "AMERICA/BAHIA": "br",
        "AMERICA/BAHIA_BANDERAS": "mx",
        "AMERICA/BARBADOS": "bb",
        "AMERICA/BELEM": "br",
        "AMERICA/BELIZE": "bz",
        "AMERICA/BLANC-SABLON": "ca",
        "AMERICA/BOA_VISTA": "br",
        "AMERICA/BOGOTA": "co",
        "AMERICA/BOISE": "us",
        "AMERICA/CAMBRIDGE_BAY": "ca",
        "AMERICA/CAMPO_GRANDE": "br",
        "AMERICA/CANCUN": "mx",
        "AMERICA/CARACAS": "ve",
        "AMERICA/CAYENNE": "gf",
        "AMERICA/CAYMAN": "ky",
        "AMERICA/CHICAGO": "us",
        "AMERICA/CHIHUAHUA": "mx",
        "AMERICA/COSTA_RICA": "cr",
        "AMERICA/CRESTON": "ca",
        "AMERICA/CUIABA": "br",
        "AMERICA/CURACAO": "cw",
        "AMERICA/DANMARKSHAVN": "gl",
        "AMERICA/DAWSON": "ca",
        "AMERICA/DAWSON_CREEK": "ca",
        "AMERICA/DENVER": "us",
        "AMERICA/DETROIT": "us",
        "AMERICA/DOMINICA": "dm",
        "AMERICA/EDMONTON": "ca",
        "AMERICA/EIRUNEPE": "br",
        "AMERICA/EL_SALVADOR": "sv",
        "AMERICA/FORT_NELSON": "ca",
        "AMERICA/FORTALEZA": "br",
        "AMERICA/GLACE_BAY": "ca",
        "AMERICA/GOOSE_BAY": "ca",
        "AMERICA/GRAND_TURK": "tc",
        "AMERICA/GRENADA": "gd",
        "AMERICA/GUADELOUPE": "gp",
        "AMERICA/GUATEMALA": "gt",
        "AMERICA/GUAYAQUIL": "ec",
        "AMERICA/GUYANA": "gy",
        "AMERICA/HALIFAX": "ca",
        "AMERICA/HAVANA": "cu",
        "AMERICA/HERMOSILLO": "mx",
        "AMERICA/INDIANA/INDIANAPOLIS": "us",
        "AMERICA/INDIANA/KNOX": "us",
        "AMERICA/INDIANA/MARENGO": "us",
        "AMERICA/INDIANA/PETERSBURG": "us",
        "AMERICA/INDIANA/TELL_CITY": "us",
        "AMERICA/INDIANA/VEVAY": "us",
        "AMERICA/INDIANA/VINCENNES": "us",
        "AMERICA/INDIANA/WINAMAC": "us",
        "AMERICA/INUVIK": "ca",
        "AMERICA/IQALUIT": "ca",
        "AMERICA/JAMAICA": "jm",
        "AMERICA/JUNEAU": "us",
        "AMERICA/KENTUCKY/LOUISVILLE": "us",
        "AMERICA/KENTUCKY/MONTICELLO": "us",
        "AMERICA/KRALENDIJK": "bq",
        "AMERICA/LA_PAZ": "bo",
        "AMERICA/LIMA": "pe",
        "AMERICA/LOS_ANGELES": "us",
        "AMERICA/LOWER_PRINCES": "sx",
        "AMERICA/MACEIO": "br",
        "AMERICA/MANAGUA": "ni",
        "AMERICA/MANAUS": "br",
        "AMERICA/MARIGOT": "mf",
        "AMERICA/MARTINIQUE": "mq",
        "AMERICA/MATAMOROS": "mx",
        "AMERICA/MAZATLAN": "mx",
        "AMERICA/MENOMINEE": "us",
        "AMERICA/MERIDA": "mx",
        "AMERICA/METLAKATLA": "us",
        "AMERICA/MEXICO_CITY": "mx",
        "AMERICA/MIQUELON": "pm",
        "AMERICA/MONCTON": "ca",
        "AMERICA/MONTERREY": "mx",
        "AMERICA/MONTEVIDEO": "uy",
        "AMERICA/MONTSERRAT": "ms",
        "AMERICA/NASSAU": "bs",
        "AMERICA/NEW_YORK": "us",
        "AMERICA/NIPIGON": "ca",
        "AMERICA/NOME": "us",
        "AMERICA/NORONHA": "br",
        "AMERICA/NORTH_DAKOTA/BEULAH": "us",
        "AMERICA/NORTH_DAKOTA/CENTER": "us",
        "AMERICA/NORTH_DAKOTA/NEW_SALEM": "us",
        "AMERICA/NUUK": "gl",
        "AMERICA/OJINAGA": "mx",
        "AMERICA/PANAMA": "pa",
        "AMERICA/PANGNIRTUNG": "ca",
        "AMERICA/PARAMARIBO": "sr",
        "AMERICA/PHOENIX": "us",
        "AMERICA/PORT-AU-PRINCE": "ht",
        "AMERICA/PORT_OF_SPAIN": "tt",
        "AMERICA/PORTO_VELHO": "br",
        "AMERICA/PUERTO_RICO": "pr",
        "AMERICA/PUNTA_ARENAS": "cl",
        "AMERICA/RAINY_RIVER": "ca",
        "AMERICA/RANKIN_INLET": "ca",
        "AMERICA/RECIFE": "br",
        "AMERICA/REGINA": "ca",
        "AMERICA/RESOLUTE": "ca",
        "AMERICA/RIO_BRANCO": "br",
        "AMERICA/SANTAREM": "br",
        "AMERICA/SANTIAGO": "cl",
        "AMERICA/SANTO_DOMINGO": "do",
        "AMERICA/SAO_PAULO": "br",
        "AMERICA/SCORESBYSUND": "gl",
        "AMERICA/SITKA": "us",
        "AMERICA/ST_BARTHELEMY": "bl",
        "AMERICA/ST_JOHNS": "ca",
        "AMERICA/ST_KITTS": "kn",
        "AMERICA/ST_LUCIA": "lc",
        "AMERICA/ST_THOMAS": "vi",
        "AMERICA/ST_VINCENT": "vc",
        "AMERICA/SWIFT_CURRENT": "ca",
        "AMERICA/TEGUCIGALPA": "hn",
        "AMERICA/THULE": "gl",
        "AMERICA/THUNDER_BAY": "ca",
        "AMERICA/TIJUANA": "mx",
        "AMERICA/TORONTO": "ca",
        "AMERICA/TORTOLA": "vg",
        "AMERICA/VANCOUVER": "ca",
        "AMERICA/WHITEHORSE": "ca",
        "AMERICA/WINNIPEG": "ca",
        "AMERICA/YAKUTAT": "us",
        "AMERICA/YELLOWKNIFE": "ca",
        "ANTARCTICA/CASEY": "aq",
        "ANTARCTICA/DAVIS": "aq",
        "ANTARCTICA/DUMONTDURVILLE": "aq",
        "ANTARCTICA/MACQUARIE": "au",
        "ANTARCTICA/MAWSON": "aq",
        "ANTARCTICA/MCMURDO": "aq",
        "ANTARCTICA/PALMER": "aq",
        "ANTARCTICA/ROTHERA": "aq",
        "ANTARCTICA/SYOWA": "aq",
        "ANTARCTICA/TROLL": "aq",
        "ANTARCTICA/VOSTOK": "aq",
        "ARCTIC/LONGYEARBYEN": "sj",
        "ASIA/ADEN": "ye",
        "ASIA/ALMATY": "kz",
        "ASIA/AMMAN": "jo",
        "ASIA/ANADYR": "ru",
        "ASIA/AQTAU": "kz",
        "ASIA/AQTOBE": "kz",
        "ASIA/ASHGABAT": "tm",
        "ASIA/ATYRAU": "kz",
        "ASIA/BAGHDAD": "iq",
        "ASIA/BAHRAIN": "bh",
        "ASIA/BAKU": "az",
        "ASIA/BANGKOK": "th",
        "ASIA/BARNAUL": "ru",
        "ASIA/BEIRUT": "lb",
        "ASIA/BISHKEK": "kg",
        "ASIA/BRUNEI": "bn",
        "ASIA/CHITA": "ru",
        "ASIA/CHOIBALSAN": "mn",
        "ASIA/COLOMBO": "lk",
        "ASIA/DAMASCUS": "sy",
        "ASIA/DHAKA": "bd",
        "ASIA/DILI": "tl",
        "ASIA/DUBAI": "ae",
        "ASIA/DUSHANBE": "tj",
        "ASIA/FAMAGUSTA": "cy",
        "ASIA/GAZA": "ps",
        "ASIA/HEBRON": "ps",
        "ASIA/HO_CHI_MINH": "vn",
        "ASIA/HONG_KONG": "hk",
        "ASIA/HOVD": "mn",
        "ASIA/IRKUTSK": "ru",
        "ASIA/JAKARTA": "id",
        "ASIA/JAYAPURA": "id",
        "ASIA/JERUSALEM": "il",
        "ASIA/KABUL": "af",
        "ASIA/KAMCHATKA": "ru",
        "ASIA/KARACHI": "pk",
        "ASIA/KATHMANDU": "np",
        "ASIA/KHANDYGA": "ru",
        "ASIA/KOLKATA": "in",
        "ASIA/KRASNOYARSK": "ru",
        "ASIA/KUALA_LUMPUR": "my",
        "ASIA/KUCHING": "my",
        "ASIA/KUWAIT": "kw",
        "ASIA/MACAU": "mo",
        "ASIA/MAGADAN": "ru",
        "ASIA/MAKASSAR": "id",
        "ASIA/MANILA": "ph",
        "ASIA/MUSCAT": "om",
        "ASIA/NICOSIA": "cy",
        "ASIA/NOVOKUZNETSK": "ru",
        "ASIA/NOVOSIBIRSK": "ru",
        "ASIA/OMSK": "ru",
        "ASIA/ORAL": "kz",
        "ASIA/PHNOM_PENH": "kh",
        "ASIA/PONTIANAK": "id",
        "ASIA/PYONGYANG": "kp",
        "ASIA/QATAR": "qa",
        "ASIA/QOSTANAY": "kz",
        "ASIA/QYZYLORDA": "kz",
        "ASIA/RIYADH": "sa",
        "ASIA/SAKHALIN": "ru",
        "ASIA/SAMARKAND": "uz",
        "ASIA/SEOUL": "kr",
        "ASIA/SHANGHAI": "cn",
        "ASIA/SINGAPORE": "sg",
        "ASIA/SREDNEKOLYMSK": "ru",
        "ASIA/TAIPEI": "tw",
        "ASIA/TASHKENT": "uz",
        "ASIA/TBILISI": "ge",
        "ASIA/TEHRAN": "ir",
        "ASIA/THIMPHU": "bt",
        "ASIA/TOKYO": "jp",
        "ASIA/TOMSK": "ru",
        "ASIA/ULAANBAATAR": "mn",
        "ASIA/URUMQI": "cn",
        "ASIA/UST-NERA": "ru",
        "ASIA/VIENTIANE": "la",
        "ASIA/VLADIVOSTOK": "ru",
        "ASIA/YAKUTSK": "ru",
        "ASIA/YANGON": "mm",
        "ASIA/YEKATERINBURG": "ru",
        "ASIA/YEREVAN": "am",
        "ATLANTIC/AZORES": "pt",
        "ATLANTIC/BERMUDA": "bm",
        "ATLANTIC/CANARY": "es",
        "ATLANTIC/CAPE_VERDE": "cv",
        "ATLANTIC/FAROE": "fo",
        "ATLANTIC/MADEIRA": "pt",
        "ATLANTIC/REYKJAVIK": "is",
        "ATLANTIC/SOUTH_GEORGIA": "gs",
        "ATLANTIC/ST_HELENA": "sh",
        "ATLANTIC/STANLEY": "fk",
        "AUSTRALIA/ADELAIDE": "au",
        "AUSTRALIA/BRISBANE": "au",
        "AUSTRALIA/BROKEN_HILL": "au",
        "AUSTRALIA/DARWIN": "au",
        "AUSTRALIA/EUCLA": "au",
        "AUSTRALIA/HOBART": "au",
        "AUSTRALIA/LINDEMAN": "au",
        "AUSTRALIA/LORD_HOWE": "au",
        "AUSTRALIA/MELBOURNE": "au",
        "AUSTRALIA/PERTH": "au",
        "AUSTRALIA/SYDNEY": "au",
        "EUROPE/AMSTERDAM": "nl",
        "EUROPE/ANDORRA": "ad",
        "EUROPE/ASTRAKHAN": "ru",
        "EUROPE/ATHENS": "gr",
        "EUROPE/BELGRADE": "rs",
        "EUROPE/BERLIN": "de",
        "EUROPE/BRATISLAVA": "sk",
        "EUROPE/BRUSSELS": "be",
        "EUROPE/BUCHAREST": "ro",
        "EUROPE/BUDAPEST": "hu",
        "EUROPE/BUSINGEN": "de",
        "EUROPE/CHISINAU": "md",
        "EUROPE/COPENHAGEN": "dk",
        "EUROPE/DUBLIN": "ie",
        "EUROPE/GIBRALTAR": "gi",
        "EUROPE/GUERNSEY": "gg",
        "EUROPE/HELSINKI": "fi",
        "EUROPE/ISLE_OF_MAN": "im",
        "EUROPE/ISTANBUL": "tr",
        "EUROPE/JERSEY": "je",
        "EUROPE/KALININGRAD": "ru",
        "EUROPE/KIEV": "ua",
        "EUROPE/KIROV": "ru",
        "EUROPE/LISBON": "pt",
        "EUROPE/LJUBLJANA": "si",
        "EUROPE/LONDON": "gb",
        "EUROPE/LUXEMBOURG": "lu",
        "EUROPE/MADRID": "es",
        "EUROPE/MALTA": "mt",
        "EUROPE/MARIEHAMN": "ax",
        "EUROPE/MINSK": "by",
        "EUROPE/MONACO": "mc",
        "EUROPE/MOSCOW": "ru",
        "EUROPE/OSLO": "no",
        "EUROPE/PARIS": "fr",
        "EUROPE/PODGORICA": "me",
        "EUROPE/PRAGUE": "cz",
        "EUROPE/RIGA": "lv",
        "EUROPE/ROME": "it",
        "EUROPE/SAMARA": "ru",
        "EUROPE/SAN_MARINO": "sm",
        "EUROPE/SARAJEVO": "ba",
        "EUROPE/SARATOV": "ru",
        "EUROPE/SIMFEROPOL": "ua",
        "EUROPE/SKOPJE": "mk",
        "EUROPE/SOFIA": "bg",
        "EUROPE/STOCKHOLM": "se",
        "EUROPE/TALLINN": "ee",
        "EUROPE/TIRANE": "al",
        "EUROPE/ULYANOVSK": "ru",
        "EUROPE/UZHGOROD": "ua",
        "EUROPE/VADUZ": "li",
        "EUROPE/VATICAN": "va",
        "EUROPE/VIENNA": "at",
        "EUROPE/VILNIUS": "lt",
        "EUROPE/VOLGOGRAD": "ru",
        "EUROPE/WARSAW": "pl",
        "EUROPE/ZAGREB": "hr",
        "EUROPE/ZAPOROZHYE": "ua",
        "EUROPE/ZURICH": "ch",
        "INDIAN/ANTANANARIVO": "mg",
        "INDIAN/CHAGOS": "io",
        "INDIAN/CHRISTMAS": "cx",
        "INDIAN/COCOS": "cc",
        "INDIAN/COMORO": "km",
        "INDIAN/KERGUELEN": "tf",
        "INDIAN/MAHE": "sc",
        "INDIAN/MALDIVES": "mv",
        "INDIAN/MAURITIUS": "mu",
        "INDIAN/MAYOTTE": "yt",
        "INDIAN/REUNION": "re",
        "PACIFIC/APIA": "ws",
        "PACIFIC/AUCKLAND": "nz",
        "PACIFIC/BOUGAINVILLE": "pg",
        "PACIFIC/CHATHAM": "nz",
        "PACIFIC/CHUUK": "fm",
        "PACIFIC/EASTER": "cl",
        "PACIFIC/EFATE": "vu",
        "PACIFIC/ENDERBURY": "ki",
        "PACIFIC/FAKAOFO": "tk",
        "PACIFIC/FIJI": "fj",
        "PACIFIC/FUNAFUTI": "tv",
        "PACIFIC/GALAPAGOS": "ec",
        "PACIFIC/GAMBIER": "pf",
        "PACIFIC/GUADALCANAL": "sb",
        "PACIFIC/GUAM": "gu",
        "PACIFIC/HONOLULU": "us",
        "PACIFIC/KIRITIMATI": "ki",
        "PACIFIC/KOSRAE": "fm",
        "PACIFIC/KWAJALEIN": "mh",
        "PACIFIC/MAJURO": "mh",
        "PACIFIC/MARQUESAS": "pf",
        "PACIFIC/MIDWAY": "um",
        "PACIFIC/NAURU": "nr",
        "PACIFIC/NIUE": "nu",
        "PACIFIC/NORFOLK": "nf",
        "PACIFIC/NOUMEA": "nc",
        "PACIFIC/PAGO_PAGO": "as",
        "PACIFIC/PALAU": "pw",
        "PACIFIC/PITCAIRN": "pn",
        "PACIFIC/POHNPEI": "fm",
        "PACIFIC/PORT_MORESBY": "pg",
        "PACIFIC/RAROTONGA": "ck",
        "PACIFIC/SAIPAN": "mp",
        "PACIFIC/TAHITI": "pf",
        "PACIFIC/TARAWA": "ki",
        "PACIFIC/TONGATAPU": "to",
        "PACIFIC/WAKE": "um",
        "PACIFIC/WALLIS": "wf",
    };

    const dataPLUGINS = {};

    function pluginsModule() {
        box_plugins = 0;

        let text = "NOT AVAILABLE",
            div_plugins = document
                .getElementById("div_plugins")
                .getElementsByTagName("div"),
            span_plugins = document
                .getElementById("div_plugins")
                .getElementsByTagName("span");

        div_plugins[6].style.color = "#999";
        div_plugins[6].innerHTML = text;

        if (typeof navigator.plugins === "object") {
            if (navigator.plugins.length > 0) {
                var pluginsLen = navigator.plugins.length;

                var a = Object.getOwnPropertyNames(navigator.plugins) + "<br>";
                var s = 0;

                for (i = 0; i < pluginsLen; i++) {
                    var plugin = navigator.plugins[i];

                    var constructor = plugin.constructor ? plugin.constructor : "n/a";
                    var name = plugin.name ? plugin.name : "n/a";
                    var filename = plugin.filename ? plugin.filename : "n/a";
                    var description = plugin.description ? plugin.description : "n/a";

                    if (s < 6) {
                        span_plugins[s].innerHTML = name;
                        span_plugins[s].title = name;
                        span_plugins[s + 1].innerHTML = name;
                        span_plugins[s + 1].title = name;
                        s = s + 2;
                    }

                    for (j = 0; j < plugin.length; j++) {
                        var mimetype = plugin[j];

                        var enabledPlugin = mimetype.enabledPlugin
                            ? mimetype.enabledPlugin
                            : "n/a";
                        var type = mimetype.type ? mimetype.type : "n/a";
                        var mimedesc = mimetype.description
                            ? mimetype.description
                            : "n/a";
                        var suffixes = mimetype.suffixes ? mimetype.suffixes : "n/a";
                    }

                    dataPLUGINS[i] = {
                        name: name,
                        filename: filename,
                        description: description,
                        constructor: constructor,
                        mimetype: {
                            type: type,
                            description: mimedesc,
                            suffixes: suffixes,
                            enabledPlugin: enabledPlugin,
                        },
                    };
                }

                dataPLUGINS.HASH = md5(JSON.stringify(dataPLUGINS)).toUpperCase();
                span_plugins[6].innerHTML = dataPLUGINS.HASH;
                enableModule("div_plugins");
            } else {
                text = "NOT FOUND";
                div_plugins[6].style.color = "#555";
                div_plugins[6].innerHTML = text;

                disableModule("div_plugins");
                dataPLUGINS.HASH = md5(text).toUpperCase();
                document.getElementById("div_plugins").style.backgroundColor =
                    "rgba(255, 255, 255, 0.8)";
                document
                    .getElementById("div_plugins")
                    .getElementsByTagName("img")[1].className = "";
            }
        } else {
            disableModule("div_plugins");
            dataPLUGINS.HASH = md5(text).toUpperCase();
        }

        box_plugins = 1;
    }

    function audioProperties() {
        var audioOut = "N/A";

        try {
            var contextOut = window.AudioContext || window.webkitAudioContext;

            if (typeof contextOut !== "function") {
                audioOut = "Not available";
            } else {
                var f = new contextOut(),
                    d = f.createAnalyser();

                audioOut = a({}, f, "x");
                audioOut = a(audioOut, f.destination, "x");
                audioOut = a(audioOut, f.listener, "x");
                audioOut = a(audioOut, d, "y");
            }
        } catch (e) {
        }

        function a(a, b, c) {
            for (var d in b)
                ("number" !== typeof b[d] && "string" !== typeof b[d]) ||
                (a[(c ? c : "") + d] = b[d]);
            return a;
        }

        return audioOut;
    }

    function audioHybrid() {
        try {
            var audioCtx = new (window.AudioContext ||
                window.webkitAudioContext)(),
                oscillator = audioCtx.createOscillator(),
                analyser = audioCtx.createAnalyser(),
                gain = audioCtx.createGain(),
                scriptProcessor = audioCtx.createScriptProcessor(4096, 1, 1);
            compressor = audioCtx.createDynamicsCompressor();
            compressor.threshold && (compressor.threshold.value = -50);
            compressor.knee && (compressor.knee.value = 40);
            compressor.ratio && (compressor.ratio.value = 12);
            compressor.reduction && (compressor.reduction.value = -20);
            compressor.attack && (compressor.attack.value = 0);
            compressor.release && (compressor.release.value = 0.25);

            gain.gain.value = 0;
            oscillator.type = "triangle";
            oscillator.connect(compressor);
            compressor.connect(analyser);
            analyser.connect(scriptProcessor);
            scriptProcessor.connect(gain);
            gain.connect(audioCtx.destination);

            scriptProcessor.onaudioprocess = function (bins) {
                bins = new Float32Array(analyser.frequencyBinCount);
                analyser.getFloatFrequencyData(bins);
                for (var i = 0; i < bins.length; i++) {
                    aHybrid.push(bins[i]);
                }
                analyser.disconnect();
                scriptProcessor.disconnect();
                gain.disconnect();
                var hash = aHybrid.slice(0, 30).toString();

                dataMEDIA.hybrid = md5(hash).toUpperCase();
            };

            oscillator.start(0);
        } catch (e) {
        }
    }

    function audioFrequency() {
        try {
            var audioCtx = new (window.AudioContext ||
                window.webkitAudioContext)(),
                oscillator = audioCtx.createOscillator(),
                analyser = audioCtx.createAnalyser(),
                gain = audioCtx.createGain(),
                scriptProcessor = audioCtx.createScriptProcessor(4096, 1, 1);

            gain.gain.value = 0;
            oscillator.type = "triangle";
            oscillator.connect(analyser);
            analyser.connect(scriptProcessor);
            scriptProcessor.connect(gain);
            gain.connect(audioCtx.destination);

            scriptProcessor.onaudioprocess = function (bins) {
                bins = new Float32Array(analyser.frequencyBinCount);
                analyser.getFloatFrequencyData(bins);
                for (var i = 0; i < bins.length; i++) {
                    aFrequency.push(bins[i]);
                }

                analyser.disconnect();
                scriptProcessor.disconnect();
                gain.disconnect();

                var hash = aFrequency.slice(0, 30).toString();

                dataMEDIA.frequency = md5(hash).toUpperCase();
            };

            oscillator.start(0);
        } catch (err) {
        }
    }

    function audioCompresor() {
        try {
            if (
                ((context = new (window.OfflineAudioContext ||
                    window.webkitOfflineAudioContext)(1, 44100, 44100)),
                    !context)
            ) {
            }

            pxi_oscillator = context.createOscillator();
            pxi_oscillator.type = "triangle";
            pxi_oscillator.frequency.value = 1e4;

            pxi_compressor = context.createDynamicsCompressor();
            pxi_compressor.threshold && (pxi_compressor.threshold.value = -50);
            pxi_compressor.knee && (pxi_compressor.knee.value = 40);
            pxi_compressor.ratio && (pxi_compressor.ratio.value = 12);
            pxi_compressor.reduction && (pxi_compressor.reduction.value = -20);
            pxi_compressor.attack && (pxi_compressor.attack.value = 0);
            pxi_compressor.release && (pxi_compressor.release.value = 0.25);

            pxi_oscillator.connect(pxi_compressor);
            pxi_compressor.connect(context.destination);

            pxi_oscillator.start(0);
            context.startRendering();
            context.oncomplete = function (evnt) {
                var data = [];
                for (i = 0; i < evnt.renderedBuffer.length; i++) {
                    data.push(evnt.renderedBuffer.getChannelData(0)[i].toString());
                }

                pxi_compressor.disconnect();
                dataMEDIA.compressor = md5(data.toString()).toUpperCase();
                data = null;
            };
        } catch (e) {
        }
    }

    const aFrequency = [];
    const aHybrid = [];

    function mediaModule() {
        box_media = 0;

        audioFrequency();
        audioHybrid();
        audioCompresor();

        var mediaProp = audioProperties();

        dataMEDIA.label = [];
        dataMEDIA.device = [];
        dataMEDIA.properties = md5(JSON.stringify(mediaProp)).toUpperCase();

        var span = document
            .getElementById("div_media")
            .getElementsByTagName("span");

        if (mediaProp.xsampleRate != undefined) {
            span[0].innerHTML = mediaProp.xsampleRate + " Mhz";
            span[1].innerHTML = mediaProp.xchannelInterpretation;
        }

        if (mediaProp.xmaxChannelCount != undefined) {
            document
                .getElementById("div_media")
                .getElementsByTagName("div")[15].innerHTML = "Channel Count";
            span[2].innerHTML = mediaProp.xmaxChannelCount;
        }

        var sTime = new Date().getTime();
        statusMedia(sTime);
    }

    function statusMedia(sTime) {
        var eTime = new Date().getTime(),
            xTime = eTime - sTime;

        if (xTime < 3000) {
            if (
                dataMEDIA.properties != undefined &&
                dataMEDIA.compressor != undefined &&
                dataMEDIA.frequency != undefined &&
                dataMEDIA.hybrid != undefined
            ) {
                getMedia();
            } else {
                setTimeout(function () {
                    statusMedia(sTime);
                }, 0);
            }
        } else {
            getMedia();
        }
    }

    function getMedia() {
        if (dataMEDIA.properties != undefined) {
        } else {
            dataMEDIA.properties = "N/A";
        }
        if (dataMEDIA.compressor != undefined) {
        } else {
            dataMEDIA.compressor = "N/A";
        }
        if (dataMEDIA.frequency != undefined) {
        } else {
            dataMEDIA.frequency = "N/A";
        }
        if (dataMEDIA.hybrid != undefined) {
        } else {
            dataMEDIA.hybrid = "N/A";
        }
        dataMEDIA.HASH = "";
        var mediaHash = md5(
            dataMEDIA.properties +
            dataMEDIA.compressor +
            dataMEDIA.frequency +
            dataMEDIA.hybrid
        ).toUpperCase();
        dataMEDIA.HASH = mediaHash;

        document
            .getElementById("div_media")
            .getElementsByTagName("span")[3].innerHTML = mediaHash;

        checkMedia(1);
    }

    function checkMedia(x) {
        var MediaDevices = [],
            canEnumerate =
                (hasMicrophone =
                    hasSpeakers =
                        hasWebcam =
                            isMicrophoneAlreadyCaptured =
                                isWebcamAlreadyCaptured =
                                    false);
        try {
            if (window.MediaStreamTrack && window.MediaStreamTrack.getSources) {
                canEnumerate = 1;
            } else {
                if (
                    navigator.mediaDevices &&
                    !!navigator.mediaDevices.enumerateDevices
                ) {
                    canEnumerate = 1;
                    navigator.enumerateDevices = function (callback) {
                        navigator.mediaDevices.enumerateDevices().then(callback);
                    };
                }
            }

            if (canEnumerate !== false) {
                function checkDeviceSupport(callback) {
                    if (!canEnumerate) {
                        return;
                    }
                    if (
                        !navigator.enumerateDevices &&
                        window.MediaStreamTrack &&
                        window.MediaStreamTrack.getSources
                    ) {
                        navigator.enumerateDevices =
                            window.MediaStreamTrack.getSources.bind(
                                window.MediaStreamTrack
                            );
                    }
                    if (!navigator.enumerateDevices && navigator.enumerateDevices) {
                        navigator.enumerateDevices =
                            navigator.enumerateDevices.bind(navigator);
                    }
                    if (!navigator.enumerateDevices) {
                        if (callback) {
                            callback();
                        }
                        return;
                    }
                    MediaDevices = [];
                    navigator.enumerateDevices(function (devices) {
                        devices.forEach(function (_device) {
                            var device = {};
                            for (var d in _device) {
                                device[d] = _device[d];
                            }
                            var skip;
                            MediaDevices.forEach(function (d) {
                                if (d.id === device.id && d.kind === device.kind) {
                                    skip = true;
                                }
                            });
                            if (skip) {
                                return;
                            }
                            if (!device.deviceId) {
                                device.deviceId = device.id;
                            }
                            if (!device.id) {
                                device.id = device.deviceId;
                            }
                            if (!device.label) {
                                device.label = "ask";
                            } else {
                                if (
                                    device.kind === "videoinput" &&
                                    !isWebcamAlreadyCaptured
                                ) {
                                    isWebcamAlreadyCaptured = true;
                                }
                                if (
                                    device.kind === "audioinput" &&
                                    !isMicrophoneAlreadyCaptured
                                ) {
                                    isMicrophoneAlreadyCaptured = true;
                                }
                            }
                            if (device.kind === "audioinput" || device.kind === "audio") {
                                hasMicrophone = true;
                            }
                            if (device.kind === "audiooutput") {
                                hasSpeakers = true;
                            }
                            if (device.kind === "videoinput" || device.kind === "video") {
                                hasWebcam = true;
                            }
                            MediaDevices.push(device);
                        });
                        if (callback) {
                            callback();
                        }
                    });
                }

                checkDeviceSupport(function () {
                    manageMedia(
                        x,
                        MediaDevices,
                        canEnumerate,
                        hasMicrophone,
                        hasSpeakers,
                        hasWebcam,
                        isMicrophoneAlreadyCaptured,
                        isWebcamAlreadyCaptured
                    );
                });
            } else {
                manageMedia(x, 1, canEnumerate);
            }
        } catch (err) {
            manageMedia(x, 1, canEnumerate);
        }
    }

    function manageMedia(x, dev, num, mic, spk, cam, accesMic, accesCam) {
        var p = 0;

        if (typeof dev == "object") {
            if (num != 1) {
                p = 1;
            } else {
                if (x == 1) {
                    dataMEDIA.enumerate = md5("TRUE");
                    dataMEDIA.type = md5(mic + "," + spk + "," + cam);
                }

                var dataObj = [],
                    devObj = [];

                for (a = 0; a < dev.length; a++) {
                    var obj = Object.keys(dev[a]),
                        data = [],
                        list = "|groupid|deviceid|id|";

                    for (b = 0; b < obj.length; b++) {
                        var str = obj[b];

                        if (list.indexOf("|" + str.toLowerCase() + "|") == -1) {
                            if (dev[a].label != "ask") {
                                data.push(str + ":" + dev[a][str]);
                            }
                        } else {
                            if (str.toLowerCase().toLowerCase() == "id") {
                                if (dev[a].id !== undefined) {
                                    if (dev[a].id.length > 40) {
                                        devObj.push(dev[a].kind + ":" + dev[a][str]);
                                    }
                                }
                            }
                        }
                    }

                    if (data.length > 0) {
                        dataObj.push(data);
                    }
                }

                if (dataObj.length > 0) {
                    dataObj = JSON.stringify(dataObj);
                } else {
                    dataObj = "N/A";
                }
                if (devObj.length > 0) {
                    devObj = JSON.stringify(devObj);
                } else {
                    devObj = "N/A";
                }

                dataMEDIA.label = md5(dataObj);
                dataMEDIA.device = md5(devObj);

                var micList = (spkList = camList = []);

                if ((mic && !accesMic) || (cam && !accesCam)) {
                    var askMic = true;
                    if (mic && !accesMic) {
                        askMic = false;
                    }
                    var askCam = true;
                    if (cam && !accesCam) {
                        askCam = false;
                    }
                    mediaButton(askMic, askCam);

                    if (accesMic) {
                        micList = msc(dev, "audioinput");
                        if (spk) {
                            spkList = msc(dev, "audiooutput");
                        }
                    }
                    if (accesCam) {
                        camList = msc(dev, "videoinput");
                    }

                    mediaHTML(micList, spkList, camList, 1);
                } else {
                    var mediaHash = md5(
                        dataMEDIA.HASH + JSON.stringify(devObj)
                    ).toUpperCase();
                    document
                        .getElementById("div_media")
                        .getElementsByTagName("span")[3].innerHTML = mediaHash;

                    if (mic) {
                        micList = msc(dev, "audioinput");
                    }
                    if (spk) {
                        spkList = msc(dev, "audiooutput");
                    }
                    if (cam) {
                        camList = msc(dev, "videoinput");
                    }

                    mediaHTML(micList, spkList, camList);
                }
            }
        } else {
            p = 1;
        }

        if (p == 1 && x == 1) {
            if (num == 1) {
                dataMEDIA.enumerate = md5("TRUE");
            }

            dataMEDIA.type = md5("N/A").toUpperCase();
            dataMEDIA.label = md5("N/A").toUpperCase();
            dataMEDIA.device = md5("N/A").toUpperCase();

            if (
                document.getElementById("div_media").getElementsByTagName("span")[0]
                    .innerHTML == ""
            ) {
                disableModule("div_media");
            } else {
                enableModule("div_media");
            }
            box_media = 1;
        }
    }

    function msc(dev, s) {
        var devList = [];
        for (a = 0; a < dev.length; a++) {
            if (dev[a].label != "ask") {
                if (dev[a].kind == s) {
                    devList.push(dev[a].label);
                }
            }
        }
        return devList;
    }

    function mediaHTML(mic, spk, cam, per) {
        var len = 2,
            ain = "Audio In",
            aout = "Audio Out",
            vid = "Video In";

        if (per != 1) {
            len = 3;
        }

        var items = [];

        for (a = 0; a < len; a++) {
            if (items.length < len) {
                if (mic.length > a) {
                    items.push([ain, mic[a]]);
                }
            }
            if (len == 2) {
                if (items.length < len) {
                    if (cam.length > a) {
                        items.push([vid, cam[a]]);
                    }
                }
                if (items.length < len) {
                    if (spk.length > a) {
                        items.push([aout, spk[a]]);
                    }
                }
            } else {
                if (items.length < len) {
                    if (spk.length > a) {
                        items.push([aout, spk[a]]);
                    }
                }
                if (items.length < len) {
                    if (cam.length > a) {
                        items.push([vid, cam[a]]);
                    }
                }
            }
        }

        if (items.length > 0) {
            var divArr = [15, 12, 9],
                spanArr = [2, 1, 0],
                div = document
                    .getElementById("div_media")
                    .getElementsByTagName("div"),
                span = document
                    .getElementById("div_media")
                    .getElementsByTagName("span");

            if (items.length > 2) {
                span[0].style.fontSize = "12px";
            }

            items = items.reverse();

            if (per != 1) {
                for (a = 0; a < items.length; a++) {
                    filt(items[a][0], divArr[a], items[a][1], spanArr[a]);
                }
            } else {
                for (a = 1; a < items.length; a++) {
                    filt(items[a - 1][0], divArr[a], items[a - 1][1], spanArr[a]);
                }
            }
        }

        function filt(a, b, c, d) {
            if (c.length > 25 && c.indexOf("(") != -1 && c.indexOf(")") != -1) {
                c = c.substring(c.indexOf("(") + 1, c.length - 1);

                if (c.indexOf(":") != -1 && c.length == 9) {
                    c = c.split(":").join("-");
                    c =
                        "Hardware ID : <span style='color:#ff0000;'>" +
                        c.toUpperCase() +
                        "</span>";
                }
            }

            div[b].style.fontWeight = "300";
            div[b].innerHTML = a;

            span[d].style.fontWeight = "600";
            span[d].innerHTML = c;

            div[b].style.fontWeight = "600";

            if (a == vid) {
                span[d].style.color = "#993300";
            } else {
                if (a == ain) {
                    span[d].style.color = "#009933";
                } else {
                    span[d].style.color = "#999";
                }
            }
        }

        enableModule("div_media");
        box_media = 1;
    }

    function mediaButton(mic, cam) {
        var askmedia =
            "<input type='button' value='ask permision' style='width:100px;height:26px;background:#333;color:#fff;border:none;' onclick='accessMedia(" +
            !mic +
            "," +
            !cam +
            ");'>";
        askmedia =
            "<div id='mediaErrors' style='display:inline-block;text-align:center;font-size:10px;font-weight:600;color:#ff0000;margin-right:10px;'></div>" +
            askmedia;

        if (!cam) {
            askmedia =
                "<img src='pictures/icons/camera.png' style='margin:0;padding:0;height:12px;margin-right:10px;'>" +
                askmedia;
        }
        if (!mic) {
            askmedia =
                "<img src='pictures/icons/microphone.png' style='margin:0;padding:0;height:18px;margin-right:5px;'>" +
                askmedia;
        }

        document
            .getElementById("div_media")
            .getElementsByTagName("div")[15].innerHTML = "Devices";
        document
            .getElementById("div_media")
            .getElementsByTagName("span")[2].innerHTML = askmedia;
    }

    function mediaError(msg) {
        msg = msg.toString();
        if (msg.indexOf("denied") != -1 || msg.indexOf("not allowed") != -1) {
            msg = "DENIED";
        } else {
            msg = "ERROR";
        }
        try {
            document.getElementById("mediaErrors").innerHTML = msg;
        } catch (err) {
        }
    }

    function accessMedia(aud, vid) {
        try {
            document.getElementById("mediaErrors").innerHTML = "";
        } catch (err) {
        }

        var params = {
            audio: aud,
            video: vid,
        };
        navigator.mediaDevices
            .getUserMedia(params)
            .then(function () {
                if (
                    navigator.mediaDevices &&
                    navigator.mediaDevices.enumerateDevices
                ) {
                    try {
                        navigator.mediaDevices
                            .enumerateDevices()
                            .then(function (e) {
                                checkMedia(2);
                            })
                            .catch(function (e) {
                            });
                    } catch (e) {
                    }
                } else {
                    if (
                        window.MediaStreamTrack &&
                        window.MediaStreamTrack.getSources
                    ) {
                        try {
                            MediaStreamTrack.getSources(function (e) {
                                checkMedia(2);
                            });
                        } catch (e) {
                        }
                    }
                }
            })
            .catch(function (e) {
                mediaError(e);
            });
    }

    var utc = "";

    function webrtcModule() {
        box_webrtc = 0;
        <?php
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        ?>
        utc = "<?php echo $ipaddress ?>";

        changeElm("utc", "#000", "normal");

        if (_isIP(utc)) {
            document.getElementById("utc").innerHTML = utc;
            var u = "|" + utc;

            if (u.indexOf("|127.0.") > -1 || u.indexOf("|172.16.") > -1 || u.indexOf("|10.0.") > -1 || u.indexOf("|192.168.") > -1) {

                changeElm("utc", "#ff6600", "bold")
            }

        } else {

            changeElm("utc", "#ff6600", "bold")
        }

        getIPs();
    }

    function changeElm(id, cl, fnt) {
        document.getElementById(id).style.color = cl;
        document.getElementById(id + "title").style.color = cl;
        if (fnt) {
            document.getElementById(id).style.fontWeight = fnt;
            document.getElementById(id + "title").style.fontWeight = fnt;
        }
    }

    var candidate = "";

    function getIPs(callback) {
        var RTCPeerConnection =
            window.RTCPeerConnection ||
            window.mozRTCPeerConnection ||
            window.webkitRTCPeerConnection ||
            navigator.msGetUserMedia ||
            navigator.mediaDevices.getUserMedia;

        if (RTCPeerConnection) {
            var mediaConstraints = {
                optional: [
                    {
                        RtpDataChannels: true,
                    },
                ],
            };

            var servers = {
                iceServers: [
                    {
                        urls: "stun:stun.l.google.com:19302",
                    },
                ],
            };

            var rpc = new RTCPeerConnection(servers, mediaConstraints);

            rpc.onicecandidate = function (event) {
                if (event.candidate != null) {
                    candidate = candidate + event.candidate.candidate + "|";
                }
            };

            rpc.createDataChannel("");
            rpc.createOffer(
                function (re) {
                    rpc.setLocalDescription(
                        re,
                        function () {
                        },
                        function () {
                        }
                    );
                },
                function () {
                }
            );

            setTimeout(function () {
                var startTime = new Date().getTime();
                getrtcdata(rpc, startTime);
            }, 2000);
        } else {
            webRtcResp("disabled", "not Supported");
        }
    }

    function getrtcdata(rpc, startTime) {
        var endTime = new Date().getTime();
        var execTime = endTime - startTime;

        if (execTime < 5000) {
            var verr = "0";
            var webrtcip = (localip = "N/A");
            if (rpc.localDescription) {
                var lines = rpc.localDescription.sdp;

                if (lines.indexOf("a=candidate") != -1) {
                    var f = lines;
                    var data = "";
                    lines = lines.split("\n");

                    lines.forEach(function (line) {
                        if (line.indexOf("raddr") != -1) {
                            var ig = line.substring(
                                line.indexOf(".") - 3,
                                line.indexOf(" raddr")
                            );
                            ig = ig.substring(0, ig.lastIndexOf(".") + 4);
                            ig = ig.split(" ");
                            if (ig.length == 1) {
                                ig = ig[0];
                            }
                            if (ig.length == 2) {
                                if (ig[0].indexOf(".") != -1) {
                                    ig = ig[0];
                                } else {
                                    ig = ig[1];
                                }
                            }
                            if (ig.length == 3) {
                                ig = ig[1];
                            }

                            webrtcip = ig;

                            ig = line.substring(
                                line.indexOf(" raddr") + 7,
                                line.indexOf(" rport")
                            );
                            ig = ig.split(" ").join("");

                            if (!webrtcip) {
                                webrtcip = ig;
                            }
                        }

                        if (line.indexOf("typ host") != -1) {
                            ig = line.split(" ");
                            ig = ig[4];

                            localip = ig;
                        }

                        data = data + line;
                    });
                    candidate = candidate + data;

                    data = "";
                } else {
                    setTimeout(function () {
                        getrtcdata(rpc, startTime);
                    }, 10);
                }
            } else {
                verr = "1";
            }
            if (verr == "1") {
                if (!window.mozRTCPeerConnection && !window.RTCPeerConnection) {
                    webRtcResp("disabled", "not supported");
                } else {
                    setTimeout(function () {
                        getrtcdata(rpc, startTime);
                    }, 10);
                }
            } else {
                webRtcResp(webrtcip, localip);
            }
        } else {
            webRtcResp("not available", "not available");
        }
    }

    function webRtcResp(udp, local) {
        changeElm("local", "#000", "bold");
        var lcl = document.getElementById("local");

        if (local) {
            if (local.indexOf("-") > -1) {
                changeElm("local", "#999", "bold");
                local = md5(local).substr(0, 24).toUpperCase();
                lcl.style.fontWeight = "normal";
                lcl.style.fontSize = "12px";
            } else {
                if (
                    local.toLowerCase() != "not available" &&
                    local.toLowerCase() != "not supported" &&
                    local.toLowerCase() != "n/a"
                ) {
                    var u = "|" + local;
                    if (
                        !_isIP(local) ||
                        (u.indexOf("|127.0.") < 0 &&
                            u.indexOf("|172.16.") < 0 &&
                            u.indexOf("|10.0.") < 0 &&
                            u.indexOf("|192.168.") < 0)
                    ) {
                        changeElm("local", "#ff6600", "bold");
                    }
                }
            }
        }

        changeElm("udp", "#000", "bold");
        document.getElementById("udp").style.color = "#000";
        document.getElementById("udptitle").style.color = "#000";

        if (udp) {
            if (_isIP(udp)) {
                if (udp != utc) {
                    changeElm("udp", "#ff6600", "bold");
                }

                getFlagIP(udp);
            } else {
                getFlagIP();
            }
        } else {
            getFlagIP();
        }
        document.getElementById("udp").innerHTML=udp;
        lcl.innerHTML=local;
    }

    function getFlagIP(udp) {
        if (!udp) {
            udp = "";
        }
        var rnd = Math.floor(Math.random() * 1000) + 100;
        getData(
            "https://api.minhhoangjsc.io/api/webrtc?ip=" + utc,
            {
                utc:utc,
                udp:udp
            },
            "webrtcResp"
        );
    }

    var ipcountry = "";

    function webrtcResp(data_f) {
        data = JSON.parse(data_f);
        var ipFLAG = "UNKNOWN";
        var ipcity = "";
        console.log(data);
        console.log(data["status"]);
        ipcountry = "N/A";
        if (data["status"] === "success") {
            try {
                ipcity = data["city"];
                ipcountry = data["country"];
                ipFLAG = data["countryCode"];
            } catch (e) {
            }

            if (ipFLAG.length == 2) {
                if (iso3[ipFLAG]) {
                    ipcountry = iso3[ipFLAG];
                }
            }
        }

        document.getElementById("ipcity").innerHTML = ipcity.toUpperCase();
        document.getElementById("ipcountry").innerHTML = ipcountry;
        document.getElementById("ipflag").src =
            flagPath + ipFLAG.toLowerCase() + iconExt;

        checkCountries();
        enableModule("div_webrtc");
    }

    function checkCountries(geo) {
        if (ipcountry != document.getElementById("timecountry").innerHTML) {
            document.getElementById("timecountry").style.background = "#ff4b00";
            document.getElementById("timecountry").style.color = "#fff";
            document.getElementById("div_time").style.background = "#ffebe6";
        } else {
            document.getElementById("timecountry").style.background = "#eee";
            document.getElementById("timecountry").style.color = "#000";
            document.getElementById("div_time").style.background = "";
        }

        if (box_location || geo) {
            if (ipcountry != document.getElementById("geocountry").innerHTML) {
                document.getElementById("geotabcolor").style.background = "#ff4b00";
                document.getElementById("div_location").style.background =
                    "#ffebe6";
            } else {
                document.getElementById("geotabcolor").style.background = "#ff4b00";
                document.getElementById("div_location").style.background = "";
            }
        }
    }

    function _isNr(s, c) {
        var r = !1;
        if (s || s === 0) {
            if (typeof s === "number" || typeof s === "string") {
                r = eval("/^[0-9" + c + "]+$/").test(s);
            }
        }
        return r;
    }

    function _isIP(p) {
        var r = !1;
        if (p) {
            if (typeof p === "string") {
                if (p.indexOf(".") > 0) {
                    p = p.split(".");
                }
            }
            if (typeof p === "object") {
                if (p.length == 4) {
                    if (p[0] && p[3]) {
                        if (p[0] > 0 && p[3] > 0) {
                            r = !0;
                            for (var a = 0; a < p.length; a++) {
                                if (p[a] < 256) {
                                    if (p[a]) {
                                        if (!_isNr(p[a])) {
                                            r = !1;
                                            break;
                                        }
                                    } else {
                                        r = !1;
                                        break;
                                    }
                                } else {
                                    r = !1;
                                    break;
                                }
                            }
                        }
                    }
                }
            }
        }
        return r;
    }

    function initFingerprintJS() {
        let p = "";
        if (browserName.indexOf("EXPLORER") == -1) {
            console.log(browserName.indexOf("EXPLORER"));
            try {
                eval(
                    "FingerprintJS.load({token: 'MibM1EP5NGWb2hWxrP88'}).then(fp => fp.get()).then(result => document.getElementsByClassName('vr')[0].innerHTML=result.visitorId.toUpperCase())"
                );
            } catch (err) {
                p = 1;
            }
        } else {
            p = 2;
        }
        if (p != "") {
            document.getElementsByClassName("vr")[0].innerHTML =
                "Your browser is not compatible";
        }
    }
</script>
<script src="./assets/js/fingerprintjs.js"></script>
</body>
</html>
