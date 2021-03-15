

<?php

include "db.php";


    $action= isset($_GET['action']) ? $_GET['action'] : "";

    if($action=="yes")
    {
        echo "<script> alert('deleted succesfullyy ');</script>";
    }

    include "header.php";


?>


	
<div class="modal fade" id="table-mng">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="header">
				<h2>header of modal</h2>
			</div>

			<div class="modal-body">

            <div id="editing">

            <form>
			
		 <input class="form-control" type="text" name="bash_name" id="bash_name" placeholder="ناوی بەش بنوسە  "> 
				<br>

                <label for="">پارێزگا </label>
        <input class="form-control" type="text" name="bash_px_1" id="bash_px_1" placeholder=" کەمترین کۆنمرەی وەرگیراو بۆ پارێزگا  "> 
				<br>

                <label for="">گشتی </label>
        <input class="form-control" type="text" name="bash_gx_1" id="bash_gx_1" placeholder=" کەمترین کۆنمرەی وەرگیراو بۆ گشتی  "> 
				<br>

                <label for="">پاڕالێل</label>
        <input class="form-control" type="text" name="bash_paralel" id="bash_paralel" placeholder=" پاڕالێل   "> 
				<br>
		


         
         <input type="hidden" name="hid" id="edit_row_id" value="0">
         </div>
         
         <div id="showing" style="display: none;">

         <h3>view department  name</h3>
         <div id="v_bash_name"></div>
        <hr>
         

         <h3>پارێزگا  </h3>
         <div id="v_parezga_mark"></div>

         <h3> گشتی </h3>
         <div id="v_gshty_mark"></div>

         <h3>پاڕالێل </h3>
         <div id="v_paralel_mark"></div>

        
         
         
         </div>
		
			</div>

			<div class="modal-footer">
                        <!-- bo away lagal hamw modalaan darnkawet -->
            <input value="close" class="btn btn-secondary" type="button" data-dismiss="modal" id="close-btn" style="display: none;">

            <input onclick="save('addnew');" id="mng-btn" value="add" class="btn btn-success" type="button">
            </form>

			</div>
		</div>
		</div>
	</div>

<span id="alert_action"></span>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="panel-heading">
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">

                <div class="row">
                    <h3 class="panel-title">لیستی بەشەکان </h3>
                </div>
            
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

                <div class="row" align="right">

                </div>

            </div>
        </div>

        <button id="btn-add">زیاد کردنی بەشی تازە </button>

        <div class="panel-body">
            <div class="row">

                <div class="col-sm-12 table-responsive">

                


                    <table id="users_table" class="table">
                        <thead>

                        <tr>
                            <th>ID</th>
                            <th>ناوی بەش</th>
                            <th>پارێزگا خ-١</th>
                            <th>گشتی خ-١</th>
                            <th>پاڕالێل</th>
                            <th>update</th>
                            <th>delete</th>
                            <th>VIEW</th>

                        </tr>



                        </thead>

                        

                        <?php
                $sql="select * from sheet1";
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($res))
                {
               
                    
                    ?>
                    

                    
                        <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td id="fn_<?php echo $row['id']; ?>"><?php echo $row["deps"]; ?></td>
                        <td id="em_<?php echo $row['id']; ?>"><?php echo $row["p_x1"]; ?></td>
                        <td id="fn1_<?php echo $row['id']; ?>"><?php echo $row["g_x1"]; ?></td>
                        <td id="em1_<?php echo $row['id']; ?>"><?php echo $row["paralel"]; ?></td>

                        <td><button onclick="editOrView(<?php echo $row['id'];?>,'update');" id="ed" class="btn btn-info">UPDATE</button></td>
                        <td><button onclick="del(<?php echo $row['id'];?>)"; class="btn btn-danger">DELETE</button></td>
                        <td> <button onclick="editOrView(<?php echo $row['id'];?>,'view');" id="vi" class="btn btn-success">view</button></td>
                        </tr>
                        
                        
<?php
                    }

?>
    
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>

</div>


<script>



