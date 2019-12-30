
<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=db_kopen_manage', 'root', '');
session_start();
if(isset($_POST["title"]))
{
 $query = " INSERT INTO schedule (desc_kegiatan, waktu_kegiatan, user_id) VALUES (:title, :start_event, :user)";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],   
   ':user'=> $_SESSION['userid'],
  )
 );
}


?>