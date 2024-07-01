<?php


@include 'config.php';


$host='localhost';
$username='root';
$password='';
$database='rentease_userdb';

$conn = mysqli_connect($host,$username,$password,$database);




if(isset($_POST['submit']))
{
    // $firstname = $_POST['name'];
    // $lastname = mysqli_real_escape_string($connect,$_POST['lastname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = md5($_POST['pass']);
    $gender = $_POST['gender'];
    $account_type = $_POST['account'];

$selection = "SELECT * FROM user WHERE name = $firstname && password = $password ";

$result = mysqli_query($conn, $selection);

if(mysqli_num_rows($result) > 0)
{
    $error[] = 'User already exist!';
}
else{
    
    $addTodb = "INSERT INTO user(name, lastname,email,pass,gender,account) VALUES('$firstname','$lastname','$email','$password','$gender','$account_type')";

    mysqli_query($conn,$addTodb);
    header('location: login.php');
}


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form.css">
    <title>Rentease.cm | Get Started</title>
</head>
<body>
    <div class="form-container">
        <header>Registration</header>
        <form action="#" method="post" class="details">
<?php

if(isset($error))
{
    foreach($error as $error)
    {
        echo '<span class="error-msg" >'.$error.'</span>';
    };
};

?>

<div class="input-field">
    <label>FirstName</label>
    <input type="text" placeholder="Enter your firstname" name="name" required>
</div>

<div class="input-field">
    <label>LastName</label>
    <input type="text" placeholder="Enter your lastname" name="lastname" required>
</div>

<div class="input-field">
    <label>Email</label>
    <input type="email" placeholder="Enter your email" name="email" required>
</div>

<div class="input-field">
    <label>Password</label>
    <input type="password" name="pass" required>
</div>
<div class="select-type">
    <div class="field">
        <label>Gender</label>
        <select name="gender" id="gender">
         <option value="male">Male</option>
         <option value="female">Female</option>
        </select>
     </div>
    <div class="field">
        <label>Account Type</label>
       <select name="account" id="account">
        <option value="landlord">Landlord</option>
        <option value="tenant">Tenant</option>
       </select>
    </div>
</div>

<div class="input-field">
    <button type="submit" name="submit">Submit</button>
</div>
        </form>

    </div>
    
</body>
</html>