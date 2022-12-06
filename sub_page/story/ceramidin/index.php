<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>스토리 | Dr.Jart+</title>
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
              <a href="<?=$path3?>ceramidin/">
                <h2>스토리</h2>
              </a>
            </div>
            <div class="rightMenu">
              <ul class="topNav-box">
                <li class="topNav-prdStory">
                  <a href="<?=$path3?>ceramidin/" class="nav-btn">제품 스토리</a>
                  <div class="sub-menu-box">
                    <ul class="sub-menu-list">
                      <li><a href="<?=$path3?>ceramidin/">세라마이딘</a></li>
                      <li><a href="<?=$path3?>cicapair/">시카페어</a></li>
                    </ul>
                  </div>
                </li>
                <li class="topNav-susStory">
                  <a href="#">배송 스토리</a>
                </li>
                <li class="topNav-socialChannel">
                  <a href="#" class="nav-btn">소셜채널</a>
                  <div class="sub-menu-box">
                    <ul class="sub-menu-list">
                      <li><a href="<?=$path3?>instagram/">인스타그램</a></li>
                      <li><a href="<?=$path3?>youtube/">유튜브</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="visual">
          <img src="./images/topvisual_2021.jpg" alt="">
        </div>
        <div class="content">
          <div class="tabType">
            <ul>
              <li class="sTab sTab1  on"><a href="#story">왜 세라마이딘™ 인가요?</a></li>
              <li class="sTab sTab2 "><a href="#ectoin">엑토인 스토리</a></li>
              <li class="sTab sTab3 "><a href="#new">세라 보습 라인</a></li>
              <li class="sTab sTab4 "><a href="#history">세라마이딘™ 히스토리</a></li>
              <li class="sTab sTab5 "><a href="#pink">핑크 세라 이야기</a></li>
            </ul>
          </div>
          <div class="tabContents">
            <div id="story" class="tab-con tab-con1 on2">
              <div class="storyImg">
                <img src="./images/cera_01.jpg" alt="">
              </div>
            </div>
            <div id="ectoin" class="tab-con tab-con2">
              <div class="storyImg">
                <img src="./images/ceramidin_story_ectioin.jpg" alt="">
                <div class="ection-mov">
                  <video autoplay loop muted playinline src="https://vod.drjart.com/event/ko/2021/20211221_Ceramidin_Ectoin_story_video.mp4"></video>
                </div>
              </div>
            </div>
            <div id="new" class="tab-con tab-con3">
              <div class="storyImg">
                <img src="./images/cera_2021.jpg" alt="">
              </div>
            </div>
            <div id="history" class="tab-con tab-con4">
              <div class="storyImg">
                <img src="./images/cera_03.jpg" alt="">
              </div>
            </div>
            <div id="pink" class="tab-con tab-con5">
              <div class="storyImg">
                <img src="./images/20200924_pink_01.jpg" alt="">
                <div class="pinkVod">
                  <iframe src="https://www.youtube.com/embed/TjXHHvQDIrc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <img src="./images/20200924_pink_03.jpg" alt="">
                <img src="./images/20200924_pink_04.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="otherContents">
          <div class="othTitle">
            <h2>다른 Product Zoom-In</h2>
          </div>
          <div class="prdList">
            <ul>
              <li><a href="#"><img src="./images/1604047876164.jpg" alt=""></a></li>
              <li><a href="#"><img src="./images/1630390111147.jpg" alt=""></a></li>
              <li><a href="#"><img src="./images/1604047876164.jpg" alt=""></a></li>
              <li><a href="#"><img src="./images/1630390111147.jpg" alt=""></a></li>
            </ul>
          </div>
          <div class="storyPagenation">
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

<script src="./script/ceramidin.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>