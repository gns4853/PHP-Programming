﻿<?PHP
/* 배열 예제 : 버블 정렬
 *
 */

$num = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);  	// 10개의 숫자를 배열에 입력

$count = 10;				// 배열 원소의 개수로 10을 $count에 입력

echo "정렬되기 전 : ";
for ($a=0; $a<10; $a++)			// 정렬되기 전 배열 원소 출력
    echo $num[$a]." ";

echo "<br>";

for($i=$count-2; $i>=0; $i--)		// $i는 8부터 0까지 1씩 감소
{
    for($j=0; $j<=$i; $j++)		// $j는 0부터 $i까지 1씩 증가
    {
        if($num[$j] > $num[$j+1])	// 인접한 두 개의 데이터의 크기를 비교하여 크면
        {
            $tmp = $num[$j]; 	        // 앞의 데이터를 $tmp에 잠시 대피
            $num[$j] = $num[$j+1];	// 뒤의 데이터를 앞의 배열 원소에 저장
            $num[$j+1] = $tmp;		// $tmp를 뒤의 배열 원소에 저장
        }
    }
}

echo "오름차순 정렬(버블 정렬) : ";
for ($a=0; $a<10; $a++)			// 버블 정렬 후 배열 원소 출력
    echo $num[$a]." ";
?>