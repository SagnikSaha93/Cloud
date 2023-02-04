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

             <form method='post' name='form' id='form' action='delMulUSER.php' onsubmit='return confirmdelete();'>
            <table width="950px" border="3">
            <?php 
            include '../dbconn.php';
            //$sql=mysql_query("select * from feedback");
//            $db="(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)
//       (HOST=localhost) (PORT=1521)))
//       (CONNECT_DATA=(SERVICE_NAME=xe)))";

    // Oracle 10g
    //$db="//localhost/xe";

   // $c=ocilogon("cryptonite", "cryptonite", $db);

    $s = mysql_query("select * from registration");
    
                if($s)
    {
        $fcout=mysql_num_fields($s);
        //echo $fcout;
      echo "<th><input type='submit' value='Delele USER' name='delete' style='color:white;background-color:black;font-size:10px; width:50px';></th>";
        for($i=0;$i<$fcout;$i++)
        {
            $fname=mysql_field_name($s, $i);
            echo "<th style='color:red'>$fname</th>";
        }
        
        while($row= mysql_fetch_array($s))
        {
          $id1=$row['email'];
            echo "<tr style='color:blue';><td style='color:blue'>&nbsp;&nbsp;&nbsp;<input type='checkbox' name='checkbox[]' id='checkbox[]' value=$id1></td>";
            echo "
                

              <td>".$row['fname']."</td>";
            echo "<td>".$row['lname']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['birthday']."</td>";
            echo "<td align='center'><a href='block.php?id={$row['status']}& email={$row['email']}& '><b class='clsss' title='Click to Block User'>".$row['status']."</b></a></td>";
            
        }
    }
    echo "</form>";
            ?>
            </table>
            <style>
                .clsss
                {
                    background-color: violet;
                    border-radius: 10px;
                    width: 200px;
                }
                .clsss:hover
                {
                   background-image: url(../images/go.gif);
                }

             </style>
            
            
            <p align="left" class="style5">&nbsp;</p>
      <blockquote>
          
      
      
      </blockquote>
    </div></td>
    <td valign="top">
      <table width="200" border="0">
         
          <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="upload.php" style='color:white'>UPLOAD FILE</a></span></div></td>
          </tr>

        <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>

      <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                  <a href="display.php"  style='color:white'>VIEW FILES</a></span></div></td>
          </tr>

 <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>

 <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                  <a href="delete.php"  style='color:white'>DELETE FILES</a></span></div></td>
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
<br><br><br><br><br><br><br><br><br><br><br><br>
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