<?php
header('Content-Type: application/json');

// Tài khoản & mật khẩu đúng
$correctUser = 'admin';
$correctPass = '123';

// Lấy dữ liệu từ request
$username = $_GET['username'];
$password = $_GET['password'];

if ($username === $correctUser && $password === $correctPass) {
    echo json_encode(["SUCCESS" => "TRUE"]);
} else {
    echo json_encode(["SUCCESS" => "FALSE"]);
}
