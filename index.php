<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>

<?php
include "header.php";

?>
   
</head>
<body>

    <?php

    $conn=mysqli_connect("localhost","root","","nmrakan2");

    // if(isset($_POST["search"]))
    // {



    // }

    ?>

        
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

            <div class=" row justify-content-end ">
                <div class="col-md-12 py-5 px-md-5 ">
                    <div class="py-md-5 ">
                        <div class="heading-section heading-section-white ftco-animate mb-5 ">
                            <h2 class="mb-4 ">بەشی نمرەکان </h2>
                            <p style="font-size: 27px; ">  لەم بەشەدا تەنها نمرەکەت لە شوێنی دیاریکراوی خۆت بنوسەو ڕاستەوخۆ سیستەمەکە ئەو بەشانەت بۆ دەهێنێ کە گونجاون بۆ نمرەکەت  یەکەم بژاردە کەمترین کۆنمرەی هەمو بەشەکانت بۆ دەهێنێت کە بە سیستەمی زانکۆ لاینو کریدیت هەنە دوام بژاردە بەس پاڕالێلەکانت بۆ دەهێنێت هی پارێزگاکانی سلێمانی  وە سێیەم بژاردە پارالێلەکانی پەیمانگاکانی هەولێر و دهۆکت بۆ دێنێت </p>
                        </div>
                        <form action="search.php" class="appointment-form ftco-animate" method="POST">
                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <input type="text " class="form-control " placeholder="نمرەکەت بنوسە  " style="font-size: 25px; " name="num1">
                                </div>

                            </div>
<br><br>
                            <div class="d-md-flex ">
                                <div class="form-group ">
                                    <label for="sel" style="font-size: 25px; color: white; font-family: kurd;">  تکایە یەکێک لەمانەی خواردەوە دیاری بکە </label>
                                    <select name="sel" id="sel" style="width: 100%; background-color: whitesmoke; font-size: 30px;">
                                        <option value="p_g">پارێزگا + گشتی  نمرە </option>
                                        <option value="p">پاڕالێل  </option>
                                        <option value="p2">پەیمانگاکانی هەولێر و دهۆک پارالێل </option>
                                    </select>
                                </div>

                            </div>
                            
                            

                            <div class="d-md-flex ">

                                <div class="form-group ml-md-4 ">
                                    <input type="submit" value="گەڕان بۆ بەشەکان " class="btn btn-primary py-3 px-4 " name="search" id="search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- loader -->
    <!-- <div id="ftco-loader " class="show fullscreen "><svg class="circular " width="48px " height="48px "><circle class="path-bg " cx="24 " cy="24 " r="22 " fill="none " stroke-width="4 " stroke="#eeeeee "/><circle class="path " cx="24 " cy="24 " r="22
            " fill="none " stroke-width="4 " stroke-miterlimit="10 " stroke="#F96D00 "/></svg></div> -->

            <?php
include "footer.php";

?>
<!-- 
    <script src="js/jquery.min.js "></script>
    <script src="js/jquery-migrate-3.0.1.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.easing.1.3.js "></script>
    <script src="js/jquery.waypoints.min.js "></script>
    <script src="js/jquery.stellar.min.js "></script>
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/jquery.magnific-popup.min.js "></script>
    <script src="js/aos.js "></script>
    <script src="js/jquery.animateNumber.min.js "></script>
    <script src="js/scrollax.min.js "></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false "></script>
    <script src="js/google-map.js "></script>
    <script src="js/main.js "></script> -->




























<!-- 
    <form method="POST" action="search.php">

    

    <label for="">سنوری نمرەکەت و دیاری بکە </label>

    <input type="text" name="num1" id="num1" placeholder="">
  

    <input type="submit" name="search" id="search">

    </form> -->



    <script>

    

// function save(key)
// 			{	


// 				//agar blein .val awa bas valuekaa denet balam ema damanawet hamw inputaka bhenet ta agar batal bww rek swry bkain
			
//                 //ka la updatakawa bangyb ama dakayawa rek dwbara nrxa tazakan daxataw naw awana 
//             	var cat_name=$("#cat_name");
				
// 				var status=$("#status");
                
// 				var rowID=$("#edit_row_id");
// 				//first way

//                 //wata agar hamw awana returny truyan krd la naw funcakash wtwmana katek return true bke ka hamwyan empty nabwn
// 				if(isNotEmpty(cat_name)&&isNotEmpty(status))
// 				{
// 					$.ajax({

// 						url:"cat_dest.php",
// 						method:"POST",
// 						dataType:"text",
// 						data:{
//                             //aha amatane wtwmana aw klilay to boman dadaney awa dabayn ja esta ama parimtaraka ba pey ishy maya 
//                             // balam handek jar dabet illa id bbayn ba pey ishakay
// 							key:key,
// 							cat_name:cat_name.val(),
							
// 							status:status.val(),
                            
//                             rowID:rowID.val()
// 						},success:function(response)
// 						{
//                             //tb aw responsa rek aw shtaya ka la naw exitakadaya la pageaky tr
//                             //balam bo era updated suucessfulya 
//                             // bo insertaka  inserted succesfully 
//                             if(response!="success")
//                             {
//                                 //la naw add new response == insetted suucsfully
//                                 alert(response);
//                             }
//                             else{
//                                 //ble ba vaalay ama bet
//                                 $("#fn_"+rowID.val()).html(cat_name.val());
                                
//                                 $("#st_"+rowID.val()).html(status.val());
                                
                                

//                                 // bo awaya dwbara ka add new man leda aw nrxana nayawanawa naw add newakawa 
//                                 cat_name.val("");
                                
//                                 status.val("");
                                

//                                 $("#table-mng").modal("hide");
                               
//                                 $("#mng-btn").attr("value","add").attr("onclick","save('addnew')");
                               
//                             }
							
// 						}

// 					});
			
// 				}
// 			}
            



    </script>
    
</body>
</html>