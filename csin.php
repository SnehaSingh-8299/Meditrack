<?php 
$db=mysqli_connect('localhost','root','','meditrack');
$errors= array();
if(isset($_POST['csin']))
{
$cname=mysqli_real_escape_string($db,$_POST['cname']);
$ccontact=mysqli_real_escape_string($db,$_POST['ccontact']);
$cid=mysqli_real_escape_string($db,$_POST['cid']);
$cpass=mysqli_real_escape_string($db,$_POST['cpass']);
$cemail=mysqli_real_escape_string($db,$_POST['cemail']);
$cadd=mysqli_real_escape_string($db,$_POST['cadd']);
$user_check_query="select *from customerlogin where cname='$cname' OR cid='$cid'";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if($user){
	if($user['cname']==$cname){
		array_push($errors,"Customer name is already exists.");
	}
	if($user['cid']==$cid){
		array_push($errors,"Customer id is already exists.");
	}
}
if(count($errors) == 0){
	$cid=md5($cid);
	$query="INSERT INTO customerlogin (cname,ccontact,cid,cpass,cemail,cadd) VALUES('$cname','$ccontact','$cid','$cpass','$cemail','$cadd')";
	echo "$cemail";
	mysqli_query($db, $query);
	echo "<script>alert('Registration Successfully')</script>";
}
header('location: clogin.php');
}
?>