<?php
header("Content-Type: application/json");
include '../config/db.php';

$result = $conn->query("SELECT * FROM data_table");
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
?>
