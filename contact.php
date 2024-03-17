<?php
if(isset ($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";

@$name = $_POST['name'];
@$email = $_POST['email'];
@$phone = $_POST['phone'];
@$feedback = $_POST['feedback'];
$sql = "INSERT INTO `form`.`contact` (`name`, `email`, `phone`, `feedback`,`dt`) VALUES ('$name', '$email', '$phone', '$feedback',current_timestamp());";
// echo $sql;

if ($con->query($sql) == true) {
    // echo "successfully inserted";
}
else {
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>
<script>
let submitform = confirm("Thanks for submitting your form.");
			 
console.log(submitform);
	 
</script>