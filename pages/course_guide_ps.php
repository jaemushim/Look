<?php
    /* Include header.php */
    include $_SERVER["DOCUMENT_ROOT"]."/header.php";
?>
<head>
    <link rel="stylesheet" href="/css/sub/sub_common.css" />
</head>

<main>
      <!-- 배너 -->
      <section class="course-top-banner">
        <div class="slide n1"></div>
        <div class="slide n2"></div>
      </section>

     <!-- 섹션 타이틀 -->
     <section class="sec-title">
        <div class="container">
          <div class="title">
            <h2>포토샵</h2>
            <p>포토샵에 대한 강좌들을 만나보세요!</p>
            <ul class="tag">
              <span class="item">#포토샵</span>
              <span class="item">#입문자</span>
              <span class="item">#유튜브</span>
              <span class="item">#디자인</span>
            </ul>
          </div>
        </div>
      </section>
      <!-- 무료 오픈 강좌 -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>무료 오픈 강좌</h2>
            <p>무료로 오픈 된 강좌를 만나보세요</p>
            <!-- <div class="control">
              <button type="button" class="arrow prev">이전</button>
              <button type="button" class="arrow next">다음</button>
            </div> -->
          </div>
          <div class="card-deck">
            <a href="https://www.youtube.com/watch?v=euyqmy_58Lk" target="_blank">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/3.png"
                    alt="누구든지 쉽게 배울수 있는 포토샵 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>프리미어 프로</span>
                    <span>영상 편집</span>
                  </div>
                  <h2>
                    프리미어 프로를 포함한 <br />어도비 프로그램 초기화 방법
                  </h2>
                  <span class="teacher">LOOK 디자인</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- 1:1 과외 클래스 강좌 -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>1:1 과외 클래스</h2>
            <p>포토샵 강좌를 1:1클래스로 만나보세요!!</p>
          </div>
          <div class="card-deck">
            <a href="/pages/course_curri_ps_1-1.php">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/sum_ps.jpg"
                    alt="누구든지 수비게 배울 수 있는 포토샵 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>포토샵</span>
                    <span>디자인</span>
                    <span>1:1강좌</span>
                  </div>
                  <h2>입문자도 쉽게 배우는 <br />포토샵 1:1 클래스</h2>
                  <span class="teacher">길경빈 강사</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- 현재 진행 중인 강좌 -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>현재 진행 중인 강좌</h2>
            <p>현재 진행 중인 포토샵 강좌 입니다</p>
          </div>
          <div class="card-deck">
            <a href="/pages/course_curri_ps.php">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/sum_ps.jpg"
                    alt="누구든지 수비게 배울 수 있는 포토샵 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>포토샵</span>
                    <span>디자인</span>
                  </div>
                  <h2>누구든지 쉽게 배울 수 있는 <br />포토샵 기초 강좌</h2>
                  <span class="teacher">길경빈 강사</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- 오픈 예정 중인 강좌 -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>오픈 예정 강좌</h2>
            <p>조만간 오픈 될 강좌들 입니다</p>
          </div>
          <div class="card-deck">
             <a href="" class="hidden">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/sum_ps.jpg"
                    alt="누구든지 수비게 배울 수 있는 포토샵 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>포토샵</span>
                    <span>디자인</span>
                  </div>
                  <h2>누구든지 쉽게 배울 수 있는 <br />포토샵 기초 강좌</h2>
                  <span class="teacher">길경빈 강사</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
    </main>
<?php
    /* Include footer.php */
    include $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>