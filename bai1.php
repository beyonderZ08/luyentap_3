<?php
function xapXep(&$mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($mang[$j] > $mang[$j + 1]) {
        
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
            }
        }
    }
}

// Ví dụ sử dụng
$numbers = [4, 2, 8, 1];
xapXep($numbers);
print_r($numbers);
?>