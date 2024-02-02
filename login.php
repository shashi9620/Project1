<?php

    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $USN= $_POST['USN'];
        $password= $_POST['password'];

        $dbhost= "localhost";
        $dbuser ="root";
        $dbpass= "";
        $dbname= "login";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){
        die("".mysqli_connect_error());
    }

    $query = "SELECT * FROM login_ec WHERE USN='$USN' AND Password='$password' ";
    $result = mysqli_query($conn,$query);
    if($result->num_rows==1){
        $row = $result->fetch_assoc();
        $Uname=$row['UserName'];
        $_SESSION['UserName']= $Uname;
        header("Location: Homepage.php");
        //echo "welcome " .$USN;
        exit();
    }
    else{
        echo "Oops your details doesn't matches";
        
    }
  
}
?>