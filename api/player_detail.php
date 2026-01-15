<?php
require_once "config.php";
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT id, long_name, pace, shooting, passing, dribbling, defending, physic, club_name, player_positions, overall 
        FROM players WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$player = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($player ? $player : ["error" => "No encontrado"]);
?>