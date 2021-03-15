<?php

include "db.php";



if(isset($_POST["key"]))
{
    if($_POST["key"]=="del")
    {
        

        $id=mysqli_real_escape_string($conn,$_POST["id"]);
        $sql="DELETE FROM sheet1 where id='$id'";
        mysqli_query($conn,$sql);
        exit("deleted");
        
    }


}


if(isset($_POST["key"]))
{
    if($_POST["key"]=="update_data")
    {
        $id=mysqli_escape_string($conn,$_POST["rowID"]);

        $bash_name= mysqli_escape_string($conn,$_POST["bash_name"]);
        
        $bash_p= mysqli_escape_string($conn,$_POST["bash_p"]);

        $bash_g= mysqli_escape_string($conn,$_POST["bash_g"]);

        $bash_pa= mysqli_escape_string($conn,$_POST["bash_pa"]);
        
        
        


        $sql="UPDATE sheet1 set deps='$bash_name',p_x1='$bash_p',g_x1='$bash_g',paralel='$bash_pa' where id='$id'";
        $res=mysqli_query($conn,$sql);
        exit("success");


    }


}


if(isset($_POST["key"]))
{
    if($_POST["key"]=="get_row_data")
    {

        $id=mysqli_real_escape_string($conn,$_POST["rowID"]);
        $sql="SELECT * from sheet1 where id=$id";
        $res=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_array($res);
        $jsonArray=array(
            //ato la pageakay trawa idyakat wedawa wtwta aw idyay mn bom nardwy tosh wak piawayn aw shtanay ka la db baw idyawana
            //bom bxana naw jora jsonekeawa pashan ba exite bom bnernawa

            "bash_name"=>$rows["deps"],

            "bash_p"=>$rows["p_x1"],

            "bash_g"=>$rows["g_x1"],

            "bash_pa"=>$rows["paralel"],
            
            

            


        );

        exit(json_encode($jsonArray));

    }


}


if(isset($_POST["key"]))
{
    if($_POST["key"]=="addnew")
    {



        
        $bash_name= mysqli_escape_string($conn,$_POST["bash_name"]);
        
        $bash_p= mysqli_escape_string($conn,$_POST["bash_p"]);

        $bash_g= mysqli_escape_string($conn,$_POST["bash_g"]);

        $bash_pa= mysqli_escape_string($conn,$_POST["bash_pa"]);
        


        $sql1="SELECT id from sheet1 where deps='$bash_name'";
        $res=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($res)>0)
        {
            exit(" this is duplicated ");
        }
        else{
        $sql="INSERT into sheet1(id,paralel,g_x1,p_x1,deps)values('',?,?,?,?)";

       $stm= mysqli_prepare($conn,$sql);

        mysqli_stmt_bind_param($stm,"ssss",$bash_pa,$bash_g,$bash_p,$bash_name);

        mysqli_stmt_execute($stm);



        exit("inserted succefully ");

        }
        

    }
}
?>