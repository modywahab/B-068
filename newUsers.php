<?php
if(!isset($_COOKIE['id'])){
    setcookie('id',uniqid());
    
    $user = 'root';
    $password = 'root';
    $db = 'HH';
    $host = 'localhost';
    $port = 8889;

    $conn = mysqli_connect($host,$user,$password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); }
    $db_selected = mysql9_select_db($db, $conn);

    $sql =" inset into users (id)
            values ".$_COOKIE['id']."";
    $result = mysqli_query($sql);

    




}
?>