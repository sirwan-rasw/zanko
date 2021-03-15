<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include "header.php";




    if(isset($_POST["search"]))
    {
    
        $e = $_POST["e"];
        $a = $_POST["a"];
        $p = $_POST["p"];
        $c = $_POST["c"];
        $b = $_POST["b"];
        $k = $_POST["k"];
        $m = $_POST["m"];

        

        $rezh_zanst_10=$_POST["rezh_zanst_10"];

        $rezh_zanst_11=$_POST["rezh_zanst_11"];

        $sel=$_POST["i2"];


        if($sel=="zansty")
            {

                if( empty($a) || empty($b) || empty($c) || empty($p) || empty($m) || empty($k) || empty($e))
                {

                    echo "<script> alert('ببورە خانەیەکت  پڕ نەکردۆتەوە '); </script>";

                }

                else{

                $ec=$e*5;
                $ac=$a*5;
                $kc=$k*4;
                $mc=$m*6;
                $cc=$c*4;
                $pc=$p*4;
                $bc=$b*4;

                $res=$ec+$kc+$pc+$cc+$bc+$mc+$ac;

                

                $adv=$res/32;

                $advs=$adv*0.8;

                $kota=$rezh_zanst_10+$rezh_zanst_11;

                $result = $kota+$advs;

                ?>
<!-- <script style="width: 500px; height: 500px; font-size: 30px;"> alert("nmrakat "+);</script> -->



                    
<div class="modal fade" id="table-mng">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="header">
				<h2>header of modal</h2>
			</div>

			<div class="modal-body">

        <div> <p> <?php echo  $result;  ?>  </p></div>

        
         
         
         </div>

         <div class="modal-footer">

         <input value="close" class="btn btn-secondary" type="button" data-dismiss="modal" id="close-btn">

         </div>
		
			</div>

		
		</div>
		</div>



        <script>

$("#table-mng").modal("show");


</script>






<?php





            
              
                // echo "<script> alert ('نمرەکەت لەگەل پۆلی ١٠ و ١١ دەکاتە '+$result)</script>";
                

            }
        }


        else{

                $e1 = $_POST["e1"];
                $a1 = $_POST["a1"];
                $abw = $_POST["abw"];
                $jwg = $_POST["jwg"];
                $mez = $_POST["mez"];
                $k1 = $_POST["k1"];
                $m1 = $_POST["m1"];

                $rezh_adab_10=$_POST["rezh_adab_10"];
                $rezh_adab_11=$_POST["rezh_adab_11"];


                if( empty($a1) || empty($abw) || empty($jwg) || empty($mez) || empty($m1) || empty($k1) || empty($e1))
                {

                    echo "<script> alert('ببورە خانەیەکت  پڕ نەکردۆتەوە '); </script>";

                }

                else{

                $e1c=$e1*5;
                $a1c=$a1*5;
                $k1c=$k1*4;
                $m1c=$m1*3;
                $abwc=$abw*3;
                $jwgc=$jwg*3;
                $mezc=$mez*3;

                $res=$e1c+$k1c+$abwc+$jwgc+$mezc+$m1c+$a1c;

                $adv=$res/26;

                $advs=$adv*0.8;

                $kota=$advs+$rezh_adab_10+$rezh_adab_11;


                ?>

<!-- <script style="width: 500px; height: 500px; font-size: 30px;"> alert("nmrakat "+);</script> -->
               
<div class="modal fade" id="table-mng1">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="header">
				<h2>header of modal</h2>
			</div>

			<div class="modal-body">

        <div> <p> <?php echo  $kota;  ?>  </p></div>

        
         
         
         </div>

         <div class="modal-footer">

         <input value="close" class="btn btn-secondary" type="button" data-dismiss="modal" id="close-btn">

         </div>
		
			</div>

		
		</div>
		</div>



        <script>

$("#table-mng1").modal("show");


</script>


<?php

                
                
                
            }

            }







    }


    ?>
</head>
<body>



