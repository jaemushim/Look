<?php
    /* Include header.php */
    include $_SERVER["DOCUMENT_ROOT"]."/header.php";
?>
<head>
    <link rel="stylesheet" href="/css/sub/sub_common.css" />
    <link rel="stylesheet" href="/css/sub/course_guide.css" />
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
    <?php
    /* Load Template */
        
    /* Include 퀵아이콘 */
    include $_SERVER["DOCUMENT_ROOT"]."/template/_quick-icon-sec.php";

    /* Include 진행중인강좌 */
    include $_SERVER["DOCUMENT_ROOT"]."/template/_card-deck-3.php"
    ?>

   
      <!-- 1:1 과외 클래스 강좌 -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>1:1 과외 클래스</h2>
            <p>빠른 실력 향상을 원하신다면 1:1 클래스를 이용해보세요</p>
          </div>
          <div class="card-deck">
            <a href="/pages/course_curri_pr_1-1.php">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/main/sum_pr.png"
                    alt="프리미어 프로 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>프리미어 프로</span>
                    <span>영상 편집</span>
                  </div>
                  <h2>영상편집자를 위한 <br />프리미어 프로 기초 강좌</h2>
                  <span class="teacher">길경빈 강사</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- 오픈 예정 강좌 -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>오픈 예정 강좌</h2>
            <p>조만간 오픈 될 강좌들 입니다</p>
          </div>
          <div class="card-deck">
            <a href="" class="prepare">
              <div class="card">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/audition.png"
                    alt="영상편집에 유용한 오디오 편집 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>프리미어 프로</span>
                    <span>영상 편집</span>
                  </div>
                  <h2>영상편집자를 위한 <br />프리미어 프로 기초 강좌</h2>
                  <span class="teacher">길경빈 강사</span>
                </div>
                <span class="badge">준비중</span>
              </div>
            </a>
            <a href="/pages/course_curri_ps.php" class="prepare">
              <div class="card">
                <div class="img-holder">
                  <img
                    src="../img/main/sum_ps.png"
                    alt="누구든지 쉽게 배울 수 있는 포토샵 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>포토샵</span>
                    <span>디자인</span>
                  </div>
                  <h2>영상편집자를 위한 <br />프리미어 프로 기초 강좌</h2>
                  <span class="teacher">길경빈 강사</span>
                </div>
                <span class="badge">준비중</span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- 바 배너 -->
      <section class="bar-banner">
        <div class="container">
          <div class="banner-slide">
            <a href="">
              <div class="banner">
                입문자도 쉽게 배우는 프리미어 프로 클래스
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