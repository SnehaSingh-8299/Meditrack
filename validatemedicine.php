<?php 
$db=mysqli_connect('localhost','root','','meditrack');
$errors= array();
if(isset($_POST['cmed']))
{
$disease=mysqli_real_escape_string($db,$_POST['disease']);
$medicine=mysqli_real_escape_string($db,$_POST['medicine']);
$doses=mysqli_real_escape_string($db,$_POST['doses']);
$medicinetiming=mysqli_real_escape_string($db,$_POST['medicinetiming']);
$user_check_query="select *from medicine where medicine='$medicine' OR disease='$disease'";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if($user){
	if($user['medicine']==$medicine){
		array_push($errors,"Medicine name is already exists.");
	}
	if($user['disease']==$disease){
		array_push($errors,"Disease is already exists.");
	}
}
if(count($errors) == 0){
	$cid=md5($cid);
	$query="INSERT INTO medicine (disease,medicine,doses,medicinetiming) VALUES('$disease','$medicine','$doses','$medicinetiming')";
	mysqli_query($db, $query);
	echo "<script>alert('Update Successfully')</script>";
}
header('location: cmedicine.php');
}
?>