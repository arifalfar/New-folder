<?php
include_once "../connection.php";
/**
 * @var $koneksi PDO
 */
$query = "SELECT * FROM buku";
$statement = $koneksi->query($query);
$statement->setFetchMode(PDO::FETCH_OBJ);
$results = $statement->fetchAll();
header('Content-type: application/json');
echo json_encode($results);
?>