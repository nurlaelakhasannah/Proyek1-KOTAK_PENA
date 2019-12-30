<?php

$connect = new PDO('mysql:host=localhost;dbname=db_kopen_manage', 'root', '');

$data = array();

$query = "SELECT * FROM schedule ORDER BY schedule_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["schedule_id"],
  'title'   => $row["desc_kegiatan"],
  'start'   => $row["waktu_kegiatan"],  
 );
}

echo json_encode($data);

?>
