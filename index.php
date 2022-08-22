$host= 'localhost';
$user = 'root';
$pass = 'admin';
$database = 'logins';
$table='user_login';

$conn = mysqli_connect($host, $user, $pass, $database);


if ($conn) {
die("Database connection failed: Insert User : Error = " . 
mysqli_error());
}

$user_name=$_POST["user_name"];
$user_password=$_POST["user_password"];

$sqlquery = "INSERT INTO user_login (user_name, user_password)
VALUES ('$user_name','$user_password')";

if (mysqli_query($conn, $sqlquery))
{
    echo "user added";
}

mysqli_close($conn);

?> 