jQuery(document).ready(function(){
		if (formlang == 2) { 
jQuery("#input_1_13").val('electronic_ticket_en.jpg');
jQuery("#input_2_21").val('order_en.jpg');	
} else {
	jQuery("#field_1_15 label").html("Откуда узнали о выставке ");
jQuery("#field_1_16 label").html("Какие выставки нижнего белья вы посещали в 2015 году? ");
}
  var addprice = 0;
  var addpricepr = 0;
  var curentprice = 1;
  var quant1 = 0;
  var quant2 = 0;
  var quant3 = 0;
  var quant4 = 0;
  var quant5 = 0;
  
  var maincalc = function () { 
  	if (formlang == 2) {
  		var summ1 = (quant1*300*addprice) + (quant2*320) + (quant3*65) + (quant4*520) + (quant5*1520);
   jQuery('.rbhead span').html(Math.round(summ1));
   jQuery("#input_2_14").val(Math.round(summ1));
  	var isumm1 = quant1*300*addprice;
   jQuery('.isumm1').html(Math.round(isumm1));
   jQuery("#input_2_15").val(Math.round(isumm1));
   jQuery('.isumm1p').html(addpricepr);
   jQuery("#input_2_20").val(addpricepr);
   var isumm2 = quant2*320;
   jQuery('.isumm2').html(Math.round(isumm2));
   jQuery("#input_2_16").val(Math.round(isumm2));
    var isumm3 = quant3*65;
   jQuery('.isumm3').html(Math.round(isumm3));
	jQuery("#input_2_17").val(Math.round(isumm3));
    var isumm4 = quant4*520;
   jQuery('.isumm4').html(Math.round(isumm4));
   jQuery("#input_2_18").val(Math.round(isumm4));
   var isumm5 = quant5*1520;
   jQuery('.isumm5').html(Math.round(isumm5));
   jQuery("#input_2_19").val(Math.round(isumm5));
  		
  		} else {
  			var summ1 = (quant1*20000+quant1*200*addprice) + (quant2*13900) + (quant3*2900);
   jQuery('.rbhead span').html(Math.round(summ1));
   jQuery("#input_6_23").val(Math.round(summ1));
  	var isumm1 = quant1*20000+quant1*200*addprice;
   jQuery('.isumm1').html(Math.round(isumm1));
   jQuery("#input_6_18").val(Math.round(isumm1));
   jQuery('.isumm1p').html(addpricepr);
   jQuery("#input_2_20").val(addpricepr);
   var isumm2 = quant2*13900;
   jQuery('.isumm2').html(Math.round(isumm2));
   jQuery("#input_6_20").val(Math.round(isumm2));
    var isumm3 = quant3*2900;
   jQuery('.isumm3').html(Math.round(isumm3));
	jQuery("#input_6_22").val(Math.round(isumm3));
    var isumm4 = quant4*24000;
   jQuery('.isumm4').html(Math.round(isumm4));
   jQuery("#input_2_18").val(Math.round(isumm4));
   var isumm5 = quant5*70000;
   jQuery('.isumm5').html(Math.round(isumm5));
   jQuery("#input_2_19").val(Math.round(isumm5));
  		} 
   
   
    
  } 
  maincalc ();
  jQuery(".n18").change(function(){
      quant1 = jQuery(this).val();
	  jQuery("#input_6_16").val(quant1)
       maincalc ();
    });
   maincalc ();
  jQuery(".n19").change(function(){
      addprice = jQuery(this).val();
	  jQuery("#input_6_17").val(addprice)
       maincalc ();
    });
  jQuery(".n286").change(function(){
      quant2 = jQuery(this).val();
      jQuery("#input_6_19").val(quant2);
       maincalc ();
    });
  jQuery(".n46").change(function(){
      quant3 = jQuery(this).val();
      jQuery("#input_6_21").val(quant3);
       maincalc ();
    });
  jQuery(".n991").change(function(){
      quant4 = jQuery(this).val();
      jQuery("#input_2_5").val(quant4);
       maincalc ();
    });
  jQuery(".n992").change(function(){
      quant5 = jQuery(this).val();
      jQuery("#input_2_6").val(quant5);
       maincalc ();
    });
    
  jQuery(".n436").change(function(){ 
  		quant436 = jQuery(this).val();     
      jQuery("#input_2_8").val(quant436);
      });
      
  jQuery('.st21').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend21.jpg" alt=""/>');
     jQuery('#input_2_22').val('stend21.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('21'); jQuery('.stnum').html('21');    
    maincalc ();  
  });
   jQuery('.st49').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend49.jpg" alt=""/>');
     jQuery('#input_2_22').val('stend49.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('49'); jQuery('.stnum').html('49');    
    maincalc ();  
  });
 
  jQuery('.st25').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend25.jpg" alt=""/>');
     jQuery('#input_2_22').val('stend25.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('25'); jQuery('.stnum').html('25');    
    maincalc ();  
  });
  
 
  
  jQuery('.st44').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend44.jpg" alt=""/>');
      jQuery('#input_2_22').val('stend44.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('44'); jQuery('.stnum').html('44');    
    maincalc ();  
  });
  jQuery('.st45').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend45.jpg" alt=""/>');
      jQuery('#input_2_22').val('stend45.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('45'); jQuery('.stnum').html('45');    
    maincalc ();  
  });
  
  jQuery('.st47').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend47.jpg" alt=""/>');
 jQuery('#input_2_22').val('stend47.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('47'); jQuery('.stnum').html('47');    
    maincalc ();  
  });
  jQuery('.st48').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend48.jpg" alt=""/>');
      jQuery('#input_2_22').val('stend48.jpg');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('48'); jQuery('.stnum').html('48');    
    maincalc ();  
  });
  
  
