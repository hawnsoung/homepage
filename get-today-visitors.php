<?php
// 방문자 데이터를 저장한 파일 경로
$visitor_file = 'visitors.txt';

// 현재 날짜 가져오기
$current_date = date('Y-m-d');

// 방문자 파일 읽기
$visitors = file($visitor_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// 오늘 날짜의 방문자를 필터링
$today_visitors = array_filter($visitors, function($visitor) use ($current_date) {
    list($date, $ip) = explode(',', $visitor);
    return $date === $current_date;
});

// 오늘 방문자 수
$visitor_count = count($today_visitors);

// 방문자 내역을 출력 (예: JSON 형식)
echo json_encode([
    'date' => $current_date,
    'count' => $visitor_count,
    'visitors' => $today_visitors
]);
?>
