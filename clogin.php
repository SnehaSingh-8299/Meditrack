<html>
<head>
<title>MEDI-TRACK</TITLE>
<link href="logo.png" rel="icon"/>
<style>
body
{
background: linear-gradient(to top left, #AAD68A 0%, #006666 100%);
}
marquee
{
color:crimson;
color:#ffffff;
}
#outer
{
height:1000px;
width:1000px;
border:0px ;
margin-left:255px;
margin-top:10px;
border-radius:10px 10px 10px 10px;
}
#a
{
height:500px;
width:1000px;
color:lightgray;
background-image:url('7.png');
border-radius:10px 10px 0px 0px;
}
#b
{
height:500px;
width:1000px;
background-image:url('6.png');
}
#main
{
	height:500px;
	width:997px;
	border:1px solid;
	//background-color:white;
}
#footer
{
	height:100px;
	width:1000px;
	//background-color:blue;
	margin-left:255px;
	border-radius:0px 0px 10px 10px;
}
#lfooter
{
	height:70px;
	width:500px;
	background-color:SeaGreen;
	color:white;
	font-size:20px;
	padding-top:30px;
	text-align:center;
	float:left;
	border:0px auto;
	border-radius:0px 0px 0px 10px;
}
#rfooter
{
	height:70px;
	width:500px;
	background-color:powderblue;
	float:left;
	font-size:20px;
	padding-top:30px;
	text-align:center;
	border-radius:0px 0px 10px 0px;
}
#f
{
	height:100px;
	width:100px;
	}
#g
{
	float:left;
	align:center;
}
#n
{
	float:left;
	align:center;
}
#s
{
	float:left;
	align:center;
}
#w
{
	float:left;
	align:center;
}
</style>
</head>
<body>
<h3><p style="font-size:30px;">
 <marquee behavior="alternate" srollamount="10">-----MEDI-TRACK-----</marquee></h3></p><br/><br/>
<div id="outer">
<div id="a"><p style="text-align:center;font-family:Algerian;color:lightblue;font-size:40px;margin-top:00px;"><br/><br/><br/><br/><br/><br/><br/><br/><b></b></P>
</div>
<div id="b">
<div id="main">
<h2 style="color:blue;text-align:center;padding:0;">LOGIN NOW!!!</h2><hr/>
<form action='cloginvalidate.php' method="post">
<table align=center border="1">
<tr>
	<td align="right"><b>CUSTOMER ID:  </b></td>
	<td align="left">
	<input type="text" name="cid" size="30" maxlength="20" placeholder="ENTER CUSTOMER ID" required="" style="width:300px;height:30px;font-size:16px;"/>
	</td>
</tr><BR/><BR/><BR/>

<tr>
	<td align="right"><b>PASSWORD : </b></td>
	<td align="left">
	<input type="password" name="cpass" size="30" maxlength="20" placeholder="ENTER CUSTOMER PASSWORD " required="" style="width:300px;height:30px;font-size:16px;"/>
	</td>
</tr>
</table><BR/><BR/>
<center>
<input type="submit" name="clogin" value="LOGIN" style="width:100px; height:30px;background-color:lightblue;align:left;" />
</a><br/><br/>
</form>
<form metod="post" action="csingup.php">
<input type="submit" name="csingup" value="SIGN UP" style="width:100px; height:30px;background-color:lightblue;align:left;" />
</form>
</center>
</div>
</div>
</div>
<div id="footer">
<div id="lfooter">Copyright &copy; MEDI-TRACK</div>
<div id="rfooter">Developed By : Sneha Singh<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raman Srivastava</div>
</div>
</body>
</html>
