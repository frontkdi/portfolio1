<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 | Dr.Jart+</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        <div class="title">
          <i class="fa fa-desktop"></i>
          <h1>로그인</h1>
        </div>
        <div class="content">
          <form name="log_in" id="logIn" method="post" action="./response.php">
            <ul>
              <li><input type="text" name="id" id="id" value="" placeholder="아이디를 입력해주세요"></li>
              <li><input type="password" name="pw" id="pw" value="" placeholder="비밀번호를 입력해주세요"></li>
              <li><span><a href="#" class="id-search-btn">아이디 찾기</a><i>|</i><a href="#" class="pw-search-btn">비밀번호 찾기</a></span></li>
              <li><button type="submit" class="login-btn">로그인</button></li>
              <li><a href="<?=$path3?>" class="sign-up-btn">회원가입</button></li>
            </ul>
          </form>
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

<script src="./script/shopping_basket.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>