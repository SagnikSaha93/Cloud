<?php
 session_start();
if(isset($_POST['login']))
{
   	$email=$_POST['f3'];
	$pass=$_POST['f4']; 
	  $userAdmin=$_POST['user'];
     if($userAdmin=='User')   
     {     
        include 'dbconn.php';
        $query="select * from registration where email='$email' and password='$pass' and status='Active'";
        $sql=mysql_query($query);
        $roc=  mysql_fetch_array($sql);
        if(mysql_num_rows($sql))
         {  
             
             $_SESSION['email']=$roc['email'];
             $_SESSION['username']=$roc['fname'];
	   echo "<script>location='userhome.php'</script>";
           
       }
        else
        {
            echo "<script>alert('Invalid Email OR Password');window.location='index.php';</script>"; 
        }
     }
      else if($userAdmin=='Admin')   
     {     
          if($email=='admin@gmail.com' && $pass=='admin')
          {
              $_SESSION['admin']=$email;
        echo "<script>location='admin/index.php'</script>";
          }
         else
        {
            echo "<script>alert('Invalid creadential');window.location='index.php';</script>"; 
        } 
     }
     
     
     
     echo mysql_error();
  
  
}
?>
  
