<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>고객만족센터 | Dr.Jart+</title>
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
              <a href="<?=$path3?>">
                <h2>고객만족센터</h2>
              </a>
            </div>
            <div class="rightMenu">
              <ul class="topNav-box">
                <li class="topNav-FAQ">
                  <a href="<?=$path4?>FAQ">FAQ</a>
                </li>
                <li class="topNav-inquiry">
                  <a href="<?=$path4?>Inquiry">1:1 문의</a>
                </li>
                <li class="topNav-notice">
                  <a href="<?=$path4?>Notice">공지사항</a>
                </li>
                <li class="topNav-guide">
                  <a href="<?=$path4?>Guide">매장 안내</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <section id="section1">
          <div class="title">
            <h2>고객만족센터</h2>
          </div>
          <ul class="cs-box">
            <li>
              <a href="#">
                <h3>FAQ</h3>
                <p>자주 묻는 질문을<br>FAQ에서 검색하세요.</p>
              </a>
            </li>
            <li>
              <a href="#">
                <h3>1:1 문의</h3>
                <p>닥터자르트 사이트 이용과<br>피부고민까지 상담해드립니다.</p>
              </a>
            </li>
            <li>
              <a href="#">
                <h3>매장 안내</h3>
                <p>쉽고 빠른 검색으로 닥터자르트<br>매장을 찾아보실 수 있습니다.</p>
              </a>
            </li>
          </ul>
          <div class="contentBox">
            <div class="left">
              <div class="board-head">
                <h2>공지사항</h2>
                <a href="#">전체보기</a>
              </div>
              <div class="board-list">
                <ul>
                  <li>
                    <a href="#">10월 연휴 배송일정 안내</a>
                    <span>2022-09-28 09:22</span>
                  </li>
                  <li>
                    <a href="#">9월 14일 서버 점검 안내</a>
                    <span>2022-09-13 15:45</span>
                  </li>
                  <li>
                    <a href="#">9월 연휴 배송안내</a>
                    <span>2022-09-05 11:27</span>
                  </li>
                  <li>
                    <a href="#">태풍으로 인한 배송 지연 안내</a>
                    <span>2022-09-02 12:56</span>
                  </li>
                  <li>
                    <a href="#">기간한정(8/23-8/31) 1일 1회 출고 운영 안내</a>
                    <span>2022-08-22 15:19</span>
                  </li>
                  <li>
                    <a href="#">Dr. Jart ‘필터스페이스 인 서울’ 매장 운영 종료 및 포인트 소멸 안내</a>
                    <span>2022-07-01 15:09</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="right">
              <h3>닥터자르트 실시간 1:1 메신저 상담</h3>
              <p>상담시간  오전 09:00 ~ 오후 06:00(주말/공휴일은 휴무)<br>점심시간  오후 12:50 ~ 오후 02:00</p>
              <div class="chat">
                <a href="#" id="webtalk" title="웹채팅"></a>
                <a href="#" id="kakaotalk" title="카카오톡"></a>
                <a href="#" id="navertalk" title="네이버톡톡"></a>
              </div>
              <p>고객만족센터: 1544-5453<br>* 운영시간에 상담이 몰릴 경우 답변이 조금 늦어질 수 있습니다.<br>고객님의 양해 부탁드립니다.</p>
            </div>
          </div>
        </section>
        <section id="section2">
          <div class="content">
            <ul>
              <li class="col-title">
                <div class="title-box">
                  <h2>FAQ Top 10</h2>
                  <p>고객분들이 가장 많이 찾는 문의입니다.</p>
                  <span></span>
                </div>
                <a href="#" class="all-btn">전체보기</a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>회원가입</h4>
                  <p>회원가입을 해야만 상품구매가 가능한가요?</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>아이디/비밀번호</h4>
                  <p>아이디와 비밀번호를 분실했는데요?</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>상품문의</h4>
                  <p>남 여 구분 없이 모든 제품이 사용가능 한가요?</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>주문/결제</h4>
                  <p>주문한 내용과 결제여부를 확인하고 싶어요.</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>주문/결제</h4>
                  <p>적립금으로 결제가 되나요?</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>주문/결제</h4>
                  <p>카드취소 했는데 대금청구서에 포함 되어있어요.</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>주문/입금</h4>
                  <p>가상계좌(무통장입금)시 주문자와 입금자명이 다를 경우에는 어떻게 하나요?</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>주문/입금</h4>
                  <p>무통장입금을 할 수 있는 은행과 계좌번호를 알려주세요.</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>주문/결제</h4>
                  <p>주문결제는 어떤 방법이 있나요?</p>
                </a>
              </li>
              <li>
                <a href="#" class="col-box">
                  <h4>배송관련</h4>
                  <p>어떤 택배사를 이용해 배송되나요?</p>
                </a>
              </li>
            </ul>
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

<script src="./script/customer.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>