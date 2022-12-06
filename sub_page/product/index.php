<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>제품 | Dr.Jart+</title>
  <link rel="stylesheet" href="./css/style.css">
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
        <div class="topNav">
          <div class="left">
            <a href="#">
              <h2>제품</h2>
            </a>
          </div>
          <div class="right">
            <ul>
              <li class="topNav-all">
                <a href="#" class="nav-btn">모든제품</a>
              </li>
              <li class="topNav-gift">
                <a href="#" class="nav-btn">공식몰 단독 혜택</a>
                <div class="sub-menu-box">
                  <ul class="sub-menu-list">
                    <li><a href="#">쏘수딩 트리트먼트 런칭</a></li>
                    <li><a href="#">3.3.3. 수분패드 단독세트</a></li>
                    <li><a href="#">Every Sun Day</a></li>
                  </ul>
                </div>
              </li>
              <li class="topNav-solution">
                <a href="#" class="nav-btn">민감피부솔루션</a>
                <div class="sub-menu-box">
                  <ul class="sub-menu-list">
                    <li><a href="#">회복진정</a></li>
                    <li><a href="#">보습/수분케어</a></li>
                    <li><a href="#">수분공급</a></li>
                    <li><a href="#">선케어</a></li>
                    <li><a href="#">핸드케어</a></li>
                    <li><a href="#">커버케어</a></li>
                    <li><a href="#">미백&광채</a></li>
                    <li><a href="#">결/각질케어</a></li>
                    <li><a href="#">안티에이징</a></li>
                    <li><a href="#">모공관리</a></li>
                  </ul>
                </div>
              </li>
              <li class="topNav-item">
                <a href="#" class="nav-btn">유형별</a>
                <div class="sub-menu-box">
                  <ul class="sub-menu-list">
                    <li><a href="#">토너/미스트</a></li>
                    <li><a href="#">세럼/에센스</a></li>
                    <li><a href="#">크림/로션</a></li>
                    <li><a href="#">마스크/팩</a></li>
                    <li><a href="#">선케어</a></li>
                    <li><a href="#">비비크림</a></li>
                    <li><a href="#">메이크업</a></li>
                    <li><a href="#">클렌징</a></li>
                    <li><a href="#">스크럽/필링</a></li>
                    <li><a href="#">ACC</a></li>
                  </ul>
                </div>
              </li>
              <li class="topNav-line">
                <a href="#" class="nav-btn">라인별</a>
                <div class="sub-menu-box">
                  <ul class="sub-menu-list">
                    <li><a href="#">포어레미디</a></li>
                    <li><a href="#">에브리 선 데이</a></li>
                    <li><a href="#">시카페어</a></li>
                    <li><a href="#">세라마이딘</a></li>
                    <li><a href="#">바이탈하이드라솔루션</a></li>
                    <li><a href="#">크라이오 러버</a></li>
                    <li><a href="#">컨트롤에이</a></li>
                    <li><a href="#">V7</a></li>
                    <li><a href="#">더마스크</a></li>
                    <li><a href="#">더마클리어</a></li>
                    <li><a href="#">더메이크업</a></li>
                    <li><a href="#">포맨</a></li>
                  </ul>
                </div>
              </li>
              <li class="topNav-onSet">
                <a href="#">온라인세트</a>
              </li>
              <li class="topNav-prdReview">
                <a href="#">제품 리뷰</a>
              </li>
            </ul>
          </div>
        </div>
        <section id="section1">
          <div class="slide-container">
            <div class="slide-view">
              <ul class="slide-wrap">
                <li class="slide slide6">
                  <a href="#">
                    <img src="./images/p_slide_6.jpg" alt="">
                    <div class="slide-text slide-text6">
                      <h2>10월 특별한 멤버십 혜택</h2>
                      <h3>닥터자르트 멤버십만 받을 수 있는 풍성한 혜택을 확인하세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide1">
                  <a href="#">
                    <img src="./images/p_slide_1.jpg" alt="">
                    <div class="slide-text slide-text1">
                      <h2>Go green, Get repair<br>건강한 일상, 그린 리페어</h2>
                      <h3>브라더빈과 함께하는 닥터자르트의<br>건강한 일상 캠페인을 만나보세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide2">
                  <a href="#">
                    <img src="./images/p_slide_2.jpg" alt="">
                    <div class="slide-text slide-text2">
                      <h2>지금은 피부에 S.O.S가 필요할 때</h2>
                      <h3>쏘 수딩 기획세트 구매하고 시카페어 전용 파우치 받으세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide3">
                  <a href="#">
                    <img src="./images/p_slide_3.jpg" alt="">
                    <div class="slide-text slide-text3">
                      <h2>바이탈 하이드라 솔루션™<br>하이드로 글로우 패드 런칭</h2>
                      <h3>VHS샘플링과 공식몰 단독<br>수분 기획세트를 만나보세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide4">
                  <a href="#">
                    <img src="./images/p_slide_4.jpg" alt="">
                    <div class="slide-text slide-text4">
                      <h2>에스티로더 컴퍼니즈 유방암 캠페인 <br>2022 핑크리본 리미티드 에디션</h2>
                      <h3>#30년간의 유방암 종식을 돕기 위한노력<br>핑크리본 한정판 10월 한달간 만나보세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide5">
                  <a href="#">
                    <img src="./images/p_slide_5.jpg" alt="">
                    <div class="slide-text slide-text5">
                      <h2>닥터자르트와 설레는 첫 만남,<br>공식몰 신규 고객님께 드리는 혜택</h2>
                      <h3>각질과 수분케어 상품으로 구성된<br>STARTER KIT 2900원 구매 쿠폰을 드립니다</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide6">
                  <a href="#">
                    <img src="./images/p_slide_6.jpg" alt="">
                    <div class="slide-text slide-text6">
                      <h2>10월 특별한 멤버십 혜택</h2>
                      <h3>닥터자르트 멤버십만 받을 수 있는 풍성한 혜택을 확인하세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
                <li class="slide slide1">
                  <a href="#">
                    <img src="./images/p_slide_1.jpg" alt="">
                    <div class="slide-text slide-text1">
                      <h2>Go green, Get repair<br>건강한 일상, 그린 리페어</h2>
                      <h3>브라더빈과 함께하는 닥터자르트의<br>건강한 일상 캠페인을 만나보세요!</h3>
                      <button class="direct-btn">자세히 보기</button>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="slide-btn-box">
              <span class="slide-btn"></span>
              <span class="slide-btn"></span>
              <span class="slide-btn"></span>
              <span class="slide-btn"></span>
              <span class="slide-btn"></span>
              <span class="slide-btn"></span>
              <span class="slide-btn"></span>
            </div>
          </div>
        </section>
        <section id="section2">
          <div class="title">
            <h2>베스트셀러 TOP5</h2>
          </div>
          <div class="content">
            <ul>
              <li class="best-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1663032116037.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag new">NEW</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#모공고침패드</p>
                      <p class="prd-main-tit">포어레미디 파하 리뉴잉 듀얼 패드</p>
                      <span>35,000원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="best-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1650508422384.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag new">NEW</span>
                      <span class="flag best">BEST</span>
                      <span class="flag sale">SALE</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#모공고침클렌져</p>
                      <p class="prd-main-tit">포어레미디™ 리뉴잉 폼 클렌저</p>
                      <span><s>28,000원</s>22,000원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="best-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1648696403196.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag new">NEW</span>
                      <span class="flag best">BEST</span>
                      <span class="flag sale">1 + 1</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#핑크톤업선크림</p>
                      <p class="prd-main-tit">에브리 선 데이 톤업 선 플루이드</p>
                      <span>22,000원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="best-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1642121788044.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag new">NEW</span>
                      <span class="flag gift">GIFT</span>
                      <span class="flag sale">SALE</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#바운수에센스</p>
                      <p class="prd-main-tit">바이탈 하이드라 솔루션™ 바이옴 트리트먼트 에센스</p>
                      <span><s>40,000원</s>32,000원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="best-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1665554900608.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag new">NEW</span>
                      <span class="flag sale">SALE</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#1시간진정세럼</p>
                      <p class="prd-main-tit">시카페어 세럼</p>
                      <span><s>47,000원</s>37,600원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section id="section3">
          <div class="title">
            <h2>온라인 혜택제품</h2>
          </div>
          <div class="content">
            <ul>
              <li class="on-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1665554934665.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag new">NEW</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#4배빠른리페어크림</p>
                      <p class="prd-main-tit">시카페어 크림</p>
                      <span>48,000원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="on-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1651649705427.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag sale">SALE</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#코어보습크림</p>
                      <p class="prd-main-tit">세라마이딘™ 엑토인 인퓨즈드 크림</p>
                      <span><s>68,000원</s>61,200원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="on-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1665554934665.png" alt="">
                    </div>
                    <div class="product-obt hide">
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#수분진정젤</p>
                      <p class="prd-main-tit">시카페어 카밍 젤 크림</p>
                      <span>37,000원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="on-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1645499578753.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag sale">SALE</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#모공고침마스크</p>
                      <p class="prd-main-tit">더마스크 포어레미디™ 퓨리파잉 머드 마스크 5매입</p>
                      <span><s>26,000원</s>20,800원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="on-prd-list">
                <div class="col-gap">
                  <a href="#">
                    <div class="product-img">
                      <img src="./images/1664181402459.png" alt="">
                    </div>
                    <div class="product-obt">
                      <span class="flag best">BEST</span>
                      <span class="flag sale">SALE</span>
                    </div>
                    <div class="product-info">
                      <p class="prd-sub-tit">#333수분패드</p>
                      <p class="prd-main-tit">바이탈 하이드라 솔루션 하이드로 글로우 패드</p>
                      <span><s>32,000원</s>25,600원</span>
                    </div>
                  </a>
                </div>
                <div class="buying">
                  <div class="btn-box">
                    <a href="#" class="btn-buy">바로구매</a>
                    <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                    <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section id="section4">
          <div class="left-box">
            <div class="sec-con">
              <div class="text-con">
                <span>Pore·Remedy™</span>
                <h2>모공 고민?<br>포어레미디로 새로고침!</h2>
                <div class="small-txt">
                  <p>늘어난 모공케어에 도움을 주는 파하의 힘!<br>닥터자르트 포어레미디를 만나보세요.<br>#모공고침 #민트파하세럼</p>
                  <a href="#">자세히 보기</a>
                </div>
              </div>
              <div class="vod-con"> <!-- position: relative -->
                <a href="#">
                  <img src="./images/btn_vodPlay.png" alt="" class="play-btn"> <!-- position: absolute -->
                </a>
              </div>
            </div>
          </div>
          <div class="right-box">
            <div class="pick-container">
              <div class="pick-title">
                <h2>Today Pick's</h2>
                <h3>닥터자르트가 추천하는 상품입니다.</h3>
              </div>
              <div class="pick-content">
                <div class="p-slide-view">
                  <ul class="p-slide-wrap">
                    <li class="p-slide p-slide5">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1663032116037.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#모공고침패드</p>
                            <p class="prd-main-tit">포어레미디 파하 리뉴잉 듀얼 패드</p>
                            <span>35,000원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="p-slide p-slide1">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1665554900608.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                            <span class="flag sale">SALE</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#1시간진정세럼</p>
                            <p class="prd-main-tit">시카페어 세럼</p>
                            <span><s>47,000원</s>37,600원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="p-slide p-slide2">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1642121788044.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                            <span class="flag gift">GIFT</span>
                            <span class="flag sale">SALE</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#바운수에센스</p>
                            <p class="prd-main-tit">바이탈 하이드라 솔루션™ 바이옴 트리트먼트 에센스</p>
                            <span><s>40,000원</s>32,000원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="p-slide p-slide3">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1648696403196.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                            <span class="flag best">BEST</span>
                            <span class="flag sale">1 + 1</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#핑크톤업선크림</p>
                            <p class="prd-main-tit">에브리 선 데이 톤업 선 플루이드</p>
                            <span>22,000원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="p-slide p-slide4">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1650508422384.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                            <span class="flag best">BEST</span>
                            <span class="flag sale">SALE</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#모공고침클렌져</p>
                            <p class="prd-main-tit">포어레미디™ 리뉴잉 폼 클렌저</p>
                            <span><s>28,000원</s>22,000원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="p-slide p-slide5">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1663032116037.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#모공고침패드</p>
                            <p class="prd-main-tit">포어레미디 파하 리뉴잉 듀얼 패드</p>
                            <span>35,000원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="p-slide p-slide1">
                      <div class="col-wrap">
                        <a href="#">
                          <div class="product-img">
                            <img src="./images/1665554900608.png" alt="">
                          </div>
                          <div class="product-obt">
                            <span class="flag new">NEW</span>
                            <span class="flag sale">SALE</span>
                          </div>
                          <div class="product-info">
                            <p class="prd-sub-tit">#1시간진정세럼</p>
                            <p class="prd-main-tit">시카페어 세럼</p>
                            <span><s>47,000원</s>37,600원</span>
                          </div>
                        </a>
                        <div class="buying">
                          <div class="btn-box">
                            <a href="#" class="btn-buy">바로구매</a>
                            <a href="#" class="btn-cart"><img src="./images/btn_cart.png" alt=""></a>
                            <a href="#" class="btn-wish"><img src="./images/btn_wish.png" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <a href="#" class="p-slide-btn p-slide-prev-btn" title="preview">
                  <img src="./images/arr_slickPrev.png" alt="">
                </a>
                <a href="#" class="p-slide-btn p-slide-next-btn" title="next">
                  <img src="./images/arr_slickNext.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>
        <section id="section5">
          <div class="title-box">
            <h2>베스트 포토리뷰</h2>      
            <h3>고객님들께서 제품 사용 후 남겨주신 베스트 리뷰를 확인하세요.</h3>      
          </div>
          <div class="content-box">
            <div class="gap">
              <ul>
                <li>
                  <div class="photo-review">
                    <a href="#" class="review-modal-btn">
                      <div class="img-box">
                        <img src="./images/portrait_0a78bb1ea61677ae.jpg" alt="">
                      </div>
                      <h3>포어레미디를 구매해보았어요</h3>
                      <h4>hj99****<span>2022.05.01</span></h4>
                    </a>
                  </div>
                  <div class="prd-name">
                    <a href="#" class="product-move-btn">
                      <img src="./images/extra_small_6754911e7f448000.jpg" alt="">
                      <em>포어레미디™ 리뉴잉 폼 클렌저</em>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="photo-review">
                    <a href="#" class="review-modal-btn">
                      <div class="img-box">
                        <img src="./images/portrait_669762a47887317c.jpg" alt="">
                      </div>
                      <h3>제가 귀찮아서 리뷰 잘 남기지 않는데</h3>
                      <h4>jico****<span>2022.05.30</span></h4>
                    </a>
                  </div>
                  <div class="prd-name">
                    <a href="#" class="product-move-btn">
                      <img src="./images/extra_small_71055f3fd4b69a94.jpg" alt="">
                      <em>포어레미디 파하 리뉴잉 듀얼 패드</em>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="photo-review">
                    <a href="#" class="review-modal-btn">
                      <div class="img-box">
                        <img src="./images/portrait_148c6814ed63b1f1.jpg" alt="">
                      </div>
                      <h3>샘플로 받아서 가끔사용해봤는데 이번에 유난히 피부가 초예민하연서 지성이지만</h3>
                      <h4>dbs0****<span>2022.05.22</span></h4>
                    </a>
                  </div>
                  <div class="prd-name">
                    <a href="#" class="product-move-btn">
                      <img src="./images/extra_small_dde166599af98563.jpg" alt="">
                      <em>바이탈 하이드라 솔루션™ 바이옴 트리트먼트 에센스</em>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="photo-review">
                    <a href="#" class="review-modal-btn">
                      <div class="img-box">
                        <img src="./images/portrait_abb8427c4b29fcf4.jpg" alt="">
                      </div>
                      <h3>키엘제품으로쓰다가 닥터자르트샘플써보고 넘좋아서 모든제품을 닥터자르트로바꿨어요</h3>
                      <h4>ku43****<span>2022.05.22</span></h4>
                    </a>
                  </div>
                  <div class="prd-name">
                    <a href="#" class="product-move-btn">
                      <img src="./images/extra_small_71055f3fd4b69a94.jpg" alt="">
                      <em>포어레미디 파하 리뉴잉 듀얼 패드</em>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section id="section6">
          <div class="title">
            <h2>Dr.Jart+ Instagram</h2>
          </div>
        </section>
      </div>
      <!-- ++ footer ++ -->
      <?
        include_once($path.'footer.php');
      ?>
      <!-- footer end -->
    </main>
    <!-- main end -->

  </div>
  <!-- wrap end -->

<script src="./script/product.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>