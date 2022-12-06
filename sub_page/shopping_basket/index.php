<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>장바구니 | Dr.Jart+</title>
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
          <div class="row1">
            <ul>
              <li class="on">01 장바구니</li>
              <li>02 결제진행</li>
              <li>03 주문완료</li>
            </ul>
          </div>
          <div class="row2">
            <div class="img-box">
              <img src="./images/ico_cart.gif" alt="">
            </div>
            <h1>장바구니</h1>
          </div>  
        </div>
        <div class="content">
          <div class="shopping-basket-box">
            <div class="product-box">
              <i class="fas fa-shopping-cart"></i>
              <h2>장바구니에 담긴 상품이 없습니다.</h2>
            </div>
            <div class="shop-btn-box">
              <button class="shop-btn">쇼핑 계속하기</button>
            </div>
            <div class="ok-list-box">
              <h3>꼭 확인해주세요!</h3>
              <p>- 장바구니에 담긴 상품은 최대 30일 동안 보관되며 이후에는 삭제됩니다.</p>
              <p>- 장바구니에 담긴 상품 중 품절, 단종으로 판매 상태 변경 시 장바구니에서 비활성화 처리되며, 구매가 불가합니다.</p>
            </div>
          </div>
          <div class="order-box">
            <ul>
              <li>총 상품 금액<span>0원</span></li>
              <li>총 할인 금액<span>0원</span></li>
              <li>예상 결제 금액<span>0원</span></li>
              <li>
                <button>선택상품 주문하기</button>
              </li>
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

<script src="./script/shopping_basket.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>