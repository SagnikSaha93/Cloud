<?php
echo $id=$_GET['id'];
echo $email=$_GET['email'];

      include '../dbconn.php';
    //$c=ocilogon("cryptonite", "cryptonite", $db);
    
if($id=='Active')
{
    $s = mysql_query("update registration set status='Block' where status='Active' and Email='$email'");
    
                if($s)
    { 
                    echo "<script>alert('This $email User Block');window.location='ViewUser.php';</script>";    
  }
else
  {
    echo "<script>alert('Error Occur');window.location='ViewUser.php';</script>";
  }
}
else if($id=='Block')

{
    $s = mysql_query("update registration set status='Active' where status='$id' and Email='$email'");
    
                if($s)
    { 
                    echo "<script>alert('This $email User Active');window.location='ViewUser.php';</script>";    
  }
 else
  {
    echo "<script>alert('Error Occur');window.location='ViewUser.php';</script>";
  }
}

?>