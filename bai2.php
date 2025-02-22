<?php
function daoNguocMang($mang) {
    $daoNguoc = [];
    $n = count($mang);
    for ($i = $n - 1; $i >= 0; $i--) {
        $daoNguoc[] = $mang[$i];
    }
    return $daoNguoc;
}

// Ví dụ sử dụng
$numbers = [1, 2, 3, 4, 5];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc);
?>
