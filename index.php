<?php

$connection = new mysqli("localhost", "root", "", "stars");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();

echo '<style>
    body {
    background-color: #28282B;
    color: rgb(0, 255, 255);

    input {
    border-radius: 3px;
    border-color: rgb(0, 255, 255);
    border-style: solid;
    background-color: #3f3f41;
    color: lightgray;
    margin-top: 3px;
}
}
</style>';

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    $insert = "INSERT INTO users (username, pass)
    VALUES ('$username', '$password')";

    $connection->query($insert);
}

echo '<form method="POST">';
    echo "<label>Username: <input placeholder='Username' required name='username'/></label><br>";   
    echo "<label>Password: <input type='password' placeholder='Password' required name='pass'/></label><br>";
    echo "<input type='submit' value='Reģistreties'/>";
echo '</form>';
