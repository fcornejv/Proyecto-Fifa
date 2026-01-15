<?php
require_once "config.php";

$sql = "SELECT long_name, club_name, overall, player_positions FROM players LIMIT 100";
$stmt = $conn->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="jugadores.csv"');

$output = fopen('php://output', 'w');
if (count($rows) > 0) fputcsv($output, array_keys($rows[0]));
foreach ($rows as $row) fputcsv($output, $row);
fclose($output);
?>