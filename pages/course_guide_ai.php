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
            <h2>일러스트레이터</h2>
            <p>일러스트레이터에 대한 강좌들을 만나보세요!</p>
            <ul class="tag">
              <span class="item">#일러스트레이터</span>
              <span class="item">#입문자</span>
              <span class="item">#디자이너</span>
              <span class="item">#그래픽 디자인</span>
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
                    src="../img/sub_page/course_guide_pr/3.png"
                    alt="프리미어 프로를 포함한 어도비 프로그램 초기화 방법"
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
            <p>빠른 실력 향상을 원하신다면 1:1 클래스를 이용해보세요</p>
          </div>
          <div class="card-deck">
            <a href="" class="hidden">
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
                    <span>1:1강좌</span>
                  </div>
                  <h2>영상편집자를 위한 <br />프리미어 프로 기초 강좌</h2>
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
            <p>현재 진행중인 일러스트레이터 강좌 입니다.</p>
          </div>
          <div class="card-deck">
            <a href="/pages/course_curri_ai.php">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/sum_ai.jpg"
                    alt="초보자도 쉽게 배울 수 있는 일러스트 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>일러스트레이터</span>
                    <span>디자인</span>
                  </div>
                  <h2>디자인 작업의 기본 틀! <br />일러스트레이터 기초 강좌</h2>
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
          <div class="card-deck hidden">
             <a href="">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide_pr/filler.png"
                    alt="임시"
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
    </main>
<?php
    /* Include footer.php */
    include $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>