<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

            <div class=" row justify-content-end ">
                <div class="col-md-12 py-5 px-md-5 ">
                    <div class="py-md-5 ">
                        <div class="heading-section heading-section-white ftco-animate mb-5 ">
                            <h2 class="mb-4 "> بەشی حساب کردنی وانە هاوپەیوەندەکان  </h2>
                            <p style="font-size: 27px; "> ئەم نمرانە داخڵ بکە کە دەردەکەون  </p>
                        </div>
                        <form class="appointment-form ftco-animate" method="POST">
                        <div class="d-md-flex ">
                                <div class="form-group ">
                                   
                                </div>

                            </div>   
                        <div class="d-md-flex ">
                                <div class="form-group ">
                                    <br><br>
                                    <label for="" style="font-size: 30px; width: 100%;font-family: kurd; background-color: whitesmoke; border-radius: 40px;">دیاری بکە کە زانستیە یان وێژەییە بۆ دەرکەوتنی وانەکانی </label>
                                    <br>

                                    

                                    <!-- <div class="btn-group-toggle" data-toggle="buttons"> -->
                                        <label class="btn btn-primary">
                                            <input type="radio" value="zansty" id="i1" name="i2" style="font-size: 30px;width: 30px; height: 30px; padding: 6px;" checked> <label for="" style="font-family: kurd;font-size: 25px;">زانستی </label>
                                            <br><br>
                                            <input type="radio" value="adaby" id="i2" name="i2" style="font-size: 30px; width: 30px; height: 30px;  padding: 6px"><label for="" style="font-family: kurd;font-size: 25px;"> وێژەییی</label>
                                        </label>
                                    <!-- </div> -->

                                    <br><br>

                                    <div id="zanstyakan">

                                 <!-- <h1> <?php ?></h1> -->

                                    <input type="text" name="k" id="k" placeholder="کوردی" style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="a" id="a" placeholder="عربی " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="e" id="e"  placeholder="ئینگلیزی" style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;"  class="py-2 my-2">
                                    <br>
                                    <input type="text" name="m" id="m"  placeholder="بیرکاری" style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;"class="py-2 my-2">
                                    <br>
                                    <input type="text" name="b" id="b"  placeholder="زیندەوەرزانی" style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2" >
                                    <br>
                                    <input type="text" name="c" id="c"  placeholder="کیمیا " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="p" id="p"  placeholder="فیزیا " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">


<br>
                                    <input type="text" id="rezh_zanst_10" name="rezh_zanst_10" placeholder="ڕێژەی دەرچونی پۆلی ١٠ " style="font-size: 25px; width: 100%; font-family: kurd; border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" id="rezh_zanst_11" name="rezh_zanst_11" placeholder="ڕێژەی دەرچونی پۆلی ١١ " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">

    <br><br>

                            <?php

//                         if(!isset($result))
//                         {
//  echo "تکایە خانەکان پڕ بکەوە";
//                         }
//                         else{
//                             echo "نمرەکەت ". $result;
//                         }
?>


                                    </div>



                                    <div id="adabyakan" style="display: none;">


                                    <input type="text" name="k1" id="k1" placeholder="کوردی" style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="a1" id="a1" placeholder="عربی " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="e1" id="e1"  placeholder="ئینگلیزی" style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="m1" id="m1"  placeholder="بیرکاری" style="font-size: 25px; width: 100%;font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="abw" id="abw"  placeholder="ئابووری " style="font-size: 25px; width: 100%;font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" name="jwg" id="jwg"  placeholder="جوگرافیا " style="font-size: 25px; width: 100%;font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                  <br>
                                    <input type="text" name="mez" id="mez"  placeholder="مێژوو " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
<br>
                                    <input type="text" id="rezh_adab_10" name="rezh_adab_10" placeholder="ڕێژەی دەرچونی پۆلی ١٠ " style="font-size: 25px; width: 100%;font-family: kurd;  border-radius: 10px;" class="py-2 my-2">
                                    <br>
                                    <input type="text" id="rezh_adab_11" name="rezh_adab_11" placeholder="ڕێژەی دەرچونی پۆلی ١١ " style="font-size: 25px; width: 100%; font-family: kurd;  border-radius: 10px;" class="py-2 my-2">


                                    <br><br>


                            <?php

