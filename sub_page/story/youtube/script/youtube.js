(function($){

  const Story = {
    init(){
      this.topNav();
      this.storySection();
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
    storySection(){
      $('.tab').on({
        click: function(e){
          e.preventDefault();
          // tab event : 탭 메뉴 클릭했을 때 색상 변경
          $('.tab').removeClass('on')
          $(this).addClass('on')
        }
      });
    }
  }
  Story.init();

})(jQuery);