<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="characters.css">
    <link rel="stylesheet" href="avatar-style.css">
    <link rel="stylesheet" href="barcharacter.css">
    <link rel="stylesheet" href="css/top-player.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/owlboard.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

</head>

<body>

    <div class="navbargame d-flex w-100">
        <div class="box1item p-4">
            <div class="d-flex justify-content-end">
                <ul class="d-flex list-unstyled">
                    <li class="me-5 navli">หน้าแรก</li>
                    <li class="me-5 navli">สมัครสมาชิก</li>
                    <li class="me-5 navli">ตลาด</li>
                </ul>
            </div>
        </div>
        <div class="box2item">
            <div class="d-flex justify-content-center w-100">
                <div class="player">
                    <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">220</div>
                    </div>
                </div>
                <div class="online">online</div>
            </div>
        </div>
        <div class="box3item p-4">
            <div class="w-100">
                <ul class="d-flex list-unstyled w-100">
                    <li class="ms-5 navli">ดาวน์โหลด</li>
                    <li class="ms-5 navli">ติดต่อ</li>
                    <li class="ms-5 navli">สนับสนุน</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="imgcontent">
        <!-- <div class="slieroob">

        </div> -->

        <div class="bghome">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="bgvideo">

                <video id="bgVideo" autoplay loop muted class="clip">
                    <source src="./assets/image/fire.mp4" type="video/mp4">
                </video>

                <div class="btnclick w-100">
                    <button class="btn-register ">
                        <div class="imgregister">
                            <img src="./assets/image/too.png" alt="">
                        </div>
                        <div class="textre">
                            REGISTER
                        </div>
                    </button>
                    <button class="btn-register ">
                        <div class="imgregister">
                            <img src="./assets/image/too1.png" alt="">
                        </div>
                        <div class="textre">
                            DOWLOAD
                        </div>
                    </button>
                </div>
            </div>

        </div>
        <!-- เพิ่มตรงนี้มา 27/5/67 -->
        <div class="main-all-box">
            <!-- ข่าวสาร -->
            <div class="main-box-board">
                <!-- กล่องประกาศ -->
                <div class="cover-box">
                    <div class="box-board">
                        <span class="corner-top-left corner-top-left-yellow"></span>
                        <div class="home-block-title flex-s">
                            Last News <a href="https://mu-online.lv/home/all">all news</a>
                        </div>
                        <div class="box-list">
                            <ul>
                                <li>
                                    <!-- iconnews -->
                                    <div class="icon-news"></div>
                                    <div class="news-info">
                                        <div class="main-info-box">
                                            <h4>Lorem, ipsum.</h4>
                                            <p><span>03</span> May 2024</p>
                                        </div>
                                        <div class="btn-more">
                                            <h5>More</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- iconnews -->
                                    <div class="icon-news"></div>
                                    <div class="news-info">
                                        <div class="main-info-box">
                                            <h4>Lorem, ipsum.</h4>
                                            <p><span>03</span> May 2024</p>
                                        </div>
                                        <div class="btn-more">
                                            <h5>More</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- iconnews -->
                                    <div class="icon-news"></div>
                                    <div class="news-info">
                                        <div class="main-info-box">
                                            <h4>Lorem, ipsum.</h4>
                                            <p><span>03</span> May 2024</p>
                                        </div>
                                        <div class="btn-more">
                                            <h5>More</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-board p-0">
                        <span class="corner-top-left corner-top-left-p">
                        </span>
                        <!-- เพิ่ม 5/28/2024 -->
                        <div class="owl-board">
                            <div class="item-board">
                                <img src="./assets/image/banner.jpg" alt="">
                            </div>
                            <div class="item-board">
                                <img src="./assets/image/banner.jpg" alt="">
                            </div>
                            <div class="item-board">
                                <img src="./assets/image/banner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ข่าวสาร -->
            <!-- Top Player && Top Guilds -->
            <div class="main-top-player">
                <div class="box-top-player">
                    <!-- กล่องประกาศ top player -->
                    <div class="main-box">
                        <div class="home-block home-block-top">
                            <div class="home-block-title">Top Guilds</div>
                            <div class="box-list-topplayer">
                                <ul class="list-table">
                                    <li class="hader-table">
                                        <div class="tb-1">#</div>
                                        <div class="tb-2">Name</div>
                                        <div class="tb-3">Class</div>
                                        <div class="tb-4">LvL</div>
                                        <div class="tb-5">Res</div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Gakutenou</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/assets/default_assets/images/char_icons/le.jpg"
                                                    title="Lord Emperor"></span>
                                        </div>
                                        <div class="tb-4">380<sup>400</sup></div>
                                        <div class="tb-5">194<sup>12</sup></div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Gakutenou</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/assets/default_assets/images/char_icons/le.jpg"
                                                    title="Lord Emperor"></span>
                                        </div>
                                        <div class="tb-4">380<sup>400</sup></div>
                                        <div class="tb-5">194<sup>12</sup></div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Gakutenou</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/assets/default_assets/images/char_icons/le.jpg"
                                                    title="Lord Emperor"></span>
                                        </div>
                                        <div class="tb-4">380<sup>400</sup></div>
                                        <div class="tb-5">194<sup>12</sup></div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Gakutenou</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/assets/default_assets/images/char_icons/le.jpg"
                                                    title="Lord Emperor"></span>
                                        </div>
                                        <div class="tb-4">380<sup>400</sup></div>
                                        <div class="tb-5">194<sup>12</sup></div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Gakutenou</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/assets/default_assets/images/char_icons/le.jpg"
                                                    title="Lord Emperor"></span>
                                        </div>
                                        <div class="tb-4">380<sup>400</sup></div>
                                        <div class="tb-5">194<sup>12</sup></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="more">
                                <a href="#####" class="more-button button">more</a>
                            </div>
                        </div>
                        <span class="corner-top-left-top-player corner-top-left-blue-top-player"></span>
                    </div>
                    <!-- กล่องประกาศ top guilds -->
                    <div class="main-box">
                        <div class="home-block home-block-top">
                            <div class="home-block-title">Top Guilds</div>
                            <div class="box-list-topplayer">
                                <ul class="list-table">
                                    <li class="hader-table">
                                        <div class="tb-1">#</div>
                                        <div class="tb-2">Name</div>
                                        <div class="tb-3">Logo</div>
                                        <div class="tb-4">score</div>
                                        <div class="tb-5">total lvl</div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Evidence</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/rankings/get_mark/0007700000077000000770000007700000077000000000000007700000077000/20"></span>
                                        </div>
                                        <div class="tb-4">0</div>
                                        <div class="tb-5">26</div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Evidence</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/rankings/get_mark/0007700000077000000770000007700000077000000000000007700000077000/20"></span>
                                        </div>
                                        <div class="tb-4">0</div>
                                        <div class="tb-5">26</div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Evidence</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/rankings/get_mark/0007700000077000000770000007700000077000000000000007700000077000/20"></span>
                                        </div>
                                        <div class="tb-4">0</div>
                                        <div class="tb-5">26</div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Evidence</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/rankings/get_mark/0007700000077000000770000007700000077000000000000007700000077000/20"></span>
                                        </div>
                                        <div class="tb-4">0</div>
                                        <div class="tb-5">26</div>
                                    </li>
                                    <li class="info-table">
                                        <div class="tb-1">1</div>
                                        <div class="tb-2">Evidence</div>
                                        <div class="tb-3">
                                            <span
                                                style="width:40px; height:40px;transform: rotate(45deg);overflow: hidden;"><img
                                                    style="transform: rotate(-45deg) scale(1.42);width: 20px;height:20px"
                                                    src="https://mu-online.lv/rankings/get_mark/0007700000077000000770000007700000077000000000000007700000077000/20"></span>
                                        </div>
                                        <div class="tb-4">0</div>
                                        <div class="tb-5">26</div>
                                    </li>

                                </ul>
                            </div>
                            <div class="more">
                                <a href="#####" class="more-button button">more</a>
                            </div>
                        </div>
                        <span class="corner-top-left-top-player corner-top-left-purple-top-player"></span>
                    </div>
                </div>
            </div>
            <!-- Top Player && Top Guilds -->
            <!-- Event -->
            <div class="event-main-box">
                <div class="event-box">
                    <div class="item-event-box item-event-1">
                        <div class="event-icon-1"></div>
                        <div class="text-box">
                            <h2>forum</h2>
                            <span>details</span>
                        </div>
                        <div class="more btn-about center-box">
                            <a href="#####" class="more-button button">more</a>
                        </div>
                    </div>
                    <div class="item-event-box item-event-2">
                        <div class="event-icon-2"></div>
                        <div class="text-box">
                            <h2>DONATE</h2>
                            <span>details</span>
                        </div>
                        <div class="more btn-about center-box">
                            <a href="#####" class="more-button button">more</a>
                        </div>
                    </div>
                    <div class="item-event-box item-event-3">
                        <div class="event-icon-3"></div>
                        <div class="text-box">
                            <h2>STATISTICS</h2>
                            <span>details</span>
                        </div>
                        <div class="more btn-about center-box">
                            <a href="#####" class="more-button button">more</a>
                        </div>
                    </div>
                    <!-- facebook twitch discord -->
                    <div class="box-social">
                        <div class="item-social bg-social-1">
                            <!-- icon     -->
                            <div class="icon-social icon-social-1"></div>
                            <!-- text social -->
                            <div class="text-social-box">
                                <h5 class="facebook">Facebook</h5>
                                <span>Right now!</span>
                            </div>
                        </div>
                        <div class="item-social bg-social-2">
                            <!-- icon     -->
                            <div class="icon-social icon-social-2"></div>
                            <!-- text social -->
                            <div class="text-social-box">
                                <h5 class="twitch">Twitch</h5>
                                <span>Right now!</span>
                            </div>
                        </div>
                        <div class="item-social bg-social-3">
                            <!-- icon     -->
                            <div class="icon-social icon-social-3"></div>
                            <!-- text social -->
                            <div class="text-social-box">
                                <h5 class="discord">Discord</h5>
                                <span>Right now!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-box event-box-2">
                    <div class="event-conner-bottom-right"></div>
                    <!-- หัวข้อ -->
                    <div class="home-block-title title-m w-full">EVENTS</div>
                    <div class="list-event">
                        <div class="item-event">
                            <!-- top item event -->
                            <div class="dis-flex top-item-event">
                                <h6>BattleRoyale</h6>
                                <span>05:18</span>
                            </div>
                            <!-- bottom item event -->
                            <div class="dis-flex bottom-item-event">
                                <h5>Starts In</h5>
                                <span>00s</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event -->
        </div>

        <!-- ตัวละคร -->
        <div class="box-characters">
            <div class="character">
                Characters
            </div>
            <div class="carousel">
                <div class="carousel-inner">
                    <!-- head top     -->
                    <div class="main-head">
                        <div class="header-top">
                            <div class="logo-hero"></div>
                            <div class="info-caracter">
                                <!-- ชื่อตัวละคร -->
                                <div class="name-caracter">
                                    <h4 id="name-avatar">Dark Wiard</h4>
                                    <span>
                                        Soul Master and Grand Master
                                    </span>
                                </div>
                                <!-- ชื่อตัวละคร -->
                            </div>
                        </div>
                        <div class="main-info">
                            <!-- ข้อลูลตัวละคร -->
                            <div class="info">
                                <p>
                                    The Dark Wizard knows many combat spells that can kill any animal or human almost
                                    instantly! Many of these spells, though, are so powerful that they require an
                                    enormous amount of wizard's energy.
                                </p>
                            </div>
                            <!-- ข้อลูลตัวละคร -->
                            <h6>Team online:</h6>
                            <!-- Bar เเสดง ความสามารถของตัวละคร -->
                            <div class="status-avatar">
                                <div class="skill-status">
                                    <div class="icon-skill-1"></div>
                                    <div class="skill-bar">
                                        <div class="titel-skill">
                                            <div class="skill">
                                                <h6>Attack power</h6>
                                                <h6 id="sAtt">58%</h6>
                                            </div>
                                            <div class="bar-skill">
                                                <div id="barAtt" class="after-bar"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="skill-status">
                                    <div class="icon-skill-2"></div>
                                    <div class="skill-bar">
                                        <div class="titel-skill">
                                            <div class="skill">
                                                <h6>Dexterity</h6>
                                                <h6 id="sDex">22%</h6>
                                            </div>
                                            <div class="bar-skill">
                                                <div id="barDex" class="after-bar"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="skill-status">
                                    <div class="icon-skill-3"></div>
                                    <div class="skill-bar">
                                        <div class="titel-skill">
                                            <div class="skill">
                                                <h6>Defence</h6>
                                                <h6 id="sDef">75%</h6>
                                            </div>
                                            <div class="bar-skill">
                                                <div id="barDef" class="after-bar"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="skill-status">
                                    <div class="icon-skill-4"></div>
                                    <div class="skill-bar">
                                        <div class="titel-skill">
                                            <div class="skill">
                                                <h6>Matery</h6>
                                                <h6 id="sMat">95%</h6>
                                            </div>
                                            <div class="bar-skill">
                                                <div id="barMat" class="after-bar"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Bar เเสดง ความสามารถของตัวละคร -->
                            <!-- รูปตัวละคร -->
                            <div class="img-avatar">
                            </div>
                        </div>
                    </div>
                    <div class="bar-avatar">
                        <!-- carousel เเสดงรูป ตัวละคร -->
                        <div class="owl-carousel">
                            <div class="item item-owl" index-avatar="1" name="Dark Wiard" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater avatar-active">
                                    <div class="avatar">
                                        <img style="top: -13px; left: 10px;"
                                            src="assets/image/Characters/icons-hero/hero-small-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="2" name="Kundun Merhis" att="58%" dex="22%"
                                def="75%" mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -13px; left: 10px;"
                                            src="assets/image/Characters/icons-hero/hero-small-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="3" name="Lemurian" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -18px; left: 4px;"
                                            src="assets/image/Characters/icons-hero/hero-small-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="4" name="Gun Crusher" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -25px; left: 10px"
                                            src="assets/image/Characters/icons-hero/hero-small-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="5" name="Slayer" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -11px; left: -33px;"
                                            src="assets/image/Characters/icons-hero/hero-small-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="6" name="Dark Knight" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -13px; left: 6px;"
                                            src="assets/image/Characters/icons-hero/hero-small-6.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="7" name="Fairy Elf" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -10px;"
                                            src="assets/image/Characters/icons-hero/hero-small-7.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="8" name="Magic Gladiator" att="58%" dex="22%"
                                def="75%" mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -12px; left: 2px;"
                                            src="assets/image/Characters/icons-hero/hero-small-8.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="9" name="Dark Lord" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -15px; left: 5px;"
                                            src="assets/image/Characters/icons-hero/hero-small-9.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="10" name="Summoner" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -10px; left: -7px;"
                                            src="assets/image/Characters/icons-hero/hero-small-10.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="11" name="Rune Mage" att="58%" dex="22%" def="75%"
                                mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -12px; left: 3px;"
                                            src="assets/image/Characters/icons-hero/hero-small-11.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="12" name="Rage Fighter" att="58%" dex="22%"
                                def="75%" mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -12px; left: 5px;"
                                            src="assets/image/Characters/icons-hero/hero-small-12.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="13" name="Illusion Knight" att="58%" dex="22%"
                                def="75%" mat="95%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -18px; left: 8px;"
                                            src="assets/image/Characters/icons-hero/hero-small-13.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="14" name="Grow Lancer" att="58%" dex="22%"
                                def="75%" mat="95%">
                                <div class="border-avater">
                                    <div class="avatar">
                                        <img style="top: -10px; left: 0px;"
                                            src="assets/image/Characters/icons-hero/hero-small-14.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel เเสดงรูป ตัวละคร -->
                    </div>
                </div>
            </div>
            <!-- ตัวละคร -->
        </div>
        <!-- เริ่ม ส่วนของ about -->
        <div class="about-box corner-top-left-purple-top-about">
            <!-- หัวข้อ -->
            <div class="home-block-title title-m">ABOUT SERVER</div>
            <!-- รูปภาพ -->
            <div class="img-about">
                <img src="assets/image/about-imgs/img-about.jpg" alt="">
            </div>
            <!-- ข้อมูล -->
            <p>New changes to Castle Siege come into effect this week. Now, in addition to the winner of the castle,
                will be determined and the second place - the guild with the most points during the siege. Owners of
                the castle will receive 60% of the treasury of the castle, the second place will receive 40% of the
                treasury. In addition to the treasury on the server Mega, we assign a prize fund from the
                administration in the amount of $ 5000.
            </p>
            <div class="more btn-about">
                <a href="#####" class="more-button button">more</a>
            </div>
        </div>
        <!-- เริ่ม ส่วนของ about -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="owlcarousel/dist/owl.carousel.min.js"></script>
        <script src="utils/carousel.js"></script>
        <script src="utils/barStatus.js"></script>
        <script>
            const barAtt = document.getElementById('barAtt')
            const barDex = document.getElementById('barDex')
            const barDef = document.getElementById('barDef')
            const barMat = document.getElementById('barMat')


            barAtt.style.width = "50%"
            barDex.style.width = "30%"
            barDef.style.width = "10%"
            barMat.style.width = "60%"
            $(".img-avatar").css("background-image", `url('assets/image/Characters/hero/hero-1.png')`);
        </script>
        <script>
            var $owl = $('.owl-carousel');

            $owl.children().each(function (index) {
                $(this).attr('data-position', index); // NB: .attr() instead of .data()
            });

            $(document).on('click', '.item-owl', function () {
                // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
                var $speed = 300;  // in ms
                $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
            });

            $(document).ready(function () {
                $(".owl-carousel").owlCarousel();
            });
            $('.owl-carousel').owlCarousel({
                rtl: false,
                stagePadding: 20,
                center: true,
                loop: true,
                margin: 10,
                nav: true,
                items: 9,
                onChanged: function (event) {
                    $('.border-avater').removeClass('avatar-active');
                    var currentSlide = event.item.index;
                    $('.border-avater').eq(currentSlide).addClass('avatar-active');
                }
            });
            $('.owl-carousel').on('changed.owl.carousel', function (event) {
                var currentItem = event.item.index;
                var currentSlide = $(this).find('.item-owl').eq(currentItem);
                var attributeName = currentSlide.attr('name');
                var attributeAtt = currentSlide.attr('att');
                var attributeDex = currentSlide.attr('dex');
                var attributeDef = currentSlide.attr('def');
                var attributeMat = currentSlide.attr('mat');
                var indexAvatar = currentSlide.attr('index-avatar');
                const barAtt = document.getElementById('barAtt')
                const barDex = document.getElementById('barDex')
                const barDef = document.getElementById('barDef')
                const barMat = document.getElementById('barMat')
                const urlImgsAvatar = `url('/assets/image/Characters/hero/hero-${indexAvatar}".png')`

                $("#sAtt").text(attributeAtt)
                $("#sDex").text(attributeDex)
                $("#sDef").text(attributeDef)
                $("#sMat").text(attributeMat)
                $("#name-avatar").text(attributeName)

                barAtt.style.width = attributeAtt
                barDex.style.width = attributeDex
                barDef.style.width = attributeDef
                barMat.style.width = attributeMat

                $(".img-avatar").css("background-image", `url('assets/image/Characters/hero/hero-${indexAvatar}.png')`);

            })
        </script>
        <!-- เพิ่มอันใหม่ -->
        <script>
            $('.owl-board').owlCarousel({
                loop: true,
                items: 1,
                nav: true,
            })
        </script>
</body>

</html>