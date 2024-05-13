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
                <div class="box-board">
                    <span class="corner-top-left corner-top-left-p"></span>
                </div>
            </div>
        </div>
        <!-- ข่าวสาร -->
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
                                <div class="name-caracter">
                                    <h4 id="name-avatar">Magic Gladiator</h4>
                                    <span>
                                        Soul Master and Grand Master
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="main-info">
                            <div class="info">
                                <p>
                                    The Dark Wizard knows many combat spells that can kill any animal or human almost
                                    instantly! Many of these spells, though, are so powerful that they require an
                                    enormous amount of wizard's energy.
                                </p>
                            </div>
                            <h6>Team online:</h6>
                            <div class="status-avatar">
                                <div class="skill-status">
                                    <div class="icon-skill-1"></div>
                                    <div class="skill-bar">
                                        <div class="titel-skill">
                                            <div class="skill">
                                                <h6>Attack power</h6>
                                                <h6 id="sAtt">50%</h6>
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
                                                <h6 id="sDex">30%</h6>
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
                                                <h6 id="sDef">10%</h6>
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
                                                <h6 id="sMat">60%</h6>
                                            </div>
                                            <div class="bar-skill">
                                                <div id="barMat" class="after-bar"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- รูปตัวละคร -->
                            <div class="img-avatar">
                            </div>
                        </div>
                    </div>
                    <div class="bar-avatar">
                        <!-- carousel เเสดงรูป ตัวละคร -->
                        <div class="owl-carousel">
                            <div class="item item-owl" index-avatar="1" name="Test1" att="50%" dex="30%" def="10%"
                                mat="60%">
                                <div class="border-avater avatar-active">
                                    <div class="avatar">
                                        <img src="assets/image/Characters/icons-hero/hero-small-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="2" name="Test2" att="10%" dex="30%" def="16%"
                                mat="6%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img src="assets/image/Characters/icons-hero/hero-small-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="3" name="Test3" att="80%" dex="70%" def="10%"
                                mat="40%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -18px; left: 4px;"
                                            src="assets/image/Characters/icons-hero/hero-small-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="4" name="Test4" att="60%" dex="60%" def="8%"
                                mat="66%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -25px;"
                                            src="assets/image/Characters/icons-hero/hero-small-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="5" name="Test5" att="70%" dex="20%" def="90%"
                                mat="80%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="left: -35px;"
                                            src="assets/image/Characters/icons-hero/hero-small-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="6" name="Test6" att="20%" dex="50%" def="40%"
                                mat="90%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style=" left: 5px;"
                                            src="assets/image/Characters/icons-hero/hero-small-6.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="7" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="left: 2px;"
                                            src="assets/image/Characters/icons-hero/hero-small-7.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="8" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -10px; left: 2px;"
                                            src="assets/image/Characters/icons-hero/hero-small-8.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="9" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -15px; left: 5px;"
                                            src="assets/image/Characters/icons-hero/hero-small-9.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="10" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -10px; left: -7px;"
                                            src="assets/image/Characters/icons-hero/hero-small-10.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="11" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -12px; left: 3px;"
                                            src="assets/image/Characters/icons-hero/hero-small-11.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="12" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -12px; left: 5px;"
                                            src="assets/image/Characters/icons-hero/hero-small-12.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="13" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
                                <div class="border-avater ">
                                    <div class="avatar">
                                        <img style="top: -18px; left: 8px;"
                                            src="assets/image/Characters/icons-hero/hero-small-13.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item item-owl" index-avatar="14" name="Test7" att="40%" dex="70%" def="15%"
                                mat="100%">
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
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel();
            });
            $('.owl-carousel').owlCarousel({
                rtl: false,
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
</body>

</html>