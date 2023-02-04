<html>
<head>
<title>Cloud Computing</title>
<link rel="shotcut icon" href="LOCKPASS.JPG">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
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
    <center><h1><b><a href="index.php" style="color: white">ONLINE COULD DATA STORAGE SYSTEM</a></b></h1></center> 
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
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
<td width="29%" bgcolor="#CC3333"><div align="center" class="style1"><a href="index.php">User Login</a> </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
      
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
        
            
            
            <form name="f"  action="register.php" method="post"   enctype="multipart/form-data">
            <table cellpading="1"  align="center" width="500px" >
<th colspan="2"><h1 style="color:red">REGISTRATION FORM</th>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">First Name</b></td><td><input type="text" name="f1"   maxlength="20" required="true" onBlur='firstname()' class="cls1"/></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Last Name</b></td><td><input type="text" name="f2"required="true" onBlur='lastname()' maxlength="20" class="cls1" /></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Your Email</b></td><td><input type="email" name="f3" required="true" onBlur='email()' class="cls1"/></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Password</b></td><td><input type="password" name="f4"required="true" onBlur="validate5()" class="cls1"/></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Confirm Password</b></td><td><input type="password" name="f5" onBlur="validate3()" required="true" class="cls1"/></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Gender</b></td><td><input type="radio" name="f6" required="true" value="male"/><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Male</b>
<input type="radio" required="true" name="f6" value="female"/><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Female</b></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Mobile Number</b></td><td><input type="tel" maxlength="10" required="true" onBlur="mob()" name="f7" class="cls1"/></td></tr>
<tr><td><b style="font-size: 15px;font-family: cursive; font-size-adjust:2px; z-index: 1px; ">Birthday</b></td><td><input type="date" name="f8" required="true" class="cls1"/> </td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td></td><td><p class="button-style"><input type="submit"  id="x"   name="register" value="Sign Up" align="center" class="cls1"/></p></td></tr>

</table>
</form>
        
        </div></td>
    <td valign="top"><form action="login.php" method="post">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input type="email" name="f3" id="loginid2" required="true"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input type="password" name="f4" id="pass2" required="true"></td>
        </tr>
        <tr cellpadding="2"><td colspan="2"></td></tr>
        <tr>
            <td colspan="2"><span class="style2">Select User</span>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="user"  id="pass2" style="width: 120px">
           <option>User</option>
            <option>Admin</option>    
          </select></td>
        </tr>
        
        <tr>
          <td colspan="2"><span class="errors">
                      </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input  name="login" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
        <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">New User ? <a href="registerDesign.php">Signup Free</a></span></div></td>
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
