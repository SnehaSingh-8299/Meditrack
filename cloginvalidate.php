<?php 
$db=mysqli_connect('localhost','root','','meditrack');
if(isset($_POST['clogin']))
{
$_cid=mysqli_real_escape_string($db,$_POST['cid']);
$_cpass=mysqli_real_escape_string($db,$_POST['cpass']);	
$user_check_query="select cid,cpass from customerlogin";
$result=mysqli_query($db,$user_check_query);
if (mysqli_num_rows($result)>0) 
{
  while($row = mysqli_fetch_assoc($result)) { 
        
$_cid=$row['cid'];
$_cpass=$row['cpass'];
if($_cid==$_cid)
{
	if($_cpass==$_cpass)
	{
		header('Location:cpage.php');
	}
}
 else
 {
	echo "<script> alert('invalid user') </script>";
 }
  }
}

}
?>