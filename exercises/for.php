<?php
// 1. Hiển thị số chẵn và số lẻ trong dãy số bất kỳ

$array = [1,2,3,4,5,6,7,8,9,10];
$array_length = count($array);
$array_even = null;
$array_odd = null;

for ($i = 0; $i < $array_length; $i++) 
{
    $condition = ($i % 2 == 0);
    if ($condition)
    {
        $array_even.=$i.' ';
    }
    else
        $array_odd.=$i.' ';
}

echo "Nhóm các số chẵn: $array_even";
echo "<br />";
echo "Nhóm các số lẻ: $array_odd";
echo "<br />";

// 2. Tính giai thừa của 1 số bất kỳ

$n = 3;
$condition = $n > 0 ? true : false;

if ($condition)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++)
    {
        $result *= $i;
    }
    echo "Kết quả giai thừa của $n = $result";
}
