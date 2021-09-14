<?php
$link = mysqli_connect("localhost", "root", "", "kenny");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$firstname=mysqli_real_escape_string($link,$_REQUEST['firstname']);
$lastname=mysqli_real_escape_string($link,$_REQUEST['lastname']);
$email=mysqli_real_escape_string($link,$_REQUEST['email']);
$username=mysqli_real_escape_string($link,$_REQUEST['username']);
$password=mysqli_real_escape_string($link,$_REQUEST['password']);
$pass=mysqli_real_escape_string($link,$_REQUEST['pass']);
$sql="INSERT INTO signup(firstname,lastname,username,email,password,pass) values('$firstname','$lastname','$username','$email','$password','$pass')";

if(mysqli_query($link, $sql)){
    echo "Account created successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>
<a href="signup.html">Go back</a>