<?php
$db = new PDO("mysql:host=localhost;dbname=friends;charset=utf8","root","");
$sql = "select * from myfriends";
$data = "";
if($rs = $db -> query($sql)){
    if($rows = $rs -> fetchAll(PDO::FETCH_ASSOC)){
        $data = json_encode($rows);
    }
}
echo $data;
?>