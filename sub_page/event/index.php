<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이벤트 | Dr.Jart+</title>
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
      <div class="container">
        <div class="topNav">
          <div class="nav-con">
            <div class="left">
              <a href="#">
                <h2>이벤트</h2>
              </a>
            </div>
            <div class="rightMenu">
              <ul class="topNav-box">
                <li class="topNav-event">
                  <a href="#" class="nav-btn">이벤트</a>
                  <div class="sub-menu-box">
                    <ul class="sub-menu-list">
                      <li><a href="#">진행중인 이벤트</a></li>
                      <li><a href="#">종료된 이벤트</a></li>
                    </ul>
                  </div>
                </li>
                <li class="topNav-winList">
                  <a href="#">당첨자 발표</a>
                </li>
                <li class="topNav-eventReview">
                  <a href="#">이벤트 리뷰</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <section id="event_seciton">
        <div class="title">
          <h2>이벤트</h2>
        </div>
        <div class="event-menu">
          <ul>
            <li><a href="#">진행중인 이벤트</a></li>
            <li><a href="#">당첨자 발표</a></li>
            <li><a href="#">종료된 이벤트</a></li>
          </ul>
        </div>
        <div class="eventlist-box">
          <ul>
            <li>
              <a href="#">
                <div class="eventThum">
                  <span class="img-thum">
                    <img src="./images/1664955202159.jpg" alt="">
                  </span>
                </div>
                <div class="eventInfo">
                  <span>공통</span>
                  <h2>3.3.3 수분패드 출시! 공식몰 단독 프로모션</h2>
                  <h3>2022.10.12 ~ 2022.10.31</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="eventThum">
                  <span class="img-thum">
                    <img src="./images/1664522888251.jpg" alt="">
                  </span>
                </div>
                <div class="eventInfo">
                  <span>공통</span>
                  <h2>22년 10월 멤버십 고객님만을 위한 혜택♥</h2>
                  <h3>2022.09.30 ~ 2022.10.31</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="eventThum">
                  <span class="img-thum">
                    <img src="./images/1665454632050.jpg" alt="">
                  </span>
                </div>
                <div class="eventInfo">
                  <span>공통</span>
                  <h2>쏘 수딩 트리트먼트 런칭!</h2>
                  <h3>2022.10.17 ~ 2022.10.31</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="eventThum">
                  <span class="img-thum">
                    <img src="./images/1663573346282.jpg" alt="">
                  </span>
                </div>
                <div class="eventInfo">
                  <span>공통</span>
                  <h2>2022 핑크 리본 캠페인 by 에스티 로더 컴퍼니즈</h2>
                  <h3>2022.09.30 ~ 2022.10.31</h3>
                </div>
              </a>
            </li>
          </ul>
          <div class="eventPagenation">
            <span class="first">
              <a href="#">
                <img src="./images/arr_pageFirst.png" alt="">
              </a>
            </span>
            <span class="prev">
              <a href="#">
                <img src="./images/arr_pagePrev.png" alt="">
              </a>
            </span>
            <span class="current">1</span>
            <span class="next">
              <a href="#">
                <img src="./images/arr_pageNext.png" alt="">
              </a>
            </span>
            <span class="last">
              <a href="#">
                <img src="./images/arr_pageLast.png" alt="">
              </a>
            </span>
          </div>
        </div>
        <div class="eventReview-wrap">
          <div class="title">
            <h3>이벤트 당첨자 후기</h3>
            <a href="#">전체보기 +</a>
          </div>
          <div class="eventReview-list">
            <ul>
              <li>
                <a href="#">
                  <div class="reviewInfoCon">
                    <p class="rv-tit">넘좋아요</p>
                    <p class="rv-info">
                      <span class="user-name">miae****</span>
                      <i>|</i>
                      <span class="rv-date">2022.04.26</span>
                    </p>
                    <p class="rv-txt">저렴하게 구매해서 넘 좋아요 사이즈 작아서 가방에 쏘옥 넣고 다니기도 편하구요</p>
                    <p class="rv-event">
                      <span>이벤트</span> <!-- after 처리 -->
                      서프라이즈 주말특가, 5/27~5/29 50% OFF
                    </p>
                  </div>
                  <div class="reviewThum hide">
                    <span class="rvImgBox">
                      <img src="" alt="">
                    </span>
                    <span class="imgNum">1</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="reviewInfoCon">
                    <p class="rv-tit">넘넘 좋아요</p>
                    <p class="rv-info">
                      <span class="user-name">miae****</span>
                      <i>|</i>
                      <span class="rv-date">2022.04.24</span>
                    </p>
                    <p class="rv-txt">주말특가로 저렴하게 구매할수 있어 넘 좋아요 있어도 쟁겨두게 되네요</p>
                    <p class="rv-event">
                      <span>이벤트</span> <!-- after 처리 -->
                      서프라이즈 주말특가, 5/27~5/29 50% OFF
                    </p>
                  </div>
                  <div class="reviewThum hide">
                    <span class="rvImgBox">
                      <img src="" alt="">
                    </span>
                    <span class="imgNum">1</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="reviewInfoCon">
                    <p class="rv-tit">서프라이즈</p>
                    <p class="rv-info">
                      <span class="user-name">good****</span>
                      <i>|</i>
                      <span class="rv-date">2022.04.15</span>
                    </p>
                    <p class="rv-txt">기회를 놓칠수 없다! 항상 기다리고 있어요! 잘쓰겠습니다</p>
                    <p class="rv-event">
                      <span>이벤트</span> <!-- after 처리 -->
                      서프라이즈 주말특가, 5/27~5/29 50% OFF
                    </p>
                  </div>
                  <div class="reviewThum">
                    <span class="rvImgBox">
                      <img src="./images/1650005686334.jpg" alt="">
                    </span>
                    <span class="imgNum">1</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="reviewInfoCon">
                    <p class="rv-tit">항상 잘 쓰고 있어요</p>
                    <p class="rv-info">
                      <span class="user-name">rhd1****</span>
                      <i>|</i>
                      <span class="rv-date">2022.04.04</span>
                    </p>
                    <p class="rv-txt">너무좋아요ㅎ 보습최고</p>
                    <p class="rv-event">
                      <span>이벤트</span> <!-- after 처리 -->
                      호랑이띠 모여라
                    </p>
                  </div>
                  <div class="reviewThum">
                    <span class="rvImgBox">
                      <img src="./images/1649079049477.jpg" alt="">
                    </span>
                    <span class="imgNum">1</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      </div>
      <!-- ++ footer ++ -->
      <?
        include_once($path.'footer.php');
      ?>
      <!-- footer end -->
    </main>
    <!-- main end -->

  </div>
  <!-- wrap end -->

<script src="./script/event.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>