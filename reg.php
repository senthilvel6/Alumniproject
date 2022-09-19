<?php
$Name=$_POST['Student'];
$Email=$_POST['Email'];
$Dept=$_POST['Dept'];
$Year=$_POST['Year'];
$Cgp=$_POST['cgp'];
$Job=$_POST['job'];
$Msg=$_POST['msg'];
$host="localhost";
$dbname="project";
$username="root";
$password="";

$conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
    die("error".mysqli_connect_error());
}
$sql="INSERT into alumni(Name,Email,Dept,Year,Cgp,Job,Msg)
VALUES (?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"sssssss",$Name,$Email,$Dept,$Year,$Cgp,$Job,$Msg);
mysqli_stmt_execute($stmt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Alumni.css">
    
</head>
<body>
    <section class="header">    
            <nav>
                <a href="http://"><img src="images.png" alt=""></a>
                <div class="h1">
                    <ul>
                        <li><a href="Alumni.html">HOME</a></li>
                        <li><a href="view.php">ALUMNI</a></li>
                        <li><a href="https://www.krce.ac.in/">ABOUT US</a></li>
                        <li><a href="register.html">REGISTER</a></li>
                    </ul>
                </div>    
            </nav> 
            <h1 class="s">SUBMITED SUCCESSFULLY</h1> 
    </section>        
       
</body>
</html>
<style>
    .s{
        font:  sans-serif;
        text-align: center;
        color: #fff;
    }
</style>

