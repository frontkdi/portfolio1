(function($, window){

  const PortFolio = {
    init(){
      this.main();
      this.section1();
      this.section2();
      this.section3();
      this.footer();
    },
    main(){

      // 마우스 스크롤 이벤트
      window.addEventListener("wheel", function(e){
        e.preventDefault();
      },{passive : false});
      
      let $main = $("#main");
      let page = 1;

      $main.animate({scrollTop:0}, 1000);
  
      $(window).on("wheel", function(e){
        if($main.is(":animated")) return;
        if(e.originalEvent.deltaY > 0){
          if(page == 5) return;
          page++;
        }
        else if(e.originalEvent.deltaY < 0){
          if(page == 1) return;
          page--;
        }
        let posTop = (page-1) * $(window).height();
        $main.animate({scrollTop : posTop});
      });

      $('.mainNavi-bar1').addClass('on');
      $('#main').scroll(function(){
        if( $('#main').scrollTop() >= $('#section1').offset().top ){
          $('.mnbar').removeClass('on');
          $('.mainNavi-bar1').addClass('on');
        }
        if( $('#main').scrollTop() >= $('#section2').offset().top ){
            $('.mnbar').removeClass('on');
            $('.mainNavi-bar2').addClass('on');
        }
        if( $('#main').scrollTop() >= $('#section3').offset().top ){
          $('.mnbar').removeClass('on');
          $('.mainNavi-bar3').addClass('on');
        }
        if( $('#main').scrollTop() >= $('#section4').offset().top ){
          $('.mnbar').removeClass('on');
          $('.mainNavi-bar4').addClass('on');
        }
      });

    },
    section1(){
      let cnt = 0;

      // 1. main slide 함수
      function mainSlide(){
        $('.slide-wrap').animate({left: -100*cnt + '%'}, 0, function(){
          if(cnt === 7){
            cnt=0;
            $('.slide-wrap').animate({left: -100*cnt + '%'}, 0);
          }
          pageBtnFn(cnt);
          textBoxFn(cnt);
        }); 
      }

      // 2. 다음 카운트 함수
      function nextCount(){
        cnt++;
        mainSlide();
      }

      // 3. 자동타이머 함수
      function autoTimer(){
        setInterval(nextCount, 5000);
      }
      autoTimer();

      // 4. 현재 슬라이드 표시 버튼 이벤트
      function pageBtnFn(z){
        $('.page-btn').removeClass('on');
        $('.page-btn').eq(z).addClass('on');
      }

      // 5. 슬라이드 보일 때마다 텍스트 박스 애니메이션 (위 4번 매개변수 이용 참고)
      // function textBoxFn(z){
      //   $('.slide-text').removeClass('on');
      //   $('.slide-text').eq(z).addClass('on');
      // }

    },
    section2(){
      $('.text-box').removeClass('on');
      $('#main').scroll(function(){
        if( $('#main').scrollTop() >= $('#section2').offset().top ){
          $('.text-box').addClass('on');
        }
        else{
          $('.text-box').removeClass('on');
        }
      });
    },
    section3(){
      $('.content-box').removeClass('on');
      $('#main').scroll(function(){
        if( $('#main').scrollTop() >= $('#section3').offset().top ){
          $('.content-box').addClass('on');
        }
        else{
          $('.content-box').removeClass('on');
        }
      });
    },
    footer(){}
  }
  PortFolio.init();

})(jQuery, window);