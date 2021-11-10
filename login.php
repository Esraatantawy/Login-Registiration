<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";


$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$conn = new mysqli($servername, $username, $password, $dbname);

$select="select * from users where password='".$_POST['password']."';";

$result = $conn-> query($select);
$num=mysqli_num_rows($result);

if($num<0 )
{
  echo "Please enter correct name\n";
}

$select1="select * from users where email='".$_POST['email']."';";

$result1 = $conn-> query($select1);
$num1=mysqli_num_rows($result1);

if($num1<0 )
{
  echo "Please enter correct email\n";
}

$select2="select * from users where password='".$_POST['password']."';";

$result2 = $conn-> query($select2);
$num2=mysqli_num_rows($result2);

if($num2<0 )
{
  echo "Please enter correct password\n";
}
else {
    $select3="select * from users where email='$email'";

       echo "Welcome ";
     echo $_POST["username"];
  }

$conn->close();

?>

