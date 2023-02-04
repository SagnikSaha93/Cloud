<?php
$id=$_GET['id'];
include '../dbconn.php';
$query=mysql_query("DELETE FROM `cloud` WHERE  id='$id'");
if($query==1)
{
    echo "<script>alert('File is Deleted Successfully');window.location='Viewfile.php';</script>";    
}
else
{
    echo "<script>alert('Error Occur');window.location='Viewfile.php';</script>";
}
?>