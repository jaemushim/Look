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
            <h2>에프터 이펙트</h2>
            <p>에프터이펙트에 대한 강좌들을 만나보세요!</p>
            <ul class="tag">
              <span class="item">#에프터이펙트</span>
              <span class="item">#입문자</span>
              <span class="item">#영상편집</span>
              <span class="item">#모션그래픽</span>
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
                    alt="프리미어 프로 컷편집 속도 늘리는 단축키 총정리"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>에프터이펙트</span>
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
      <!-- 현재 진행 중인 강좌  -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>현재 진행 중인 강좌</h2>
            <p>현재 진행 중인 프리미어 프로 강좌 입니다</p>
          </div>
          <div class="card-deck">
            <a href="/pages/course_curri_ae.php">
              <div class="card hvr-float-shadow">
                <div class="img-holder">
                  <img
                    src="../img/sub_page/course_guide/effect.png"
                    alt="영상 입문자를 위한 에펙 기초 강좌"
                  />
                </div>
                <div class="card-content">
                  <div class="tag-box">
                    <span>에프터 이펙트</span>
                    <span>영상 제작</span>
                  </div>
                  <h2>영상 제작의 시작! <br />에프터이펙트 기초 강좌</h2>
                  <span class="teacher">송우진 강사</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- 오픈 예정 강좌  -->
      <section class="card-carousel">
        <div class="container">
          <div class="title">
            <h2>오픈 예정 강좌</h2>
            <p>조만간 오픈 될 강좌들 입니다.</p>
          </div>
          <div class="card-deck">
                <a href="" class="hidden">
                  <div class="card hvr-float-shadow">
                    <div class="img-holder">
                      <img
                        src="../img/sub_page/course_guide/effect.png"
                        alt="영상 입문자를 위한 에펙 기초 강좌"
                      />
                    </div>
                    <div class="card-content">
                      <div class="tag-box">
                        <span>에프터 이펙트</span>
                        <span>영상 제작</span>
                      </div>
                      <h2>영상 제작의 시작! <br />에프터이펙트 기초 강좌</h2>
                      <span class="teacher">송우진 강사</span>
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