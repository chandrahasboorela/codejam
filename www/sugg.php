<?php
  $servername = "localhost";
  $username = "root";
  $password = "321654";
  $dbname = "codejam";
  $_SERVER["REQUEST_METHOD"] == "POST";
  $name = htmlspecialchars($_POST['name']);
  $text = htmlspecialchars($_POST['idea']);
$conn = new mysqli($servername, $username, $password,$dbname);


if(!empty($name)||!empty($text)){
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  $sql =sprintf("%s %s %s %s %s","INSERT INTO suggestions VALUES (NULL,'",$name,"' ,'",$text,"' );");
if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost:8080/www/');
  $conn->close();
  exit;
}
else {
echo "Error creating database: " . $conn->error;
}
}
else {
  header('Location: http://localhost:8080/www/');
  $conn->close();
  exit();
}
?>