//                         if(!isset($kota))
//                         {
//  echo "تکایە خانەکان پڕ بکەوە";
//                         }
//                         else{
//                             echo "نمرەکەت ". $kota;
//                         }
?>


                                    </div>



                                </div>

                            </div>

                        

                     

<br><br>
                            
<div id="res" class="btn btn-info" style="width: 100%; display: none; font-size: 25px;">



</div>

<br><br>
                            

                            <div class="d-md-flex ">

                                <div class="form-group ml-md-4 ">
                                    <button type="submit"  class="btn btn-primary py-3 px-4" name="search" id="search" onclick="done()" style="font-size: 25px; font-family: kurd;">  هەژمار کردنی نمرەی پۆلی ١٠ و ١١ </button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>

$(document).ready(function(){

    

    
    $('input:radio[name="i2"]').change(function() {
                if ($(this).val() == 'adaby') {


                    $("#adabyakan").css("display","block");

                    $("#zanstyakan").css("display","none");

                }

                else{

        $("#adabyakan").css("display","none");
        $("#zanstyakan").css("display","block");

                }

    });




    //hazhmarkrkn 


           
            });


    // if($("#i2").val()=="adaby")
    // {

    //     $("#adabyakan").css("display","block");

    //     $("#zanstyakan").css("display","none");

    // }
    // else{

    //     $("#adabyakan").css("display","none");
    //     $("#zanstyakan").css("display","block");

    // }

  

    // function done()
    // {   
    //     $e = $("#e").val();
    //     $a = $("#a").val();
    //     $p = $("#p").val();
    //     $c = $("#c").val();
    //     $b = $("#b").val();
    //     $k = $("#k").val();
    //     $m = $("#m").val();

        

    //     $rezh_zanst_10=$("#rezh_zanst_10").val();

    //     $rezh_zanst_11=$("#rezh_zanst_11").val();

    //     $sel=$("[type='radio']:checked").val();


    //     if(sel=="zansty")
    //         {

    //             $ec=e*5;
    //             $ac=a*5;
    //             $kc=k*4;
    //             $mc=m*6;
    //             $cc=c*4;
    //             $pc=p*4;
    //             $bc=b*4;

    //             $res=ec+kc+pc+cc+bc+mc+ac;

                

    //             $adv=res/32;

    //             $advs=adv*0.8;

    //             $kota=8.19+8.86;

    //             $result = kota+advs;

    //             $("#res").css("display","block");
    //             $("#res").text(result);
                


    //         }

            // else{

            //     $e1 = $("#e1").val();
            //     $a1 = $("#a1").val();
            //     $abw = $("#abw").val();
            //     $jwg = $("#jwg").val();
            //     $mez = $("#mez").val();
            //     $k1 = $("#k1").val();
            //     $m1 = $("#m1").val();

            //     $rezh_adab_10=$("#rezh_adab_10");
            //     $rezh_adab_11=$("#rezh_adab_11");



            //     $e1c=e1*5;
            //     $a1c=e1*5;
            //     $k1c=k1*4;
            //     $m1c=m1*6;
            //     $cc=c*4;
            //     $pc=p*4;
            //     $bc=b*4;

            //     $res=ec+kc+pc+cc+bc+mc+ac;

            //     $adv=res/32;

            //     $advs=adv*0.8;

            //     $kota=advs+rezh_zanst_10+rezh_zanst_11;

            //     $("#res").text(kota);
                
                


            // }
        
    
    



</script>

    <script>
    
    // function calc()
    // {

    //     $e = $("#e");
    //     $a = $("#a");
    //     $p = $("#p");
    //     $c = $("#c");
    //     $b = $("#b");
    //     $k = $("#k");
    //     $m = $("#m");


      

    //     if($("#sel").val()=="a")
    //     {   


    //         $("#e").css("display","block");
    //         $("#m").css("display","block");
    //         $("#p").css("display","block");
    //         hide(c);
    //         hide(k);
    //         hide(a);
    //         hide(b);

            

    //     }
    // }
    

    
    </script>





    <?php

        
    include "footer.php";



    ?>
</body>
</html>