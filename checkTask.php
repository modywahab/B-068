<?php
if(!isset($_COOKIE['id'])){
    include 'newUser.php';
}
else {
     $user = 'root';
    $password = 'root';
    $db = 'HH';
    $host = 'localhost';
    $port = 8889;

    $conn = mysqli_connect($host,$user,$password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); }
    $db_selected = mysql9_select_db($db, $conn);

    $sql =  "
            select count(*) as count
            from checkList
            where   u_id= '".$_COOKIE['id']."' 
                    and t_id = '".$_POST['t_id']."'
            ";
   $result = mysqli_query($sql);
   $count = 0;
    while($row = mysql_fetch_array($result)){
        $count = $row['count'];
    }
    if($count = 0){
        $sql =  "
                insert into checkList
                (u_id, t_id, status)
                values ('".$_COOKIE['id']."','".$_POST['t_id']."',".$_POST['status']."')
                ";
    }
    else {
        $sql =  "
                update ceckList
                set    status = ".$_POST['status']."
                where u_id = '".$_COOKIE['id']."'and t_id = '".$_POST['t_id']."'
                ";
    }
}


?>