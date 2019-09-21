
<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['pass'];
$c_password=$_POST['pass2'];

if(!empty($fname) || !empty($lname) ||  !empty($gender) || !empty($email)  || !empty($password) || !empty($c_password) ){
	    $host="localhost";
		$dbUsername="root";
		$dbPassword="";
		$dbname="himanshu";

		$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

		if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else{
		$INSERT="INSERT INTO det(firstname,lastname,Email,Gender,Password,c_password) values('$fname','$lname','$email','$gender','$password','$c_password')";

		if($conn->query($INSERT)){
		echo "New record is inserted successfully CONGO!!! from Himanshu Golash.This site is hacked.";
		}
		else{
		echo "Error: ".$INSERT."
		". $conn->error;
		}
		$conn->close();
		}
		}

		else{
		echo "All fields are required";
		die();
		}
		?>
