(function($){

  const Product = {
    init(){
      this.topNav();
      this.section1();
      this.section2();
      this.section3();
      this.section4();
    },
    topNav(){
      // navigation main button event
      // main button에 mouse over 시 sub menu가 부드럽게 나타난다
      $('.nav-btn').on({
        mouseenter(){
          $('.sub-menu-box').stop().slideUp(300);
          $(this).next('.sub-menu-box').slideDown(300);
        }
      });

      // nav-btn 영역을 떠나면 sub menu 부드럽게 사라진다
      $('.topNav').on({
        mouseleave(){
          $('.sub-menu-box').stop().slideUp(300);
        }
      });
    },
    section1(){
      // main script - section1 : main slide
      // 1. main slide 함수 
      function mainSlide(){
        $('.slide-wrap').animate({left: -100*cnt + '%'}, 0, function(){
          if(cnt === 6){
            cnt=0;
            $('.slide-wrap').animate({left: -100*cnt + '%'}, 0);
          }
        }); 
      }

      // 2. 다음 count 함수
      cnt = 0; 
      function nextCount(){
        cnt++; 
        mainSlide();
      }

      // 3. 자동타이머 함수
      function autoTimer(){ 
        setInterval(nextCount, 5000); // 5초 후에 실행
      }

      // 4. 자동타이머 함수 실행
      autoTimer();
    },
    section2(){
      $('.best-prd-list').on({
        mouseenter: function(){
          $(this).addClass('on');
        },
        mouseleave: function(){
          $(this).removeClass('on');
        }
      });
    },
    section3(){
      $('.on-prd-list').on({
        mouseenter: function(){
          $(this).addClass('on');
        },
        mouseleave: function(){
          $(this).removeClass('on');
        }
      });
    },
    section4(){
      let cnt = 0;
      let setId = '';

      smallSlide();

      // main script - section4 : pick's slide
      // 1. main slide 함수 
      function smallSlide(){
        $('.p-slide-wrap').stop().animate({left: -100*cnt + '%'}, 500, function(){
          if( cnt >= 5 ){
            cnt = 0;
          }
          if( cnt <= -1 ){
            cnt = 4;
          }
          $('.p-slide-wrap').stop().animate({left: -100*cnt + '%'}, 0);
        }); 
      }

      // 2. 다음 count 함수
      function s4nextCount(){
        cnt++; 
        smallSlide();
      }

      // 2. 이전 카운트 함수
      function s4prevCount(){
        cnt--;
        smallSlide();
      }

      // 3. 자동타이머 함수
      function s4autoTimer(){ 
        setId = setInterval(s4nextCount, 5000); // 5초 후에 실행
      }

      // 4. 자동타이머 함수 실행
      s4autoTimer();

      // 5. 버튼 클릭 이벤트(좌, 우 이동)
      $('.p-slide-prev-btn').on({
        click: function(e){
          e.preventDefault();
          if( $('.p-slide-wrap').is(':animated') === false ){
            s4prevCount();
          }
        }
      });
      $('.p-slide-next-btn').on({
        click: function(e){
          e.preventDefault();
          if( $('.p-slide-wrap').is(':animated') === false ){
            s4nextCount();
          }
        }
      });

      // 마우스 오버 시 슬라이드 멈추기
      $('.p-slide-wrap').on({
        mouseenter(){
          clearInterval(setId);
        },
        mouseleave(){
          s4autoTimer();
        }
      });
    }
  }
  Product.init();

})(jQuery);