<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

    $sinh_vien = array_map('str_getcsv', file('Students.csv'));
    foreach ($sinh_vien as $sv) {
        if ($sv[0] == $id) {
            echo "Sinh viên đã tồn tại";
            return;
        }
    }
    
    $handle = fopen('Students.csv', 'a');
    fputcsv($handle, array($id, $name, $age, $grade));
    fclose($handle);

    echo "Thêm sinh viên thành công";
}
?>

