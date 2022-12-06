<?
  include_once('./_config.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr.Jart+</title>
  <meta name="publisher" content="DONGIL">
  <link rel="stylesheet" href="./css/style.css">
  <script src="<?=$path?>script/lib/jquery-1.12.3.js"></script>
</head>
<body>
  <!-- ++ skip ++ -->
  <ul id="skip">
    <li><a href="#">주메뉴 바로가기</a></li>
    <li><a href="#">본문 바로가기</a></li>
    <li><a href="#">하단메뉴 바로가기</a></li>
  </ul>
  <!-- skip end -->


  <!-- ++ wrap ++ -->
  <div id="wrap">
    <!-- ++ header ++ -->
    <?
      include_once($path.'header.php');
    ?>
    <!-- header end -->


    <!-- ++ main ++ -->
    <main id="main">
      <div class="quickNavi">
        <div class="quickNavi-wrap">
          <a href="<?=$path2?>product/">제품</a>
          <a href="<?=$path2?>event/">이벤트</a>
          <a href="<?=$path2?>story/ceramidin/">스토리</a>
        </div>
      </div>
      <div class="mainNavi">
        <ul>
          <li class="mnbar mainNavi-bar1"><a href="#section1" title="section1 button"><i></i></a></li>
          <li class="mnbar mainNavi-bar2"><a href="#section2" title="section2 button"><i></i></a></li>
          <li class="mnbar mainNavi-bar3"><a href="#section3" title="section3 button"><i></i></a></li>
          <li class="mnbar mainNavi-bar4"><a href="#section4" title="section4 button"><i></i></a></li>
        </ul>
      </div>
      <section id="section1" class="sec">
        <div class="slide-container">
          <div class="slide-view">
            <ul class="slide-wrap">
              <li class="slide slide7">
                <a href="#">
                  <img src="./images/index/slide7.jpg" alt="">
                  <div class="slide-text slide-text7">
                    <h2>#모공<br>#새로고침!</h2>
                    <h3>포어레미디로 매끈 결광 피부 완성!<br>공식몰 포어레미디 전 라인 할인 진행 중</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide1">
                <a href="#">
                  <img src="./images/index/slide1.jpg" alt="">
                  <div class="slide-text slide-text1">
                    <h2>Go green, Get repair<br>건강한 일상, 그린 리페어</h2>
                    <h3>브라더빈과 함께하는 닥터자르트의<br>건강한 일상 캠페인을 만나보세요!</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide2">
                <a href="#">
                  <img src="./images/index/slide2.jpg" alt="">
                  <div class="slide-text slide-text2">
                    <h2>바이탈 하이드라 솔루션™<br>하이드로 글로우 패드 런칭</h2>
                    <h3>물 머금은 듯 촉촉하게 빛나는 피부<br>3.3.3. 수분패드</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide3">
                <a href="#">
                  <img src="./images/index/slide3.jpg" alt="">
                  <div class="slide-text slide-text3">
                    <h2>2022 핑크리본<br>리미티드 에디션</h2>
                    <h3>에스티로더 컴퍼니즈 유방암 캠페인<br>핑크리본 한정판 10월 한달간 만나보세요!</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide4">
                <a href="#">
                  <img src="./images/index/slide4.jpg" alt="">
                  <div class="slide-text slide-text4">
                    <h2>닥터자르트와 <br>설레는 첫 만남</h2>
                    <h3>물 머금은 듯 촉촉하게 빛나는 피부<br> 3.3.3. 수분패드</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide5">
                <a href="#">
                  <img src="./images/index/slide5.jpg" alt="">
                  <div class="slide-text slide-text5">
                    <h2>Every Day,<br>Every Sun Day!</h2>
                    <h3>지금 공식몰에서는 하나 사면 하나 더!<br>안심성분 더마 선케어를 만나보세요.</h3>
                    <button class="direct-btn">이벤트 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide6">
                <a href="#">
                  <img src="./images/index/slide6.jpg" alt="">
                  <div class="slide-text slide-text6">
                    <h2>10월의 특별한<br>멤버십 혜택 확인♥</h2>
                    <h3>닥터자르트 멤버십만 받을 수 있는<br>풍성한 혜택을 확인하세요!</h3>
                    <button class="direct-btn">자세히 보기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide7">
                <a href="#">
                  <img src="./images/index/slide7.jpg" alt="">
                  <div class="slide-text slide-text7">
                    <h2>#모공<br>#새로고침!</h2>
                    <h3>포어레미디로 매끈 결광 피부 완성!<br>공식몰 포어레미디 전 라인 할인 진행 중</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
              <li class="slide slide1">
                <a href="#">
                  <img src="./images/index/slide1.jpg" alt="">
                  <div class="slide-text slide-text1">
                    <h2>Go green, Get repair<br>건강한 일상, 그린 리페어</h2>
                    <h3>브라더빈과 함께하는 닥터자르트의<br>건강한 일상 캠페인을 만나보세요!</h3>
                    <button class="direct-btn">상품 바로가기</button>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="slide-btn-box">
            <span class="slide-btn"><a href="#" class="page-btn slide-btn1 on">1</a></span>
            <span class="slide-btn"><a href="#" class="page-btn slide-btn2">2</a></span>
            <span class="slide-btn"><a href="#" class="page-btn slide-btn3">3</a></span>
            <span class="slide-btn"><a href="#" class="page-btn slide-btn4">4</a></span>
            <span class="slide-btn"><a href="#" class="page-btn slide-btn5">5</a></span>
            <span class="slide-btn"><a href="#" class="page-btn slide-btn6">6</a></span>
            <span class="slide-btn"><a href="#" class="page-btn slide-btn7">7</a></span>
          </div>
        </div>
      </section>
      <section id="section2" class="sec">
        <div class="sec2-container">
          <img src="./images/index/1651198344916.jpg" alt="">
          <div class="text-box">
            <h3>PROJECT #16</h3>
            <h2>#Renewing Project<br>모공? 새로고침!</h2>
            <p>우리를 괴롭히는 모공 고민부터 스트레스까지<br>필터스페이스에서 매끈하게 밀어버리고 새로고침하세요!</p>
            <button class="filterSpace-direct-btn">보러 가기</button>
          </div>
        </div>
      </section>
      <section id="section3" class="sec">
        <div class="sec3-container">
          <div class="content-box">
            <p class="con-text1">
              모공 고민?<br>포어레미디로<br>새로고침!
            </p>
            <p class="con-text2">
              늘어난 모공케어에 도움을 주는 파하의 힘!<br>닥터자르트 포어레미디를 만나보세요.<br>#모공고침 #민트파하세럼
            </p>
            <button class="moreVod-btn">
              더 많은 영상 보기
            </button>
          </div>
          <div class="vod-box">
            <div class="vod-wrap">
              <a href="#">
                <img src="./images/index/btn_vodPlay.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="section4" class="sec">
        <div class="sec4-container">
          <ul class="sec4-content-wrap">
            <li>
              <a href="#">
                <div class="img-box">
                  <img src="./images/index/1508994989898.jpg" alt="">
                </div>
                <div class="subtext-box">
                  <span>Dr.Jart Channel</span>
                  <p>신뢰가는 Doctor와 유쾌한 Art 요소들로 만들어가는 뷰티 그램</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="img-box">
                  <img src="./images/index/1552613750448.jpg" alt="">
                </div>
                <div class="subtext-box">
                  <span>Product Zoom-in</span>
                  <p>시카 스토리, 시카 뮤지엄 등 시카에 대한 모든 이야기</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="img-box">
                  <img src="./images/index/1610416831120.jpg" alt="">
                </div>
                <div class="subtext-box">
                  <span>Filterspace</span>
                  <p>'물','공기','빛'의 경험! 닥터자르트 플래그쉽 스토어 </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="img-box">
                  <img src="./images/index/1508995370143.jpg" alt="">
                </div>
                <div class="subtext-box">
                  <span>Membership</span>
                  <p>다양한 혜택의 닥터자르트 멤버십 안내!</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="sec4-pagenation">
            <span class="first">
              <a href="#">
                <img src="./images/index/arr_pageFirst.png" alt="">
              </a>
            </span>
            <span class="prev">
              <a href="#">
                <img src="./images/index/arr_pagePrev.png" alt="">
              </a>
            </span>
            <span class="current">1</span>
            <span class="next">
              <a href="#">
                <img src="./images/index/arr_pageNext.png" alt="">
              </a>
            </span>
            <span class="last">
              <a href="#">
                <img src="./images/index/arr_pageLast.png" alt="">
              </a>
            </span>
          </div>
        </div>
      </section>
      <!-- ++ footer ++ -->
      <?
        include_once($path.'footer.php');
      ?>
      <!-- footer end -->
    </main>
    <!-- main end -->

  </div>
  <!-- wrap end -->

<script src="./script/index.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>