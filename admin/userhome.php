<?php
session_start();
if($_SESSION['email'])
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
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>

<html>
<head>
<title>Cloud Computing</title>
<link rel="shotcut icon" href="LOCKPASS.JPG">

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
         $str=$_SESSION['username'];
$fname=ucfirst($str);
echo "<b style='color:blue; font-size:20px; letter-spacing:1px;' >Welcome&raquo;<i style='color:red;'>".$fname."</i></b>";
?>

        
        
    </td>
    <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
    <td width="29%" bgcolor="#CC3333"><div align="center" class="style1">USER ACTIVITY </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Welcome to Online Cloud To Upload Data</h1>
      <span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7">WelCome to Online 
            Cloud. This Site will provide to upload data on cloud. 
            TO store the Information and Maintain of cloud. Its also Very useful to download the Data On Cloud very Fastly....</span></p>
      </blockquote>
    </div></td>
    <td valign="top">
      <table width="200" border="0">
         
          <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="download.php" style='color:white'>VIEW FILE</a></span></div></td>
          </tr>
        
        <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>
       
      <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">
                  <a href="update.php"  style='color:white'>UPDATE INFORMATION</a></span></div></td>
          </tr>
        
        <tr cellpadding="2"><td colspan="2"></td></tr>
 <tr cellpadding="2"><td colspan="2"></td></tr>
         <tr>
        <td colspan="2" bgcolor="#CC3300"><div><span class="style4">
                    <a href="Sendfeedback.php"  style='color:white'>SEND FEEDBACK</a></span></div></td>
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

<?php
}
else
{
    header('location:index.php');
}
?>


