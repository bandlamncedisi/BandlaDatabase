<?php
session_start();
$conn = mysqli_connect('localhost','root','','bandladatabase');

$username =$_POST['username'];
$pwd =$_POST['pwd'];

$sql = "SELECT * FROM bandladbtable WHERE username='$username' AND pwd='$pwd'";
$result = mysqli_query($conn,$sql) or die("failed to connect to database");
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['pwd']==$pwd)
{
   echo "login successfully";
}else {
echo "<stript>alert('check your credentials and try again')</stript>";

       }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        div{
            border-radius: 5px;
            width: 280px;
            background-color: lightblue;
            padding: 20px;
            margin: auto;
        }
    </style>
</head>
<body>
    <section>   
    <hr>
        <div class= "header">
            <h1>Login form</h1>
        </div>
        <form method = "post" >

            <div>
                <input type = "text" name = "username" id = "username" placeholder="username" required>
            </div>

            <div>
                <input type = "password" name = "pwd" id = "pwd" placeholder="password" required >
            </div>

            <div>
                <button type = "submit" class = "btn"  name = "Login">login</button><br>
            </div>
            <div>
            <p>
  	 	Not Registerd? <a href="BandlaDatabase.php">Register Now</a>
        	</p>
           </div>

            <hr>
        </form>
    </section>

    
</body>
</html>