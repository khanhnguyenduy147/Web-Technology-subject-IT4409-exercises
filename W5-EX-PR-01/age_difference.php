<!DOCTYPE html>
<html>
<head>
    <title>Tính Tuổi và Số Ngày Chênh Lệch</title>
</head>
<body>

<h1>Tính Tuổi và Số Ngày Chênh Lệch</h1>

<form method="post" action="">
    <label>Người thứ nhất:</label><br>
    Họ Tên: <input type="text" name="name1"><br>
    Ngày Sinh: <input type="date" name="dob1"><br>

    <label>Người thứ hai:</label><br>
    Họ Tên: <input type="text" name="name2"><br>
    Ngày Sinh: <input type="date" name="dob2"><br>

    <input type="submit" value="Tính">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name1 = $_POST["name1"];
    $dob1 = new DateTime($_POST["dob1"]);

    $name2 = $_POST["name2"];
    $dob2 = new DateTime($_POST["dob2"]);

    // Tính tuổi
    $today = new DateTime();
    $age1 = $dob1->diff($today)->y;
    $age2 = $dob2->diff($today)->y;

    // Tính số ngày chênh lệch
    $diff = $dob1->diff($dob2)->format("%a");

    echo "<h2>Kết quả:</h2>";
    echo "Người thứ nhất ($name1) năm nay $age1 tuổi.<br>";
    echo "Người thứ hai ($name2) năm nay $age2 tuổi.<br>";
    echo "Số ngày chênh lệch giữa hai người: $diff ngày.";
}
?>

</body>
</html>
