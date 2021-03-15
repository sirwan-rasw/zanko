<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">
<!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> -->

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<script src="../js/bootstrap.min.js"></script>
<!-- <script src="js/jquery-3.2.1.min.js"></script>
<script src="/jquery-ui-1.12.1/jquery-ui.js"></script> -->

    <style>

        @media print{
            body * {
                visibility: hidden;
            }
            .print-container,.print-container * {
                visibility: visible;
            }

            .print-container {
                position: absolute;
                left: 0px;
                right: 0px;
            }


        }

        table tr {
            cursor: move;
        }

        @font-face {
            font-family: kurd;
            src: url(NotoNaskhArabicUI-Bold.ttf) format("truetype");
        }
        
        h1,
        h3,
        p,
        table td,
        table th {
            font-family: kurd;
        }
      #nums{
          position: relative;
          top: 0px;
      }

      

    </style>
</head>
<body>

	
<div class="modal fade" id="table-mng">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="header">
				<h2>header of modal</h2>
			</div>

			<div class="modal-body">


            <p>
        
         <span style="background-color: yellow; color: black;">  عیلمی + ئەدەبی </span>
<br><br>
پەروەردەی دەرووونی +  پەرەردەی تایبەت + زمانەکان  + وەرز‌ش
شێوەکاری + مۆسیقا + شانۆ سینەما + شەریعە + باخچەی ساوایان + 
پەیوەندیە نێودەوڵەتیەکان و دیبلۆماسی + سیستەمە سیاسیەکان و سیاسەتی گشتی +
یاسا + کارگێڕی + کارگێڕی بە بازارکردن  + ئابوری + کارگێڕی ڕێکخراوی گەشتیاری + جوگرافیا + کۆمەڵناسی +
شوێنەوار + دەروناسسی + کاری کۆمەڵایەتی + ڕاگەیاندن + زانستە ڕامیارەیکان + فیلمسازی + 
پەروەردەی هونەری + فەلسەفەو توێژینەوە کلتوریەکان + وەرگێڕان +گەشت و گوزار + کارگێڕی گومرگ 
کارگێڕی تەندروستی + تەکنەلۆژیای ڕاگەیاندن + تەکنیکی میدیا + هەمو بازاڕگریەکان +
+ کارگێڕی بانکەکان + 
<br><br>
 <span style="background-color: green; color: white;" > ئەدەبیەکان :</span> 
<br><br>
مێژوو + کارگێڕی یاسا + گەشتیاریەکان + کۆمەڵایەتی + فەلسەفە + ڕێبەری گەشتیاری 



        
        </p>
            

        <input value="close" class="btn btn-secondary" type="button" data-dismiss="modal" id="close-btn">

			</div>


        

			</div>


		</div>

</div>




<button style="position: fixed; top:50%; float: left;" class="btn btn-success" onclick="bin()">بینی بەشە ئەدەبیەکان </button>

<button id="del" class="btn btn-danger" style=" position: sticky; top: 0; float: left; "> delete  selected rows</button>
      

<button class="btn btn-success" onclick="window.print()" style="position: sticky;top: 0; float: right; ">print </span><span class="icon-print "></span></button>


<script>

    function bin()
    {
        $("#table-mng").modal("show");
    }
</script>



<div class="container"> 

<div class="row" id="desc" style="display: none;">
      <div class="col-md-12">

        <p>
        
        عیلمی + ئەدەبی 

پەروەردەی دەرووونی +  پەرەردەی تایبەت + زمانەکان  + وەرز‌ش
شێوەکاری + مۆسیقا + شانۆ سینەما + شەریعە + باخچەی ساوایان + 
پەیوەندیە نێودەوڵەتیەکان و دیبلۆماسی + سیستەمە سیاسیەکان و سیاسەتی گشتی +
یاسا + کارگێڕی + کارگێڕی بە بازارکردن  + ئابوری + کارگێڕی ڕێکخراوی گەشتیاری + جوگرافیا + کۆمەڵناسی +
شوێنەوار + دەروناسسی + کاری کۆمەڵایەتی + ڕاگەیاندن + زانستە ڕامیارەیکان + فیلمسازی + 
پەروەردەی هونەری + فەلسەفەو توێژینەوە کلتوریەکان + وەرگێڕان +گەشت و گوزار + کارگێڕی گومرگ 
کارگێڕی تەندروستی + تەکنەلۆژیای ڕاگەیاندن + تەکنیکی میدیا + هەمو بازاڕگریەکان +
+ کارگێڕی بانکەکان + 

ئەدەبیەکان : 

