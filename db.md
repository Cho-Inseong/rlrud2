## DB 설계도
### DBName : SkillsCamp

| Users     | Type | Description                       |
| --------- | ---- | --------------------------------- |
| user_idx  | int  | 유저 구분을 위한 IDX (A.I., P.K.) |
| phone_num | char | 사용자 전화번호                   |

| Reservations | type      | Description                          |
| ------------ | --------- | ------------------------------------ |
| res_idx      | int       | 각자리 구분을 위한 IDX (A.I., P.K.)  |
| user_idx     | int       | 예약자 정보가 포함되어 있는 user_idx |
| position     | varchar   | 자리 명                              |
| date         | timestamp | 날짜                                 |
| price        | int       | 가격                                 |

| Babiq     | Type | Description                            |
| --------- | ---- | -------------------------------------- |
| babi_idx  | int  | 각 바비큐 구분을 위한 IDX (A.I., P.K.) |
| res_idx   | int  | 예약 자리 정보가 포함되어 있는 res_idx |
| orderList | JSON | 주문 목록                              |
