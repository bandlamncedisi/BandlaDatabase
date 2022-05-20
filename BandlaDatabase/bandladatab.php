<?php


$conn = mysqli_connect('localhost','root','','bandladatabase');
if(!$conn)
    {
        die('could not connect to database');
    }
if(isset($_POST['save']))
    {
        $fisrtname =  $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $pwd =  $_POST['pwd'];

       

        mysqli_query($conn,"insert into bandladatab(firstname,lastname,pwd)values(
            '$fisrtname','$lastname','$pwd')")or die(msqli_error($conn));
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
        <div class= "header">
            <h1>Reg form</h1>
        </div>
        <form method = "post" >

            <div>
                <input type = "text" name = "firstname" placeholder="fisrtname" >
            </div>
            <div>
                <input type = "text" name = "lastname" placeholder="lastname" >
            </div>

            <div>
                <input type = "password" name = "pwd" placeholder="password"  >
            </div>

            <div>
                <button type = "submit" class = "btn"  name = "save">save</button><br>
            </div>

            <hr>
        </form>
    </section>

    
</body>
</html>