مێژوو + کارگێڕی یاسا + گەشتیاریەکان + کۆمەڵایەتی + فەلسەفە + ڕێبەری گەشتیاری 



        
        </p>

      </div>
</div>


<div class="row print-container">


<?php
    $conn=mysqli_connect("localhost","root","","nmrakan2");

// echo $anjam;

?>

   
        
       

        <div class="col md-12">




        

    <?php





    if(isset($_POST["search"]))
    {
        $num1=mysqli_escape_string($conn,$_POST["num1"]);
        $type=mysqli_escape_string($conn,$_POST["sel"]);




// $sql1="SELECT count(id) FROM sheet1 WHERE g_x1 BETWEEN '$num1'-5 and '$num1'+5 or p_x1 BETWEEN '$num1'-5 and '$num1'+5";
// $res=mysqli_query($conn,$sql1);
// $row=mysqli_fetch_array($res);
// $anjam="";
// $anjam =$row["count(id)"];

        if($type=="p_g")
        {
        $num=0;
            
       
        
            $sql="SELECT * FROM sheet1 WHERE g_x1 BETWEEN '$num1'-10 and '$num1'+5 or p_x1 BETWEEN '$num1'-10 and '$num1'+5 ORDER BY g_x1 or p_x1 DESC";

            $result=mysqli_query($conn,$sql);

            echo "<table class='table table-responsive table-hover' id='mng'>";

                echo "
                <tr>
                <th>زنجیرە </th>

                
                   <th>ناوی بەش  </th>
                   <th>پارێزگا خ/١ </th>
                   <th>گشتی خ/١ </th>
                 
                    <th> Check </th>

                </tr>
                <tbody id='tb1'>
                ";

                

            if(mysqli_num_rows($result)>0)
            {

                

                while($row=mysqli_fetch_array($result))
                {
                   ?>

                  
                <tr id="<?php echo $row['id']; ?>">

                <td> <?php echo $num=$num+1; ?> </td>

              

                   <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["deps"];?> </td>
                   <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["p_x1"];?> </td>
                   <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["g_x1"];?> </td>
    
                    <td><input type="checkbox" value="<?php echo $row['id']; ?>" style="width: 25px; height: 25px;"></td>





                </tr>

              
   
<?php

                }


                }
                echo "</tbody>";
            }
          
            else{

                  if($type=="p")
                  {
            $sql="SELECT * FROM sheet1 WHERE paralel BETWEEN '$num1'-5 and '$num1'+5 ORDER BY paralel DESC";

            $result=mysqli_query($conn,$sql);

            echo "<table class='table table-responsive table-hover' id='mng'>";

                echo "
                <tr>
                   <th>زنجیرە </th>
                   <th>ناوی بەش  </th>
                   <th>پاڕالێل </th>
                  
                   
                    <th> Check </th>

                </tr>
                
                <tbody>";

                $num=0; 

            if(mysqli_num_rows($result)>0)
            {

                

                while($row=mysqli_fetch_array($result))
                {
                   ?>

                  
                <tr id="<?php echo $row['id']; ?>">
                   <td> <?php echo $num=$num+1; ?> </td>
                   <td id="au<?php echo $row['id'];?>"> <?php echo $row["deps"];?> </td>
                   <td id="au<?php echo $row['id'];?>"> <?php echo $row["paralel"];?> </td>

                    <td><input type="checkbox" value="<?php echo $row['id']; ?>" style="width: 25px; height: 25px;"></td>





                </tr>

              
   
<?php

                }

            }
                }else{

                    //bo paralely duhokw halwer

                    $sql="SELECT * FROM sh1 WHERE nmra BETWEEN '$num1'-20 and '$num1'+20 ORDER BY nmra DESC";

                    $result=mysqli_query($conn,$sql);
        
                    echo "<table class='table table-responsive table-hover' id='mng'>";
        
                        echo "
                        <tr>
                           <th>زنجیرە </th>
                           <th>ناوی بەش  </th>
                           <th>پاڕالێل </th>
                          
                           
                            <th> Check </th>
        
                        </tr>
                        
                        <tbody>";
        
                        $num=0; 
        
                    if(mysqli_num_rows($result)>0)
                    {
        
                        
        
                        while($row=mysqli_fetch_array($result))
                        {
                           ?>
        
                          
                        <tr id="<?php echo $row['id']; ?>">
                           <td> <?php echo $num=$num+1; ?> </td>
                           <td id="au<?php echo $row['id'];?>"> <?php echo $row["name"];?> </td>
                           <td id="au<?php echo $row['id'];?>"> <?php echo $row["nmra"];?> </td>
        
                            <td><input type="checkbox" value="<?php echo $row['id']; ?>" style="width: 25px; height: 25px;"></td>
        
        
        
        
        
                        </tr>
<?php
                        }
                        
                }

                }


                }

                }




            

        
    

                echo "</tbody>";
                echo " </table>";
           

            

         

        


       



        

        
    

  



    ?>


