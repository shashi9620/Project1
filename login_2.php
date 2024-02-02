<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $F_ID= $_POST['F_ID'];
        $F_password= $_POST['F_password'];

        $dbhost= "localhost";
        $dbuser ="root";
        $dbpass= "";
        $dbname= "login";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){
        die("".mysqli_connect_error());
    }

    $query = "SELECT * FROM faculty_login WHERE Faculty_Id='$F_ID' AND Faculty_Password='$F_password' ";
    $result = mysqli_query($conn,$query);
    if($result->num_rows==1){
        $row = $result->fetch_assoc();
        $Fname=$row['Faculty_Name'];
        $_SESSION['Faculty_Name']= $Fname;
        header("Location: Homepage_F.php");
        //echo "welcome " .$USN;
        exit();
    }
    else{
        echo "Oops your details doesn't matches";
    }
  
}
?>