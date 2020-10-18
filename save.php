<?php
include_once 'db_connect.php';
$portrait_id = $_POST['portrait_id'];
$msg = $_POST['msg'];
if ($msg == "Say something...( I'm giving up on you?)") {
    header("location: index.php");
    exit;
}

$read_db = $pdo->prepare('select * from msg order by m_id desc LIMIT 1;');
$read_db->execute();
$data = $read_db->fetch();
if ($msg == $data['msg']) {
    header("location: index.php");
    exit;
}





$sql = "INSERT INTO msg(portrait_id,msg) values ({$portrait_id},'{$msg}')";
$save = $pdo->prepare($sql);
$save->execute();
header("location:index.php");
?>
