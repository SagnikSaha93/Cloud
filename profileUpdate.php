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
     
            <br></br>
                      <table>
            <?php 
            
$email= $_GET['email'];

//    $c=ocilogon("cryptonite", "cryptonite", $db);
    include 'dbconn.php';
    $s = mysql_query("select * from registration where email='$email'");
    
                if($s==TRUE)
    {
        $fcout=mysql_num_fields($s);
        //echo $fcout;
        
        $row= mysql_fetch_array($s);
    //    echo $row['fname'];
        ?>
     
                            
                            
                            
                            
                            
                             <script>
        function firstname()
    {
      var reg=new RegExp("^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$");
                var nam=document.f.f1.value;
                var namlen=nam.length;
                //alert(namlen);
                var res=nam.match(reg);

                if(res)
                {
                    if(namlen<3)
                    {
                        alert(" FIRSTNAME  length shoud not be less than 4 charecters and Only CHAR And THE NUMBER");
                        
                        document.f.f1.focus();
                    }
                }
                else
                {
                    alert(" FIRSTNAME  should contain alphabetsand the length should not be less than 4 characters");
                document.f.f1.focus();
            }
    }
    function lastname()
    {
        var reg=new RegExp("^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$");
                var nam=document.f.f2.value;
                var namlen=nam.length;
                //alert(namlen);
                var res=nam.match(reg);

                if(res)
                {
                    if(namlen<3)
                    {
                        alert("LASTTNAME length shoud not be less than 4 charecters and Only CHAR And THE NUMBER");
                        
                        document.f.f2.focus();
                    }
                }
                else
                {
                    alert("LASTTNAME should contain alphabetsand the length should not be less than 4 characters");
                document.f.f2.focus();
            }

    }
    
            function email()
{


    var mail=document.f.f3.value;
                var reg1=new RegExp("^([a-z A-Z 0-9])+(\>a-z A-Z 0-9_-])*@([a-z A-Z 0-9])|(\>[a-z A-Z 0-9_-]+)+$");
                var res1=mail.match(reg1);
                if(res1)
                {
                }
                else
                {
                    alert("should not contain any invalid and must follow the standard pattern name@domain.com");
                document.f.f3.focus();
            }
}

function validate5()
{


         var pwd=document.f.f4.value;
                var pwdlen=pwd.length;
                if(pwdlen<6)
                {
                    alert("password should not be less than 6 charecters length");
                    document.f.f4.focus();
                }


}
function validate3()
{
    var x=document.f.f5.value;
    var y=document.f.f4.value;
    if(x==y)
        {}
    else
        {
            alert('pwd and confirm pwd should be same');
            document.f.f5.focus();

        }



}

function mob()
{
 var phnum=document.f.f7.value;
               var rph = document.f.f7.value;
                var reg2=new RegExp("[0-9]");
                var res2=phnum.match(reg2);

                var phlen=phnum.length;
                if(res2)
                {
                    if(phlen<10)
                    {
                        alert("phone number should contain 10 digits only");
                        document.f.f7.focus();
                    }
                    if(phlen<10)
                    {
                        alert("phone number should contain 10 digits only");
                        document.f.f7.focus();
                    }
                }
                else
                {
                    alert("phone number should contain 10 digits only");
           document.f.f7.focus();
           }
            }


 </script>
    <style>
        .cls1{
            border-radius: 6px;
            font-size: 15px;
        }
    </style>
    <div class="content_panel_3col_section margin_right_60">
        <form name="f"  action="change.php" method="post"   enctype="multipart/form-data">
            <table align="center" width="400px" >
<tr><td><b style="color:red;font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">First Name</b></td>
    <td><input type="text" name="f1"  value="<?php echo $row['fname']; ?>" maxlength="20" required="true" onBlur='firstname()' class="cls1"/></td></tr>
<tr><td><b style="color:red;font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Last Name</b></td>
    <td><input type="text" name="f2"required="true" onBlur='lastname()' maxlength="20" class="cls1" value="<?php echo $row['lname']; ?>" /></td></tr>
<tr><td><b style="color:red;font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Your Email</b></td>
    <td><input type="email" name="f3" readonly onBlur='email()' class="cls1" value="<?php echo $row['email']; ?>"/></td></tr>
<tr><td><b style="color:red;font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Password</b></td>
    <td><input type="text" name="f4"required="true" onBlur="validate5()" class="cls1" value="<?php echo $row['password']; ?>"/></td></tr>

                
                
 <tr><td><b style="color:red;font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Mobile Number</b></td>
     <td><input type="tel" maxlength="10" required="true" onBlur="mob()" name="f7" class="cls1" value="<?php echo $row['mobile']; ?>"/></td></tr>



<tr><td><b style="color:red;font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Birthday</b></td><td><input type="date" name="f8" required="true" class="cls1" value="<?php echo $row['birthday']; ?>"/> </td></tr>




<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><p class="button-style"><input type="submit"  class="is" id="x"  title="Click To Update"  name="register" value="Change" align="center" class="cls1"/></p></td></tr>

</table>
</form>
        <style>
            .is:hover
            {
                background-image: url(images/go.gif);
                cursor:url;
                
            }
            #x
            {
                font-size: 16px;
                border-radius: 8px;
                background-color:silver;
            }
        </style>
                            
<?php    }
            ?>
          
            
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
    header('location:index.php');
}
?>