<?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
       
          include '../dbconn.php';
        $name=  trim($_POST['name']);
       $type=  trim($_POST['type']);
   
        //echo $name;
        if($name=="")
        {
             echo "<script>alert('error : You did not enter a Name.!');window.location='Addfile.php';</script>";
        }
        
        
        else if($type=="")
        {
             echo "<script>alert('error : You did not enter a File Type.!');window.location='Addfile.php';</script>";
        }
     else
     {  
        $comment=  trim($_POST['comment']);
        $comment1=str_word_count($comment);
     if($comment1<2)
        {
             echo "<script>alert('error : You did not enter a Comment.!');window.location='Addfile.php';</script>";
        }
        
        else
        {
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
        
        
        
        
        // Create the SQL query
        $query = "
            INSERT INTO cloud('name','mime','size','data','created','comment') VALUES ('{$name}', '{$mime}', {$size}, '{$data}', NOW(),'$comment')";

        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
       echo "<script>alert('Success! Your file was successfully Sended to USER!');window.location='Addfile.php';</script>";
                 
           // echo 'Success! Your file was successfully added!';
        }
        else {
          //  echo 'Error! Failed to insert the file'
            //   . "<pre>{$dbLink->error}</pre>";
       echo "<script>alert('Error! Failed to insert the file');window.location='Addfile.php';</script>";
      
        }
        }
     }
    }
    else {
       echo "<script>alert('An error accured while the file was being uploaded.');window.location='Addfile.php';</script>";
       
//        echo 'An error accured while the file was being uploaded. '
//           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
       echo "<script>alert('Error! A file was not sent!');window.location='Addfile.php';</script>";

   // echo 'Error! A file was not sent!';
}
 
?>    