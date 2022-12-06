<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입 | Dr.Jart+</title>
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
          <i class="fa fa-address-card"></i>
          <h1>회원가입</h1>
        </div>
        <div class="content">
          <form autocomplete="off" id="signUp" name="sign_up" method="post" action="./response.php">
            <ul>
              <li>
                <span>필수입력사항<i>*</i></span>
              </li>
              <li>
                <div class="left"><label for="email">이메일<i>*</i></label></div>
                <div class="right email">
                  <input type="email" id="email" name="email" placeHolder="예: username@network.co.kr">
                  <button type="button" class="email-ok-btn">중복확인</button>
                  <p class="guid-text guid-text1">이메일을 입력해 주세요.</p>
                  <p class="guid-text guid-text2">이메일 형식으로 입력해 주세요.</p>
                </div>
              </li>
              <li>
                <div class="left"><label for="pw">비밀번호<i>*</i></label></div>
                <div class="right pw">
                  <input maxlength="16" type="password" id="pw" name="pw" placeHolder="비밀번호를 입력해주세요">
                  <p class="guid-text guid-text1">최소 10자 이상 입력</p>
                  <p class="guid-text guid-text2">영문/숫자/특수문자(공백 제외)만 허용하며, 2개 이상 조합</p>
                  <p class="guid-text guid-text3">동일한 숫자 3개 이상 연속 사용 불가</p>
                </div>
              </li>
              <li>
                <div class="left"><label for="pw2">비밀번호확인<i>*</i></label></div>
                <div class="right pw2">
                  <input type="password" id="pw2" name="pw2" placeHolder="비밀번호를 한번더 입력해주세요">
                  <p class="guid-text guid-text1">비밀번호를 한번 더 입력해 주세요.</p>
                  <p class="guid-text guid-text2">동일한 비밀번호를 입력해 주세요.</p>
                </div>
              </li>
              <li>
                <div class="left"><label for="name">이름<i>*</i></label></div>
                <div class="right name">
                  <input type="text" id="name" name="name" placeHolder="이름을 입력해주세요">
                  <p class="guid-text guid-text1">이름을 입력해 주세요.</p>
                </div>
              </li>
              <li>
                <div class="left"><label for="hp">휴대폰<i>*</i></label></div>
                <div class="right hp">
                  <input maxlength="11" type="text" id="hp" name="hp" placeHolder="숫자만 입력해주세요">
                  <button type="button" class="hp-btn" disabled>인증번호 받기</button>
                  <button type="button" class="hp2-btn">다른번호 인증</button>
                  <p class="guid-text guid-text1">휴대폰 번호를 입력해 주세요.</p>
                  <p class="guid-text guid-text2">휴대폰 번호 형식으로 입력해 주세요.</p>
                </div>
              </li>
              <li class="hp-ok-box">
                <div class="left"><label for="hp" class="hide">휴대폰 인증번호 확인</label></div>
                <div class="right hp-ok">
                  <input maxlength="6" type="text" id="hpOk" name="hpOk" placeHolder="인증번호를 입력해주세요">
                  <span class="hp-ok-time"><em class="minutes">02</em>:<em class="seconds">59</em></span>
                  <button type="button" class="hp-ok-btn" disabled>인증번호 확인</button>
                  <p class="guid-text guid-text1">                                    
                      인증번호가 오지 않는다면, 통신사 스팸 차단 서비스 혹은 휴대폰 번호 차단 여부를 확인해주세요.
                  </p>
                </div>
              </li>
              <li>
                <div class="left"><label for="">생년월일</label></div>
                <div class="right birth-day">
                  <ul>
                    <li><input type="text" maxLength="4" id="year" name="year" placeHolder="YYYY"></li>
                    <li><i>/</i></li>
                    <li><input type="text" maxLength="2" id="month" name="month" placeHolder="MM"></li>
                    <li><i>/</i></li>
                    <li><input type="text" maxLength="2" id="date" name="date" placeHolder="DD"></li>
                  </ul>
                  <p></p>
                </div>
              </li>
              <li class="hr">
              <hr>
              </li>
              <li>
                <div class="left"><label for="addr2">이용약관동의<i>*</i></label></div>
                <div class="right service">
                  <ul>
                    <li>
                      <label><input type="checkbox" id="chkAll" name="chk_all" value="전체동의합니다.">전체동의합니다</label>
                      <p>선택항목에 동의하지 않은 경우도 회원가입 및 일반적인 서비스를 이용할 수 있습니다.</p>
                    </li>
                    <li>
                      <label class="after"><input type="checkbox" id="chk1" name="chk1" class="check-service" value="이용약관 동의(필수)">이용약관 동의</label><em>(필수)</em>
                      <span class="more-view">약관보기 ></span>
                    </li>
                    <li>
                      <label class="after"><input type="checkbox" id="chk2" name="chk2" class="check-service" value="개인정보 수집∙이용 동의(필수)">개인정보 수집∙이용 동의</label><em>(필수)</em>
                      <span class="more-view">약관보기 ></span>
                    </li>
                    <li>
                      <label class="after"><input type="checkbox" id="chk3" name="chk3" class="check-service" value="개인정보 수집∙이용 동의(선택)">개인정보 수집∙이용 동의</label><em>(선택)</em>
                      <span class="more-view">약관보기 ></span>
                    </li>
                    <li>
                      <label class="after"><input type="checkbox" id="chk4" name="chk4" class="check-service sns-check-all" value="무료배송, 할인쿠폰 등 혜택/정보 수신 동의(선택)">무료배송, 할인쿠폰 등 혜택/정보 수신 동의</label><em>(선택)</em>
                    </li>
                    <li>
                      <label><input type="checkbox" id="chk5" name="chk5" class="check-service sns-check" value="SNS">SNS</label>                                        
                      <label><input type="checkbox" id="chk6" name="chk6" class="check-service sns-check" value="이메일">이메일</label>                                        
                    </li>
                    <li>
                      <p>새로운 신제품, 이벤트 등 마케팅 목적의 최신 정보를 받아보시고 싶다면,<br> 수신 채널을 선택해 주세요.</p>
                    </li>
                    <li> 
                      <label class="after"><input type="checkbox" id="chk7" name="chk7" class="check-service" value="본인은 만 14세 이상입니다(필수)">본인은 만 14세 이상입니다.</label><em>(필수)</em>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
            <div class="submit">
              <button type="submit" class="submit-btn">가입하기</button>
            </div>
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

    <!-- ++ modal ++ -->
    <div class="member-modal">
      <div class="wrap">
        <div class="container">
          <div class="content">
            <p class="modal-message"></p>
          </div>
          <div class="button-box">
            <button class="member-modal-close-btn">확인</button>
          </div>
        </div> 
      </div>    
    </div>
    <!-- modal end -->
  </div>
  <!-- wrap end -->

<script src="./script/sign_up.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>