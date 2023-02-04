<?php
			
	if(isset($_POST['delete']))
	{
		$checkbox = $_POST['checkbox']; 
		$countCheck = count($_POST['checkbox']);
		
                //echo $checkbox;
		for($i=0;$i<$countCheck;$i++)
		{
			$del_id = $checkbox[$i];
			echo $del_id;
//                        
//                                $db="(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)
//       (HOST=localhost) (PORT=1521)))
//       (CONNECT_DATA=(SERVICE_NAME=xe)))";

         include '../dbconn.php';
    // Oracle 10g
    //$db="//localhost/xe";

                      //$c=ocilogon("cryptonite", "cryptonite", $db);

			$s = mysql_query("DELETE from REGISTRATION where EMAIL ='$del_id'");					
		//	$sql = "DELETE from feedback where username ='$del_id' limit 0";
			//$result = ociexecute($s);
			
		}
			if($s)
		         {	
                             echo "<script>alert('USER PROFILE  is Deleted Successfully');window.location='ViewUser.php';</script>";    
			//	header('Location: employee.php');
			}
			else
			{
                                      echo "<script>alert('PROBLEM TO DELETE USER');window.location='ViewUser.php';</script>";    
		
			//	echo "Please select atleast 1 record to delete ";
			}
	}
        
        
        else
			{
                                      echo "<script>alert('PROBLEM TO DELETE USER');window.location='ViewUser.php';</script>";    
		
			//	echo "Please select atleast 1 record to delete ";
			}
?>


