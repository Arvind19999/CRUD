<?php
require_once "database.php";
require_once "component.php";
$con = createdb();
 
//Click on add button
if(isset($_POST['add'])){
   getData();
}
//Click on update button
if(isset($_POST['update'])){
   updateData();
}
//Click on  delete button
if(isset($_POST['delete'])){
    deleteData();
}
function getData(){
    $bookName = textValue("book");
    $authorName = textValue("Author");
    $cost = textValue("Prices");
    if($bookName && $authorName && $cost){
      $sql = "INSERT INTO books(Book_Name,Author_Name,Price) VALUES ('$bookName','$authorName',$cost)";
       if(mysqli_query($GLOBALS['con'],$sql)){
           echo"Data is succefully inserted";
           header("Location:index.php");
       }else{
           echo"error in the data insertion";
       }

    }else{
        
        echo"Insert the data in the required field";
    }
}

function textValue($value){
    $text = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($text)){
        return false;
    }
    else {
        return $text;
    }
}

//Functin for showing the data in the table
function showData(){
    $sql = "SELECT * FROM books";   
    $result = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0){
        // while($row = mysqli_fetch_assoc($result)){
        //     echo "ID = ".$row['ID']." "."Book Name = ". $row['Book_Name']." "."Author Name = ". $row['Author_Name']." "."Book Price = ". $row['Price']." ";
        return $result;
        }
    }
//Function for updating data
function updateData(){
    $bookid = textValue("id");
    $bookname = textValue("book");
    $bookauthor = textValue("Author");
    $bookprice = textValue("Prices");
    if($bookid && $bookname && $bookprice){
    $sql = "UPDATE books SET Book_Name ='$bookname',Author_Name = '$bookauthor', Price = '$bookprice' WHERE ID = '$bookid'";
    if(mysqli_query($GLOBALS['con'],$sql)){
        echo "Data updated successfully";
    }else{
        echo"Failed to update data";
    }
    }
    else{
        echo"Click update botton to update book data";
    }
}

//Function to delete the data
function deleteData(){
    $bookid = textValue("id");
    $sql = "DELETE FROM books WHERE ID = '$bookid'";
    if(mysqli_query($GLOBALS['con'],$sql)){
        echo"Record is deleted successfully ";
    }else{
        echo"Error in deletion of the record";
    }
}

?>