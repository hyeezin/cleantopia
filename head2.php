<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

<link rel="stylesheet" href="/css/default.css">
<link rel="stylesheet" href="/css/common-sub.css">
<link rel="stylesheet" href="/css/sub2.css">


<!-- 상단 시작 { -->
<div class="skip-nav">
  <a href="#main">본문 바로가기</a>
</div>
<header id="header"><!--100% 1920px-->
  <div class="inner"><!--1100px-->
    <h1 class="logo"><a href="/">크린토피아</a></h1>
    <h2 class="hidden">메인메뉴</h2>
    <div class="tnb">
      <div class="tnb-wrap">
        <ul class="tnb-login">
          <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">마이페이지</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <!-- <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li> -->
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <?php }  ?>
        </ul>
        <div class="tnb-menu">
          <a href="/sub/sub-t1.php" class="tnb-menu-info">정보공개서</a>
          <div class="tnb-center">
            <p class="tnb-center-tit">고객센터</p>
            <ul class="tnb-center-box">
              <li><a href="#">자주묻는 질문</a></li>
              <li><a href="#">고객의 소리</a></li>
              <li><a href="#">서비스불만족 신고</a></li>
              <li><a href="#">창업 문의</a></li>
              <li><a href="#">이벤트 신청</a></li>
            </ul>
          </div>
        </div>
        <div class="tnb-lang">
          <a href="#">ENG</a>
          <a href="/">KOR</a>
        </div>
      </div>
    </div>
    <nav class="gnb">
      <ul>
        <li class="depth1">
          <a href="/sub/sub1-1.php">세탁서비스</a>
          <dl class="side">
            <dt>세탁 서비스</dt>
            <dd>크린토피아의 서비스를 <br>소개합니다.</dd><!--::before illu-->
          </dl>
          <ul class="depth2-1">
            <li><a href="/sub/sub1-1.php">일반의류</a></li>
            <li><a href="/sub/sub1-2.php">와이셔츠</a></li>
            <li><a href="/sub/sub1-3.php">이불</a></li>
            <li><a href="/sub/sub1-4.php">운동화</a></li>
          </ul>
          <ul class="depth2-2">
            <li><a href="/sub/sub1-5.php">아웃도어</a></li>
            <li><a href="/sub/sub1-6.php">의류보관서비스</a></li>
          </ul>
          <div class="depth-img">
            <a href="#">
              <img src="" alt="">
            </a>
          </div>
        </li>
        <li class="depth1">
          <a href="/sub/sub2-1.php">코인빨래방</a>
          <dl class="side">
            <dt>코인빨래방</dt>
            <dd>365일 24시간! <br>코인워시 빨래방!</dd><!--::before illu-->
          </dl>
          <ul class="depth2-1"><!--::before image-->
            <li><a href="/sub/sub2-1.php">셀프 코인세탁</a></li>
            <li><a href="/sub/sub2-2.php">대행서비스</a></li>
          </ul>
          <div class="depth-img">
            <a href="/sub/sub2-1.php">
              <img src="/img/depth2-2.jpg" alt="">
            </a>
          </div>
        </li>
        <li class="depth1">
          <a href="/sub/sub3-1.php">창업안내</a>
          <dl class="side">
            <dt>창업안내</dt>
            <dd>크린토피아가 여러분의 <br>성공을 상담해 드립니다.</dd><!--::before illu-->
          </dl>
          <ul class="depth2-1"><!--::before image-->
            <li><a href="/sub/sub3-1.php">세탁멀티숍(편의점+빨래방)</a></li>
            <li><a href="/sub/sub3-2.php">세탁편의점</a></li>
            <li><a href="/sub/sub3-3.php">지사</a></li>
            <li><a href="/sub/sub3-4.php">교육/지원시스템</a></li>
          </ul>
          <ul class="depth2-2">
            <li><a href="http://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=presentation#">창업설명회</a></li>
            <li><a href="/sub/sub3-6.php">창업문의</a></li>
          </ul>
          <div class="depth-img">
            <a href="/sub/sub3-1.php">
              <img src="/img/depth2-3.jpg" alt="">
            </a>
          </div>
        </li>
        <li class="depth1">
          <a href="/sub/sub4-1.php">이용정보</a>
          <dl class="side">
            <dt>이용정보</dt>
            <dd>이벤트 정보를 <br>소개합니다.</dd><!--::before illu-->
          </dl>
          <ul class="depth2-1"><!--::before image-->
            <li><a href="/sub/sub4-1.php">할인정보</a></li>
            <li><a href="/sub/sub4-2.php">멤버쉽</a></li>
            <li><a href="http://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=sale_event">세일 및 이벤트</a></li>
            <li><a href="/sub/sub4-4.php">크린앱</a></li>
          </ul>
          <ul class="depth2-2">
            <li><a href="/sub/sub4-5.php">단체세탁</a></li>
            <li><a href="/sub/sub4-6.php">무인세탁함</a></li>
          </ul>
          <div class="depth-img">
            <a href="/sub/sub4-1.php">
              <img src="/img/depth2-4.jpg" alt="">
            </a>
          </div>
        </li>
        <li class="depth1">
          <a href="http://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=road">매장찾기</a>
          <dl class="side">
            <dt>매장찾기</dt>
            <dd>가까운 매장을 <br>찾아보세요.</dd><!--::before illu-->
          </dl>
          <ul class="depth2-1"><!--::before image-->
            <li><a href="http://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=road">통합검색</a></li>
          </ul>
          <div class="depth-img">
            <a href="http://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=road">
              <img src="/img/depth2-5.jpg" alt="">
            </a>
          </div>
        </li>
        <li class="depth1">
          <a href="/sub/sub6-1.php">회사소개</a>
          <dl class="side">
            <dt>회사소개</dt>
            <dd>크린토피아는 고객만족을 <br>위해 항상 노력합니다.</dd><!--::before illu-->
          </dl>
          <ul class="depth2-1"><!--::before image-->
            <li><a href="/sub/sub6-1.php">CEO인사말</a></li>
            <li><a href="/sub/sub6-2.php">회사개요 및 연혁</a></li>
            <li><a href="">홍보센터</a></li>
            <li><a href="http://hyeezin2.dothome.co.kr/bbs/board.php?bo_table=notice">보도자료</a></li>
          </ul>
          <ul class="depth2-2">
            <li><a href="/sub/sub6-5.php">사회공헌</a></li>
            <li><a href="/sub/sub6-6.php">찾아오시는길</a></li>
          </ul>
          <div class="depth-img">
            <a href="/sub/sub6-1.php">
              <img src="/img/depth2-6.jpg" alt="">
            </a>
          </div>
        </li>
      </ul>
      <div class="gnb-bg"></div>
    </nav>
  </div>
</header>
<!-- } 상단 끝 -->
<hr>
<!-- 콘텐츠 시작 { -->
<main id="container">
  <nav class="lnb">
    <div class="inner">
      <a href="/">HOME</a>
    </div>
  </nav>
  <section>