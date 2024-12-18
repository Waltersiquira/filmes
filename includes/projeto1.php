<?php 
$p1 = new mysqli('localhost', 'root', '', 'projeto1');
if ($p1->connect_error){
    echo 'erro';
    die();
}
$p1->query('set character_set_connection = utf8mb4');
$p1->query('set character_set_client = utf8mb4');
$p1->query('set character_set_results = utf8mb4');
?>