(function($, window){

  const Header = {
    init(){
      this.header();
    },
    header(){

      const $menuBar = $('.fixmenu, .all-menu');
      const $allMenu = $('.all-menu');
      const $allMenuBtn = $('.all-menu-btn');
      const $allMenuCloseBtn = $('.all-menu-close-btn');
      const $botIcon = $('.bot-icon');
      const $miniText = $('.mini-text');

      // all-menu-btn 클릭 시 all-menu 부드럽게 나타나기
      $allMenuBtn.on({
        click: function(e){
          e.preventDefault();
          $allMenu.stop().fadeIn(300);
          $menuBar.addClass('on');
          $allMenuBtn.hide(); // 메뉴 열기 버튼 숨기기
          $allMenuCloseBtn.show(); // 메뉴 닫기 버튼 보이기
        }
      });

      // all-menu 닫기
      $allMenuCloseBtn.on({
        click: function(e){
          e.preventDefault();
          $allMenu.stop().fadeOut(0);
          $menuBar.removeClass('on');
          $allMenuBtn.show();
          $allMenuCloseBtn.hide();
        }
      });

      // bot-icon에 마우스 올리면 텍스트 아이콘 띄우기
      $botIcon.on({
        mouseenter(){
          $miniText.removeClass('on');
          $(this).find('span').addClass('on');
        }
      });

      $botIcon.on({
        mouseleave(){
          $miniText.removeClass('on');
        }
      });

    }
  }
  Header.init();

})(jQuery, window);