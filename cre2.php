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
                            <h2 class="mb-4 " style="font-family: kurd;"> بەشی حساب کردنی وانە هاوپەیوەندەکان لە بەشەدا سەرەتا پێویستە جۆری ئەو بەشە دیاری بکەی کە دەتەوێت وانە هاوپەیوەندیکانی حساب بکەی پاشان  نمرەکان پڕ بکەوەو گرتە لەسەر  نمرەکەت بە پێی وانە هاوپەیوەندەکان بکە  </h2>
                        </div>
                        <form class="appointment-form ftco-animate" method="POST">
                        <div class="d-md-flex ">
                                <div class="form-group ">
                                    <label for="sel" style="font-size: 25px; color: white;">  تکایە یەکێک لەمانەی خواردەوە دیاری بکە </label>
                                    <select name="sel" id="sel" style="width: 100%; background-color: whitesmoke; font-size: 30px;">
                                        
                                    <optgroup label="پزیشکیەکان" style="font-family: kurd;">
                                        <option value="twb" style="font-family: kurd;"> پزیشکی گشتی + پزیشکی ددان + دەرمانسازی  </option>
                                        </optgroup>


                                        <optgroup label="ئەندازیریەکان" style="font-family: kurd;">
                                        <option value="a" style="font-family: kurd;"> ئەندازیاریەکان </option>
                                        <option value="h_kimia" style="font-family: kurd;"> هەندەسەی کیمیاو پترؤ کیمیا </option>
                                        </optgroup>


                                        
                                        <optgroup label="یاسا" style="font-family: kurd;">
                                        <option value="zanst_yasa" style="font-family: kurd;"> علمی بۆ یاسا+ سیستمی سیاسی گشتی + پەیوەندی نێودەوڵەتی دیبلۆماسی  </option>
                                        <option value="adab_yasa" style="font-family: kurd;"> ئەدەبی بۆ یاسا+ سیستمی سیاسی گشتی + پەیوەندی نێودەوڵەتی دیبلۆماسی  </option>

                                        </optgroup>




                                        <optgroup label="کۆلێژی زانست " style="font-family: kurd;">
                                        <option value="kimia" style="font-family: kurd;">کیمیا   </option>
                                        <option value="zinda" style="font-family: kurd;">  زیندەوەرزانی  </option>
                                        <option value="zanst_comp" style="font-family: kurd;">زانستی کۆمپیوتەر </option>

                                        <option value="fizia" style="font-family: kurd;">  فیزیک  </option>
                                        <option value="math" style="font-family: kurd;">  ماتماتیک  </option>
                                        </optgroup>

                                        <optgroup label="کۆلێژە کۆمپیوتەریەکان خانقین" style="font-family: kurd;">
                                        <option value="it" style="font-family: kurd;"> کۆلێژ و پەیمانگاکانی IT </option>
                                        <option value="nw" style="font-family: kurd;"> کۆلێژ و پەیمانگاکانی نێتوۆرک</option>
                                        <option value="db" style="font-family: kurd;">کۆلێژ و پەیمانگاکانی داتابەیس</option>

                                        </optgroup>
                                        <optgroup label="کۆلێژە ئینفۆڕماتیکەکان سلێمانی " style="font-family: kurd;">
                                        <option value="inf" style="font-family: kurd;"> تەکنەلۆژیای زانیاری  + داتابەیس + نێتوۆڕک  </option>
                                    
                                        </optgroup>

                                        <optgroup label="زمانەکان" style="font-family: kurd;">
                                        <option value="kurdish" style="font-family: kurd;">  کوردی  </option>
                                        <option value="arabic" style="font-family: kurd;">  عربی  </option>
                                        <option value="english" style="font-family: kurd;">  ئینگلیزی  </option>

                                        </optgroup>

                                        <optgroup label="زیاتر .." style="font-family: kurd;">

                                        <option value="translate" style="font-family: kurd;">وەرگێڕان </option>
                                        <option value="mndal_pd" style="font-family: kurd;">   و پەروەردەی تایبەت و دەرونزانی و باخچەی ساوایان تەکنیکی میدیا ڕاگەیاندن و پەیوەندیە گشتیەکان علمی فەلسەفە </option>
                                        <option value="zanst_all" style="font-family: kurd;"> زانستی گشتی </option>

                                        <option value="xorak" style="font-family: kurd;">پیشەسازی خۆراک و کۆنترؤلی جۆری</option>


                                        <option value="kar_zanst">کارگێڕی کار علمی </option>

                                        <option value="kar_adab">کارگێڕی کار ئەدەبی </option>

                                        <option value="abw_zanst">ئابووری علمی ژمێریاری و دارایی و بانک </option>

                                        <option value="abw_adab">ئابووری ئەدەب </option>


                                        <option value="mezh">مێژوو</option>

                                        <option value="jwg_zanst">جوگرافیا علمی </option>

                                        <option value="jwg_adab">جوگرافیا ئەدەبی </option>



                                        </optgroup>
                                        <!--                                    
        
                                        <option value="saman"> سمانی ئاژەڵ و بەروبومی کێڵگەیی و پاراستنی ڕووەک و دارستان و سامانی ماسی و ڕەزگەری  </option>
                                        <option value="xak"> خاک و ئاو  و جیۆلۆجی گشتی  </option> -->





                                    </select>
                                </div>

                            </div>   
                        <div class="d-md-flex ">
                                <div class="form-group ">
                                    <input type="text " class="form-control " placeholder="نمرەی بنوسە پۆلی ١٢ بنوسە   " style="font-size: 25px; " name="num1" id="num">
                                    <br><br>
                                    <button type="button" class="btn btn-info" onclick="calc()"> ئەمە داگرە بۆ دەرکەوتنی وانە هاوپەیوەندەکان</button>
                                    <br>

                                    

                                    <input type="text" name="k" id="k" placeholder="کوردی" style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="a" id="a" placeholder="عربی " style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="e" id="e"  placeholder="ئینگلیزی" style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="m" id="m"  placeholder="بیرکاری" style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="b" id="b"  placeholder="زیندەوەرزانی" style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="c" id="c"  placeholder="کیمیا " style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="p" id="p"  placeholder="فیزیا " style="font-size: 25px; width: 100%; display: none;">

                                    <input type="text" name="h" id="h"  placeholder="مێژوو " style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="abw" id="abw"  placeholder="ئابووری " style="font-size: 25px; width: 100%; display: none;">
                                    <input type="text" name="jwg" id="jwg"  placeholder="جوگرافیا " style="font-size: 25px; width: 100%; display: none;">


                                    
                                </div>

                            </div>

