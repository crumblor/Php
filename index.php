<?php
$connection = new mysqli("localhost", "root", "", "stars");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();
print_r($data);

echo '<form>';

echo '</form>';
