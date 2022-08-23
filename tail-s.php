<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
  </section>
</main>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer id="footer">
  <div class="f-menu-list"><!-- 100% border-bottom -->
    <div class="inner">
      <ul class="f-menu">
        <li><a href="/sub/sub-f1.php">개인정보처리방침</a></li>
        <li><a href="/sub/sub-f2.php">스팸관리정책</a></li>
        <li><a href="/sub/sub-f3.php">이용약관</a></li>
        <li><a href="/sub/sub-f4.php">의류보관 이용약관</a></li>
        <li><a href="/sub/sub-f5.php">이메일주소 무단수집거부</a></li>
        <li><a href="/sub/sub-f6.php">법적고지</a></li>
      </ul>
    </div>
  </div>
  <div class="inner">
    <h2 class="f-logo">크린토피아</h2>
    <ul class="f-mark"><!--text-indent : -9999px / li::before img-->
      <li>2011-14 4년연속 대한민국 명품 브랜드 대상</li>
      <li>2011-14 4년연속 프랜차이즈 수준평가 1등급</li>
    </ul>
    <div class="f-info">
      <ul class="f-addr">
        <li><address>본사 경기도 성남시 중원구 순환로 222(상대원동 64번지) 크린토피아</address></li>
        <li>대표전화 <span>1577-4560</span></li>
        <li>대표이사 변성현</li>
        <li>사업자등록번호 130-81-55163</li>
        <li>FAX 031-733-1995</li>
      </ul>
      <p class="f-copy">COPYRIGHT © CLEANTOPIA ALL RIGHTS RESERVED.</p>
    </div>
  </div>
</footer>  

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>