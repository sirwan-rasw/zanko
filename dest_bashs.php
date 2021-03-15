<?php

include "db.php";

if(isset($_POST["key"]))
{
    if($_POST["key"]=="get_row_data")
    {

        $id=mysqli_real_escape_string($conn,$_POST["rowID"]);
        $sql="SELECT * from deps where id=$id";
        $res=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_array($res);
        $jsonArray=array(
            //ato la pageakay trawa idyakat wedawa wtwta aw idyay mn bom nardwy tosh wak piawayn aw shtanay ka la db baw idyawana
            //bom bxana naw jora jsonekeawa pashan ba exite bom bnernawa

            "author"=>$rows["author"],
            "head"=>$rows["head"],
            "describe"=>$rows["describe1"],
            

            


        );

        exit(json_encode($jsonArray));

    }


}



?>