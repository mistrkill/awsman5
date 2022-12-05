<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

    if(isset($_POST['submit']))
    {
        $usernamewf = $_POST['username'];
        $operation = $_POST['operation'];
        
    }
// database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onboarding";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query

    $sql = "INSERT INTO operations (username, operation) VALUES ('$usernamewf', '$operation')";
  
  // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);
    
    
    
    
?>
