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

    $sql =" select t.*, 
            (case when c.status = null then 0 else c.status end) as  status
            from    tasks as t
                    left join checkList as c on (t.id = c.task_id)
            where id = '".$id."'";
    $result = mysqli_query($sql);
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
 
    echo json_encode($emparray);

}



?>