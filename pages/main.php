<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.css">
</head>
<body class="indexbody"> 
    <header class="indexheader">
        <a href="index.html">
            <img class="logo" src="logo.jpg" alt="logo">
        </a>
        <div class="menu">
            <div class="menua">
                <a href="mypage.html">
                    <span class="menu1">마이페이지</span>
                </a>
                <a href="reservation.html">
                    <span>예약하기</span>
                </a>
                <a href="introduce.html">
                    <span>캠핑장소개</span>
                </a>
            </div>
            <div class="menub">
                <p>&nbsp;</p>
            </div>
            <div class="menuc">
                <a href="#">
                    <span>로그인</span>
                </a>
                <a href="#">
                    <span>운영관리</span>   
                </a>
            </div>
        </div>
    </header>
    <main class="indexmain">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/IMG/slide1.jpg" placeholder width="800" height="800" class="bd-placeholder-img-lg d-block w-100" color="#555" background="#777" text="First slide" >
              </div>
              <div class="carousel-item">
                <img src="/IMG/slide2.jpg"placeholder width="800" height="800" class="bd-placeholder-img-lg d-block w-100" color="#444" background="#666" text="Second slide" >
              </div>
              <div class="carousel-item">
                <img src="/IMG/slide3.jpg"placeholder width="800" height="800" class="bd-placeholder-img-lg d-block w-100" color="#333" background="#555" text="Third slide" >
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="slideButton">
            <button type="button" class="btn btn-primary btn-sm" onclick="pauseCarousel()">일시 정지</button>
            <button type="button" class="btn btn-primary btn-sm" onclick="playCarousel()">재개</button>
        </div>
        
    </main>
    <main class="main2">
        <div class="imgtext">
            <div class="img1">
                <img class="imgall" src="IMG/image_01 (3).jpg" alt="">
            </div>
            <div class="text1"> 
                <h1>캠핑장 구성</h1>
                <span>
                    -텐트데크(3m X 5m) :10 개소</br>
                    -오토캠핑(5m X 8m): 7개소
                </span>
            </div>
            <div class="text2"> 
                <h1>부대시설</h1>
                <span>
                    관리소, 취사장, 세면장, 화장실, 포토존, 잔디밭, 어린이놀이터
                </span>
            </div>
            <img class="img2 imgall" src="IMG/image_01 (28).jpg" alt="">
            <div class="img3">
                <img class="imgall" src="IMG/image_01 (26).jpg" alt="">
            </div>
            <div class="text3"> 
                <h1>예약안내</h1>
                <span>
                    *캠핑장 예약은 당일부터 13일 후까지 가능합니다.</br>
                    *캠핑장 입영은 예약한 날의 14시부터 가능 합니다.</br>
                    *당일 예약의 경우 17시부터 입영할 수 있습니다.</br>
                    *예약문의:</br>
                    -전화번호: 041-987-1234</br>
                    -운영시간: 평일 09:00 ~ 18:00, 주말 10:00 ~ 15:00, 점심시간 12:30 ~ 13:30
                </span>
            </div>
        </div>
        <div class="comeload">
            <h1>오시는길</h1>
        </div>
        <div class="loadimgdiv">
            <img class="loadimg" src="location.jpg" alt="">
        </div>
    </main>
    <footer class="indexfooter">
        <span>
            * Copyright : Copyright(C) Skills Camping All Rights Reserved.</br>
            * 주소 : 충청남도 청양군 대치면 까치내로 123</br>
            * 고객센터 전화번호 : 041-987-1234</br>
            * 고객센터 운영시간 : 평일 09:00 ~ 18:00, 주말 10:00 ~ 15:00, 점심시간 12:30~13:30</br>
            * 하단메뉴 : 개인정보처리방침, 홈페이지 이용약관</br>
        </span>
    </footer>
    <script src="./jquery/jquery-3.6.0.js"></script> <!-- Bootstrap보다 위에 있어야 함-->
    <script src="./bootstrap/dist/js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
    <script>
    carouselSlide();
    </script>
</body>
</html>