<?php
$students = [
    ["name" => "Nguyễn Văn A", "dob" => "2001-05-10", "gender" => "Nam", "math" => 7.5, "literature" => 6.8, "english" => 8.0],
    ["name" => "Trần Thị B", "dob" => "2002-03-15", "gender" => "Nữ", "math" => 9.0, "literature" => 8.5, "english" => 8.2],
    ["name" => "Lê Văn C", "dob" => "2001-07-20", "gender" => "Nam", "math" => 6.0, "literature" => 7.2, "english" => 7.5],
    ["name" => "Phạm Thị D", "dob" => "2000-09-25", "gender" => "Nữ", "math" => 8.5, "literature" => 7.8, "english" => 9.0],
    ["name" => "Hoàng Anh E", "dob" => "2003-06-12", "gender" => "Nam", "math" => 8.5, "literature" => 8.0, "english" => 8.2],
    ["name" => "Nguyễn Thị F", "dob" => "2002-08-30", "gender" => "Nữ", "math" => 8.0, "literature" => 7.0, "english" => 7.5],
    ["name" => "Trần Văn G", "dob" => "2001-11-10", "gender" => "Nam", "math" => 8.2, "literature" => 7.9, "english" => 8.4],
    ["name" => "Nguyễn Hoàng H", "dob" => "2001-02-10", "gender" => "Nam", "math" => 7.8, "literature" => 6.5, "english" => 7.0],
    ["name" => "Lê Thị I", "dob" => "2001-12-01", "gender" => "Nữ", "math" => 6.9, "literature" => 7.8, "english" => 7.6],
    ["name" => "Phan Thi J", "dob" => "2002-06-20", "gender" => "Nữ", "math" => 8.7, "literature" => 9.0, "english" => 9.2],
    ["name" => "Trương Văn K", "dob" => "2003-04-14", "gender" => "Nam", "math" => 8.3, "literature" => 7.5, "english" => 7.8],
    ["name" => "Nguyễn Thanh L", "dob" => "2000-11-22", "gender" => "Nam", "math" => 8.6, "literature" => 8.2, "english" => 8.5],
    ["name" => "Vũ Thị M", "dob" => "2001-09-12", "gender" => "Nữ", "math" => 8.0, "literature" => 8.3, "english" => 7.9],
    ["name" => "Đỗ Hoàng N", "dob" => "2002-07-18", "gender" => "Nữ", "math" => 7.4, "literature" => 6.9, "english" => 7.8],
    ["name" => "Hoàng Minh O", "dob" => "2000-03-25", "gender" => "Nam", "math" => 7.9, "literature" => 8.1, "english" => 8.2],
    ["name" => "Lê Thị P", "dob" => "2003-10-05", "gender" => "Nữ", "math" => 9.0, "literature" => 8.5, "english" => 8.7],
    ["name" => "Trần Thi Q", "dob" => "2002-05-09", "gender" => "Nữ", "math" => 7.2, "literature" => 6.8, "english" => 8.0],
    ["name" => "Nguyễn Minh R", "dob" => "2001-04-02", "gender" => "Nam", "math" => 8.4, "literature" => 8.0, "english" => 8.3],
    ["name" => "Bùi Thị S", "dob" => "2002-09-18", "gender" => "Nữ", "math" => 7.7, "literature" => 7.0, "english" => 8.0]
];

// Tính điểm trung bình cho các sinh viên
foreach ($students as &$student) {
    $student["average"] = ($student["math"] + $student["literature"] + $student["english"]) / 3;
}
unset($student);

function sapXepTheoTen(&$students) {
    usort($students, function ($a, $b) {
        return strcmp($a["name"], $b["name"]);
    });
}

function timNuSinhCaoNhat($students) {
    $femaleStudents = array_filter($students, function ($student) {
        return $student["gender"] === "Nữ";
    });
    if (empty($femaleStudents)) {
        return null;
    }
    usort($femaleStudents, fn($a, $b) => $b["average"] <=> $a["average"]);
    return $femaleStudents[0];
}

function inDanhSachSinhVien($students) {
    echo "<style>
            table { border-collapse: collapse; width: 100%; }
            th, td { border: 1px solid black; padding: 8px; text-align: left; }
          </style>";
    
    echo "<table>";
    echo "<tr><th>Họ tên</th><th>Ngày sinh</th><th>Giới tính</th><th>Toán</th><th>Văn</th><th>Tiếng Anh</th><th>Điểm TB</th></tr>";
    foreach ($students as $student) {
        echo "<tr>
                <td>{$student["name"]}</td>
                <td>{$student["dob"]}</td>
                <td>{$student["gender"]}</td>
                <td>{$student["math"]}</td>
                <td>{$student["literature"]}</td>
                <td>{$student["english"]}</td>
                <td>" . number_format($student["average"], 2) . "</td>
              </tr>";
    }
    echo "</table>";
}

sapXepTheoTen($students);
echo "<h3>Danh sách sinh viên sắp xếp theo tên:</h3>";
inDanhSachSinhVien($students);

$topFemale = timNuSinhCaoNhat($students);
if ($topFemale) {
    echo "<h3>Nữ sinh có điểm TB cao nhất:</h3>";
    inDanhSachSinhVien([$topFemale]);
}
?>
