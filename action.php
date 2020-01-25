<?php
	$conn = mysqli_connect("localhost","root","","assignment");
	// print_r($conn);

	// print_r($_REQUEST);

	// echo "<pre>";
	// print_r($_POST);
	// echo"</pre>";

	// echo "<pre>";
	// print_r($_FILES);
	// echo"</pre>";

	// exit;
	/***************************Validation start*******************************/

	if(empty($_REQUEST['name'])) 
	{ 
		echo "please enter name";
	} 
	else if(empty($_REQUEST['description']))
	{
		echo "please enter description";
	}
	else if(empty($_FILES['image']['name']))
	{
		echo "please select File";
	}
	else if($_FILES['image']['size'] > 1024*1024*2 )
	{
		echo "please select file upto 2MB";
	}
	else if($_FILES['prosductimg']['type']!="image/png" && $_FILES['image']['type']!="image/jpeg" && $_FILES['image']['type']!="image/gif" )
	{
		echo "please select images only";
	}
	else{
		// echo "ok";		
		$tmp = $_FILES['image']['tmp_name'];
		// echo $tmp;
		$fname = "images/".$_FILES['image']['name'];
		
		// echo $fname;

		$res_file = move_uploaded_file($tmp,$fname);
		// var_dump($res_file);
		// exit;

		$name = $_REQUEST['name'];
		$description = $_REQUEST['description'];

		$str = "insert into form (name,description,image) values ('$name','$description','$fname')";
		echo $str;

		$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
		// print_r($result);
		// exit;
		// var_dump($result);
		header("location:assign.php");
	}
?>