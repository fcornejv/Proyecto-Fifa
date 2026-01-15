<?php
require_once "config.php";
$data = json_decode(file_get_contents("php://input"), true);
if ($data['username'] === 'admin' && $data['password'] === 'admin123') {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>