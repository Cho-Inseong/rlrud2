/**
 * 메인 페이지 슬라이드 (자동 슬라이드, 일시 정지, 재개 기능 구현)
 */

// 캐러셀 html에서 아이디 가져와서 알아매기고 화면 전환되는 속도 조절하는코드
function carouselSlide() {
    const myCarouselElement = document.querySelector('#carouselExampleIndicators')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
      interval: 50,
      pause: false
    });
}

function pauseCarousel() {
    const myCarouselElement = document.querySelector('#carouselExampleIndicators')
    $(myCarouselElement).carousel('pause');
}

function playCarousel() {
    const myCarouselElement = document.querySelector('#carouselExampleIndicators')
    $(myCarouselElement).carousel('cycle');
}

// Reservation
function reservation() {
    // JSON 파일에서 데이터 불러오기
    async function fetchReservation() {
        const getReservationJSON = await fetch("../api/reservation.json");
        const reservationJSON = await getReservationJSON.json();
        return reservationJSON["reservition"];
    }
    // const reservationData =  fetchReservation();
    // console.log(reservationData);
    const resDateTabelElem = document.querySelector("#resDateTable");
    
    // 테이블에 맨 윗줄 가로 부분이고 날짜를 차례대로 출력
    for(let i = 0 ; i < 14; i++) {
        const date = new Date();
        date.setDate(date.getDate() + i);
        const year = date.getFullYear();
        const month = ("0" + (date.getMonth() + 1)).slice(-2);
        const day = ("0" + (date.getDate())).slice(-2);
        let week = date.getDay();
    
        // 조건식 ? 참일 떄의 값 : 거짓일 떄의 값;     밑의 코드는 공부용 아무 쓰잘때기 없으요
        // const weekToString = ((week == 0) || (week == 6)) ? "주말" : "주중";
        
        // 토요일 - 글자 색을 파란색으로 변경하는 class가 추가되야 함
        // 일요일 - 글자 색을 빨간색으로 변경하는 class가 추가되야 함

        // innerHTML로 자바스크립트 언어를 HTML로 만들어 추가
        // 6은 토요일 0은 일요일 그외는 평일로 요일마다 색을 바꾸는 코드
        if(week == 6) {
            resDateTabelElem.innerHTML += `<td class='b'>${year}.${month}.${day}</td>`;
        }else if (week == 0) {
            resDateTabelElem.innerHTML += `<td class='r'>${year}.${month}.${day}</td>`;
        }else {
            resDateTabelElem.innerHTML += `<td class='c'>${year}.${month}.${day}</td>`;
        }
        
    }
    // 이건 뭐지
    for (let i = 0; i < 17; i++){
        for (let k = 0; k < 14; k++){
            document.querySelector(`#row${i}`).innerHTML += `<td></td>`;
        }
    }
    // 테이블 예약 기능 일부 
    async function updateReservation() {
        const reservation = await fetchReservation();
        for (let i = 0; i < 17; i++){
            for (let k = 0; k < 14; k++){
                // data변수는 json파일의 데이터의 값들을 얻어 도형으로 바꾸기 위해서
                const data = reservation[k][`D+${k}`][i]["status"];
                // row${i}는 tr이므로 tr안 td를 가상선택자로 시작지점을 찾는코드
                const tdElem = document.querySelector(`#row${i} > td:nth-of-type(${k + 2})`);
                
                // 데이터가 W면 ●로 HTML을 변경 그리고 className으로 class를 지정해 css를 먹이는 코드
                if (data == "W") {
                    tdElem.innerText = "●";
                    tdElem.className = `w D+${k} ${i}`; // 번지수를 알기 위해서 클래스 이름으로 알기쉽게 
                }else if (data == "R") {
                    tdElem.innerText = "▲";
                    tdElem.className = `r D+${k} ${i}`;
                }else {
                    tdElem.innerText = "■";
                    tdElem.className = `c D+${k} ${i}`;
                }
                
                
                
                
                // document.querySelector(`#row${i}`).innerHTML += `<td>${reservation[k][`D+${k}`][i]["status"]}</td>`;
            }
        }
    }

    //  5초마다 updateReservation 함수를 호출
    setInterval(() => {
        updateReservation();
    }, 5000)
    updateReservation(); // 최초 접속 시 updateTeservation을 즉시 호출하여 페이지를 렌더링
    

}