<?php
$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = "shoeshop";
$conn = mysqli_connect($hostname, $username, $password,$dbname);
if (!$conn) {
 die('Không thể kết nối: ' . mysqli_error($conn));
 exit();
}
echo 'Kết nối thành công';
mysqli_close($conn);
?>