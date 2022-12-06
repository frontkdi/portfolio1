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
      $('.sTab').on({
        click: function(e){
          e.preventDefault();
          // tab event : 탭 메뉴 클릭했을 때 색상 변경
          $('.sTab').removeClass('on')
          $(this).addClass('on')
        }
      });

      // 탭 메뉴 클릭했을 때 내용(콘텐츠) 보이게 하기
      $('.sTab1').click(function(e){
        e.preventDefault();
        $('.tab-con').removeClass('on2');
        $('.tab-con1').addClass('on2');
      });
      $('.sTab2').click(function(e){
        e.preventDefault();
        $('.tab-con').removeClass('on2');
        $('.tab-con2').addClass('on2');
      });
      $('.sTab3').click(function(e){
        e.preventDefault();
        $('.tab-con').removeClass('on2');
        $('.tab-con3').addClass('on2');
      });
      $('.sTab4').click(function(e){
        e.preventDefault();
        $('.tab-con').removeClass('on2');
        $('.tab-con4').addClass('on2');
      });
      $('.sTab5').click(function(e){
        e.preventDefault();
        $('.tab-con').removeClass('on2');
        $('.tab-con5').addClass('on2');
      });
    }
  }
  Story.init();

})(jQuery);