<script>




         $(function() {
            $( "#tb1, #tb2" ).sortable({
               connectWith: "#tb1, #tb2"
            });
           
         });


      </script>


               
                
    
    <script>
        $(document).ready(function(){

          
            $("#del").click(function(){
                if(confirm("دڵنیای کە دەتەوێت بەشەکە ڕەش بکەیەوە ?"))
                {

                    var id=[];
                    $(":checkbox:checked").each(function(i){
                        id[i]=$(this).val();
                    });
                    if(id.length===0)
                    {
                        alert("تکایە بەشێک یان چەند بەشیێک دیاری بکە ");
                    }
                    else{
                       for(var i=0 ; i<id.length ; i++)
                       {
                        $("tr#"+id[i]+"").css("background-color","#ccc");
                        $("tr#"+id[i]+"").fadeOut("slow");
                       }
                    }

                }
                else{
                    return false;
                }
            });

            // $("tbody").sortable({
            //     placeholder:'ui-state-highlight'
            // });
        });

        

    </script>


        <button class="btn btn-info" onclick="display()" >بینینی بەشی زیاتر لە نمرەکەی خۆی کەمتر </button>
    
    </div>

</div>


</div>

<script>



    
// function del(id){
//                 if(confirm("are  you sure?"))
//                 {
              

//                         $("#au"+id).parent().remove();
                    
                        
//                     }

                
//                 }
            
// </script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

<div class="container" id="kamakan" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            

<?php
    

    $num1=mysqli_escape_string($conn,$_POST["num1"]);


        
     $sel=mysqli_escape_string($conn,$_POST["sel"]);  
     
     if($sel=="p")
     {
       
        
    $sql="SELECT * FROM sheet1 WHERE  paralel BETWEEN 60 and '$num1'-10 ORDER BY paralel DESC";

    $result=mysqli_query($conn,$sql);

    echo "<table class='table table-responsive table-hover' id='mng'>";

        echo "
        <tr>
        
        <th> </th>

           <th>ناوی بەش  </th>
          
            <th>پاڕالێل </th>
            <th> Check </th>

        </tr>
        <tbody id='tb2'>
        ";

        

    if(mysqli_num_rows($result)>0)
    {

        

        while($row=mysqli_fetch_array($result))
        {
           ?>

          
        <tr id="<?php echo $row['id']; ?>">

            <td>زیادکراو </td>
           <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["deps"];?> </td>

           <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["paralel"];?> </td>

            <td><input type="checkbox" value="<?php echo $row['id']; ?>" style="width: 25px; height: 25px;"></td>





        </tr>

      

<?php

        }


        }

    }
        echo "</tbody>";
        echo "</table>";



        if($sel=="p_g")
        {


            $sql="SELECT * FROM sheet1 WHERE g_x1 BETWEEN 60 and '$num1'-10 and p_x1 BETWEEN 60 and '$num1'-10 ORDER BY p_x1 DESC";

    $result=mysqli_query($conn,$sql);

    echo "<table class='table table-responsive table-hover' id='mng'>";

        echo "
        <tr>
        
        <th> </th>

           <th>ناوی بەش  </th>
           <th>پارێزگا خ/١ </th>
           <th>گشتی خ/١ </th>
            <th> Check </th>

        </tr>
        <tbody id='tb2'>
        ";

        

    if(mysqli_num_rows($result)>0)
    {

        

        while($row=mysqli_fetch_array($result))
        {
           ?>

          
        <tr id="<?php echo $row['id']; ?>">

            <td>زیادکراو </td>
           <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["deps"];?> </td>
           <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["p_x1"];?> </td>
           <td id="au<?php echo $row['id'];?>" class="a"> <?php echo $row["g_x1"];?> </td>

            <td><input type="checkbox" value="<?php echo $row['id']; ?>" style="width: 25px; height: 25px;"></td>





        </tr>

      

<?php

        }


        }


            
        }
  
?>

<script>
var n=1;
function display()
{
    if(n==1)
    {
    $("#kamakan").css("display","block");
    n=0;
    }
    else{
        $("#kamakan").css("display","none");
        n=1;
    }
}

</script>

</div>
    </div>
</div>




</body>
</html>