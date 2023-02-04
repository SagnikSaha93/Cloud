<?php 
            //include 'dbconn.php';
            //$sql=mysql_query("select * from feedback");
//            $db="(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)
//       (HOST=localhost) (PORT=1521)))
//       (CONNECT_DATA=(SERVICE_NAME=xe)))";

include 'dbconn.php';
    // Oracle 10g
    //$db="//localhost/xe";
           $fn=$_POST['f1'];//$_FILES
           $ln=$_POST['f2'];
           $email=$_POST['f3'];
           $pw=$_POST['f4'];
           $mobile=$_POST['f7'];
           $bday=$_POST['f8']; 

            
    //$c=ocilogon("cryptonite", "cryptonite", $db);

    $s = mysql_query("update registration set fname='$fn', lname='$ln', password='$pw' ,email='$email', mobile='$mobile', birthday='$bday' where email='$email'");
    
                if($s>0)
    {
                 echo "<script>alert('$fn! Your Information successfully! Chnage ');window.location='update.php';</script>";
              
    }
    else
    {
             echo "<script>alert('$fn! Your Information NOT! Chnage ');window.location='update.php';</script>";
     
        }
        ?>