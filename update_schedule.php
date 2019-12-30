<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=db_kopen_manage', 'root', '');
if(isset($_POST["id"]))
{
 $query = "UPDATE schedule SET desc_kegiatan=:title, waktu_kegiatan=:start_event WHERE schedule_id=:id";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],   
   ':id'   => $_POST['id']
  )
 );
}

?>
