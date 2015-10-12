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
width:100%;
left:35px;
top:410px;
font-size: 14px;
text-align: left;
}
.inp2{
position: absolute;
width:100%;
left:35px;
top:460px;
font-size: 14px;
text-align: left;
}
.inp3{
position: absolute;
width:100%;
left:35px;
top:508px;
font-size: 14px;
text-align: left;
}
.inp4{
position: absolute;
width:100%;
left:35px;
top:556px;
font-size: 14px;
text-align: left;
}
.inp5{
position: absolute;
width:100%;
left:35px;
top:604px;
font-size: 14px;
text-align: left;
}
.inp6{
position: absolute;
width:100%;
left:35px;
top:652px;
font-size: 14px;
text-align: left;
}
.inp7{
position: absolute;
width:100%;
left:585px;
top:410px;
font-size: 14px;
text-align: left;
}
.inp8{
position: absolute;
width:100%;
left:585px;
top:460px;
font-size: 14px;
text-align: left;
}
.inp9{
position: absolute;
width:100%;
left:585px;
top:508px;
font-size: 14px;
text-align: left;
}
.inp10{
position: absolute;
width:100%;
left:585px;
top:556px;
font-size: 14px;
text-align: left;
}
.inp11{
position: absolute;
width:100%;
left:585px;
top:604px;
font-size: 14px;
text-align: left;
}
.inp12{
position: absolute;
width:100%;
left:585px;
top:652px;
font-size: 14px;
text-align: left;
}
.inp13{
position: absolute;
width:100%;
left:295px;
top:556px;
font-size: 14px;
text-align: left;
}
.inp14{
position: absolute;
width:100%;
left:845px;
top:410px;
font-size: 14px;
text-align: left;
}
.inp15{
position: absolute;
width:100%;
left:845px;
top:460px;
font-size: 14px;
text-align: left;
}
.inp16{
position: absolute;
width:100%;
left:893px;
top:205px;
font-size: 14px;
text-align: left;
}
.inp17{
position: absolute;
width:100%;
left:953px;
top:205px;
font-size: 14px;
text-align: left;
}
.inp18{
position: absolute;
width:100%;
left:1023px;
top:205px;
font-size: 14px;
text-align: left;
}
.inp19{
position: absolute;
width:100%;
left:893px;
top:250px;
font-size: 14px;
text-align: left;
}
.inp20{
position: absolute;
width:100%;
left:1023px;
top:250px;
font-size: 14px;
text-align: left;
}
.inp21{
position: absolute;
width:100%;
left:893px;
top:285px;
font-size: 14px;
text-align: left;
}
.inp22{
position: absolute;
width:100%;
left:1023px;
top:285px;
font-size: 14px;
text-align: left;
}
.inp23{
position: absolute;
width:100%;
left:1023px;
top:335px;
font-size: 14px;
text-align: left;
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
<div class="inp1">{Name:1}</div>	
<div class="inp2">{Uradr:2}</div>	
<div class="inp3">{FactAddr:3}</div>
<div class="inp4">{Tel:4}</div>
<div class="inp5">{Kontact:5}</div>
<div class="inp6">{FIO:6}</div>
<div class="inp7">{INN:7}</div>
<div class="inp8">{OKPO:8}</div>
<div class="inp9">{RS:9}</div>
<div class="inp10">{Bankname:10}</div>
<div class="inp11">{KS:11}</div>
<div class="inp12">{BIK:12}</div>
<div class="inp13">{Email:13}</div>
<div class="inp14">{KPP:14}</div>
<div class="inp15">{OGRN:15}</div>
<div class="inp16">{REGcount:16}</div>
<div class="inp17">{REGadd:17}</div>
<div class="inp18">{REGsum:18}</div>
<div class="inp19">{Plosh:19}</div>
<div class="inp20">{PloshSum:20}</div>
<div class="inp21">{Brend:21}</div>
<div class="inp22">{BrendSum:22}</div>
<div class="inp23">{Sum:23}</div>
           
           <!-- let's build our body content -->
       
         
        <?php } ?>
	</body>
</html>