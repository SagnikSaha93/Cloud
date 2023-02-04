<?php
session_start();
//include 'dbconn.php';
$email=$_SESSION['email'];
$uname=$_SESSION['username'];
$feedback=$_POST['Body'];
if(str_word_count($feedback)>1)
{
    
    
  
    
    
      $Date=  date('d/m/y');
//$query=mysql_query("INSERT INTO `feedback`(`username`, `email`, `feedback`) VALUES ('$uname','$email','$feedback')");

// $db="(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)
//       (HOST=localhost) (PORT=1521)))
//       (CONNECT_DATA=(SERVICE_NAME=xe)))";

    // Oracle 10g
    //$db="//localhost/xe";

    include 'dbconn.php';
    //$c=ocilogon("cryptonite", "cryptonite", $db);

    $s = mysql_query("insert into feedback values('$uname','$email','$feedback','$Date')");

    if($s)
{
    echo "<script>alert('Comment is Sended to Admin');window.location='Sendfeedback.php';</script>";
}
else
{
    echo mysql_error();
    echo "<script>alert('Comment is NOT Sended to Admin');window.location='Sendfeedback.php';</script>";
}
}
else
    {
    echo "<script>alert('Comment is NOT Sended to Admin');window.location='Sendfeedback.php';</script>";
}

?>




