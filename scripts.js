document.addEventListener('DOMContentLoaded', function() {
    // 방문자 내역을 가져와서 표시하는 함수
    function fetchVisitorStats() {
        fetch('get-today-visitors.php')
            .then(response => response.json())
            .then(data => {
                // 오늘 방문자 수 표시
                document.getElementById('visitor-count-number').innerText = data.count;

                // 오늘 방문자 리스트 표시
                const visitorList = document.getElementById('visitor-list');
                visitorList.innerHTML = ''; // 초기화

                data.visitors.forEach(visitor => {
                    const listItem = document.createElement('li');
                    listItem.textContent = visitor; // 방문자 정보 (날짜와 IP)
                    visitorList.appendChild(listItem);
                });
            })
            .catch(error => console.error('Error fetching visitor stats:', error));
    }

    // 페이지가 로드되면 방문자 내역을 가져옴
    fetchVisitorStats();
});
