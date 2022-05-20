
<?php
$conn = mysqli_connect('localhost','root','','bandladatabase');
if(!$conn)
    {
        die('could not connect to database');
    }
$query= "select * from bandladbtable where username = '".username."'AND pwd = '".pwd."' limit = 1 ";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <table align = "center" border "1px" style = "width:600px; line-height:40px;">
        <tr>
            <th colspan ="7"><h2>Your Details</h2>
            <button onClick = "Logout()" type = "submit" value = "logout">Logout</button>
        </tr>
        <t>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>gender</th>
            <th>username</th>
            <th>password</th>

        </t>
<?php

while($rows=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['firstname']; ?></td>
        <td><?php echo $rows['lastname']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['gender']; ?></td>
        <td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['pwd']; ?></td>
    </tr>
    <?php
}
?>
   </table>
   <script>
   function Logout()
{

    window.location.href= "login.php";
}

    </script>
</body>
</html>