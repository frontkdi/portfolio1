<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>필터스페이스 | Dr.Jart+</title>
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
              <a href="<?=$path3?>project/">
                <h2>필터스페이스</h2>
              </a>
            </div>
            <div class="rightMenu">
              <ul class="topNav-box">
                <li class="topNav-project">
                  <a href="<?=$path3?>project/">전시 프로젝트</a>
                </li>
                <li class="topNav-intro">
                  <a href="<?=$path3?>introduce/">소개</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <section id="seciton">
        <div class="title">
          <h2>전시 프로젝트</h2>
        </div>
        <div class="projectlist">
          <ul>
            <li>
              <a href="#">
                <div class="projectThum">
                  <span class="img-thum">
                    <img src="./images/project1.jpg" alt="">
                    <div class="flag">
                      <h4>마감</h4>
                    </div>
                  </span>
                </div>
                <div class="projectInfo">
                  <h2>PROJECT #16 Renewing Project</h2>
                  <h3>2022.04.27 ~ 2022.07.31</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="projectThum">
                  <span class="img-thum">
                    <img src="./images/project2.jpg" alt="">
                    <div class="flag">
                      <h4>마감</h4>
                    </div>
                  </span>
                </div>
                <div class="projectInfo">
                  <h2>PROJECT #15 Cicapair™ Express</h2>
                  <h3>2021.09.02 ~ 2021.12.01</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="projectThum">
                  <span class="img-thum">
                    <img src="./images/project3.jpg" alt="">
                    <div class="flag">
                      <h4>마감</h4>
                    </div>
                  </span>
                </div>
                <div class="projectInfo">
                  <h2>PROJECT #14 Cicapair™ Express</h2>
                  <h3>2021.02.22 ~ 2021.08.31</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="projectThum">
                  <span class="img-thum">
                    <img src="./images/project4.jpg" alt="">
                    <div class="flag">
                      <h4>마감</h4>
                    </div>
                  </span>
                </div>
                <div class="projectInfo">
                  <h2>PROJECT #13 RepairShop</h2>
                  <h3>2020.09.15 ~ 2021.02.21</h3>
                </div>
              </a>
            </li>
          </ul>
          <div class="pagenation">
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

  <!-- ++ modal ++ -->
  <div class="modal">
    <div class="modal-container">
      <div class="content">
        <h2>'필터스페이스 인 서울' 운영 종료 및 포인트 소멸 안내</h2>
        <p>'필터스페이스 인 서울' 매장이<br>2022년 8월 1일자로, 영업을 종료합니다</p>
        <p>※ 매장 이용 및 포인트 사용 가능일은<br>'공지사항 바로가기'를 통해 확인해주시기 바랍니다.</p>
        <h3>그 동안 "필터스페이스 인 서울" 매장을 이용해 주셔서 감사드리며,<br>추후 새로운 모습으로 다시 인사 드리겠습니다.<br>감사합니다.</h3>
      </div>
      <div class="modal-link">
        <a href="#">공지사항 바로가기</a>
      </div>
      <div class="modal-close">
        <button class="modal-close-btn">
          <span class="hide"></span>
        </button>
      </div>
    </div>
  </div>
  <!-- modal end -->

<script src="./script/filterspace.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>