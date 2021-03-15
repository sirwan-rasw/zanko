<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
include "header.php";

?>
   
</head>
<body>

    <?php

        $conn=mysqli_connect("localhost","root","","nmrakan2");


        
$author_name=$link=$describe=$head=$file_actual_name="";

$er_author_name=$er_link=$er_describe=$er_head=$er_file="";


$check="";
//name val
    if(isset($_POST["add"]))
    {
        if(empty($_POST["author_name"]))
        {
            $er_author_name="name is empty";
            $check=false;
        }
        else{
            $author_name=filter1(sql_filter($conn,$_POST["author_name"]));
            $check=true;
        }

//head

        if(empty($_POST["head"]))
        {
            $er_head="title  is empty";
            $check=false;
        }
        else{
            $head=filter1(sql_filter($conn,$_POST["head"]));
            $check=true;
        }

//sc name val
        if(empty($_POST["link"]))
        {
            $er_link="linkaka  emptya ";
            $check=false;
        }
        else{
            $link=filter1(sql_filter($conn,$_POST["link"]));
            $check=true;
        }
//date val
        if(empty($_POST["describe"]))
        {
            $er_describe="describe  is empty";
            $check=false;
        }
        else{
            $describe=filter1(sql_filter($conn,$_POST["describe"]));
            $check=true;
        }

//file vallidation

$target_file="uploades/";


        if(empty($_FILES["file"]["name"]))
        {
            $er_file="folder is is empty";
            $check=false;


        }
        else{
            $names=$_FILES["file"]["name"];
            $type=$_FILES["file"]["type"];
            $error=$_FILES["file"]["error"];
            $tmp=$_FILES["file"]["tmp_name"];
            
            

           
            $path=$target_file.$names;

            $fileType=pathinfo($path,PATHINFO_EXTENSION);
         
            

            $file_actual_name=$names.uniqid('',true).".".$fileType;

            
            
            $target=$target_file.$file_actual_name;

            $types=array("png","jpg","jpeg","JPG","PNG","JPEG");

            
            
            
            if(in_array($fileType,$types))
            {
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $target))
			    {

                    
                    
                    $sql="insert into deps(id,author,mailTo,head,describe1,image) values('','".$author_name."','".$link."','".$head."','".$describe."','".$file_actual_name."')";
                    // mysqli_stmt_bind_param($sql,'sssss',$author_name,$link,$head,$describe,$file_actual_name);
                    // mysqli_stmt_execute($sql);
                    $res=mysqli_query($conn,$sql);

              
                 
                    
                }
                else{

                $er_file="not uploaded";
                $check=false;
                }
            }
            else{
                $er_file="type is wrong";
                $check=false;

            }
        }




        



       
       
    }

  




    
    

function filter1($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);

    return $data;
}


function sql_filter($conn,$data)
{
    

    $data=mysqli_escape_string($conn,$data);
    return $data;

}



    ?>


<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

            <div class=" row justify-content-end ">
                <div class="col-md-12 py-5 px-md-5 ">
                    <div class="py-md-5 ">
                        <div class="heading-section heading-section-white ftco-animate mb-5 ">
                            <h2 class="mb-4 ">بەشی هەڵگرتنی بەشەکان </h2>
                            <p style="font-size: 27px; "> بۆ داخڵ کردنی بەشی تازە تکایە ئەم فۆڕمە پڕ بکەرەوە </p>
                        </div>
                        <form class="appointment-form ftco-animate" method="POST" enctype="multipart/form-data">
                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <input type="text " class="form-control " style="font-size: 20px; " name="author_name" placeholder="ناوی  ئەو کەسەی کە ئەم ڕاپۆرتەی نوسیوە">
                                </div>

                            </div>

                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <input type="text " class="form-control "  style="font-size: 20px; " name="link" placeholder="لینکی فەیسبوکەکەی">
                                </div>

                            </div>

                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <input type="text " class="form-control " style="font-size: 20px; " name="head" placeholder="ناوی بەش ">
                                </div>

                            </div>

                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <label><p style="font-size: 20; color: white;" for="bs">باسکردنی بەشەکەت </p></label>
                                    <textarea id="bs" class="form-control " style="font-size: 20px; " name="describe" placeholder="باسکردنی بەشەکە "> </textarea>
                                </div>

                            </div>

                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <label > <p style="font-size: 20; color: white;">    دانانی رسم بۆ بەشەکەت </p></label>
                                    <input type="file" class="form-control " style="font-size: 20px; " name="file" placeholder="وێنەی بەشەکە ">
                                </div>

                            </div>


                            
                            <div class="d-md-flex ">

                                <div class="form-group ml-md-4 ">
                                    <input type="submit" value=" زیادکردنی بەشی تازە  " class="btn btn-primary py-3 px-4 " name="add" id="add" style="font-size: 25px;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



   



   


    <?php
include "footer.php";

?>
</body>
</html>