<br><br>
                            
<div id="res" class="btn btn-info" style="width: 100%; display: none; font-size: 25px;"></div>

<br><br>
                            

                            <div class="d-md-flex ">

                                <div class="form-group ml-md-4 ">
                                    <input type="button" value=" نمرەکەت بە پێی وانە هاوپەیوەندەکان  " class="btn btn-primary py-3 px-4" name="search" id="search" onclick="calc1()" style="font-size: 25px;">
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script>
    
    function calc()
    {

        var e = $("#e");
        var a = $("#a");
        var p = $("#p");
        var c = $("#c");
        var b = $("#b");
        var k = $("#k");
        var m = $("#m");

        var h=$("#h");
        var abw=$("#abw");
        var jwg=$("#jwg");

        

        if($("#sel").val()=="a")
        {

            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#p").css("display","block");
            hide(c);
            hide(k);
            hide(a);
            hide(b);
            hide(h);
            hide(abw);
            hide(jwg);

            

        }

        else if($("#sel").val()=="h_kimia")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#p").css("display","block");
            $("#c").css("display","block");
            hide(k);
            hide(a);
            hide(b);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }



        else if($("#sel").val()=="twb")
        {
            $("#e").css("display","block");
            $("#b").css("display","block");
            $("#c").css("display","block");
            hide(k);
            hide(a);
            hide(p);
            hide(m);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }

        else if($("#sel").val()=="zanst_yasa")
        {
            $("#e").css("display","block");
            $("#k").css("display","block");
            $("#a").css("display","block");
            hide(b);
            hide(c);
            hide(p);
            hide(m);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }


      
        
        else if($("#sel").val()=="adab_yasa")
        {
            $("#e").css("display","block");
            $("#k").css("display","block");
            $("#a").css("display","block");
            $("#h").css("display","block");
            
            hide(b);
            hide(c);
            hide(p);
            hide(m);
            hide(abw);
            hide(jwg);
            
        }

        else if($("#sel").val()=="mezh")
        {
            $("#e").css("display","block");
            $("#k").css("display","block");
            
            $("#h").css("display","block");

            hide(a);
            hide(b);
            hide(c);
            hide(p);
            hide(m);
            hide(abw);
            hide(jwg);
        }


        else if($("#sel").val()=="kimia")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
           
            $("#c").css("display","block");

            hide(k);
            hide(a);
            hide(b);
            hide(p);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }

        else if($("#sel").val()=="zinda")
        {
            $("#e").css("display","block");
            $("#b").css("display","block");
           
            $("#c").css("display","block");

            hide(k);
            hide(a);
            hide(m);
            hide(p);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }

        else if($("#sel").val()=="fizia")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
           
            $("#p").css("display","block");

            hide(k);
            hide(a);
            hide(b);
            hide(c);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }


        else if($("#sel").val()=="math")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
           
            $("#p").css("display","block");

            hide(k);
            hide(a);
            hide(b);
            hide(c);
            hide(h);  
            hide(abw);    
            hide(jwg);      
        }


        else if($("#sel").val()=="kar_zanst")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#a").css("display","block");
            $("#k").css("display","block");
            hide(p);
            hide(b);
            hide(c);
            hide(h);
            hide(abw);
            hide(jwg);

            
        }


        else if($("#sel").val()=="jwg_zanst")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#p").css("display","block");
        
            hide(b);
            hide(c);
            hide(h);
            hide(abw);
            hide(jwg);
            hide(a);
            hide(k);

            
        }


        else if($("#sel").val()=="jwg_adab")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#jwg").css("display","block");
        
            hide(b);
            hide(c);
            hide(h);
            hide(abw);
            hide(p);
            hide(a);
            hide(k);

            
        }

        

        else if($("#sel").val()=="kar_adab")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#a").css("display","block");
            $("#abw").css("display","block");
            hide(p);
            hide(b);
            hide(c);
            hide(h);
            hide(k);
            hide(jwg);

            
        }

        else if($("#sel").val()=="abw_adab")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
           
            $("#abw").css("display","block");
            hide(p);
            hide(b);
            hide(c);
            hide(h);
            hide(k);
            hide(a);
            hide(jwg);
        

            
        }


        else if($("#sel").val()=="abw_zanst")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#a").css("display","block");
           
            hide(p);
            hide(b);
            hide(c);
            hide(h);
            hide(k);
            hide(abw);
            hide(jwg);

            
        }



        else if($("#sel").val()=="kurdish" || $("#sel").val()=="arabic" || $("#sel").val()=="english")
        {
            $("#k").css("display","block");
            $("#a").css("display","block");
           
            $("#e").css("display","block");

            hide(p);
            hide(c);
            hide(b);
            hide(m);
            hide(h);
            hide(abw);
            hide(jwg);
        }

        else if($("#sel").val()=="mndal_pd")
        {
            $("#k").css("display","block");
            $("#a").css("display","block");
           
            $("#e").css("display","block");

            hide(p);
            hide(m);
            hide(b);
            hide(c);
            hide(h);
            hide(abw);
            hide(jwg);
            
        }


        else if($("#sel").val()=="zanst_all")
        {
            $("#k").css("display","block");
            $("#b").css("display","block");

            $("#p").css("display","block");
           
            $("#c").css("display","block");

            hide(a);
            hide(k);
            hide(e);
            hide(h);
            hide(abw);
            hide(jwg);
        
            
        }

        
        else if($("#sel").val()=="zanst_comp" || $("#sel").val()=="it" || $("#sel").val()=="db" || $("#sel").val()=="nw" || $("#sel").val()=="inf")
        {
            $("#e").css("display","block");
            $("#m").css("display","block");
            $("#p").css("display","block");
           
            

            hide(a);
            hide(k);
            hide(c);
            hide(b);
            hide(h);
            hide(abw);
            hide(jwg);
        
            
        }


       else if($("#sel").val()=="translate")
       {
            $("#k").css("display","block");
            $("#a").css("display","block");
           
            $("#e").css("display","block");

            hide(p);
            hide(c);
            hide(b);
            hide(m);
            hide(h);
            hide(abw);
            hide(jwg);
            
       }

       else if($("#sel").val()=="xorak")
       {

            $("#c").css("display","block");
            $("#b").css("display","block");
           
            $("#e").css("display","block");

            hide(p);
            hide(k);
            hide(a);
            hide(m);
            hide(h);
            hide(abw);
            hide(jwg);
       }






    }

    function hide(data)
    {
        data.css("display","none");
    }

    function calc1()
    {

        var e = $("#e").val();
        var a = $("#a").val();
        var p = $("#p").val();
        var c = $("#c").val();
        var b = $("#b").val();
        var k = $("#k").val();
        var m = $("#m").val();
        var h=$("#h").val();
        var abw=$("#abw").val();
        var jwg=$("#jwg").val();

        if($("#sel").val()=="a")
        {

            var e1=e*0.10;
            var m1=m*0.10;
            var p1=p*0.10;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }
        else if($("#sel").val()=="h_kimia")
        {

            var e1=e*0.06;
            var m1=m*0.08;
            var p1=p*0.08;
            var c1=c*0.08;

            var res=e1+m1+p1+c1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }


        else if($("#sel").val()=="twb")
        {

            var e1=e*0.10;
            var b1=b*0.10;
            var c1=c*0.10;

            var res=e1+b1+c1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }



        else if($("#sel").val()=="kar_zanst")
        {

            var e1=e*0.05;
            var a1=a*0.10;
            var k1=k*0.05;
            var m1=m*0.10;


            var res=e1+a1+k1+m1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="abw_zanst")
        {

            var e1=e*0.05;
            var a1=a*0.05;
            
            var m1=m*0.20;


            var res=e1+a1+m1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }



        else if($("#sel").val()=="kar_adab")
        {

            var e1=e*0.05;
            var a1=a*0.10;
            var abw1=abw*0.10;
            var m1=m*0.05;


            var res=e1+a1+abw1+m1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }


        else if($("#sel").val()=="abw_adab")
        {

            var e1=e*0.05;
        
            var abw1=abw*0.15;
            var m1=m*0.10;


            var res=e1+abw1+m1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }


        else if($("#sel").val()=="jwg_zanst")
        {

            var e1=e*0.05;
            var m1=m*0.10;
            var p1=p*0.15;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }



        else if($("#sel").val()=="jwg_adab")
        {

            var e1=e*0.05;
            var m1=m*0.05;
            var jwg1=jwg*0.20;

            var res=e1+m1+jwg1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }



        else if($("#sel").val()=="zanst_yasa")
        {

            var e1=e*0.10;
            var a1=a*0.10;
            var k1=k*0.10;

            var res=e1+a1+k1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="adab_yasa")
        {

            var e1=e*0.05;
            var a1=a*0.10;
            var k1=k*0.05;
            var h1=h*0.10;

            var res=e1+a1+k1+h1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }


        else if($("#sel").val()=="mezh")
        {

            var e1=e*0.05;
            
            var k1=k*0.05;
            var h1=h*0.20;

            var res=e1+k1+h1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }








        else if($("#sel").val()=="kimia")
        {

            var e1=e*0.05;
            var m1=m*0.05;
        
            var c1=c*0.20;

            var res=e1+m1+c1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        
        else if($("#sel").val()=="zinda")
        {

            var e1=e*0.05;
            var b1=b*0.15;
        
            var c1=c*0.10;

            var res=e1+b1+c1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="fizia")
        {

            var e1=e*0.05;
            var m1=m*0.10;
        
            var p1=p*0.15;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="math")
        {

            var e1=e*0.05;
            var m1=m*0.20;
        
            var p1=p*0.05;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="kurdish")
        {

            var k1=k*0.20;
            var a1=a*0.05;
        
            var e1=e*0.05;

            var res=e1+a1+k1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="arabic")
        {

            var k1=k*0.05;
            var a1=a*0.20;
        
            var e1=e*0.05;

            var res=e1+a1+k1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="english")
        {

            var k1=k*0.05;
            var a1=a*0.05;
        
            var e1=e*0.20;

            var res=e1+a1+k1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="mndal_pd")
        {

            var k1=k*0.10;
            var a1=a*0.10;
        
            var e1=e*0.10;

            var res=e1+a1+k1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="zanst_all")
        {

            var p1=p*0.08;
            var c1=c*0.08;
            var b1=b*0.08
            var e1=e*0.06;

            var res=e1+b1+c1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="zanst_comp")
        {

            var p1=p*0.05;
            var m1=m*0.20;
            var e1=e*0.05;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="it")
        {

            var p1=p*0.05;
            var m1=m*0.15;
            var e1=e*0.10;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        
        else if($("#sel").val()=="nw")
        {

            var p1=p*0.15;
            var m1=m*0.10;
            var e1=e*0.05;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        
        else if($("#sel").val()=="db")
        {

            var p1=p*0.05;
            var m1=m*0.20;
            var e1=e*0.05;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

       else if($("#sel").val()=="inf")
        {

            var e1=e*0.10;
            var m1=m*0.10;
            var p1=p*0.10;

            var res=e1+m1+p1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);

        }

        else if($("#sel").val()=="translate")
        {

            
            var k1=k*0.10;
            var a1=a*0.10;
        
            var e1=e*0.10;

            var res=e1+a1+k1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);
        
        }


        else if($("#sel").val()=="xorak")
        {

            
            var b1=b*0.10;
            var c1=c*0.15;
        
            var e1=e*0.05;

            var res=e1+c1+b1;

            var res1=$("#num").val()*0.70+res;

            $("#res").css("display","block");
            $("#res").text(res1);
        
        }








    }

    
    </script>





    <?php

    include "footer.php";

    ?>
</body>
</html>