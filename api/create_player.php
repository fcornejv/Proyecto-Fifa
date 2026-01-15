<?php
require_once "config.php";
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $sql = "INSERT INTO players (long_name, club_name, player_positions, overall, pace, shooting, passing, dribbling, defending, physic, fifa_version) 
            VALUES (:name, :club, :pos, :ov, :pa, :sh, :ps, :dr, :de, :ph, '23')";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name' => $data['long_name'],
        'club' => $data['club_name'],
        'pos'  => $data['player_positions'],
        'ov'   => $data['overall'],
        'pa'   => $data['pace'],
        'sh'   => $data['shooting'],
        'ps'   => $data['passing'],
        'dr'   => $data['dribbling'],
        'de'   => $data['defending'],
        'ph'   => $data['physic']
    ]);
    echo json_encode(["success" => true, "message" => "Jugador creado"]);
}
?>