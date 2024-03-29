<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.css">
</head>
<body class="reserbody">
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
                    <span class="reserlink">예약하기</span>
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
    <main class="resermain">
        <div class="reserall">
            <span class="reser1">● 예약가능</span>
            <span class="reser2">▲ 예약중 </span>
            <span class="reser3">■ 예약완료</span>
        </div>
        <div class="tablecenter">
            <table>
                <tr id="resDateTable">
                    <td>자리 날짜</td>
                </tr>
                <tr id="row0">
                    <td>A01</td>
                </tr>
                <tr id="row1">
                    <td>A02</td>
                </tr>
                <tr id="row2">
                    <td>A03</td>
                </tr>
                <tr id="row3">
                    <td>A04</td>
                </tr>
                <tr id="row4">
                    <td>A05</td>
                </tr>
                <tr id="row5">
                    <td>A06</td>
                </tr>
                <tr id="row6">
                    <td>A07</td>
                </tr>
                <tr id="row7">
                    <td>T01</td>
                </tr>
                <tr id="row8">
                    <td>T02</td>
                </tr>
                <tr id="row9">
                    <td>T03</td>
                </tr>
                <tr id="row10">
                    <td>T04</td>
                </tr>
                <tr id="row11">
                    <td>T05</td>
                </tr>
                <tr id="row12">
                    <td>T06</td>
                </tr>
                <tr id="row13">
                    <td>T07</td>
                </tr>
                <tr id="row14">
                    <td>T08</td>
                </tr>
                <tr id="row15">
                    <td>T09</td>
                </tr>
                <tr id="row16">
                    <td>T10</td>
                </tr>
            </table>
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
    
    <!-- Modal Start -->
    <div class="modal fade" id="exampleModalLive" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLiveLabel">예약페이지다</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 id="position">자리</h5>
                <h5 id="price">금액 :</h5>
                <div class="input-group mb-3">
                    <input type="text" id="name" class="form-control" placeholder="이름" aria-label="이름" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="phoneNumber" class="form-control" placeholder="전화번호" aria-label="전호번호" aria-describedby="button-addon2" oninput="regexPhoneNumber(this)" maxlength="13">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2 "  onclick="sendVerifyNumber()">인증번호 발송</button>
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="phoneVerify" class="form-control" placeholder="인증번호" aria-label="인증번호" aria-describedby="basic-addon1" maxlength="4" oninput="regexVerifyNumber(this)" disabled>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기다</button>
              <button type="button" class="btn btn-primary" onclick="reservationSubmit()">예약하기</button>
            </div>
          </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Toast Start -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">예약 안내</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            예약정보가 정상 등록되었습니다.<br>
            관리자 승인 후 에약이 최종 완료됩니다.
          </div>
        </div>
      </div>
    <!-- Toast End -->

    <script src="./jquery/jquery-3.6.0.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
    <script>
        reservation();
    </script>
</body>
</html>