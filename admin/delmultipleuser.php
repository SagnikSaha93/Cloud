<?php
	require '../dbconn.php';
			
	if(isset($_POST['delete']))
	{
		$checkbox = $_POST['checkbox']; 
		$countCheck = count($_POST['checkbox']);
		
                //echo $checkbox;
		for($i=0;$i<$countCheck;$i++)
		{
			$del_id = $checkbox[$i];
			//echo $del_id;
								
			$sql = "DELETE from cloud where id = $del_id";
			$result = mysql_query($sql) or die(mysql_error());
			
		}
			if($result)
		      {	
                             echo "<script>alert('File is Deleted Successfully');window.location='Viewfile.php';</script>";    
			//	header('Location: employee.php');
			}
			else
			{
                                      echo "<script>alert('Error');window.location='Viewfile.php';</script>";    
		
			//	echo "Please select atleast 1 record to delete ";
			}
	}
?>


