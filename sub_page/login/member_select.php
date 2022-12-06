<?

  $dbservername = 'localhost';
  $dbusername = 'ehddlf95';
  $dbuserpassword = 'duehd189!';
  $dbname = 'ehddlf95';

  // 1. 데이터 접속
  $conn = mysqli_connect($dbservername, $dbusername, $dbuserpassword, $dbname);
  mysqli_set_charset($conn, 'utf8');

  // 2. 접속 확인
  if( !$conn ){ 
    die('데이터베이스 접속 실패!');
  }

  // 데이터 조회하기(검색하기)
  $select_sql = "SELECT * FROM member_data";
  $result = mysqli_query($conn, $select_sql);

  $arr = array(); 

  while( $row = mysqli_fetch_array($result)  ){
    array_push($arr, array(
      '번호'     => $row['idx'],
      '이메일'   => $row['email'],
      '비밀번호' => $row['pw'],
      '이름'     => $row['irum'],
      '휴대폰'   => $row['hp'],
      '생년월일' => $row['birth'],
      '이용약관' => $row['service_'],
      '가입일자' => $row['gaib_date']
    ));
  }

  $json =  json_encode($arr, JSON_UNESCAPED_UNICODE); 
  echo $json;

?>