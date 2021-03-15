

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->




<style>
#view:hover{

background-color:#37343b;
color: white;
transition-timing-function: ease-out;
transition-duration: 0.4s;
cursor: pointer;

}


</style>

</head>

<?php
include 'db.php';
?>
    
<body>

<div id="res" style="display: none; background-color: #37343b; color: white;font-family: kurd; width: 100%; height: auto; font-size: 1.1rem; line-height: 1.6; word-spacing: 3px;">

<p id="author"></p>
<p id="head"></p>
<p id="describe"></p>

<button id="cl" class="btn btn-danger"> close </button>

</div>





<?php




 

    

$output="";
//singl sada "
//7saby away bo bka agar kasek bo sprofaiaalakay xoy gara awa ble agar row[username]=sesion kaay ba redirect bo profilakay
$sql="SELECT * FROM deps where head LIKE '%".$_POST['search']."%'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

    while($row=mysqli_fetch_array($result))
    {
        

    $output.="

     <div id='view'>
     <a onclick='view(".$row['id'].")' id='cl'>
     <p> ".$row["head"]." </p>
    </a>
     </div>
    
    ";
    }
 
    echo $output;

}
else{
    echo "their is no data";
}






?>

<script>

    $("#cl").on({
        click:function(){
            $("#res").css('display','none');
        }
    });

    function view(rowID){

               
                // $("#result").css("display","none");
                // $("#table-mng").css('z-index',30);

       
        //  $("#mng-btn").attr("value","add new").attr("onclick","save('addnew')");
        //  $("#brand_name").val("");
        //  $("#status").val("");
        
        // $(".header").html("header");


        $.ajax({

url:"dest_bashs.php",
method:"POST",
dataType:"json",
data:{
    
    key:"get_row_data",
             rowID:rowID
            },success:function(response)
            {


                
                    
                   $("#res").css("display","block");
                    $("#author").html(response.author);
                    
                    $("#head").html(response.head);
                    
                    $("#describe").html(response.describe);

                
                    

    
        }
        });
        }

        
    
    
</script>
<!-- <script src="js/bootstrap.min.js"></script> -->


<?php
?>

</body>
</html>