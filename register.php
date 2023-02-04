<?php
if(isset($_POST['register']))
{
   
            $fn=$_POST['f1'];//$_FILES
            $ln=$_POST['f2'];
            $email=$_POST['f3'];
            $pw=$_POST['f5'];
            $gender=$_POST['f6'];
            $mobile=$_POST['f7'];
            $bday=$_POST['f8']; 
        include 'dbconn.php';    
        
            
            $sql=mysql_query("select * from registration where email='$email'");
            if(mysql_num_rows($sql))
            {
            echo "<script>alert('This Mail ID Already Register TRY IT Other');window.location='registerDesign.php';</script>";
            }
 else {
        $query="INSERT INTO `registration`(`fname`, `lname`, `password`, `email`, `mobile`, `gender`, `birthday`, `status`)
        VALUES  ( '$fn', '{$ln}','{$pw}', '{$email}', '{$mobile}', '{$gender}', '{$bday}', 'Active' )";            

        $result= mysql_query($query) or die(mysql_error());
        if($result) 
            {
            //echo 'Success! Your Registration was successfully!';
            echo "<script>alert('Success! Your Registration was successfully!');window.location='index.php';</script>";
            }
            else { $di= mysql_error();  echo 'Error! Failed to insert the file'  . "<pre>{$di}</pre>";} 
     }
                
} else
{    
    echo "<script>alert('Please Fill The Registration Form');window.location='registerDesign.php';</script>";
    
 }
?>
