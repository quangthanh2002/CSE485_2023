<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="InsertStudents.php" method="post">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required><br>

    <label for="name">Tên:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="age">Tuổi:</label>
    <input type="number" id="age" name="age" required><br>

    <label for="grade">Lớp:</label>
    <input type="text" id="grade" name="grade" required><br>

    <input type="submit" value="Thêm sinh viên">
</form>

</body>
</html>