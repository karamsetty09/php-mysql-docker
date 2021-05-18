<?php

echo "Hello World from Docker PHP";
$mysqli = new mysqli("db", "root", "example", "details");

$sql = "INSERT INTO my_details (first_Name, last_name, date_of_birth, sex) VALUES('Venkata', 'Karamsetty', '26-02-1994', 'Male')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM my_details';

$users[] = NULL;
if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->first_Name . " " . $user->last_name;
    echo "<br>";
}

?>