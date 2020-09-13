<?php

require_once "component.php";
require_once "operation.php ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">   
       <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <i class="fa fa-home"></i> -->
<div class="main">
<div class="container text-center">
<h1 class="bg-dark text-white p-4"> <i class="fa fa-book"></i> Book Store</h1>
<div class="d-flex justify-content-center">
<form action="index.php" method="POST" class ="w-50 p-3">
<?php
  formElement("id","<i class='fa fa-id-badge'></i>","ID");
?>

<?php
  formElement("book","<i class='fa fa-book'></i>","Enter The Book Name");
?>

 <div class="d-flex justify-content-between">
<div>
<?php
  formElement("Author","<i class='fa fa-user'></i>","Author Name");
?>
</div>
<div>
<?php
  formElement("Prices","<i class='fa fa-dollar-sign'></i>","Price");
?>
</div>
 </div>

<div class="d-flex justify-content-around">

<div>
<?php
  buttonElement("add","<i class='fa fa-plus'></i>","btn btn-success","Add Books");
?> 
</div>
<div>
<?php
  buttonElement("refresh","<i class='fa fa-sync'></i>","btn btn-primary","Refresh");
?> 
</div>
<div>
<?php
  buttonElement("update","<i class='fa fa-pen-alt'></i>","btn btn-light","Update books");
?> 
</div>
<div>
<?php
  buttonElement("delete","<i class='fa fa-trash'></i>","btn btn-danger ","Delete Books");
?> 
</div>
</div>


</form>
</div>  <!--Ending of  d-flex justify-content-center -->

<table class="table table-striped">
  <thead class = "table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Book Price</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody id = "tbody">
  <?php
  if(isset($_POST['refresh'])){
   $result =  showData();
   if($result){
     while($row  = mysqli_fetch_assoc($result)){?>
      <tr>
      <td scope="row" data-id = " <?php echo $row['ID'];?>"><?php echo $row['ID']; ?></td>
      <td data-id = " <?php echo $row['ID'];?>"> <?php echo $row['Book_Name']; ?> </td>
      <td data-id = " <?php echo $row['ID'];?>"><?php echo $row['Author_Name']; ?></td>
      <td data-id = " <?php echo $row['ID'];?>"><?php echo "$".$row['Price']; ?></td>
      <td> <i data-id = " <?php echo $row['ID'];?>" class="fa fa-edit text-warning btnedit"></i> </td>
    </tr>
<?php
     }
   }
}
  
  ?>
   
   
  </tbody>
</table>

</div><!-- Ending of container  -->
</div><!-- Ending of main-->

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->

    <script src="main.js"></script>



</body>
</html>