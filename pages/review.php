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

      <?php
    /* Load Template */

         /* Include 수강생 리뷰 */
         include $_SERVER["DOCUMENT_ROOT"]."/template/_review.php";
?>
    </main>
<?php
    /* Include footer.php */
    include $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>