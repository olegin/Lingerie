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
.mainb{
margin:0 auto;
height: 100%;
border:2px solid #000;
width: 100%;
}
.dtop{
	height:51%;
	position: relative;
border-bottom: 2px solid #000;
}
.dtinner{
float: left;
width: 46.5%;
position: relative;
padding:1%;

}
.dtinner.left{
text-align: left;
}
.dtinner.right{
text-align: center;
border-left:0px;
}
.bline {
  clear: both;
  width: 100%;
  display: block;
  text-align: center;
  background: #C79E60;
  margin-bottom: 8px;  
  color: #68341E;
  font-size: 11px;
}
.dtbottom{
	  float: left;
  width: 98%;
  padding:1%;
}
p{
  font-size: 13px;
  padding-left: 20px;
}
.dtinner.right p{
text-align: center;
}
.inp{
border:1px solid #777;
margin:20px auto;
height: 20px;
line-height: 20px;
font-size: 12px;
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
			<div class="mainb">
				<div class="dtop">
					<div class="dtinner left">
					<p>
1. Распечатайте Ваш именной 
электронный билет на выставку 
LINGERIE SHOW-FORUM. 
</p>
<p>
2. Предъявите электронный билет 
сотрудникам стойки регистрации, 
расположенной у входа в зал 
EVENT-ХОЛЛА "ИнфоПространство", 
в дни выставки. Обменяйте Ваш 
электронный билет на бейдж посетителя. 
</p>
<p>
3. Сохраняйте полученный бейдж, 
дающий право на вход 
до конца проведения выставки. 
</p>
<p>
4. Не допускайте перепечатки и 
копирования этого электронного билета 
посторонними лицами, так как они могут 
воспользоваться им раньше Вас. Этот билет 
предназначен для использования только 
с целью личного посещения выставки. 
</p>

					
					</div>
					<div class="dtinner right">
LINGERIE SHOW-FORUM 
<p>	

Международная выставка 
нижнего белья, купальников, домашней одежды и чулочно-носочных изделий 
</p>
<p>
<p>
2-4 СЕНТЯБРЯ 10.00 -18.00 5 СЕНТЯБРЯ 10.00 -14.00 
Москва, EVENT-ХОЛЛ “ИнфоПространство” 
</p>
<p>
ЭЛЕКТРОННЫЙ БИЛЕТ 
</p>
<p>
ПОСЕТИТЕЛЬ 
</p>
<div class="inp">{ФИО:2}</div>
<div class="inp">{Компания:1}</div>
<div class="inp">№ {entry_id}</div>
					</div>
				</div>
					<div class="dtbottom">
					<div class="bline">119034, г. Москва, 1-й Зачатьевский переулок, д.4 EVENT-ХОЛЛ “ИнфоПространство” тел: +7 (495) 690 72 41 </div>
					<img src="http://lingerieshow.cf/wp-content/uploads/PDF_EXTENDED_TEMPLATES/electronic_ticket/Image_006.jpg" alt=""/>
					</div>
			</div>
           
           
           <!-- let's build our body content -->
       
         
        <?php } ?>
	</body>
</html>