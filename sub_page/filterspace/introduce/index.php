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
        <section id="section1">
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
          <div class="section-text">
            <h1>Filterspace in Seoul</h1>
            <p>서울 신사동 가로수길에 오픈한 필터스페이스는 근원적으로 건강한 피부를 위한<br>가장 중요한 요소인 정제된 물, 공기, 빛을 테마로 설계된 공간입니다.</p>
            <p>닥터자르트의 피부 고민별 제품을 가장 다양하고 빠르게<br>만나볼 수 있으며, 다양한 프로젝트가 진행됩니다.</p>
          </div>
        </section>
        <section id="section2">
          <div class="sec2-text">
            <div class="sec2-title"></div>
            <p>
              필터스페이스는 건강한 피부를 위해 고성능의 온·습도 조절 시스템을 적용하여<br>
              건물 자체가 하나의 거대한 필터로서의 역할을 합니다.<br>
              또한 동시대의 이슈, 문화와 예술을 닥터자르트의 시선으로 걸러내어<br>
              닥터자르트만의 스타일과 언어로 소개한다는 의미도 담고 있습니다.
            </p>
          </div>
          <span class="bg1"></span>
          <span class="bg2"></span>
          <span class="bg3"></span>
          <span class="bg4"></span>
        </section>
        <section id="section3">
          <div class="section-bg"></div>
          <div class="content content1">
            <div class="con-title">
              <h2>1F<span></span>Water</h2>
            </div>
            <div class="con-img con-img1"></div>
            <div class="con-text">
              <span class="img-box img-box1"></span>
              <p>신체의 가장 많은 부분을 차지하는 요소인 '물’ 을 과학적으로 정제하여<br>제공하는 공간을 만나게 됩니다.</p>
            </div>
          </div>
          <div class="content content2">
            <div class="con-title">
              <h2>2F<span></span>Air</h2>
            </div>
            <div class="con-img con-img2"></div>
            <div class="con-text">
              <span class="img-box img-box2"></span>
              <p>쾌적한 공기가 흐르는 스토어 공간에서<br>닥터자르트의 전 제품을 솔루션과 함께 체험해 볼 수 있습니다.</p>
            </div>
          </div>
          <div class="content content3">
            <div class="con-title">
              <h2>3F<span></span>Light</h2>
            </div>
            <div class="con-img con-img3"></div>
            <div class="con-text">
              <span class="img-box img-box3"></span>
              <p>긴 환풍구를 연상시키는 계단을 오르면 높은 층고에<br>환한 빛이 가득한 공간이 나타납니다.</p>
            </div>
          </div>
        </section>
        <section id="section4">
          <div class="section-bg"></div>
          <div class="content content1">
            <div class="con-box con-box1">
              <div class="con-bg"></div>
              <div class="con-title">
                <h2>Life Recipe</h2>
              </div>
              <span></span>
              <p>필터스페이스에서는<br>나에게 적합한 제품과 함께 운동, 문화정보 등<br>'라이프레시피'가 있습니다.<br><br>새로운 프로젝트가 오픈할 때마다<br>새로운 라이프레시피를 제공합니다.</p>
            </div>
          </div>
          <div class="content content2">
            <div class="con-box con-box2">
              <div class="bg"></div>
              <p>Filterspace 1F</p>
            </div>
          </div>
        </section>
        <section id="section5">
          <div class="content content1">
            <div class="con-box con-box1">
              <div class="bg"></div>
              <p>Filterspace 3F</p>
            </div>
          </div>
          <div class="content content2">
            <div class="con-box con-box2">
              <div class="bg"></div>
              <div class="text-box">
                <div class="title">
                  <h2>Dr.Jart+ Studio</h2>
                </div>
                <span></span>
                <p class="bros">
                  3층에 오픈한 닥터자르트 스튜디오는<br>
                  천장 전체가 조명으로 이루어져,<br>
                  컬러의 변화에 따라 끊임없이 변화하는<br>
                  공간입니다.<br><br>
                  자르트TV 컨텐츠, 온라인 라이브 커머스,<br>
                  소규모 이벤트 공간으로 운영됩니다.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="section6">
          <div class="content">
            <div class="sec-title">
              <h2>VISIT</h2>
            </div>
            <div class="bg"></div>
            <div class="con-title">
              <h3>Filterspace</h3>
            </div>
            <p><span></span>위치 : 서울특별시 강남구 도산대로11길 46</p>
            <p><span></span>운영시간 : 11:00 – 20:00</p>
            <div class="map">
              <a href="#">지도 자세히 보기</a>
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

<script src="./script/filterspace.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>