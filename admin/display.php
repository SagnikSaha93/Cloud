<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Download Files</title>
	<style type="text/css">
	#wrapper {
	margin: 0 auto;
	float: none;
	width:70%;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
    font-size:14;
    font-weight:bold;
}
		</style>
</head>


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


<body  align="center">

<br>
<div class="container home">
<font face="comic sans ms">
<h3><center> List of Files the can be download </center> </h3>
</font>

 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">Subject</font></th>
    <th><font face="comic sans ms">Topic </font></th>
	<th><font face="comic sans ms">Download Files </font></th>
  </tr>
   </thead>
    <tbody>
                        <?php

	$link=mysql_connect("localhost","root","");
	mysql_select_db("cloud",$link);
	$q="select count(*) \"total\"  from presentation";
	$ros=mysql_query($q,$link);
	$row=(mysql_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$q="SELECT * FROM presentation ORDER BY subject ASC limit $k,$dis";
	$ros=mysql_query($q,$link);
	
	while($row=mysql_fetch_array($ros))
	{
		echo '<tr>';
		echo '<td align=center>' . $row['subject'];
		echo '<td align=center>' .$row['topic'];
		echo "<td align=center><a title='Click here to download in file.' 
		     href='download.php?id={$row['file']}'>{$row['file']} </a>"; 
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	if($page_cur>1)
	{
	 echo '<a href="display.php?page='.($page_cur-1).'" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
     }
	else
	{
	  
	  echo '<input style="background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Previous "> ';
	  
	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{
		    
			echo '<input style="background-color:DeepSkyBlue ;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';
	
		}
		else
		{
		echo '<a href="display.php?page='.$i.'"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="display.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
     }
   
?>

</div>
</body>
</html>
