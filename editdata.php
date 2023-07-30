<?php
include 'conn.php';
$id=$_POST['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$conn->query("UPDATE mytable SET name='".$name."', mobile='".$mobile."' WHERE id='".$id."'");

?>