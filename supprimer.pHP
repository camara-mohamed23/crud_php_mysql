<?php 
include "db_connecte.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql ="DELETE FROM `personne` WHERE  id = $id" ;
    $con->query($sql);
}
header("location: index.php");
exit;





?>