var nds1 = 0;
var nds2 = 0;
var nds3 = 0;
var nds4 = 0;
var nds5 = 0;
var nds6 = 0;
var nds7 = 0;
var nds8 = 0;
var nds9 = 0;
var nds10 = 0;
var nds11 = 0;
var nds12 = 0;
var nds13 = 0;
var nds14 = 0;
var nds15 = 0;
var nds16 = 0;
var nds17 = 0;

    var maincalc2 = function () {  
    if (formlang == 2) { 
    var summnd = (nds1*780) +  (nds2*50) + (nds3*170) +  (nds4*170) +  (nds5*260) +  (nds6*260) +  (nds7*390) +  (nds8*390) +  (nds9*390) +  (nds10*170) +  (nds11*85) +  (nds12*85) +  (nds13*130) +  (nds14*130) +  (nds15*85) +  (nds16*170);
	 } else {
   var summnd = (nds1*36000) +  (nds2*2400) + (nds3*50000) +  (nds4*18000) +  (nds5*4000) +  (nds6*12000) +  (nds7*6000) +  (nds8*18000) +  (nds9*6000) +  (nds10*10000) +  (nds11*8000) +  (nds12*4000) +  (nds13*4000) +  (nds14*6000) +  (nds15*6000) +  (nds16*4000) +  (nds17*8000);
	}  
   jQuery('.duheadersum').html(Math.round(summnd)); 
       
  } 
	maincalc2 ();
	if (formlang == 2) { 
  jQuery(".nd01").change(function(){
      nds1 = jQuery(this).val();
      jQuery('.ndr01').html(nds1*780);
       maincalc2 ();
    });
     jQuery(".nd02").change(function(){
      nds2 = jQuery(this).val();
      jQuery('.ndr02').html(nds2*50);
       maincalc2 ();
    });
    jQuery(".nd03").change(function(){
      nds3 = jQuery(this).val();
      jQuery('.ndr03').html(nds3*170);
       maincalc2 ();
    });
    jQuery(".nd04").change(function(){
      nds4 = jQuery(this).val();
      jQuery('.ndr04').html(nds4*170);
       maincalc2 ();
    });
    jQuery(".nd05").change(function(){
      nds5 = jQuery(this).val();
      jQuery('.ndr05').html(Math.round(nds5*260));
       maincalc2 ();
    });
    jQuery(".nd06").change(function(){
      nds6 = jQuery(this).val();
      jQuery('.ndr06').html(Math.round(nds6*260));
       maincalc2 ();
    });
    jQuery(".nd07").change(function(){
      nds7 = jQuery(this).val();
      jQuery('.ndr07').html(Math.round(nds7*390));
       maincalc2 ();
    });
    jQuery(".nd08").change(function(){
      nds8 = jQuery(this).val();
      jQuery('.ndr08').html(Math.round(nds8*390));
       maincalc2 ();
    });
    jQuery(".nd09").change(function(){
      nds9 = jQuery(this).val();
      jQuery('.ndr09').html(Math.round(nds9*390));
       maincalc2 ();
    });
    jQuery(".nd10").change(function(){
      nds10 = jQuery(this).val();
      jQuery('.ndr10').html(Math.round(nds10*170));
       maincalc2 ();
    });
    jQuery(".nd11").change(function(){
      nds11 = jQuery(this).val();
      jQuery('.ndr11').html(Math.round(nds11*85));
       maincalc2 ();
    });
    jQuery(".nd12").change(function(){
      nds12 = jQuery(this).val();
      jQuery('.ndr12').html(Math.round(nds12*85));
       maincalc2 ();
    });
    jQuery(".nd13").change(function(){
      nds13 = jQuery(this).val();
      jQuery('.ndr13').html(Math.round(nds13*130));
       maincalc2 ();
    });
    jQuery(".nd14").change(function(){
      nds14 = jQuery(this).val();
      jQuery('.ndr14').html(Math.round(nds14*130));
       maincalc2 ();
    });
    jQuery(".nd15").change(function(){
      nds15 = jQuery(this).val();
      jQuery('.ndr15').html(Math.round(nds15*85));
       maincalc2 ();
    });
    jQuery(".nd16").change(function(){
      nds16 = jQuery(this).val();
      jQuery('.ndr16').html(Math.round(nds16*170));
       maincalc2 ();
    });
    jQuery(".nd17").change(function(){
      nds16 = jQuery(this).val();
      jQuery('.ndr17').html(Math.round(nds16*170));
       maincalc2 ();
    });
 } else {
 	 jQuery(".nd01").change(function(){
      nds1 = jQuery(this).val();
      jQuery('.ndr01').html(nds1*36000);
       maincalc2 ();
    });
     jQuery(".nd02").change(function(){
      nds2 = jQuery(this).val();
      jQuery('.ndr02').html(nds2*2400);
       maincalc2 ();
    });
    jQuery(".nd03").change(function(){
      nds3 = jQuery(this).val();
      jQuery('.ndr03').html(nds3*50000);
       maincalc2 ();
    });
    jQuery(".nd04").change(function(){
      nds4 = jQuery(this).val();
      jQuery('.ndr04').html(nds4*18000);
       maincalc2 ();
    });
    jQuery(".nd05").change(function(){
      nds5 = jQuery(this).val();
      jQuery('.ndr05').html(Math.round(nds5*4000));
       maincalc2 ();
    });
    jQuery(".nd06").change(function(){
      nds6 = jQuery(this).val();
      jQuery('.ndr06').html(Math.round(nds6*12000));
       maincalc2 ();
    });
    jQuery(".nd07").change(function(){
      nds7 = jQuery(this).val();
      jQuery('.ndr07').html(Math.round(nds7*6000));
       maincalc2 ();
    });
    jQuery(".nd08").change(function(){
      nds8 = jQuery(this).val();
      jQuery('.ndr08').html(Math.round(nds8*18000));
       maincalc2 ();
    });
    jQuery(".nd09").change(function(){
      nds9 = jQuery(this).val();
      jQuery('.ndr09').html(Math.round(nds9*6000));
       maincalc2 ();
    });
    jQuery(".nd10").change(function(){
      nds10 = jQuery(this).val();
      jQuery('.ndr10').html(Math.round(nds10*10000));
       maincalc2 ();
    });
    jQuery(".nd11").change(function(){
      nds11 = jQuery(this).val();
      jQuery('.ndr11').html(Math.round(nds11*8000));
       maincalc2 ();
    });
    jQuery(".nd12").change(function(){
      nds12 = jQuery(this).val();
      jQuery('.ndr12').html(Math.round(nds12*4000));
       maincalc2 ();
    });
    jQuery(".nd13").change(function(){
      nds13 = jQuery(this).val();
      jQuery('.ndr13').html(Math.round(nds13*4000));
       maincalc2 ();
    });
    jQuery(".nd14").change(function(){
      nds14 = jQuery(this).val();
      jQuery('.ndr14').html(Math.round(nds14*6000));
       maincalc2 ();
    });
    jQuery(".nd15").change(function(){
      nds15 = jQuery(this).val();
      jQuery('.ndr15').html(Math.round(nds15*6000));
       maincalc2 ();
    });
   jQuery(".nd16").change(function(){
      nds16 = jQuery(this).val();
      jQuery('.ndr16').html(Math.round(nds16*4000));
       maincalc2 ();
    });
   jQuery(".nd17").change(function(){
      nds17 = jQuery(this).val();
      jQuery('.ndr17').html(Math.round(nds17*8000));
       maincalc2 ();
    });
 }

