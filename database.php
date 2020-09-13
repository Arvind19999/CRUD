<?php
function createdb(){
 $servername = "localhost";
 $username = "root";
$password = "";
$dbname = "bookStore";

//Establishing connection with database
$con = mysqli_connect($servername,$username,$password);
//Checking for connection
if(!$con){
    die("Connnection not Established".mysqli_connect_error());
}

//Creating database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($con,$sql)){
    $con = mysqli_connect($servername,$username,$password,$dbname);
    $sql = "CREATE TABLE IF NOT EXISTS books(
        ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Book_Name VARCHAR(25),
        Author_Name VARCHAR(25),
        Price FLOAT
    );";
    if(mysqli_query($con,$sql)){
          return $con;
    }else{
        echo"Error in creating table".mysqli_error($con);
    }

}else{
    echo"Error in createing database".mysqli_error($sql);
}

}
?>