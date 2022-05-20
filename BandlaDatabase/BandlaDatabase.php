
<?php
$errors =array();

$conn = mysqli_connect('localhost','root','','bandladatabase');
if(!$conn)
    {
        die('could not connect to database');
    }
if(isset($_POST['save']))
    {
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $email =$_POST['email'];
        $gender = $_POST['gender'];
        $username =$_POST['username'];
        $pwd = $_POST['pwd'];

        if(empty($firstname)){array_push($errors,"firstname is required");}
        if(empty($lastname)){array_push($errors,"laststname is required");}
        if(empty($email)){array_push($errors,"email is required");}
        if(empty($username)){array_push($errors,"username is required");}
        if(empty($pwd)){array_push($errors,"password is required");}

        $user_check_query = "SELECT * FROM bandladbtable WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
          }
      
          if ($user['email'] === $email) {
            array_push($errors, "email already exists");
          }
        }

        if (count($errors) == 0) {
        
        mysqli_query($conn,"insert into bandladbtable(firstname,lastname,email,gender,username,pwd)values(
            '$firstname','$lastname','$email','$gender','$username','$pwd')")or die(msqli_error($conn));
        }
    }         

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

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
<div class = "header">
    <h1>Reg form</h1>
</div>
    <form method = "post" >
        
            
            <div>
                <input type = "text" name = "firstname" id="firstname" placeholder="fisrtname" required><br>
            </div>
            <div>
                <input type = "text" name = "lastname" id= "lastname" placeholder="lastname" required><br>
            </div>
            <div>
                <input type = "email" name = "email" id="email" placeholder="email@bandla.com" required><br>
            </div>
            <div>
            <fieldset data-role="controlgroup">
                <legend>Choose your gender:</legend>
                 <label for="male">Male</label>
                     <input type="radio" name="gender" id="male" value="male" checked>
                <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" value="female">
             </fieldset><br>
            </div>
            <div>
                <input type = "text" name = "username" id = "username" placeholder="username" required ><br>
            </div>
            <div>
                <input type = "password" name = "pwd" id = "pwd" placeholder="password" required><br>
            </div>

            <div>
                <button type = "submit"  name = "save">save</button><br>
            </div>
            <div>
            <p>
  	 	Already a member? <a href="login.php">Sign in</a>
        	</p>
           </div>

            
       
    </form>
    <hr>
    </section>
</body>
</html>