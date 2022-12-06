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
              <a href="<?=$path3?>ceramidin">
                <h2>스토리</h2>
              </a>
            </div>
            <div class="rightMenu">
              <ul class="topNav-box">
                <li class="topNav-prdStory">
                  <a href="<?=$path3?>ceramidin" class="nav-btn">제품 스토리</a>
                  <div class="sub-menu-box">
                    <ul class="sub-menu-list">
                      <li><a href="<?=$path3?>ceramidin">세라마이딘</a></li>
                      <li><a href="<?=$path3?>cicapair">시카페어</a></li>
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
                      <li><a href="<?=$path3?>instagram">인스타그램</a></li>
                      <li><a href="<?=$path3?>youtube">유튜브</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="contentWrapper">
          <div class="title">
            <h2>소셜채널</h2>
          </div>
          <div class="tabMenu">
            <ul>
              <li class="tab on"><a href="<?=$path3?>instagram">인스타그램</a></li>
              <li class="tab"><a href="<?=$path3?>youtube">유튜브</a></li>
            </ul>
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

<script src="./script/youtube.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>