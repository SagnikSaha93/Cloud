<?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
          include 'dbcloud.php';
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
 
      echo   $data1=  pack($data);
        
        // Create the SQL query
               echo $name;
                 echo "<br>";
               echo $mime;
               echo "</br>";
       //$data;
             //  $data1=base_convert($data,16,8);
             echo $size;
             $comment=$_POST['comment'];
              $db="(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)
       (HOST=localhost) (PORT=1521)))
       (CONNECT_DATA=(SERVICE_NAME=xe)))";

    // Oracle 10g
    //$db="//localhost/xe";

    $c=ocilogon("cloud", "cloud", $db);

    $s = ociparse($c, "insert into cloud1 values('52','$name','$mime','$size','$data1','sadik')");
    
       

    if(ociexecute($s))
    {
        
        echo "inserted";
        }
    else
    {
	$e = oci_error($s); 
        echo htmlentities($e['message']);
    }
             
             
             
             
             
             
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
//echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>    