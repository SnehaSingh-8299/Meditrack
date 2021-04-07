<?php 
$db=mysqli_connect('localhost','root','','meditrack');
$errors= array();
if(isset($_POST['asin']))
{
$adminname=mysqli_real_escape_string($db,$_POST['adminname']);
$admincontact=mysqli_real_escape_string($db,$_POST['admincontact']);
$adminid=mysqli_real_escape_string($db,$_POST['adminid']);
$adminpass=mysqli_real_escape_string($db,$_POST['adminpass']);
$adminemail=mysqli_real_escape_string($db,$_POST['adminemail']);
$adminadd=mysqli_real_escape_string($db,$_POST['adminadd']);
$user_check_query="select *from admin where adminname='$adminname' OR adminid='$adminid'";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if($user){
	if($user['adminname']==$adminname){
		array_push($errors,"Admin name is already exists.");
	}
	if($user['adminid']==$adminid){
		array_push($errors,"Admin id is already exists.");
	}
}
if(count($errors) == 0){
	$adminid=md5($adminid);
	$query="INSERT INTO admin (adminname,admincontact,adminid,adminpass,adminemail,adminadd) VALUES('$adminname','$admincontact','$adminid','$adminpass','$adminemail','$adminadd')";
	echo "$adminemail";
	mysqli_query($db, $query);
	echo "<script>alert('Registration Successfully')</script>";
}
header('location: alogin.php');
}
?>