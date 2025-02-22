<?php
function timgiatri($giatri, $mang) {
  
    foreach ($mang as $index => $value) {
        if ($value == $giatri) {
            return $index; 
        }
    }
    return -1; 
}
$mang = [10, 20, 30, 40, 50]; 
$giaTri = 20; 

$index = timgiaTri($giatri, $mang);

if ($index != -1) {
    echo "giá trị $giaTri tìm thấy tại index $index.";
} else {
    echo "giá trị $giaTri không có trong mảng.";
}
?>