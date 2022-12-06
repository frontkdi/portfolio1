<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ | 고객만족센터 | Dr.Jart+</title>
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
        <div class="contentWrapper">
          <div class="title">
            <h2>FAQ</h2>
          </div>
          <div class="content">
            <ul class="faq-tab-box">
              <li class="faq-tab tab1 on"><a href="#"><h3>회원가입/정보</h3></a></li>
              <li class="faq-tab tab2"><a href="#"><h3>상품문의</h3></a></li>
              <li class="faq-tab tab3"><a href="#"><h3>주문/결제</h3></a></li>
              <li class="faq-tab tab4"><a href="#"><h3>배송관련</h3></a></li>
              <li class="faq-tab tab5"><a href="#"><h3>취소/반품/교환/환불</h3></a></li>
              <li class="faq-tab tab6"><a href="#"><h3>쿠폰/적립금/GIFT</h3></a></li>
              <li class="faq-tab tab7"><a href="#"><h3>기타</h3></a></li>
            </ul>
            <div class="faq-list-box">
              <div class="total-box">
                <p class="total-number">총 12건</p>
                <div class="search-box">
                  <input type="text" name="search_text" id="searchText" placeholder="검색어를 입력하세요">
                  <button class="search-btn"></button>
                </div>
              </div>
              <ul class="list list1">
                <li class="question-btn1">
                  <a href="#">
                    <span class="q-title">회원가입</span>
                    <span class="question">기존 회원인데, 이메일 아이디로 변경해야 하나요?</span>
                  </a>
                  <div class="answer-box answer-box1">
                    <div class="gap">
                      <p>기존 고객님의 경우 이메일 아이디 변경 없이 기존 아이디로 로그인이 가능합니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn2">
                  <a href="#">
                    <span class="q-title">아이디/비밀번호</span>
                    <span class="question">이메일 주소가 바뀌었는데 아이디를 변경해야 하나요?</span>
                  </a>
                  <div class="answer-box answer-box2">
                    <div class="gap">
                      <p>회원가입 시 아이디로 등록한 이메일은 변경이 불가능합니다.</p>
                      <p>메일 주소가 변경되었다면 로그인 시에는 기존 회원가입시 등록한 이메일을 이용해 주시고, 정보수신을 위한 이메일은 마이페이지에서 변경하여 이용이 가능합니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn3">
                  <a href="#">
                    <span class="q-title">회원정보수정</span>
                    <span class="question">이메일 주소를 변경하고 싶어요.</span>
                  </a>
                  <div class="answer-box answer-box3">
                    <div class="gap">
                      <p>[마이페이지] - [정보관리] - [회원정보수정] 에서 이메일 주소를 변경하시면, 변경된 이메일로 정보를 받아 보실 수 있습니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn4">
                  <a href="#">
                    <span class="q-title">회원가입</span>
                    <span class="question">이메일 주소가 없는데, 회원가입이 가능한가요?</span>
                  </a>
                  <div class="answer-box answer-box4">
                    <div class="gap">
                      <p>2020년 11월 2일 이후, 닥터자르트 공식몰 신규 회원 가입 시 이메일 주소를 아이디로 등록하여 사용하고 있습니다.</p>
                      <p>기존 이용하고 계신 이메일 계정이 없으시다면, 계정 생성 후 이용을 부탁드립니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn5">
                  <a href="#">
                    <span class="q-title">회원가입</span>
                    <span class="question">회원가입에 나이 제한이 있나요?</span>
                  </a>
                  <div class="answer-box answer-box5">
                    <div class="gap">
                      <p>닥터자르트에서는 전자상거래법에 의거 만 14세 미만은 회원 가입을 제한하고 있습니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn6">
                  <a href="#">
                    <span class="q-title">회원가입</span>
                    <span class="question">회원가입은 어떻게 하나요?</span>
                  </a>
                  <div class="answer-box answer-box6">
                    <div class="gap">
                      <p>본인 명의의 휴대폰으로 본인인증 후 회원정보 입력을 통해 회원 가입이 가능합니다.</p>
                      <p>[로그인>회원가입]을 선택하여 회원 가입 절차에 따라 진행해주시면 됩니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn7">
                  <a href="#">
                    <span class="q-title">기타</span>
                    <span class="question">휴면회원에서 정상회원으로 전환하고 싶어요.</span>
                  </a>
                  <div class="answer-box answer-box7">
                    <div class="gap">
                      <p>휴면 회원에서 정상 회원으로 변경을 원하시는 경우, 회원님의 정보 인증 절차가 필요합니다.</p>
                      <p>공식몰에 아이디와 비밀번호로 로그인 후 아이핀 또는 본인 명의의 휴대폰 번호로 본인 인증을 진행해야 정상 회원으로 변경이 가능합니다.</p>
                      <p>아이핀을 사용하지 않거나, 본인 명의의 휴대폰 번호가 없을 시에는 정상 회원으로 전환이 어려울 수 있습니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn8">
                  <a href="#">
                    <span class="q-title">기타</span>
                    <span class="question">휴면회원으로는 언제 전환되는 건가요?</span>
                  </a>
                  <div class="answer-box answer-box8">
                    <div class="gap">
                      <p>닥터자르트는 정보통신망법에 의해 1년동안 공식몰에 접속 기록이 없을 경우, 회원님의 아이디는 휴면상태로 전환됩니다.</p>
                      <p>휴면으로 전환된 회원님의 개인정보는 안전한 공간에 분리하여 보관됩니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn9">
                  <a href="#">
                    <span class="q-title">회원정보수정</span>
                    <span class="question">회원탈퇴는 어떻게 하나요?</span>
                  </a>
                  <div class="answer-box answer-box9">
                    <div class="gap">
                      <p>회원 탈퇴는 로그인 후 직접 신청 가능하며 [마이페이지 > 정보관리 > 비밀번호 재확인] 입력 후</p>
                      <p>정보관리 화면 하단에 [회원 탈퇴 하기] 버튼 클릭하시면 됩니다.</p>
                      <p>회원 탈퇴시 추후 동일한 아이디는 사용하실 수 없습니다. </p>
                    </div>
                  </div>
                </li>
                <li class="question-btn10">
                  <a href="#">
                    <span class="q-title">아이디/비밀번호</span>
                    <span class="question">회원아이디는 변경할 수 없나요?</span>
                  </a>
                  <div class="answer-box answer-box10">
                    <div class="gap">
                      <p>가입하신 회원ID는 수정하실 수 없으며,</p>
                      <p>탈퇴 후 재가입 시에도 동일한 ID로 가입이 불가합니다.</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn11">
                  <a href="#">
                    <span class="q-title">회원가입</span>
                    <span class="question">회원가입을 해야만 상품구매가 가능한가요?</span>
                  </a>
                  <div class="answer-box answer-box11">
                    <div class="gap">
                      <p>닥터자르트 공식몰은 회원제로 운영되고 있습니다.</p>
                      <p>회원가입 시에만 상품 구매가 가능한 점 참고 부탁드립니다.</p>
                      <p>(2021년 8월 2일부터 비회원/SNS간편로그인 구매 불가)</p>
                    </div>
                  </div>
                </li>
                <li class="question-btn12">
                  <a href="#">
                    <span class="q-title">아이디/비밀번호</span>
                    <span class="question">아이디와 비밀번호를 분실했는데요?</span>
                  </a>
                  <div class="answer-box answer-box12">
                    <div class="gap">
                      <p>[회원 ID를 분실하신 경우]</p>
                      <p>로그인 화면 하단 '아이디찾기'를 통해 본인인증(휴대폰/아이핀 인증) 하시면</p>
                      <p>'아이디 찾기 결과' 팝업을 통해 확인하실 수 있습니다. </p>
                      <p><br></p>
                      <p>[비밀번호를 분실하신 경우]</p>
                      <p>로그인 화면 하단 '비밀번호찾기'를 통해 아이디입력 후</p>
                      <p>본인인증 (휴대폰/아이핀 인증)을 완료 하시면</p>
                      <p>'비밀번호 찾기 결과' 팝업창에서 새로운 비밀번호를 설정하실 수 있습니다.</p>
                      <p><br></p>
                      <p>추가적인 도움이 필요하실 경우, 고객만족센터(1544-5453)로 연락 주시면 자세히 안내해드리겠습니다.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
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

<script src="./script/faq.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>