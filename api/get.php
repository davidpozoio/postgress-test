<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $message = require("connectDatabase.php");
    $query = "SELECT usuario_cedula  FROM gpa_devicedata WHERE usuario_name = 'Juanito'";
    $stmt = $conn->prepare($query);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}


?>