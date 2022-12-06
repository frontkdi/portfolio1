(function($){

  const FilterSpace = {
    init(){
      this.topNav();
      this.modal();
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
    modal(){
      // 버튼 클릭시 모달창 닫기
      $('.modal-close-btn').on({
        click: function(e){
          e.preventDefault();
          $('.modal').hide();
        }
      })
    }
  }
  FilterSpace.init();

})(jQuery);