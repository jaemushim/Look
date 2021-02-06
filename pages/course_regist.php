<?php
/* Include header.php */
include $_SERVER["DOCUMENT_ROOT"] . "/header.php";
?>

<head>
    <link rel="stylesheet" href="/css/sub/sub_common.css" />
    <link rel="stylesheet" href="/css/sub/course_regist.css" />
</head>

<main>
    <!-- 배너 -->
    <section class="course-top-banner">
        <div class="slide n1"></div>
        <div class="slide n2"></div>
    </section>

    <!-- 섹션 타이틀 추가 -->
    <section class="sub-sec-title">
        <div class="title-box">
            <div class="container">
            <div class="title">
                <h2>강좌 카테고리</h2>
                <p>수강하시려고 하는 프로그램을 선택해주세요</p>
            </div>
            </div>
        </div>
    </section>

    <section class="course-regist">
        <div class="container">
            <table>
                <caption>개설강좌 표</caption>
                <colgroup>
                    <col style="width:10%">
                    <col style="width:12%">
                    <col >
                    <col style="width:20%">
                    <col style="width:15%">
                </colgroup>
                <thead>
                    <th scope="col">제목</th>
                    <th scope="col">썸네일</th>
                    <th scope="col">강좌 제목</th>
                    <th scope="col">가격</th>
                    <th scope="col">수강신청</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="title">프리미어 프로 <br> 기초 강좌 <br> 입문자 </td>
                        <td class="img"><img src="/img/main/sum_pr.png" alt="프리미어 프로 기초 강좌"></td>
                        <td class="title-box">
                            <div class="tag">
                                <span class="pop">인기 강좌</span>
                                <span class="sale">강좌 할인</span>
                            </div>
                            <h2>[프리미어 프로] 영상 입문자를 위한 프리미어 프로 기초 강좌</h2>
                            <span class="bottom">길경빈 강사 &nbsp;&nbsp;&nbsp; 1개월 - 4회 수업</span>
                        </td>
                        <td class="price">
                            <span><strong>[76%]</strong>185,000원</span>
                            <span>45,000원</span>
                        </td>
                        <td class="button">
                            <button type="button" onclick="location.href='/pages/course_curri_pr.php'">커리큘럼 보기</button>
                            <button type="button" onclick="window.open('https://forms.gle/bFx5wU7RX5vmsKBA9')">수강 신청</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">포토샵 <br> 기초 강좌 <br> 입문자 </td>
                        <td class="img"><img src="/img/main/sum_ps.png" alt="포토샵 기초 강좌"></td>
                        <td class="title-box">
                            <div class="tag">
                                <span class="pop">인기 강좌</span>
                                <span class="sale">강좌 할인</span>
                            </div>
                            <h2>[포토샵] 누구든지 쉽게 배울 수 있는 포토샵 기초 강좌</h2>
                            <span class="bottom">길경빈 강사 &nbsp;&nbsp;&nbsp; 1개월 - 4회 수업</span>
                        </td>
                        <td class="price">
                            <span><strong>[76%]</strong>165,000원</span>
                            <span>40,000원</span>
                        </td>
                        <td class="button">
                            <button type="button" onclick="location.href='/pages/course_curri_ps.php'">커리큘럼 보기</button>
                            <button type="button" onclick="window.open('https://forms.gle/5nqqCirhgCRXFyKSA')">수강 신청</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">일러스트레이터 <br> 기초 강좌 <br> 입문자 </td>
                        <td class="img"><img src="/img/main/sum_ai.png" alt="일러스트레이터 기초 강좌"></td>
                        <td class="title-box">
                            <div class="tag">
                                <span class="pop">인기 강좌</span>
                                <span class="sale">강좌 할인</span>
                            </div>
                            <h2>[일러스트레이터] 디자인 작업의 기본 툴! 일러스트레이터 기초 강좌</h2>
                            <span class="bottom">길경빈 강사 &nbsp;&nbsp;&nbsp; 1개월 - 4회 수업</span>
                        </td>
                        <td class="price">
                            <span><strong>[76%]</strong>165,000원</span>
                            <span>40,000원</span>
                        </td>
                        <td class="button">
                            <button type="button" onclick="location.href='/pages/course_curri_ai.php'">커리큘럼 보기</button>
                            <button type="button" onclick="window.open('https://forms.gle/JGmCjDqWryMAyqag6')">수강 신청</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">에프터 이펙트 <br> 기초 강좌  <br> 입문자 </td>
                        <td class="img"><img src="/img/main/sum_ae.png" alt="에프터 이펙트 기초 강좌"></td>
                        <td class="title-box">
                            <div class="tag">
                                <span class="sale">강좌 할인</span>
                                <span class="new">신규 강좌 </span>
                            </div>
                            <h2>[에프터 이펙트] 영상 제작의 시작! 에프터 이펙트 기초 강좌</h2>
                            <span class="bottom">송우진 강사 &nbsp;&nbsp;&nbsp; 1개월 - 4회 수업</span>
                        </td>
                        <td class="price">
                            <span><strong>[84%]</strong>300.000원</span>
                            <span>55,000원</span>
                        </td>
                        <td class="button">
                            <button type="button" onclick="location.href='/pages/course_curri_ae.php'">커리큘럼 보기</button>
                            <button type="button" onclick="window.open('https://forms.gle/RU3EyAkyjNzE3xCQA')">수강 신청</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- 2번째 섹션 타이틀 추가 -->
    <section class="sub-sec-title n2">
        <div class="title-box">
            <div class="container">
            <div class="title">
                <h2>영상 강좌</h2>
                <p>영상으로 된 강좌들을 만나보세요!</p>
            </div>
            </div>
        </div>
    </section>
    <!-- 2번째 테이블 --> 
    <section class="course-regist n2">
        <div class="container">
            <table>
                <caption>영상 강좌 표</caption>
                <colgroup>
                    <col style="width:10%">
                    <col style="width:12%">
                    <col >
                    <col style="width:20%">
                    <col style="width:15%">
                </colgroup>
                <thead>
                    <th scope="col">제목</th>
                    <th scope="col">썸네일</th>
                    <th scope="col">강좌 제목</th>
                    <th scope="col">가격</th>
                    <th scope="col">수강신청</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="title">프리미어 프로 <br> 기초 강좌 <br> 입문자 </td>
                        <td class="img"><img src="/img/main/sum_pr.png" alt="프리미어 프로 기초 강좌"></td>
                        <td class="title-box">
                            <div class="tag">
                                <span class="pop">인기 강좌</span>
                                <span class="sale">강좌 할인</span>
                                <span class="video">영상 강의</span>
                            </div>
                            <h2>[프리미어 프로][클래스톡]영상 입문자를 위한 프리미어 프로 기초 강좌</h2>
                            <span class="bottom">길경빈 강사 &nbsp;&nbsp;&nbsp; 1개월 - 4회 수업</span>
                        </td>
                        <td class="price">
                            <span><strong>[76%]</strong>185,000원</span>
                            <span>45,000원</span>
                        </td>
                        <td class="button">
                            <button type="button" onclick="window.open('https://me2.do/501zAebm')">커리큘럼 보기</button>
                            <button type="button" onclick="window.open('https://me2.do/501zAebm')">수강 신청</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">프리미어 프로 <br> 기초 강좌 <br> 입문자 </td>
                        <td class="img"><img src="/img/main/sum_pr.png" alt="프리미어 프로 기초 강좌"></td>
                        <td class="title-box">
                            <div class="tag">
                                <span class="pop">인기 강좌</span>
                                <span class="sale">강좌 할인</span>
                                <span class="video">영상 강의</span>
                            </div>
                            <h2>[포토샵][에어클래스] 누구든지 쉽게 배울 수 있는 포토샵 기초 강좌</h2>
                            <span class="bottom">길경빈 강사 &nbsp;&nbsp;&nbsp; 1개월 - 4회 수업</span>
                        </td>
                        <td class="price">
                            <span><strong>[76%]</strong>185,000원</span>
                            <span>45,000원</span>
                        </td>
                        <td class="button">
                            <button type="button" onclick="window.open('http://www.airklass.com/k/DA9SDUS')">커리큘럼 보기</button>
                            <button type="button" onclick="window.open('http://www.airklass.com/k/DA9SDUS')">수강 신청</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>
<?php
/* Include footer.php */
include $_SERVER["DOCUMENT_ROOT"] . "/footer.php";
?>