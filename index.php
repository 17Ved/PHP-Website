<!-- In this following script we're making connection with database -->

<?php
$insert = false;
if(isset($_POST['name']))
{



$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);


if(!$con)
{
    die("Connection to this database failed due to".mysqli_connect_error());

}

// echo "Success connecting to database";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `collegeadmission`.`admission` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) 
       VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

// echo $sql;


// -> this is object operator
if($con->query($sql) == true)
{
    // echo "Successfully inserted";
    $insert = true;
}

else
{
    echo "ERROR: $sql <br> $con->error";
    
}

$con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class = "image" src="image.jpg" alt="G.H.Raisoni,Jalgaon">
    <div class="container">

        <h1>
            Welcome to the College Application Form
        </h1>
        <p> Enter your details and submit this form to confirm your application form for admission</p>
       
    <?php
        if($insert == true)
        {
            echo "<p class='submitMsg'>Thanks for submitting your form. We're happy to see you joining our college</p>";
        }
    ?>




        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            
            <input type="text" name="age" id="age" placeholder="Enter your age">

            <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <input type="email" name="email" id="email" placeholder="Enter your email">

            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone number">

            <textarea name="desc" id="desc" cols="30" rows="10"
            placeholder="Enter any other information here">  </textarea>

            <button class="btn">Submit</button>

            

        </form>
    
    
    
    </div>
    <script src="index.js"></script>
   
</body>
</html>
























