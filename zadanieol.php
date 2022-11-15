<?php
$hostname = 'localhost'; 
$database = 'zadanieol'; 
$username = 'root'; 
$password = ''; 

$conn = mysqli_connect($hostname, $username, $password , $database);

$query = "SELECT imie, nazwisko, wiek FROM lista";
$result = mysqli_query($conn, $query);

echo "<ol>";
while($row = mysqli_fetch_row($result)){
    echo "<li>";
    echo $row[0]. ' '. $row[1]. ' '. $row[2]."<br>";
    echo "</li>";
}
echo "</ol>";
?>
