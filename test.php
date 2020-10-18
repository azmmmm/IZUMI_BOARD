<?php
    include_once "db_connect.php";
    $read_db = $pdo->prepare('select * from msg order by m_id desc LIMIT 1;');
    $read_db->execute();
    $data = $read_db->fetch();
    var_dump($data);
    ?>