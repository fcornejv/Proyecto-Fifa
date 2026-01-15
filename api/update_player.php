<?php
require_once "config.php";
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id'])) {
    $sql = "UPDATE players SET long_name = :name, club_name = :club, player_positions = :pos, overall = :ov 
            WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name' => $data['long_name'],
        'club' => $data['club_name'],
        'pos'  => $data['player_positions'],
        'ov'   => $data['overall'],
        'id'   => $data['id']
    ]);
    echo json_encode(["success" => true]);
}
?>