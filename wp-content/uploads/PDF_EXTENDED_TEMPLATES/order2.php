<?php

/**
 * Don't give direct access to the template
 */ 
if(!class_exists("RGForms")){
	return;
}

/**
 * Load the form data to pass to our PDF generating function 
 */
$form = RGFormsModel::get_form_meta($form_id);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>	
    <link rel='stylesheet' href='<?php echo PDF_PLUGIN_URL .'initialisation/template.css'; ?>' type='text/css' />
	<?php 
		/* 
		 * Create your own stylesheet or use the <style></style> tags to add or modify styles  
		 * The plugin stylesheet is overridden every update		 
		 */
	?>
    <title>Gravity PDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css"> 
body{
background:url("http://lingerie-show-forum.ru/wp-content/uploads/PDF_EXTENDED_TEMPLATES/electronic_ticket/order_0216.png") no-repeat;
background-size: 100% 100%;
}
.inp{
position: absolute;
}
.inp1{
position: absolute;
width:30px;
height:15px;
left:990px;
top:153px;
font-size: 14px;
text-align: center;
}
.inp2{
position: absolute;
width:40px;
height:15px;
left:1045px;
top:128px;
font-size: 10px;
text-align: center;

}
.inp3{
position: absolute;
width:20px;
height:15px;
left:672px;
top:180px;
font-size: 10px;
text-align: center;
}
.inp4{
position: absolute;
width:20px;
height:15px;
left:672px;
top:205px;
font-size: 10px;
text-align: center;
}
.inp5{
position: absolute;
width:20px;
height:15px;
left:672px;
top:240px;
font-size: 10px;
text-align: center;
}
.inp6{
position: absolute;
width:20px;
height:15px;
left:672px;
top:268px;
font-size: 10px;
text-align: center;
}
.inp7{
position: absolute;
width:20px;
height:15px;
left:672px;
top:300px;
font-size: 10px;
text-align: center;
}
.inp8{
position: absolute;
width:160px;
height:15px;
left:330px;
top:690px;
font-size: 12px;
text-align: left;
}
.inp9{
position: absolute;
width:160px;
height:15px;
left:430px;
top:720px;
font-size: 12px;
text-align: left;
}
.inp10{
position: absolute;
width:160px;
height:15px;
left:67px;
top:692px;
font-size: 12px;
text-align: left;
}
.inp11{
position: absolute;
width:160px;
height:15px;
left:67px;
top:718px;
font-size: 12px;
text-align: left;
}
.inp12{
position: absolute;
width:160px;
height:15px;
left:67px;
top:747px;
font-size: 12px;
text-align: left;
}
.inp13{
position: absolute;
width:40px;
height:15px;
left:772px;
top:180px;
font-size: 20px;
text-align: center;
}
.inp14{
position: absolute;
width:40px;
height:15px;
left:772px;
top:205px;
font-size: 12px;
text-align: center;
}
.inp15{
position: absolute;
width:40px;
height:15px;
left:772px;
top:240px;
font-size: 12px;
text-align: center;
}
.inp16{
position: absolute;
width:40px;
height:15px;
left:772px;
top:268px;
font-size: 12px;
text-align: center;
}
.inp17{
position: absolute;
width:40px;
height:15px;
left:772px;
top:300px;
font-size: 12px;
text-align: center;
}
.inp18{
position: absolute;
width:127px;
height:146px;
left:900px;
top:176px;
text-align: center;
}
img{
width:127px;
height:146px;
border:0px!important;
box-shadow: none;
}
</style>
</head>
	<body>
        <?php	

        foreach($lead_ids as $lead_id) {

            $lead = RGFormsModel::get_lead($lead_id);
            $form_data = GFPDFEntryDetail::lead_detail_grid_array($form, $lead);
			
			/*
			 * Add &data=1 when viewing the PDF via the admin area to view the $form_data array
			 */
			PDF_Common::view_data($form_data);				
						
			/*
			 * Store your form fields from the $form_data array into variables here
			 * To see your entire $form_data array, view your PDF via the admin area and add &data=1 to the url
			 * 
			 * For an example of accessing $form_data fields see https://developer.gravitypdf.com/documentation/custom-templates-introduction/
			 *
			 * Alternatively, as of v3.4.0 you can use merge tags (except {allfields}) in your templates. 
			 * Just add merge tags to your HTML and they'll be parsed before generating the PDF.	
			 * 		 
			 */				 					

			?>  

			<!-- New to v3.4.0, watermarking is now enabled. See example-watermark09.php for more details -->    
			
			<!-- There's much better server compatibility if you use the absolute path to the image as oppose to a URL. -->
	
<style type="text/css">
body{
background:url("http://lingerie-show-forum.ru/wp-content/uploads/PDF_EXTENDED_TEMPLATES/electronic_ticket/order_0216.png") no-repeat;
}	
</style>			
<div class="inp1">{СТЕНД №:7}</div>
<div class="inp2">{sum1:14}</div>
<div class="inp3">{Оборудованная площадь:1}</div>
<div class="inp4">{Регистрационный взнос:2}</div>
<div class="inp5">{Брендирование стен стенда:3}</div>
<div class="inp6">{Показы — сет  (2 лука х 3 дня):5}</div>
<div class="inp7">{Реклама:6}</div>
<div class="inp8">{УЧАСТНИК / ПЛАТЕЛЬЩИК:9}</div>
<div class="inp9">( {Руководитель (ФИО):12} )</div>
<div class="inp10">{Контактное лицо:10}</div>
<div class="inp11">{Тел.:11}</div>
<div class="inp12">{Email:13}</div>
<div class="inp13">{sum2:15}</div>
<div class="inp14">{sum3:16}</div>
<div class="inp15">{sum4:17}</div>
<div class="inp16">{sum5:18}</div>
<div class="inp17">{sum6:19}</div>
<div class="inp18"><img src="/wp-content/uploads/img/{Hidden Field:22}" alt=""/></div>



           
           <!-- let's build our body content -->
       
         
        <?php } ?>
	</body>
</html>