$(document).ready(function() {

               


$("#btn-add").on({

    click:function(){
        $("#table-mng").modal('show');
         $("#mng-btn").attr("value","add new").attr("onclick","save('addnew')");

         $("#bash_name").val("");
         $("#bash_px_1").val("");
         $("#bash_gx_1").val("");
         $("#bash_paralel").val("");
        
        $(".header").html("header");
    }

});

$("#table-mng").on("hidden.bs.modal",function(){

    $("#showing").fadeOut();
    $("#editing").fadeIn();
    $("#close-btn").fadeOut();
    $("#edit_row_id").val(0);

         $("#bash_name").val("");
         $("#bash_px_1").val("");
         $("#bash_gx_1").val("");
         $("#bash_paralel").val("");
    
    $("#mng-btn").attr("value","add new").attr("onclick","save('addnew')").fadeIn();

});

});


$(function(){

$("table").DataTable();

})

    

function editOrView(rowID,type){



      

            $.ajax({

        url:"mng_dest.php",
        method:"POST",
        dataType:"json",
        data:{
            //yakam sht la updayteda dabet datay aw idya bhenyawa naw inputakani ka sara add man krdwa
            //pashan ka keyakaw id yakamn nard yakam yakam sht ka peweista valuery taza bdaynawa inputana ba pey aw responsay ka lapagekay tr detawa ? chon ?
            // e law barysh la naw exitaka haman aw datayana hana ka la naw aw dbya han baw idya  baalam tanha xswtmanaat naw jsonarayakawa pahsanish harhamwan bahoy exitakawa ka la nawyda json arayaman danawa denawa bo responsakay era katekish hatnawa bo responsakaay era daxrenawa naw inputakani xoyan baw shewa$("#add-fname")
            // aray jsonaka baw shewayay json-array('name'=>row['name']); pahan la pageakay xoman baw shewaya daixayna naw inputakaman $("#add-fname")=response.haman nawy ka la array jsonaka boman dyary krdwa 
          
            key:"get_row_data",
             rowID:rowID
            },success:function(response)
            {

                //lerawa aw inputanay ka datakay la jsonakawa bo detawa dyary dakayn
                //katek dalley  response.addfname ba betawa wata katek har shtek hatawa la pahey aj-des ba hoexitakawa 
                //ba betawa naw aw inputaw awata nawyshm dawate aha valueakashy haman shta
                
                //am type == viewa bo awaya ka har isheky tr wistt bikay katek buttony view dagira rek la regay erawa bikay nak bley agar click lawa kra awa bkaw awm maka 

                if(type=="view")
                { 
                    $("#showing").css("display","block");
                    $("#editing").fadeOut(); 
                    $("#shwoing").fadeIn();
                   
                   $("#close-btn").fadeIn();


                    $("#v_bash_name").html(response.bash_name);
                    
                    $("#v_parezga_mark").html(response.bash_p);

                    $("#v_gshty_mark").html(response.bash_g);
                    
                    $("#v_paralel_mark").html(response.bash_pa);

                    $("#mng-btn").fadeOut();
                    

                }
                else
                
                {
                 $("#showing").css("display","none");
                $("#editing").fadeIn();
                $("#close-btn").fadeOut();
                //lamay xwarawa rek valy inputa hidaka dabet id shtaka chwnka row id naw datay db yakawawa oman nardwa ka idyakayaty 
                $("#edit_row_id").val(rowID);
                $("#shwoing").fadeOut();
               
                //lerada response 3 data denetawa emash bahoy nawakani spcificy dakain bo kwe betawa 
                $("#bash_name").val(response.bash_name);

                $("#bash_px_1").val(response.bash_p);
                $("#bash_gx_1").val(response.bash_g);
                $("#bash_paralel").val(response.bash_pa);
				
                
                
				//$("#table-mng").modal("show");   //-->   //gwastnawaman la onclickekawa bo onclickeky tr esta ama rastawxo dacheta funceky tr ba be away relod bet---->>                        // rek law katay am functiona bang dakayawa ba hoy aw keyawa katek bo pagekay tr daroy regat pe dadat ishakat kay masalan ato datawet aya bahoy funcy save add bkay yan update bahoy am keyawa dazany katek dallry update am shty try laya jga la insert 
                $("#mng-btn").attr("value","save changes").attr("onclick","save('update_data')");
                //tb : dakre yak functionek bo chand mabastek bakar bet ba pey aw paramitaray ba funcakaky dadain:
                //masalan to keyt dawa ba funcy save aw keya azady xot la har shwenek ka bangy dakayawa chy bdayay mn add new dadame to update_data bdaya aw ishakay xoy hardwkan dakat 
              
               
                }

                $("#table-mng").modal("show");   
                $(".header").html(response.bash_name).css("font-size","30px");
            
            }

        });


        }







