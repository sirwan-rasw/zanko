<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!--     
    <script src="../js/jquery-3.3.1.min.js"></script> 


    
    
    <!-- Latest compiled and minified CSS -->

<!-- 
 <link rel="stylesheet" href="../../css/bootstrap.min.css">
 
 <!-- Optional theme -->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
  
 <!-- Latest compiled and minified JavaScript -->
<!--  
 <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">


 <script src="../js/jquery.dataTables.min.js"></script>
 <script src="../js/dataTables.bootstrap.min.js"></script> 

 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
 
 
 
 <script src="../js/bootstrap.min.js"></script>     -->


 

    <?php
    
 include "header.php";


    
    ?>
</head>
<body>


   
        <div class="row">
            <div class="col-md-12 table-responsive">



            

<table class='table' id='mng'>


<tr>
   <th>زنجیرە </th>
   <th>ناوی بەش  </th>
   <th>پاڕالێل </th>

</tr>



            
<?php

include "db.php";



    
   
$sql="SELECT * FROM sh1";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

    

    while($row=mysqli_fetch_assoc($result))
    {
       ?>

      
    <tr id="<?php echo $row['id'];?>">
       <td> <?php echo $row['id'];?> </td>
       <td id="au<?php echo $row['id'];?>"> <?php echo $row["name"];?> </td>
       <td id="au<?php echo $row['id'];?>"> <?php echo $row["nmra"];?> </td>

    </tr>
<?php

// echo "</table>";


    }

   
    
}

 
echo "</table>";


?>












 


</div>
        </div>
    
    
<script>
// $(document).ready(function(){

// $("table").DataTable();

// });

$(function(){

$("table").DataTable();

})

    


</script>




    
</body>
</html>