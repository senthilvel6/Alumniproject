<?php
    $host="localhost";
    $dbname="project";
    $username="root";
    $password="";
    $conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
    die("error".mysqli_connect_error());
}
$que="SELECT * FROM alumni" ;
$res=mysqli_query($conn,$que);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnae List</title>
    <link rel="stylesheet" href="Alumni.css">
</head>
<body class="header">
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
    
         
        <?php
        while($rows=mysqli_fetch_assoc($res))
        {
            ?>
        <section class="hi">    
            <div class="card">
                <div class="container">
                
                    
                    <h4><b><?php echo "Student :". $rows['Name']; ?></b></h4>
                    <p><?php echo "Email id :".$rows['Email'];?><br>
                    <?php echo "Department :".$rows['Dept'];?><br>
                    <?php echo "passed ou year:".$rows['Year'];?><br>
                    <?php echo "CGP:". $rows['Cgp'];?><br>
                    <?php echo "Job:". $rows['Job'];?><br>
                    <?php echo "words to juniors:". $rows['Msg'];?><br>                
                </p>

                </div>
            </div>
        </section>    
            <?php
                }
                    ?>
    </section>          
</body>
  
  
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  display: flex;
  float: left;
  background-color:#fff;
    
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


.container {
  flex-wrap: nowrap;  
  flex: 1;  
  padding: 2px 16px;
}

</style>
