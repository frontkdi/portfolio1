(function($){

  const SignUp = {
    회원 : {
      가입회원: [],
      이메일: '',
      이메일중복확인: false,
      비밀번호:'',
      비밀번호확인: '',
      이름: '',
      휴대폰: '', 
      휴대폰인증확인: false,
      휴대폰인증번호: '', 
      setId: 0,
      성별: '', 
      생년: '', 
      생월: '', 
      생일: '',  
      이용약관:[],
      가입완료: false
    },
    init(){
      this.dataBaseFn();
      this.emailFn();
      this.pwFn();
      this.nameFn();
      this.hpFn();
      this.birthFn();
      this.serviceFn();
      this.submitFn();
    },
    dataBaseFn(){

      let that = this;

      // 데이터베이스 가져오기 : 회원 데이터 가져오기 
      $.ajax({
        url:'./member_select.php',
        type:'GET',
        success: function(res){
          console.log( JSON.parse( res ) );
          that.회원.가입회원 = JSON.parse( res ); // 데이터베이스 데이터 저장
        },
        error: function(err){
          console.log( `AJAX 회원 정보가져오기 실패  ${err}` );
        }
      });
    
    },
    emailFn(){ // 이메일 

      const that = this;

      $('#email').on({
        keyup(){

          const regExp = /^([A-Z0-9]+[^\s]*)+([._\-]?[A-Z0-9]*)@([A-Z0-9]+[^\s]*)+([._\-]?[A-Z0-9]*).[A-Z]{2,3}$/gi;
          let emailVal = $('#email').val();

          // 매치함수를 이용 테스트 접검
          // console.log( emailVal.match(regExp) );

          if( emailVal === '' ){
            $('.email .guid-text').removeClass('on');
            $('.email .guid-text1').addClass('on');
          }
          else{
            $('.email .guid-text').removeClass('on');      
            if( regExp.test(emailVal)===false ){
              $('.email .guid-text').removeClass('on');
              $('.email .guid-text2').addClass('on');
            }
            else{
              $('.email .guid-text').removeClass('on');   
              that.회원.이메일 =  $(this).val();                        
            }            
          }

        }
      })

      // 이메일 중복확인 버튼 이벤트
      $('.email-ok-btn').on({
        click(){

          const regExp = /^([A-Z0-9]+[^\s]*)+([._\-]?[A-Z0-9]*)@([A-Z0-9]+[^\s]*)+([._\-]?[A-Z0-9]*).[A-Z]{2,3}$/gi;
          let emailVal = $('#email').val();

          if( emailVal==='' ){
            $('.member-modal').fadeIn(300);
            $('.modal-message').html(`이메일을 입력하세요.`);
          }
          else{
            if( regExp.test(emailVal)===false ){
              $('.member-modal').fadeIn(300);
              $('.modal-message').html(`이메일 형식으로 입력하세요.`);
            }
            else{
              $('.member-modal').fadeOut(300);                     
              that.회원.이메일 =  $('#email').val();                      
              // 이메일 중복 체크 메서드 호출
              that.emailCheckOk();
            }            
          }

        }
      })

    },
    pwFn(){ // 비밀번호

      const that = this;

      $('#pw').on({
          keyup(){

            const regExp1 = /.{10,}/g;
            const regExp2 = /((?=.*[A-Z])+(?=.*[0-9])+)+|((?=.*[A-Z])+(?=.*[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<])+)+|((?=.*[0-9])+(?=.*[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<])+)+/gi;
            const regExp3 = /\s/g;
            const regExp4 = /(.)\1\1/g;  // 동일한 글자 연속3번 사용 불가

            let pwVal = $('#pw').val();
            if( pwVal==='' ){
              $('.pw .guid-text').removeClass('on');
            }
            else{
              if( regExp1.test(pwVal)===false ){ // 10자 이상 체크
                $('.pw .guid-text').removeClass('on');
                $('.pw .guid-text1').addClass('on');
              }
              else if( regExp2.test(pwVal)===false || regExp3.test(pwVal)===true ){  // 조합, 공백문자 조건
                $('.pw .guid-text').removeClass('on');
                $('.pw .guid-text2').addClass('on');
              }                                         
              else if( regExp4.test(pwVal)===true ){  // 연속 3자 이상 조건
                $('.pw .guid-text').removeClass('on');
                $('.pw .guid-text3').addClass('on');
              }
              else {
                $('.pw .guid-text').removeClass('on');
                that.회원.비밀번호 =  $(this).val();
              }
            }
        }
      });


      // 비밀번호 확인 : 비밀번호 입력과 현재 비밀번호 확인 내용과 비교 
      // 1. 빈값이면 :  비밀번호를 한번 더 입력해 주세요 메시지 오류
      // 2. 두 값을 동일여부 비교 : 동일한 비밀번호를 입력해 주세요.
      $('#pw2').on({
        keyup: function(){
          let pw2Val = $('#pw2').val();
          let pw1Val = $('#pw').val();

          if( pw2Val==='' ){ // 입력값이 공백이면
            $('.pw2 .guid-text').removeClass('on');
            $('.pw2 .guid-text1').addClass('on');
          }
          else{ // 입력값이 공백이 아니면
            $('.pw2 .guid-text').removeClass('on');
            if( pw2Val !== pw1Val ){ // 동일한 비밀번호가 아니면                    
              $('.pw2 .guid-text2').addClass('on');
            }
            else {
              $('.pw2 .guid-text2').removeClass('on');  
              that.회원.비밀번호확인 =  $(this).val();                         
            }
          }
        }
      })

    },
    nameFn(){ // 이름

      const that = this;

      $('#name').on({
        keyup(){

          const regExp = /[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<]/g;
          let nameVal = $('#name').val();

          $('#name').val( nameVal.replace(regExp, '') );
          
          if( nameVal==='' ){
            $('.name .guid-text').removeClass('on');
            $('.name .guid-text1').addClass('on');
          }
          else{
            $('.name .guid-text').removeClass('on');
            that.회원.이름 =  $(this).val();                                         
          }
        }
      });

    },
    hpFn(){ // 휴대폰

      let num = null;
      let m = 2;     // 분 - 2분
      let s = 59;    // 초 - 0 ~ 59 => 60초
      const that = this;
    
      $('#hp').on({
        keyup: function(){

            const regExp = /[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<]/g;
            let hpVal = $('#hp').val();

            // 특수문자는 삭제
            $('#hp').val( hpVal.replace(regExp,'') );
            hpVal = $('#hp').val();

            // 10자 이상이면 인증번호 확인 버튼 활성화
            if( hpVal.length>=10 ){
              $('.hp-btn').show()
                          .addClass('on')
                          .attr('disabled', false); // 버튼 사용가능
              $('.hp2-btn').hide();
              
              $('#hpOk').val('')
                        .focus();
          }
          else{
              $('.hp-btn').removeClass('on');
          }

          if( hpVal==='' ){
              $('.hp .guid-text').removeClass('on');
              $('.hp .guid-text1').addClass('on');
          }
          else{
              $('.hp .guid-text').removeClass('on');
              that.회원.휴대폰 =  $(this).val();
          }

        }
      })


      // 휴대폰 '인증번호 받기' 버튼 클릭 이벤트 / 정규표현식 검증
      $('.hp-btn').on({
        click: function(e){

          e.preventDefault();  
          const regExp = /^01[0|1|6|7|8|9]+[0-9]{3,4}[0-9]{4}$/g;  // 휴대폰 010, 011, 016, 017, 018, 019
          let hpVal = $('#hp').val(); // 입력값

          if( regExp.test(hpVal) === false ){
            $('.hp .guid-text').removeClass('on');
            $('.hp .guid-text2').addClass('on');
          }
          else{
            $('.hp .guid-text').removeClass('on');
            num = Math.floor( Math.random()*900000+100000 ); // 임의번호
            
            that.회원.휴대폰인증번호 = num; // 인증번호를 잠시 보관할 변수에 저장

            $('.member-modal').fadeIn(300);
            $('.modal-message').html(`인증번호가 발송되었습니다.<br>${num}`);

            // 인증번호확인 박스 보이기
            $('.hp-ok-box').css({display:'flex'});
            
            // 3분 카운트 함수 호출 실행
            timerCount();
          }
        }
      })

      // 3분 카운트 프로그래밍 함수
      function timerCount(){
        m = 2; //분 2
        s = 59; //초(0~59 => 60초)
        that.회원.setId = setInterval(function(){
          s--;
          // console.log( that.회원.setId );               
          if(s<0){ // 60초 경과하면 1분 감소
              s=59;
              m--;
              if(m<0){
                s=0;
                m=0;
                clearInterval(that.회원.setId);
                $('.member-modal').fadeIn(300);
                $('.modal-message').html("유효 시간이 만료되었습니다.<br>다시 시도해 주세요.");
                return;
              }
          }
          $('.minutes').text( `${ m < 10 ? '0'+m : m }` );
          $('.seconds').text( `${ s < 10 ? '0'+s : s }` );
        }, 1000);
      }

      // 멤버 모달 닫기
      $('.member-modal-close-btn').on({
        click: function(){              
          $('.member-modal').fadeOut(300);
          // 모달창 닫고 인트로 페이지로 이동
          if( that.회원.가입완료 === true ){
            location.href = path;  // php 전달해준 루트 위치의 변수 
          }
        }
      })
      

      // 인증번호 입력 이벤트
      // 숫자가 1글자 이상  입력되면(빈값이 아니면) 우측버튼 활성화
      // 입력상자는 숫자를 제외한 모든건 삭제 /[^\d]/g  /[^0-9]/g
      $('#hpOk').on({
        keyup: function(){

          const regExp = /[^0-9]/;
          let hpOkVal = $('#hpOk').val();
          
          $('#hpOk').val( hpOkVal.replace(regExp, '') );

          if( hpOkVal.length > 1 ){
            $('.hp-ok-btn').addClass('on');
            $('.hp-ok-btn').attr('disabled', false);
          }
          else{
            $('.hp-ok-btn').removeClass('on');
            $('.hp-ok-btn').attr('disabled', true);
          }
        }
      });

      // 인증번호 확인 버튼 클릭 이벤트
      $('.hp-ok-btn').on({
        click: function(e){
          e.preventDefault();

          // 휴대폰 인증 체크 메서드 호출 실행
          that.hpCheckOk();

        }
      });

      // 다른번호 인증
      $('.hp2-btn').on({
        click: function(e){
          e.preventDefault();
          $('#hp').attr('disabled', false)
                  .val('')                 // 입력상자 내용 삭제
                  .focus();                // 입력대기 상태
          $('.hp .guid-text1').addClass('on');  // 안내 테스트 출력
        }
      });


    },
    birthFn(){  // 생년월일

      const that = this;
      const regExpUnNum   = /[^0-9]/g;
      const regExpYear  = /^(?:19(?:2[2-9]|[3-9][0-9])|2[0-9][0-9][0-9])$/g;
      const regExpMonth = /^(?:0?[1-9]|1[0-2])$/g;       
      const regExpDate  = /(?:0?[1-9]|1[0-9]|2[0-9]|3[0-1])/g;

      // 1. 년도
      const nowYear = new Date().getFullYear();

      $('#year').on({
        keyup: function(){
          $(this).val( $(this).val().replace(regExpUnNum,'') );
          
          if($(this).val()===''){
            $('.birth-day p').removeClass('on');
          }                    
          else if( Number($(this).val()) > nowYear ){ //미래년도 2023 ~
            $('.birth-day p').addClass('on')
                              .text('생년월일이 미래로 입력 되었습니다.');
          } 
          else if( Number($(this).val()) >= nowYear-14 ){ //14미만   20022 ~ 2008
            $('.birth-day p').addClass('on')
                              .text('만 14세 미만은 가입이 불가합니다.');
          }                    
          else{
            if( regExpYear.test( $(this).val().toString() ) === false ){
              $('.birth-day p').addClass('on')
                                .text('생년월일을 다시 확인해주세요.');
            }               
            else{
              $('.birth-day p').text('태어난 월을 정확하게 입력해주세요.');
            }  
          } 
        }
      })

      //2. 생월
      $('#month').on({
        keyup: function(){
          $('#month').val( $('#month').val().replace(regExpUnNum,'') );
          if( $('#year').val() ==='' ){ //년도가 비어있으면 
              $('.birth-day p').addClass('on')
                              .text('태어난 년도 4자리를 정확하게 입력해주세요.');
          }
          else{
            if( $('#month').val()==='' ){
              $('.birth-day p').addClass('on')
                                .text('태어난 월을 정확하게 입력해주세요.');
            }
            else{
              if( regExpMonth.test($('#month').val().toString()) === false ){
                $('.birth-day p').addClass('on')
                                .text('태어난 월을 정확하게 입력해주세요.');
              }
              else{
                $('.birth-day p').addClass('on')
                                .text('태어난 일을 정확하게 입력해주세요.');
              }
            }
          }
        }
      })

      //3. 생일 이벤트
      $('#date').on({
        keyup: function(){
          $('#date').val( $('#date').val().replace(regExpUnNum,'') );

          if($('#year').val()===''){ //윌이 비어있으면 
            $('.birth-day p').addClass('on')
                            .text('태어난 년도 4자리를 정확하게 입력해주세요.');
          }
          else if($('#month').val()===''){ //윌이 비어있으면 
            $('.birth-day p').addClass('on')
                            .text('태어난 월을 정확하게 입력해주세요.');
          }
          else{
            if( $('#date').val()==='' ){
              $('.birth-day p').addClass('on')
                                .text('태어난 일을 정확하게 입력해주세요.');
            }
            else{
              
              if( regExpDate.test( $('#date').val().toString() ) === false ){
                $('.birth-day p').addClass('on')
                                .text('태어난 일을 정확하게 입력해주세요.');
              }
              else{
                if( Number($('#date').val()) > 31 ){
                  $('.birth-day p').addClass('on')
                                    .text('태어난 일을 정확하게 입력해주세요.');
                }  
                else{
                  $('.birth-day p').removeClass('on');
                  that.회원.생년 = $('#year').val();
                  that.회원.생월 = $('#month').val();
                  that.회원.생일 = $('#date').val();                        
                } 
              }
            }
          }
        }
      })

    },
    serviceFn(){ //이용약관동의

      const that = this;
      let cnt = 0;
      let arr = [];

      // 모든 체크박스 체크 확인 카운트 함수
      function checkedFn(){
        cnt = 0;
        $('.check-service').each(function(idx, item){
          if( $(this).is(':checked')===true ){
            cnt++;
          }
        });

        // 체크 항목이 7개면 '전체동의합니다' 자동으로 체크
        if(cnt===7){
          $('#chkAll').prop('checked', true);
        }
        else{
          $('#chkAll').prop('checked', false);
        }
      }

      // 한개 한개의 항목 체크
      $('.check-service').each(function(idx, item){
        $(this).on({
          change: function(){
            checkStateFn();
            checkedFn(); //체크된 갯수를 카운트 7개이면 전체크박스 체크한다.
          }
        });
      });


      // 체크된 항목의 갯수를 카운트하는 함수
      function checkStateFn(){

        $('.check-service').each(function(idx, item){
          if( $(this).is(':checked')===true ){
            // 체크한 항목 값 value 배열에 추가하기 : ... - 전개연산자 이용
            arr = [...that.회원.이용약관, item.value];
          }
          else{
            arr = arr.filter((val)=> val !== item.value);  // 취소된 항목 값은 배열에서 제외되고 재배열 저장
          }
        });
        // 제거하면서 이전에 들어있는 데이터에 현재 체크된 데이터가 추가되기에 중복된 배열값이 누적된다. 그래서 중복된 데이터 제거한다. [...new Set(배열)]
        arr = [...new Set(arr)];
        that.회원.이용약관 = arr;  // 최종 정리된 배열 데이터 저장
      }

      let 이용약관전체동의 = [
        '이용약관 동의(필수)',
        '개인정보 수집∙이용 동의(필수)',
        '개인정보 수집∙이용 동의(선택)',
        '무료배송, 할인쿠폰 등 혜택/정보 수신 동의(선택)',
        'SNS',
        '이메일',
        '본인은 만 14세 이상입니다'
      ]

      // 전체 동의 합니다. 체크박스 이벤트
      $('#chkAll').on({
        change: function(){
          // 모두 7개 항목을 체크해준다.
          // 전체 동의가 체크되면 모두 체크한다.
          // 전체 동의가 체크해제되면 모두 체크해제한다.
          
          //비구조화 = 구조 분할 할당 => 이 아래에서는 반드시 구조분할할당 한 변수만 사용해야한다.
          let {이용약관} = that.회원;  

          if( $(this).is(':checked')===true ){
              $('.check-service').prop('checked', true);  
              // that.회원.이용약관 = [...that.회원.이용약관, 이용약관전체동의]; 
              이용약관 = [...이용약관, 이용약관전체동의]; 
          }
          else{
              $('.check-service').prop('checked', false);
              // that.회원.이용약관 = [];   //빈배열을 넣으면 배열이 삭제된다.
              이용약관 = [];   //빈배열을 넣으면 배열이 삭제된다.
          }
          
        }
      });

      // 정보수신동의 sns 체크박스 이벤트
      // 1. 2개를 체크하는 함수
      // 2. sns-check 체크박스 체인지 이벤트 : 2개를 체크하는 함수 호출 실행
      // 3. sns-check-all 체인지 이벤트 : 체크하면 2개 모두 체크 아닌 2개 모두 해제
      function snsCheckStateFn(){
        let scnt = 0;
        $('.sns-check').each(function(){
          if( $(this).is(':checked')===true ){
            scnt++;
          }
        });
        if(scnt===2){
          $('.sns-check-all').prop('checked', true);
        }
        else{
          $('.sns-check-all').prop('checked', false);
        }
      }

      $('.sns-check').each(function(){
        $(this).on({
          change: function(){
            snsCheckStateFn();
            checkedFn(); //체크된 갯수를 카운트 7개이면 전체크박스 체크한다.
          }
        })
      });

      $('.sns-check-all').on({
        change: function(){
          if( $(this).is(':checked')===true ){
            $('.sns-check').prop('checked', true);
          }
          else{
            $('.sns-check').prop('checked', false);
          }
          checkedFn(); // 체크된 갯수를 카운트 7개이면 전체크박스 체크한다.
        }
      })
    },
    // 이메일 중복확인
    emailCheckOk(){

      let that = this;
      let imsi = [];
      let result = [];
      let 이메일중복확인 = '';
      
      imsi = that.회원.가입회원;

      result = imsi.map((data)=>data.이메일 === $('#email').val() );

      if( $('#email').val() === '' ){
        $('.member-modal').fadeIn(300);
        $('.modal-message').html(`이메일  입력해 주세요`);
        $('#email').focus();
      }
      else {
        if( result.includes(true) ){
          $('.member-modal').fadeIn(300);
          $('.modal-message').html(`중복된 이메일 입니다.`);
          이메일중복확인 = false;
        }
        else {
          $('.member-modal').fadeIn(300);
          $('.modal-message').html(`사용 가능한 이메일 입니다.`);
          이메일중복확인 = true;  // 이메일 중복확인 완료
        }
      }

      return 이메일중복확인;

    },
    // 휴대폰 인증확인
    hpCheckOk(){

      let that = this;
      let 휴대폰인증확인 = '';

      // num 변수값은 인증번호 발송하면서 루트 변수(위 전역변수) that.회원.인증번호 에 저장해두고 가져와서 비교한다.

      if( that.회원.휴대폰인증번호 === Number($('#hpOk').val()) ){
        $('.member-modal').fadeIn(300);
        $('.modal-message').html("인증에 성공 하였습니다.");
        $('.hp-ok-box').hide();
        $('.hp-btn').hide();
        $('.hp2-btn').show();
        $('#hp').attr('disabled', true);
        휴대폰인증확인 = true;  // 휴대폰 인증완료
        clearInterval(that.회원.setId);
        // console.log('휴대폰 타이머 ', that.회원.setId );
      }
      else{
        $('.member-modal').fadeIn(300);
        $('.modal-message').html("잘못된 인증 코드입니다.");
        휴대폰인증확인 = false;  // 휴대폰 미인증
      }

      return 휴대폰인증확인;

    },
    // 전송 메서드
    submitFn(){

      const that = this;
      let cnt = 0;

      // '전송' 버튼 클릭 이벤트
      $('.submit-btn').on({
        click: function(e){
          e.preventDefault();
          
          that.회원.주소1 = $('#addr1').val();
          that.회원.주소2 = $('#addr2').val();
          that.회원.이메일중복확인  = that.emailCheckOk();
          that.회원.휴대폰인증확인  = that.hpCheckOk();
      
          // 화면에 그려진 즉 체크된 값들을 배열에 저장한다.
          // 이용약관 필수 선택 3개 이상 선택해야한다.
          $('.check-service').each(function(idx, item){
            if( $(this).is(':checked') ){
              that.회원.이용약관 = [...that.회원.이용약관, item.value];
              // item.value 값 안에 '필수' 항목의 갯수만 카운트 
              if( item.value.indexOf('필수') >= 0  ){
                cnt++;
              }
            }                  
          })

          if( that.회원.이메일 === '' ){
            $('.member-modal').fadeIn(300);
            $('.modal-message').html(`이메일을 입력해주세요`);
            return;
          }
          else{
              $('.member-modal').fadeOut(0);
              $('.modal-message').html(``);
          }

          if( that.회원.비밀번호 === '' ){
              $('.member-modal').fadeIn(300);
              $('.modal-message').html(`비밀번호를 입력해주세요`);
              return;
          }
          else{
              $('.member-modal').fadeOut(0);
              $('.modal-message').html(``);
          }

          if( that.회원.비밀번호확인 === '' ){
              $('.member-modal').fadeIn(300);
              $('.modal-message').html(`비밀번호를 한번더 입력해주세요`);
              return;
          }
          else{
              $('.member-modal').fadeOut(0);
              $('.modal-message').html(``);
          }

          if( that.회원.이름 === '' ){
              $('.member-modal').fadeIn(300);
              $('.modal-message').html(`이름을 입력해주세요`);
              return;
          }
          else{
              $('.member-modal').fadeOut(0);
              $('.modal-message').html(``);
          }

          if( that.회원.휴대폰 === '' ){
              $('.member-modal').fadeIn(300);
              $('.modal-message').html(`휴대폰을 입력해주세요`);
              return;
          }
          else{
              $('.member-modal').fadeOut(0);
              $('.modal-message').html(``);
          }

          if( cnt < 3 ){
            $('.member-modal').fadeIn(300);
            $('.modal-message').html(`이용약관동의의 필수항목을 선택해주세요`);
            return;
          }
          else{
            $('.member-modal').fadeOut(0);
            $('.modal-message').html(``);
          }

          // 중복확인 & 휴대폰인증 - 비교값이 true면 전송            
          if( that.회원.이메일중복확인 === false ){
            $('.member-modal').fadeIn(300);
            $('.modal-message').html(`이메일 중복 확인해주세요`);
            return;
          }
          else{
            $('.member-modal').fadeOut(0);
            $('.modal-message').html(``);
          }

          if( that.회원.휴대폰인증확인 === false ){
            $('.member-modal').fadeIn(300);
            $('.modal-message').html(`휴대폰 인증 확인해주세요`);
            return;
          }
          else{
            $('.member-modal').fadeOut(0);
            $('.modal-message').html(``);
          }

          // 회원가입 데이터 정리 마무리 그리고 로컬스토리지에 저장
          const regExpHp = /^(\d{3})(\d{3,4})(\d{4})$/g;
          
          let 회원정보  =  {
            이메일: that.회원.이메일,
            비밀번호: that.회원.비밀번호,
            이름: that.회원.이름,
            휴대폰: that.회원.휴대폰.replace(regExpHp, '$1-$2-$3'),
            생년월일: that.회원.생년 !== '' ? (`${that.회원.생년}-${that.회원.생월}-${that.회원.생일}`) : '',
            이용약관: that.회원.이용약관,
            가입일자: `${new Date().getFullYear()}-${new Date().getMonth()}-${new Date().getDate()}`
          }

          // AJAX 전송
          $.ajax({
            url: './response.php',
            type: 'POST',
            data: { // php에게 보낼 데이터
              email: 회원정보.이메일,
              pw: 회원정보.비밀번호,
              irum: 회원정보.이름,
              hp: 회원정보.휴대폰,
              birth: 회원정보.생년월일,
              service: JSON.stringify(회원정보.이용약관),
              gaibDate: 회원정보.가입일자
            },
            success: function(res){
              console.log(res);
              that.회원.가입완료 = true;
              $('.member-modal').fadeIn(300);
              $('.modal-message').html(`감사합니다. ${that.회원.이름}님 회원가입을 축하드립니다.`);      
              // 모달창 닫고 인트로 페이지로 이동
            },
            error: function(err){
              console.log('AJAX 실패', err);
            }
          });

        }
      })
    }
  }
  SignUp.init();

})(jQuery);