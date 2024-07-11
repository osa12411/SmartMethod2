<?php
$connection = new mysqli("localhost", "root", "root", "robot_control5");

if ($connection->connect_error) {
    echo "Eror";
} else {
    $query = "SELECT direction FROM robot_movements ORDER BY id DESC LIMIT 1";
    $response = $connection->query($query);

    if ($response->num_rows > 0) {
        $data = $response->fetch_assoc();
        echo $data['direction'];
    } else {
        echo "error";
    }
    $connection->close();
}
?>
