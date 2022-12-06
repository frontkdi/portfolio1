<?

  $dbservername = 'localhost';
  $dbusername = 'ehddlf95';
  $dbuserpassword = 'duehd189!';
  $dbname = 'ehddlf95';

  // 1. 데이터 접속(Connection)
  $conn = mysqli_connect($dbservername, $dbusername, $dbuserpassword, $dbname);
  mysqli_set_charset($conn, 'utf8');

  // 2. 접속 확인
  if( !$conn ){ 
    die('데이터베이스 접속 실패!');
  }

  // 회원가입폼에 데이터 입력 후 전송(SUBMIN) 버튼 클릭 
  // AJAX 변수 전달 전달변수를 PHP 변수에 대입 그리고 데이터베이스에 저장
  $email = $_POST['email'];
  $pw = $_POST['pw'];
  $irum = $_POST['irum'];
  $hp = $_POST['hp'];
  $birth = $_POST['birth'];
  $service = $_POST['service'];
  $gaibDate = $_POST['gaibDate'];

  // 테이블에 저장하기
  $insert_sql = "INSERT INTO member_data (email, pw, irum, hp, birth, service_, gaib_date)
  VALUE ('$email', '$pw', '$irum', '$hp', '$birth', '$service', '$gaibDate')";

  // SQL 실행
  $result = mysqli_query($conn, $insert_sql);

?>