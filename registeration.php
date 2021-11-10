

<?php  
#header('location:index.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";
 

$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$conn = new mysqli($servername, $username, $password, $dbname);

$select="select * from users where email='$email'";

$result = $conn-> query($select);
$num=mysqli_num_rows($result);
if($num> 0 )
{
  echo "Email already exists please log in";
}
else {
$sql = "INSERT INTO users(name, email, password)
VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
     echo "Welcome ";
     echo $_POST["username"];
   }
   else {
  echo "Error: $sql <br> $conn->error";
}
}
$conn->close();
?>

