<?php
    /* Include header.php */
    @include ('header.php');
?>

<?php
    /* Load Template */

        /* Include 메인 랜딩 배너 */
        @include ('template/_main-landing-banner.php');

        /* Include 퀵아이콘 */
        @include ('template/_quick-icon-sec.php');

        /* Include 진행중인강좌 */
        @include ('template/_card-deck-3.php');

         /* Include 띠배너 (인기강좌 배너) */
         @include ('template/_bar-banner.php');

         /* Include 수강생 리뷰 */
         @include ('template/_review.php');
?>

<?php
    /* Include footer.php */
    @include ('footer.php');
?>