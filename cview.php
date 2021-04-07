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
margin-left:165px;
margin-top:10px;
border-radius:10px 10px 10px 10px;
}
#a
{
height:400px;
width:1000px;
color:lightgray;
background-image:url('8.png');
//border-radius:10px 0px 0px 0px;
}
#b
{
height:600px;
width:1000px;
background-image:url('9.png');
}
#menu
{
	
	height:50px;
	width:1000px;
	border:1px solid;
	background-color:linear-gradient(to top left, #AAD68A 0%, #006666 100%);
	color:white;
	border-radius:10px 10px 0px 0px;

}
#menu ul
{
	list-style-type:none;
	
}
#menu ul li
{
	display:inline;
	//border: 4px solid;
	padding:35px;
	
}
#menu ul li a
{
	color:white;
	text-decoration:none;
	font-width:bold;

}
#menu ul li:hover
{

}
#menu ul li a:hover
{

	color:seagreen;
	//border-top:2px solid black;
//border-bottom:2px solid white;
}
#main
{
	height:450px;
	width:1000px;
	border:1px solid;
	//background-color:white;
}
#footer
{
	height:100px;
	width:1000px;
	//background-color:blue;
	margin-left:165px;
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
#main
{
	height:550px;
	width:997px;
	//border:1px solid;
	//background-color:white;
}
table, th, td {
  border: 1px solid black;
  
  margin:30px;
}

th, td {
  height:30px;
  width:200px;
}
th {
  text-align: left;
}
</style>
</head>
<body>
    <h3><p style="font-size:30px;">
        <marquee behavior="alternate" srollamount="10">-----MEDI-TRACK-----</marquee></h3></p><br/><br/>
<div id="outer">
<div id="menu">
            	 <ul>
				 <li><a href="cview.php">VIEW MEDICINE</a></li>
				 <li><a href="cmedicine.php">UPDATE MEDICINE</a></li>
				 <li><a href="cfeedback.php">FEEDBACK</a></li>
				 <li><a href="clogin.php">LOGOUT</a></li>
				 </ul>
</div>
<div id="a">
</div>
<div id="b">
<div id="main">
<?php
$db=mysqli_connect('localhost','root','','meditrack');
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM medicine";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){?>
		<center><table  >
       <?php echo "<table>";
            echo "<tr>";
                echo "<th>Disease Name</th>";
                echo "<th>Medicine Name</th>";
                echo "<th>Doses</th>";
				echo "<th>Medicine-Timing</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['disease'] . "</td>";
                echo "<td>" . $row['medicine'] . "</td>";
                echo "<td>" . $row['doses'] . "</td>";
				echo "<td>" . $row['medicinetiming'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";?>
		</table></center>
		<?php
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
// Close connection
mysqli_close($db);
?>
</div>
</div>
</div>
</div>
<div id="footer">
<div id="lfooter">Copyright &copy; MEDI-TRACK</div>
<div id="rfooter">Developed By : Sneha Singh</div>
</div>
</body>
</html>