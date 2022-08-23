<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_PATH.'/head.php');
?>

<h2 class="hidden">메인콘텐츠</h2>
    <!-- Swiper-S -->
    <div class="swiper mySwiper visual1">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide1">
          <a href="#">
            <img src="/img/bigvisual1.jpg" alt="">
          </a>
        </div>
        <div class="swiper-slide slide2">
          <a href="#">
            <img src="/img/bigvisual2.jpg" alt="">
          </a>
        </div>
      </div>
      <div class="inner">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper-E -->
    <section class="search">
      <h3 class="hidden">매장찾기</h3>
      <form class="main-sch">
        <div class="inner">
          <fieldset class="main-sch-box">
            <legend>매장찾기</legend>
            <label for="sch" class="main-sch-tit">매장찾기</label>
            <input type="text" id="sch" class="main-sch-txt" placeholder="매장명 혹은 지역을 입력하세요">
            <button type="button" class="sch-bt" onclick="location.href='bbs/board.php?bo_table=map';"></button>
          </fieldset>
        </div>
      </form>
    </section>
    <section class="contact clearfix">
      <h3 class="hidden">공지사항&창업설명회</h3>
      <div class="inner">
        <article class="notice">
          <h4 class="hidden">보도자료</h4>
          <div class="notice-box">
            <?php echo latest('basic', 'notice', 4, 32); ?>
          </div>
        </article>
        <article class="startup">
          <h4 class="startup-tit">창업설명회</h4>
          <p class="startup-desc">크린토피아 + 코인워시 창업설명회를 개최합니다.</p>
          <a href="#" class="startup-more">view</a>
        </article>
      </div>
    </section>
    <section class="service inner">
      <h3 class="tit">크린토피아 서비스</h3>
      <div class="service-box">
        <article class="service-box1">
          <h4 class="service-box-tit">와이셔츠</h4>
          <strong class="service-box-txt">편하게! 깔끔하게! <br>와이셔츠 세탁서비스</strong>
          <p class="service-box-desc">세탁에서 다림질까지</p>
          <a href="#" class="service-more">view</a>
        </article>
        <article class="service-box2">
          <h4 class="service-box-tit">이불</h4>
          <strong class="service-box-txt">먼지, 진드기 없는<br> 크린토피아 이불 세탁서비스</strong>
          <p class="service-box-desc">3단계 건조시스템으로 뽀송뽀송하게</p>
          <a href="#" class="service-more">view</a>
        </article>
        <article class="service-box3">
          <h4 class="service-box-tit">이벤트</h4>
          <strong class="service-box-txt">매주 수요일은 더 알뜰하게</strong>
          <p class="service-box-desc">크리닝데이 혜택을 확인해 보세요</p>
          <a href="#" class="service-more">view</a>
        </article>
      </div>
    </section>
    <section class="banner">
      <h3 class="hidden">banner</h3>
      <div class="banner-txt">
        <strong>NO.1 CLEANTOPIA</strong>
        <p><span>크린토피아</span>가 당신의 성공을 기원합니다</p>
      </div>
    </section>
    <section class="inception clearfix">
      <h3 class="tit">크린토피아의 특별한 창업</h3>
      <div class="inner">
        <ul class="inception-box">
          <li class="inception-box1">
            <figure class="inception-box-img"><img src="/img/inception1.jpg" alt=""></figure>
            <p class="inception-box-txt">셀프 세탁 가능한 코인워시 <br>1100호점 돌파</p>
            <a href="#" class="inception-more">view</a>
          </li>
          <li class="inception-box2">
            <figure class="inception-box-img"><img src="/img/inception2.jpg" alt=""></figure>
            <p class="inception-box-txt">크린토피아 + 코인워시로 <br>성공창업을 시작하세요</p>
            <a href="#" class="inception-more">view</a>
          </li>
          <li class="inception-box3">
            <figure class="inception-box-img"><img src="/img/inception3.jpg" alt=""></figure>
            <p class="inception-box-txt">창업성공기! <br>노하우를 들려드립니다</p>
            <a href="#" class="inception-more">view</a>
          </li>
        </ul>
      </div>
    </section>



  <!-- <script type="text/javaScript">
    function moveMap(){
      lacation.href = "https://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=road";
    }
  </script> -->
<?php
include_once(G5_PATH.'/tail.php');
?>