var mds1 = 0;
var mds2 = 0;
var mds3 = 0;
var mds4 = 0;
var mds5 = 0;
var mds6 = 0;
var mds7 = 0;
var mds8 = 0;
var mds9 = 0;
var mds10 = 0;
var mds11 = 0;
var mds12 = 0;
var mds13 = 0;
var mds14 = 0;
var mds15 = 0;
var mds16 = 0;
var mds17 = 0;
var mds18 = 0;
var mds19 = 0;
var mds20 = 0;
var mds21 = 0;
var mds22 = 0;
var mds23 = 0;
var mds24 = 0;
var mds25 = 0;
var mds26 = 0;
var mds27 = 0;
var mds28 = 0;

   var maincalc3 = function () {  
   if (formlang == 2) { 
   var summnd = (mds1*16) +  (mds2*15) + (mds3*49) +  (mds4*41) + (mds5*54) +  (mds6*37) + (mds7*20) +  (mds8*25) + (mds9*13) +  (mds10*9) + (mds11*30) +  (mds12*52) + (mds13*9) +  (mds14*7) + (mds15*5) +  (mds16*2) + (mds17*2) +  (mds18*7) + (mds19*4) +  (mds20*1.5) + (mds21*2) +  (mds22*2) + (mds23*7) +  (mds24*4) + (mds25*1.5) +  (mds25*2) + (mds27*0.3) +  (mds28*4);
   
   console.log ('en');
   } else {
   console.log ('ru');
   var summnd = (mds1*750) +  (mds2*700) + (mds3*2250) +  (mds4*1900) + (mds5*2500) +  (mds6*1700) + (mds7*900) +  (mds8*1150) + (mds9*600) +  (mds10*400) + (mds11*1400) +  (mds12*2400) + (mds13*400) +  (mds14*300) + (mds15*300) +  (mds16*200) + (mds17*90) +  (mds18*300) + (mds19*200) +  (mds20*70) + (mds21*90) +  (mds22*90) + (mds23*300) +  (mds24*200) + (mds25*70) +  (mds25*90) + (mds27*15) +  (mds28*200);
   	
   }
   jQuery('.duheadersum').html(Math.round(summnd)); 
  
       
  } 
  maincalc3 ();
  if (formlang == 2) {
  jQuery(".md01").change(function(){
      mds1 = jQuery(this).val();
      jQuery('.mducol01').html(mds1*16);
       maincalc3 ();
    });
    jQuery(".md02").change(function(){
      mds2 = jQuery(this).val();
      jQuery('.mducol02').html(mds2*15);
       maincalc3 ();
    });
    jQuery(".md03").change(function(){
      mds3 = jQuery(this).val();
      jQuery('.mducol03').html(mds3*49);
       maincalc3 ();
    });
    jQuery(".md04").change(function(){
      mds4 = jQuery(this).val();
      jQuery('.mducol04').html(mds4*41);
       maincalc3 ();
    });
    
    jQuery(".md05").change(function(){
      mds5 = jQuery(this).val();
      jQuery('.mducol05').html(mds5*54);
       maincalc3 ();
    });
    jQuery(".md06").change(function(){
      mds6 = jQuery(this).val();
      jQuery('.mducol06').html(mds6*37);
       maincalc3 ();
    });
    jQuery(".md07").change(function(){
      mds7 = jQuery(this).val();
      jQuery('.mducol07').html(mds7*20);
       maincalc3 ();
    });
    jQuery(".md08").change(function(){
      mds8 = jQuery(this).val();
      jQuery('.mducol08').html(mds8*25);
       maincalc3 ();
    });
    
    jQuery(".md09").change(function(){
      mds9 = jQuery(this).val();
      jQuery('.mducol09').html(mds9*13);
       maincalc3 ();
    });
    jQuery(".md10").change(function(){
      mds10 = jQuery(this).val();
      jQuery('.mducol10').html(mds10*9);
       maincalc3 ();
    });
    jQuery(".md11").change(function(){
      mds11 = jQuery(this).val();
      jQuery('.mducol11').html(mds11*30);
       maincalc3 ();
    });
    jQuery(".md12").change(function(){
      mds12 = jQuery(this).val();
      jQuery('.mducol12').html(mds12*52);
       maincalc3 ();
    });
    
     jQuery(".md13").change(function(){
      mds13 = jQuery(this).val();
      jQuery('.mducol13').html(mds13*9);
       maincalc3 ();
    });
    jQuery(".md14").change(function(){
      mds14 = jQuery(this).val();
      jQuery('.mducol14').html(mds14*7);
       maincalc3 ();
    });
    jQuery(".md15").change(function(){
      mds15 = jQuery(this).val();
      jQuery('.mducol15').html(mds15*5);
       maincalc3 ();
    });
    jQuery(".md16").change(function(){
      mds16 = jQuery(this).val();
      jQuery('.mducol16').html(mds16*2);
       maincalc3 ();
    });
    
    
        
     jQuery(".md17").change(function(){
      mds17 = jQuery(this).val();
      jQuery('.mducol17').html(mds17*2);
       maincalc3 ();
    });
    jQuery(".md18").change(function(){
      mds18 = jQuery(this).val();
      jQuery('.mducol18').html(mds18*7);
       maincalc3 ();
    });
    jQuery(".md19").change(function(){
      mds19 = jQuery(this).val();
      jQuery('.mducol19').html(mds19*4);
       maincalc3 ();
    });
    jQuery(".md20").change(function(){
      mds20 = jQuery(this).val();
      jQuery('.mducol20').html(mds20*1.5);
       maincalc3 ();
    });
    
        
     jQuery(".md21").change(function(){
      mds21 = jQuery(this).val();
      jQuery('.mducol21').html(mds21*2);
       maincalc3 ();
    });
    jQuery(".md22").change(function(){
      mds22 = jQuery(this).val();
      jQuery('.mducol22').html(mds22*2);
       maincalc3 ();
    });
    jQuery(".md12").change(function(){
      mds23 = jQuery(this).val();
      jQuery('.mducol23').html(mds23*7);
       maincalc3 ();
    });
    jQuery(".md24").change(function(){
      mds24 = jQuery(this).val();
      jQuery('.mducol24').html(mds24*4);
       maincalc3 ();
    });
    
    
        
     jQuery(".md25").change(function(){
      mds25 = jQuery(this).val();
      jQuery('.mducol25').html(mds25*1.5);
       maincalc3 ();
    });
    jQuery(".md26").change(function(){
      mds26 = jQuery(this).val();
      jQuery('.mducol26').html(mds26*2);
       maincalc3 ();
    });
    jQuery(".md27").change(function(){
      mds27 = jQuery(this).val();
      jQuery('.mducol27').html(mds27*0.3);
       maincalc3 ();
    });
    jQuery(".md28").change(function(){
      mds28 = jQuery(this).val();
      jQuery('.mducol28').html(mds28*4);
       maincalc3 ();
    });
    
    
    } else {
    	jQuery(".md01").change(function(){
      mds1 = jQuery(this).val();
      jQuery('.mducol01').html(mds1*750);
       maincalc3 ();
    });
    jQuery(".md02").change(function(){
      mds2 = jQuery(this).val();
      jQuery('.mducol02').html(mds2*700);
       maincalc3 ();
    });
    jQuery(".md03").change(function(){
      mds3 = jQuery(this).val();
      jQuery('.mducol03').html(mds3*2250);
       maincalc3 ();
    });
    jQuery(".md04").change(function(){
      mds4 = jQuery(this).val();
      jQuery('.mducol04').html(mds4*1900);
       maincalc3 ();
    });
    
    jQuery(".md05").change(function(){
      mds5 = jQuery(this).val();
      jQuery('.mducol05').html(mds5*2500);
       maincalc3 ();
    });
    jQuery(".md06").change(function(){
      mds6 = jQuery(this).val();
      jQuery('.mducol06').html(mds6*1700);
       maincalc3 ();
    });
    jQuery(".md07").change(function(){
      mds7 = jQuery(this).val();
      jQuery('.mducol07').html(mds7*900);
       maincalc3 ();
    });
    jQuery(".md08").change(function(){
      mds8 = jQuery(this).val();
      jQuery('.mducol08').html(mds8*1150);
       maincalc3 ();
    });
    
    jQuery(".md09").change(function(){
      mds9 = jQuery(this).val();
      jQuery('.mducol09').html(mds9*600);
       maincalc3 ();
    });
    jQuery(".md10").change(function(){
      mds10 = jQuery(this).val();
      jQuery('.mducol10').html(mds10*400);
       maincalc3 ();
    });
    jQuery(".md11").change(function(){
      mds11 = jQuery(this).val();
      jQuery('.mducol11').html(mds11*1400);
       maincalc3 ();
    });
    jQuery(".md12").change(function(){
      mds12 = jQuery(this).val();
      jQuery('.mducol12').html(mds12*2400);
       maincalc3 ();
    });
    
     jQuery(".md13").change(function(){
      mds13 = jQuery(this).val();
      jQuery('.mducol13').html(mds13*400);
       maincalc3 ();
    });
    jQuery(".md14").change(function(){
      mds14 = jQuery(this).val();
      jQuery('.mducol14').html(mds14*300);
       maincalc3 ();
    });
    jQuery(".md15").change(function(){
      mds15 = jQuery(this).val();
      jQuery('.mducol15').html(mds15*300);
       maincalc3 ();
    });
    jQuery(".md16").change(function(){
      mds16 = jQuery(this).val();
      jQuery('.mducol16').html(mds16*200);
       maincalc3 ();
    });
    
    
        
     jQuery(".md17").change(function(){
      mds17 = jQuery(this).val();
      jQuery('.mducol17').html(mds17*90);
       maincalc3 ();
    });
    jQuery(".md18").change(function(){
      mds18 = jQuery(this).val();
      jQuery('.mducol18').html(mds18*300);
       maincalc3 ();
    });
    jQuery(".md19").change(function(){
      mds19 = jQuery(this).val();
      jQuery('.mducol19').html(mds19*200);
       maincalc3 ();
    });
    jQuery(".md20").change(function(){
      mds20 = jQuery(this).val();
      jQuery('.mducol20').html(mds20*70);
       maincalc3 ();
    });
    
     jQuery(".md21").change(function(){
      mds21 = jQuery(this).val();
      jQuery('.mducol21').html(mds21*90);
       maincalc3 ();
    });
    jQuery(".md22").change(function(){
      mds22 = jQuery(this).val();
      jQuery('.mducol22').html(mds22*90);
       maincalc3 ();
    });
    jQuery(".md12").change(function(){
      mds23 = jQuery(this).val();
      jQuery('.mducol23').html(mds23*300);
       maincalc3 ();
    });
    jQuery(".md24").change(function(){
      mds24 = jQuery(this).val();
      jQuery('.mducol24').html(mds24*200);
       maincalc3 ();
    });
    
    
        
     jQuery(".md25").change(function(){
      mds25 = jQuery(this).val();
      jQuery('.mducol25').html(mds25*70);
       maincalc3 ();
    });
    jQuery(".md26").change(function(){
      mds26 = jQuery(this).val();
      jQuery('.mducol26').html(mds26*90);
       maincalc3 ();
    });
    jQuery(".md27").change(function(){
      mds27 = jQuery(this).val();
      jQuery('.mducol27').html(mds27*15);
       maincalc3 ();
    });
    jQuery(".md28").change(function(){
      mds28 = jQuery(this).val();
      jQuery('.mducol28').html(mds28*200);
       maincalc3 ();
    });
    }
    
jQuery(document).bind('gform_confirmation_loaded', function(event, formId){
            if(formId == 1) {
                yaCounter30544277.reachGoal('onsentok');
            } else if(formId == 2) {
              
            }
        });    
    
});

jQuery(window).scroll(function (event) {
    var scroll = jQuery(window).scrollTop();    
    if (scroll >= 120) {
	jQuery(".mline").css({"position": "fixed", "top": "0"});
    } else {
      jQuery(".mline").css({"position": "relative", "top": "auto"});
    }
});
function printPage() {
    window.print();
    
    if (window.stop) {
        location.reload(); 
        window.stop();
    }
    return false;
}