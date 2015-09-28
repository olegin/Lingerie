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
background:url("http://lingerie-show-forum.ru/wp-content/uploads/PDF_EXTENDED_TEMPLATES/electronic_ticket/electronic_ticket.jpg") no-repeat;
background-size: 100% 100%;
}
.inp{
position: absolute;
}
.inp1{
position: absolute;
width:315px;
height:20px;
left:426px;
top:390px;
text-align: center;
}
.inp2{
position: absolute;
width:315px;
height:20px;
left:426px;
top:440px;
text-align: center;
}
.inp3{
position: absolute;
width:315px;
height:20px;
left:426px;
top:490px;
text-align: center;
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
background:url("http://lingerie-show-forum.ru/wp-content/uploads/PDF_EXTENDED_TEMPLATES/electronic_ticket/{Hidden Field:13}") no-repeat;
}	
</style>	
<div class="inp1">{ФИО:2}</div>
<div class="inp2">{Компания:1}</div>
<div class="inp3">№ {entry_id}</div>

           
           <!-- let's build our body content -->
       
         
        <?php } ?>
	</body>
</html>