<?php

require_once('config.php');

?>

<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phone	= $_POST['phone'];
	$password 		= sha1($_POST['password']);

		$sql = "INSERT INTO piu_users (firstname, lastname, email, phone, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $con->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phone, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}