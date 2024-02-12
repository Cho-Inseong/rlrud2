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

        if(week == 6) {
            resDateTabelElem.innerHTML += `<td class='b'>${year}.${month}.${day}</td>`;
        }else if (week == 0) {
            resDateTabelElem.innerHTML += `<td class='r'>${year}.${month}.${day}</td>`;
        }else {
            resDateTabelElem.innerHTML += `<td>${year}.${month}.${day}</td>`;
        }
        
    }

    async function printReservation() {
        const reservation = await fetchReservation();
        console.log(reservation[0]["D+0"][0]["status"]);
        for (let i = 0; i < 17; i++){
            document.querySelector(`#row${i}`).innerHTML += `<td>${reservation[0]["D+0"][i]["status"]}</td>`;
        }
    }
    printReservation();


}