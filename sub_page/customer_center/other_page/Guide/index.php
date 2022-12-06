<?
  include_once('./_config.php')
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>매장안내 | 고객만족센터 | Dr.Jart+</title>
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
          <div class="nav-con">
            <div class="left">
              <a href="<?=$path3?>">
                <h2>고객만족센터</h2>
              </a>
            </div>
            <div class="rightMenu">
              <ul class="topNav-box">
                <li class="topNav-FAQ">
                  <a href="<?=$path4?>FAQ">FAQ</a>
                </li>
                <li class="topNav-inquiry">
                  <a href="<?=$path4?>Inquiry">1:1 문의</a>
                </li>
                <li class="topNav-notice">
                  <a href="<?=$path4?>Notice">공지사항</a>
                </li>
                <li class="topNav-guide">
                  <a href="<?=$path4?>Guide">매장 안내</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="contentWrapper">
          <div class="title">
            <h2>매장 안내</h2>
          </div>
          <div class="tabMenu">
            <ul>
              <li class="tab tab1 on"><a href="#">국내매장</a></li>
              <li class="tab tab2"><a href="#">필터스페이스 안내</a></li>
            </ul>
          </div>
          <div class="tabContents tabCon1 on2">
            <div class="oy-info">
              <a href="#">올리브영 매장안내</a>
            </div>
            <div class="map-box">
              <div class="map-view">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.284440934869!2d126.9955741150966!3d37.264681579855555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b43c34e3a504d%3A0xe20eb318a6a323df!2z64ul7YSw7J6Q66W07Yq4IOuhr-uNsOuwse2ZlOygkCDsiJjsm5DsoJA!5e0!3m2!1sko!2skr!4v1667647680964!5m2!1sko!2skr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="map-searchBox">
                <div class="map-tab">
                  <ul>
                    <li class="serach-tab on"><a href="#">지역별 검색</a></li>
                    <li class="serach-tab"><a href="#">매장별 검색</a></li>
                  </ul>
                </div>
                <div class="map-con">
                  <div class="searchToggle">
                    <select name="local-search" id="localSearch">
                      <option value="" selected>경기</option>
                      <option value="대구">대구</option>
                      <option value="부산">부산</option>
                      <option value="서울">서울</option>
                      <option value="인천">인천</option>
                      <option value="제주">제주</option>
                    </select>
                    <select name="store-search" id="storeSearch">
                      <option value="" selected>전체</option>
                      <option value="고양시">고양시</option>
                      <option value="수원시">수원시</option>
                      <option value="안양시">안양시</option>
                      <option value="평택시">평택시</option>
                    </select>
                    <span class="btn-box">
                      <button>
                        <span>검색</span>
                      </button>
                    </span>
                  </div>
                  <div class="result-list">
                    <p>매장 (6)</p>
                    <div class="storeList">
                      <div class="listCon">
                        <ul>
                          <li>
                            <a href="#">
                              <h3>롯데백화점 수원점</h3>
                              <p class="txt-store">경기도 수원시 권선구 세화로 134 롯데백화점 수원점 1층 닥터자르트<br></p>
                              <p class="txt-tel">031-8066-0175</p>
                              <div class="location-shape">
                                <div class="img-box">
                                  <img src="./images/ico_map_key_a.png" alt="">
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h3>현대백화점 킨텍스점</h3>
                              <p class="txt-store">경기도 고양시 일산서구 호수로 817 현대백화점 킨텍스점 1층 닥터자르트<br></p>
                              <p class="txt-tel">031-822-3165</p>
                              <div class="location-shape">
                                <div class="img-box">
                                  <img src="./images/ico_map_off.png" alt="">
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h3>AK플라자 수원점</h3>
                              <p class="txt-store">경기도 수원시 팔달구 매산로1가 18 수원역사 내 AK플라자 1층 닥터자르트<br></p>
                              <p class="txt-tel">031-240-1199</p>
                              <div class="location-shape">
                                <div class="img-box">
                                  <img src="./images/ico_map_off.png" alt="">
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h3>AK플라자 평택점</h3>
                              <p class="txt-store">경기도 평택시 평택동 185-563 AK플라자 1층 닥터자르트<br></p>
                              <p class="txt-tel">031-646-6145</p>
                              <div class="location-shape">
                                <div class="img-box">
                                  <img src="./images/ico_map_off.png" alt="">
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h3>롯데백화점 평촌점</h3>
                              <p class="txt-store">경기 안양시 동안구 시민대로 180 롯데백화점 평촌점 1층 닥터자르트<br></p>
                              <p class="txt-tel">031-8086-9126</p>
                              <div class="location-shape">
                                <div class="img-box">
                                  <img src="./images/ico_map_off.png" alt="">
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h3>스타필드 고양점</h3>
                              <p class="txt-store">경기 고양시 덕양구 고양대로 1955 스타필드 고양점 1층 닥터자르트<br></p>
                              <p class="txt-tel">031-5173-1479</p>
                              <div class="location-shape">
                                <div class="img-box">
                                  <img src="./images/ico_map_off.png" alt="">
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tabContents tabCon2">
            <div class="fs-info">
              <div class="info-img"> <!-- 나중에 slide 처리 -->
                <span class="fs-img-box">
                  <img src="./images/fs_img.jpg" alt="">
                  <em>필터 스페이스</em>
                </span>
              </div>
              <div class="fs-con">
                <ul>
                  <li>
                    <a href="#">
                      <img src="./images/fs_img.jpg" alt="">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="campaign-txt">
              <div class="txtBox">
                <span><img src="./images/ico_filter_space.png" alt=""></span>
                <p>필터스페이스만에 다양한 클래스와 고객과의 체험, 소통을 위한 캠페인을 만나보세요!</p>
                <a href="#">
                  <span>캠페인 바로가기</span>
                </a>
              </div>
            </div>
            <div class="map-box">
              <div class="map-view">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6328.912654829502!2d127.02034053361!3d37.520739044637025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca3eb0b0f4833%3A0x24a3c99e966e9f90!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDrj4TsgrDrjIDroZwxMeq4uCA0Ng!5e0!3m2!1sko!2skr!4v1667957744475!5m2!1sko!2skr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <span class="local-shape">
                  <img src="./images/ico_map_key_a.png" alt="">
                </span>
                <div class="fs-guide-box">
                  <div class="box-gap">
                    <p class="fs-title">필터스페이스</p>
                    <p class="fs-addr">서울특별시 강남구 도산대로11길 46  (신사동 535)</p>
                    <p class="fs-time">OPEN 11:00 ~ CLOSE 21:30</p>
                    <button class="box-close-btn"><img src="./images/close-shape.svg" alt=""></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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

<script src="./script/guide.js"></script>
<script src="<?=$path?>script/header.js"></script>
</body>
</html>