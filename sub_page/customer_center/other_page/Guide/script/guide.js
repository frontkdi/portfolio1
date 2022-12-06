(function($){

  const Guide = {
    init(){
      this.topNav();
      this.guideSection();
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
    guideSection(){
      $('.tab').on({
        click: function(e){
          e.preventDefault();
          // tab event : 탭 메뉴 클릭했을 때 색상 변경
          $('.tab').removeClass('on')
          $(this).addClass('on')
        }
      });

      // 탭 메뉴 클릭했을 때 내용(콘텐츠) 보이게 하기
      $('.tab1').click(function(e){
        e.preventDefault();
        $('.tabContents').removeClass('on2');
        $('.tabCon1').addClass('on2');
      });
      $('.tab2').click(function(e){
        e.preventDefault();
        $('.tabContents').removeClass('on2');
        $('.tabCon2').addClass('on2');
      });

      // box-close-btn 버튼 클릭 시 필터스페이스 박스 닫기
      $('.box-close-btn').on({
        click: function(){
          $('.fs-guide-box').hide();
        }
      });

    }
  }
  Guide.init();

})(jQuery);