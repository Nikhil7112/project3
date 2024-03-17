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
@$phone = $_POST['phone'];
@$address = $_POST['address'];
@$email = $_POST['email'];
@$service = $_POST['service'];
@$proname = $_POST['proname'];
@$desc = $_POST['desc'];
$sql ="INSERT INTO `form`.`data` (`name`, `phone`, `address`, `email`, `service`, `proname`, `desc`, `dt`) VALUES ('$name', '$phone', '$address', '$email', '$service', '$proname', '$desc',current_timestamp());";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service Taking Form</title>
    <link href="form.css" rel="stylesheet">
</head>
<body>
    
    <section class="service">

        <h1 class="heading">Service Taking Form</h1>

        <h2>Enter Your Details</h2>
        <div class="row">
            <form action="form.php" method="post">
            <div class="inputBox">
                <input type="text" name="name"required>
                <label>Name</label>
            </div>
            <div class="inputBox">
                <input type="phone" name="phone"required>
                <label>Contact Number</label>
            </div>
            <div class="inputBox">
                <input type="address" name="address"required>
                <label>Address</label>
            </div>
            <div class="inputBox">
                <input type="email" name="email"required>
                <label>E-mail Id</label>
            </div>
            <div class="radio">
                <h4>Select Service</h4>
                <div>
                    <input type="radio" name="service" value="v" required><span>Vehicals</span>
                </div>
                <div>
                    <input type="radio" name="service" value="h" required><span>Home Appliances</span>
                </div>
                <div>
                    <input type="radio" name="service" value="p" required><span>Plumbing</span>
                </div>
                <div>
                    <input type="radio" name="service" value="e" required><span>Electricity</span>
                </div>
                <div>
                    <input type="radio" name="service" value="c" required><span>CCTV & Camera</span>
                </div>
                <div>
                    <input type="radio" name="service" value="f" required><span>Furniture</span>
                </div>
                <div>
                    <input type="radio" name="service" value="i" required><span>Interior Design</span>
                </div>
                <div>
                    <input type="radio" name="service" value="s" required><span>Smartphone & Telephone</span>
                </div>
                <div>
                    <input type="radio" name="service" value="d" required><span>Desktop & Laptop</span>
                </div>
                <div>
                    <input type="radio" name="service" value="el" required><span>Electronics</span>
                </div>
            </div>

            <div class="inputBox">
                <input type="text" name="proname" required>
                <label>Product Name / Vehical Name</label>
            </div>

            <div class="inputBox">
                <input type="text" name="desc" required>
                <label>Description of Problem</label>
            </div>

            <button class="btn" id="submitform">Submit</button>

        </form>
            
        </div>


    </section>
    <script>
       let submitform = confirm("Thanks for submitting your form.");
        
        console.log(submitform);
        // if(submitform){
        //     // Code to delete the post
        //     console.log("Your post has been deleted successfully");
        // }
        // else{
        //     // Code to cancel deletion of the post
        //     console.log("Your post has not been deleted");
        // }

    </script>


</body>
</html>
