<body>
    <main>

        <div class="tablecenter">
            <table>
                <tr>
                    <td>에약 날짜</td>
                    <td>예약 자리</td>
                    <td>예약 상태</td>
                    <td>예약 취소</td>
                    <td>바비큐 주문하기</td>
                    <td>주문 건수</td>
                    <td>주문내역 보기</td>
                </tr>
                <tr>
                    <td>2023. 04. 05</td>
                    <td>A01</td>
                    <td>예약 완료</td>
                    <td><button type="button" class="btn btn-primary btn-sm" onclick="orderCancel(this)">예약 취소</button></td>
                    <td><button type="button" class="btn btn-primary btn-sm" onclick="babimodal()">바비큐 주문하기</button></td>
                    <td id="totalOrder">0</td>
                    <td><button type="button" class="btn btn-primary btn-sm" onclick="allmodal()">주문 내역 보기</button></td>
                </tr>
            </table>
        </div>
    </main>

    <!-- 바비큐모달 시작 -->
    <div class="modal fade" id="BabiqOrderModal" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">바비큐 주문하기</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>자리 : A01</h5>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1 ">바비큐 그릴 대여(도구 및 숯 등 포함) (10,000원 /개)</span>
                        <input id="babiqGrill" type="number" class="form-control" placeholder="개수" aria-label="개수" value="0" aria-describedby="basic-addon1" max="1" min="0" oninput="setPrice(this)">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">돼지고기 바비큐 세트 : 1인분 12,000원</span>
                        <input id="pigBabiq" type="number" class="form-control" placeholder="개수" aria-label="개수" value="0" aria-describedby="basic-addon1" min="0" oninput="setPrice(this)">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">해산물 바비큐 세트 : 1인분 15,000원</span>
                        <input id="haesanBabiq" type="number" class="form-control" placeholder="개수" aria-label="개수" value="0" aria-describedby="basic-addon1" min="0" oninput="setPrice(this)">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">음료 : 1병 3,000원</span>
                        <input id="juice" type="number" class="form-control" placeholder="개수" aria-label="개수" value="0" aria-describedby="basic-addon1" min="0" oninput="setPrice(this)">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">주류 : 1병 5,000원</span>
                        <input id="soju" type="number" class="form-control" placeholder="개수" aria-label="개수" value="0" aria-describedby="basic-addon1" min="0" oninput="setPrice(this)">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">과자 세트 : 1세트(3종) 4,000원</span>
                        <input id="gajaSet" type="number" class="form-control" placeholder="개수" aria-label="개수" value="0" aria-describedby="basic-addon1" min="0" oninput="setPrice(this)">
                    </div>
                </div>
                <div class="modal-footer">
                    <h5 id="totalPrice">총 주문 금액 : 0원</h5>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="babiqSubmit()" onclick>주문하기</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 바비큐모달 끝 -->

    <!-- 주문 내용 보기모달 시작 -->
    <div class="modal fade" id="allmodal" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">주문 내역 보기</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="babiqGrillvalue">바비큐 그릴 대여 : 0</p>
                    <p id="pigBabiqvalue">돼지고기 바비큐 세트 : 0</p>
                    <p id="haesanBabiqvalue">해산물 바비큐 세트 : 0</p>
                    <p id="juicevalue">음료 : 0</p>
                    <p id="sojuvalue">주류 : 0</p>
                    <p id="gajaSetvalue">과자 세트 : 0</p>
                    <h5 id="allorderprice">총 주문 금액 : 0원</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 주문 내용 보기모달 끝 -->
</body>