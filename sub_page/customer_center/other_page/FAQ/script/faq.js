(function($){

  const FAQ = {
    init(){
      this.topNav();
      this.mainFn();
    },
    topNav(){
      // navigation main button event
      // main button에 mouse over 시 sub menu가 부드럽게 나타난다
      $('.nav-btn').on({
        mouseenter: function(){
          $('.sub-menu-box').stop().slideUp(300);
          $(this).next('.sub-menu-box').slideDown(300);
        }
      });

      // topNav 영역을 떠나면 sub menu 부드럽게 사라진다
      $('.topNav').on({
        mouseleave: function(){
          $('.sub-menu-box').stop().slideUp(300);
        }
      });
    },
    mainFn(){

      // tab event : 탭 메뉴 클릭했을 때 색상 변경
      $('.faq-tab').on({
        click(e){
          e.preventDefault();
          $('.faq-tab').removeClass('on')
          $(this).addClass('on')
        }
      });

      // 탭 메뉴 클릭했을 때 내용(콘텐츠) 보이게 하기
      // $('.tab1').click(function(e){
      //   e.preventDefault();
      //   $('.tabContents').removeClass('on2');
      //   $('.tabCon1').addClass('on2');
      // });
      // $('.tab2').click(function(e){
      //   e.preventDefault();
      //   $('.tabContents').removeClass('on2');
      //   $('.tabCon2').addClass('on2');
      // });

      // toggle 이벤트
      $('.question-btn1').on({
        click(){
          $('.answer-box1').slideToggle(300);
        }
      }); 

      $('.question-btn2').on({
        click(){
          $('.answer-box2').slideToggle(300);
        }
      }); 

      $('.question-btn3').on({
        click(){
          $('.answer-box3').slideToggle(300);
        }
      }); 

      $('.question-btn4').on({
        click(){
          $('.answer-box4').slideToggle(300);
        }
      }); 

      $('.question-btn5').on({
        click(){
          $('.answer-box5').slideToggle(300);
        }
      }); 

      $('.question-btn6').on({
        click(){
          $('.answer-box6').slideToggle(300);
        }
      }); 

      $('.question-btn7').on({
        click(){
          $('.answer-box7').slideToggle(300);
        }
      }); 

      $('.question-btn8').on({
        click(){
          $('.answer-box8').slideToggle(300);
        }
      });
      
      $('.question-btn9').on({
        click(){
          $('.answer-box9').slideToggle(300);
        }
      }); 

      $('.question-btn10').on({
        click(){
          $('.answer-box10').slideToggle(300);
        }
      });
      
      $('.question-btn11').on({
        click(){
          $('.answer-box11').slideToggle(300);
        }
      }); 
      
      $('.question-btn12').on({
        click(){
          $('.answer-box12').slideToggle(300);
        }
      }); 

    }
  }
  FAQ.init();

})(jQuery);