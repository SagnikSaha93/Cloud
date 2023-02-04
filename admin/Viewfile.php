<?php
session_start();
if($_SESSION['admin'])
{
?>
<script language="javascript" type="text/javascript">
  document.oncontextmenu=RightMouseDown;
  document.onmousedown = mouseDown; 

  function mouseDown(e) {
      if (e.which==3) {//righClick
      alert("Disabled - do whatever you like here..");
   }
}
function RightMouseDown() { return false;}
</script>

<body>
<!--No Back Code Here-->
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>

         <html>
<head>
<title>Cloud Computing</title>
<link rel="shotcut icon" href="../LOCKPASS.JPG" title="CLOUD">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
    
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="image/topbkg.jpg">

    <tr>
    <td width="90%" valign="top">
<!--You can modify the text, color, size, number of loops and more on the flash header by editing the text file (fence.txt) included in the zip file.-->

<div align="left">
        <center><h1><b style="color: white">ONLINE COULD DATA STORAGE SYSTEM</b></h1></center>
<param name=movie value=image/fence.swf>
<param name=quality value=high>
<param name=BGCOLOR value=#000000>
<param name=SCALE value=showall>
<param name=wmode value=transparent> 
</object></div></td>
<td></td>
    <td width="10%">
     <img border="0" src="image/topright.jpg" width="203" height="68" align="right"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" background="img/blackbar.jpg">
  <tr>
    <td width="100%" align="right"><img border="0" src="image/blackbar.jpg" width="89" height="15"></td>
  </tr>
  </Table>
  <Table width="100%">
  <tr>
  <td>
    </td>
    <td>
	&nbsp;	
  </tr>
  
</table>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">
        <?php
         $str= "Admin";
$fname=ucfirst($str);
echo "<b style='color:blue; font-size:20px; letter-spacing:1px;' >Welcome&raquo;<i style='color:red;'>".$fname."</i></b>";
?>

        
        
    </td>
    <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
    <td width="29%" bgcolor="#CC3333"><div align="center" class="style1">ADMIN ACTIVITY </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
     
     
               <script type="text/javascript"> 
function confirmdelete()
{ 
 return confirm("Are you sure you want to delete?");  
} 
</script>
            <table width="950px" border="3">
                            <?php
// Connect to the database
    include '../dbconn.php';
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created`, `comment` FROM `cloud`';
//$result = $dbLink->query($sql);
$result= mysql_query($query) or die(mysql_error());
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
  	echo"<form method='post' name='form' id='form' action='delmultipleuser.php' onsubmit='return confirmdelete();'>";
  
        echo "<tr style='color:red'>
                     <td width='50' align='center'><input  id='delete' type='submit' name='delete' value='x'/></th>
			      
                    <td><b>Name</b></td>
                    <td><b>Mime</b></td>
                    <td><b>Size (bytes)</b></td>
                    <td><b>Created</b></td>
                    <td><b>Comment</b></td>
                    <td style='color:lawngreen'><b>Download</b></td>
                    <td style='color:lime'><b>Delete</b></td>
                </tr>";
 
        // Print each file
        $i=1;
        while($row = $result->fetch_assoc()) {
            
            
        if($i%2==0)
        {
            $color="green";
            
        }
 else {
     $color="yellow";
 }
 $id=$row['id'];
           
            echo "
                <tr style='background-color:$color' >
 
 <td><input type='checkbox' name='checkbox[]' id='checkbox[]' value=$id></td>                   
 <td>{$row['name']}</td>
                    
                    <td>{$row['mime']}</td>
                    <td>{$row['size']}KB</td>
                    <td>{$row['created']}</td>
                    <td>{$row['comment']}</td>
                    <td style='background-color:lawngreen' align='center'><a href='get_file.php?id={$row['id']}'>
                    <b class='clsss1' title='Click To Normal Download File'>
                    
                    
                    Download</B></a></td>
                     <td><a href='Deletefile.php?id={$row['id']}'><b class='clsss' title='Click To Delete File'>Delete</b></a></td>
                </tr>";
        
                          $i++;     
        }
 echo "</form>";
        // Close table
    }
 
    // Free the result
   // $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>  
                
                 <style>
                .clsss
                {
                    background-color: violet;
                    border-radius: 10px;
                }
                .clsss:hover
                {
                   background-image: url(../images/go.gif);
                }
                .clsss1
                {
                    background-color: slateblue;
                    border-radius: 5px;
                    width: 50px;
                }
                .clsss1:hover
                {
                   background-image: url(../images/go.gif);
                }
                .clsss2
                {
                    background-color: aqua;
                    border-radius: 10px;
                }
                .clsss2:hover
                {
                   background-image: url(../images/go.gif);
                }

             </style>
            </table>
         
            
            
                <style>
                    .clsss2
                {
                    background-color: lightskyblue;
                    border-radius:8px;
                }
                .clsss2:hover
                {
                   background-image: url(../images/go.gif);
                }
                </style>

        
        
    </div></td>
    <td valign="top">
      <table width="200" border="0">
         
          <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="Addfile.php" style='color:white'>UPLOAD FILE</a></span></div></td>
          </tr>
        
        <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>
       
      <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                  <a href="Viewfile.php"  style='color:white'>VIEW FILES</a></span></div></td>
          </tr>
        
        <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>
         <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="ViewUser.php"  style='color:white'>VIEW USERS</a></span></div></td>
          </tr> 
          <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>
          <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="viewfeedback.php" style='color:white'>VIEW FEEDBACKS</a></span></div></td>
          </tr>
        <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>
          <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="logout.php" style='color:white'>LOGOUT</a></span></div></td>
          </tr>
        
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
        </div>
    </form></td>
  </tr>
</table>
<br><br><br><br><br><br><br><br><br>
<table border="0" height="10px" width="100%" cellspacing="0" cellpadding="0" background="image/topbkg.jpg">
    <tr style="text-align: left; font-family:Arial; color:White ;margin-left:10px ; font-size:10px ;width:952px; height: 25px; background-image: url(img/BigImages/footer.jpg);background-repeat:no-repeat;background-position:right ;">&nbsp;</tr>
</table>

</body>
</html>



<?php
}
else
{
    header('location:../index.php');
}
?>