function save(key)
			{	


				//agar blein .val awa bas valuekaa denet balam ema damanawet hamw inputaka bhenet ta agar batal bww rek swry bkain
			
                //ka la updatakawa bangyb ama dakayawa rek dwbara nrxa tazakan daxataw naw awana 
            	var bash_name=$("#bash_name");

                var bash_p=$("#bash_px_1");

                var bash_g=$("#bash_gx_1");

                var bash_pa=$("#bash_paralel");

                
				
                
				var rowID=$("#edit_row_id");
				//first way

                //wata agar hamw awana returny truyan krd la naw funcakash wtwmana katek return true bke ka hamwyan empty nabwn
				if(isNotEmpty(bash_name))
				{
					$.ajax({

						url:"mng_dest.php",
						method:"POST",
						dataType:"text",
						data:{
                            //aha amatane wtwmana aw klilay to boman dadaney awa dabayn ja esta ama parimtaraka ba pey ishy maya 
                            // balam handek jar dabet illa id bbayn ba pey ishakay
							key:key,

							bash_name:bash_name.val(),

                            bash_p:bash_p.val(),

                            bash_g:bash_g.val(),

                            bash_pa:bash_pa.val(),
							
							
                            
                            rowID:rowID.val()
						},success:function(response)
						{
                            //tb aw responsa rek aw shtaya ka la naw exitakadaya la pageaky tr
                            //balam bo era updated suucessfulya 
                            // bo insertaka  inserted succesfully 
                            if(response!="success")
                            {
                                //la naw add new response == insetted suucsfully
                                alert(response);
                            }
                            else{
                                //ble ba vaalay ama bet
                                $("#fn_"+rowID.val()).html(bash_name.val());
                                
                                $("#em_"+rowID.val()).html(bash_p.val());
                                
                                $("#fn1_"+rowID.val()).html(bash_g.val());
                                
                                $("#em1_"+rowID.val()).html(bash_pa.val());
                                

                                // bo awaya dwbara ka add new man leda aw nrxana nayawanawa naw add newakawa 
                                bash_name.val("");

                                bash_p.val("");

                                bash_g.val("");

                                bash_pa.val("");
                                
                            
                                

                                $("#table-mng").modal("hide");
                               
                                $("#mng-btn").attr("value","add").attr("onclick","save('addnew')");
                               
                            }
							
						}

					});
			
				}
			}
            
        

            function del(id){
                if(confirm("are  you sure?"))
                {
                $.ajax({
                    url:"mng_dest.php",
                    method:"POST",
                    dataType:"text",
                    data:{
                        key:"del",
                        id:id
                    },success:function(response){

                        if(response=="deleted")
                        {
                        $("#fn_"+id).parent().remove();
                        
                        $("#em_"+id).parent().remove();

                        $("#fn1_"+id).parent().remove();
                        
                        $("#em1_"+id).parent().remove();

                        alert(response);
                        }
                        else{

                            alert(response);
                        }
                     
                       
                    }

                });
                }
            }


            function isNotEmpty(caller)
			{
				if(caller.val()=="")
				{
					caller.css("border","1px solid red");
					return false;
				}
				else{
					caller.css("border","");
					return true;
				}
			}





  
</script>

