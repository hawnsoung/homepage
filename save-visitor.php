<?php
// 방문자 데이터를 저장할 파일
$visitor_file = 'visitors.txt';

// 현재 날짜를 "Y-m-d" 형식으로 가져옴
$current_date = date('Y-m-d');

// 방문자의 IP 주소를 가져옴 (기본적인 예제이므로 보안적인 요소는 고려하지 않음)
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// 파일에 방문자 정보 추가
file_put_contents($visitor_file, "$current_date,$visitor_ip\n", FILE_APPEND);

echo "방문자 정보가 저장되었습니다.";
?>
