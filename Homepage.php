<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Homepage.css">
</head>

<body>
   <header class="heading">
    <div class="logo"><img src="report_certificate_logo.jpg" alt=""></div>
    <div class="Names">
        <h2>Anjuman Institute Of Technology And Management, Bhatkal</h2>
        <p>Department Of Electronics And Communication Engineering</p>
    </div>
   </header>
   <!--User Details-->
   <div class="user_inf">
        <div class="details"><?php
  session_start();
  if(isset($_SESSION["UserName"])){
    $Uname=$_SESSION['UserName'];
    echo "<div>Welcome</div>".$Uname.'';
  }
?>
 </div>
   </div>
    <!--Left Panel-->
    <div class="left_panel">
        <ul>
            <li><a href="##">Attendance Details</a></li>
            <li><a href="##">Intarnal Marks</a></li>
            <li><a href="##">Curriculum</a></li>
            <li><a href="##"></a></li>
            <li><a href="##"></a></li>
        </ul>
    </div>
</body>
</html>