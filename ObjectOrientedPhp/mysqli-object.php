<?php
$servername = "localhost";
$username = "root21";
$password = "f]h9Cj1b2e.yp!)W";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students ";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Id: {$row["id"]} - Name: {$row["student_name"]} - Age: {$row["age"]} \n";
    }

}
else{
    echo "No result found.";
}

$conn->close();

?>