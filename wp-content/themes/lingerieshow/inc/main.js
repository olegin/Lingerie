jQuery(document).ready(function(){
  var addprice = 1;
  var addpricepr = 0;
  var curentprice = 1;
  var quant1 = 0;
  var quant2 = 0;
  var quant3 = 0;
  var quant4 = 0;
  var quant5 = 0;
  var maincalc = function () {  
   var summ1 = (quant1*13900*addprice) + (quant2*15000) + (quant3*2900) + (quant4*24000) + (quant5*70000);
   jQuery('.rbhead span').html(Math.round(summ1));
   jQuery("#input_2_14").val(Math.round(summ1));
  	var isumm1 = quant1*13900*addprice;
   jQuery('.isumm1').html(Math.round(isumm1));
   jQuery("#input_2_15").val(Math.round(isumm1));
   jQuery('.isumm1p').html(addpricepr);
   jQuery("#input_2_20").val(addpricepr);
   var isumm2 = quant2*15000;
   jQuery('.isumm2').html(Math.round(isumm2));
   jQuery("#input_2_16").val(Math.round(isumm2));
    var isumm3 = quant3*2900;
   jQuery('.isumm3').html(Math.round(isumm3));
	jQuery("#input_2_17").val(Math.round(isumm3));
    var isumm4 = quant4*24000;
   jQuery('.isumm4').html(Math.round(isumm4));
   jQuery("#input_2_18").val(Math.round(isumm4));
   var isumm5 = quant5*70000;
   jQuery('.isumm5').html(Math.round(isumm5));
   jQuery("#input_2_19").val(Math.round(isumm5));
   
    
  } 
  maincalc ();
  jQuery(".n18").change(function(){
      quant1 = jQuery(this).val();
       maincalc ();
    });
  jQuery(".n286").change(function(){
      quant2 = jQuery(this).val();
      jQuery("#input_2_2").val(quant2);
       maincalc ();
    });
  jQuery(".n46").change(function(){
      quant3 = jQuery(this).val();
      jQuery("#input_2_3").val(quant3);
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
      
  jQuery('.st01').click(function(){
    addprice = 1.1;
    addpricepr = 10;
    quant1 = 10;
    jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend01.jpg" alt=""/>');    
    jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
    jQuery('#input_2_7').val('1'); jQuery('.stnum').html('1');    
    maincalc ();  
  });
  jQuery('.st02').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 30;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend02.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('2'); jQuery('.stnum').html('2');    
    maincalc ();  
  });
  jQuery('.st03').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 24;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend03.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('3'); jQuery('.stnum').html('3');    
    maincalc ();  
  });
  jQuery('.st04').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 7;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend04.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('4'); jQuery('.stnum').html('4');    
    maincalc ();  
  });
  jQuery('.st05').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 12;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend05.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('5'); jQuery('.stnum').html('5');    
    maincalc ();  
  });
  jQuery('.st06').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 17;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend06.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('6'); jQuery('.stnum').html('6');    
    maincalc ();  
  });
  jQuery('.st07').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 10;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend07.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('7'); jQuery('.stnum').html('7');    
    maincalc ();  
  });
  jQuery('.st08').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 14;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend08.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('8'); jQuery('.stnum').html('8');    
    maincalc ();  
  });
  jQuery('.st09').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 50;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend09.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('9'); jQuery('.stnum').html('9');    
    maincalc ();  
  });
  jQuery('.st10').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 7;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend10.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('10'); jQuery('.stnum').html('10');    
    maincalc ();  
  });
  jQuery('.st11').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 5;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend11.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('11'); jQuery('.stnum').html('11');    
    maincalc ();  
  });
  jQuery('.st12').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend12.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('12'); jQuery('.stnum').html('12');    
    maincalc ();  
  });
  jQuery('.st13').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend13.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('13'); jQuery('.stnum').html('13');    
    maincalc ();  
  });
  jQuery('.st14').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend14.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('14'); jQuery('.stnum').html('14');    
    maincalc ();  
  });
  jQuery('.st15').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend15.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('15'); jQuery('.stnum').html('15');    
    maincalc ();  
  });
  jQuery('.st16').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 17;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend16.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('16'); jQuery('.stnum').html('16');    
    maincalc ();  
  });
  jQuery('.st17').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend17.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('17'); jQuery('.stnum').html('17');    
    maincalc ();  
  });
  jQuery('.st18').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend18.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('18'); jQuery('.stnum').html('18');    
    maincalc ();  
  });
  jQuery('.st19').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 10;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend19.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('19'); jQuery('.stnum').html('19');    
    maincalc ();  
  });
  jQuery('.st20').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend20.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('20'); jQuery('.stnum').html('20');    
    maincalc ();  
  });
  jQuery('.st21').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend21.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('21'); jQuery('.stnum').html('21');    
    maincalc ();  
  });
  jQuery('.st22').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend22.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('22'); jQuery('.stnum').html('22');    
    maincalc ();  
  });
  jQuery('.st23').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 5;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend23.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('23'); jQuery('.stnum').html('23');    
    maincalc ();  
  });
  jQuery('.st24').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend24.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('24'); jQuery('.stnum').html('24');    
    maincalc ();  
  });
  jQuery('.st25').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend25.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('25'); jQuery('.stnum').html('25');    
    maincalc ();  
  });
  jQuery('.st26').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 13;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend26.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('26'); jQuery('.stnum').html('26');    
    maincalc ();  
  });
  jQuery('.st27').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 13;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend27.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('27'); jQuery('.stnum').html('27');    
    maincalc ();  
  });
  jQuery('.st28').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 29;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend28.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('28'); jQuery('.stnum').html('28');    
    maincalc ();  
  });
  jQuery('.st29').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 24;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend29.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('29'); jQuery('.stnum').html('29');    
    maincalc ();  
  });
  jQuery('.st30').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 26;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend30.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('30'); jQuery('.stnum').html('30');    
    maincalc ();  
  });
  jQuery('.st31').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 12;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend31.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('31'); jQuery('.stnum').html('31');    
    maincalc ();  
  });
  jQuery('.st32').click(function(){
    addprice = 1.1;
    addpricepr = 10;
     quant1 = 15;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend32.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('32'); jQuery('.stnum').html('32');    
    maincalc ();  
  });
  jQuery('.st33').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 13;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend33.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('33'); jQuery('.stnum').html('33');    
    maincalc ();  
  });
  jQuery('.st34').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 10;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend34.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('34'); jQuery('.stnum').html('34');    
    maincalc ();  
  });
  jQuery('.st35').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend35.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('35'); jQuery('.stnum').html('35');    
    maincalc ();  
  });
  jQuery('.st36').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 7;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend36.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('36'); jQuery('.stnum').html('36');    
    maincalc ();  
  });
  jQuery('.st37').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 7;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend37.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('37'); jQuery('.stnum').html('37');    
    maincalc ();  
  });
  jQuery('.st38').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 10;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend38.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('38'); jQuery('.stnum').html('38');    
    maincalc ();  
  });
  jQuery('.st39').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 12;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend39.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('39'); jQuery('.stnum').html('39');    
    maincalc ();  
  });
  jQuery('.st40').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 9;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend40.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('40'); jQuery('.stnum').html('40');    
    maincalc ();  
  });
  jQuery('.st41').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend41.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('41'); jQuery('.stnum').html('41');    
    maincalc ();  
  });
  jQuery('.st42').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 8;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend42.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('42'); jQuery('.stnum').html('42');    
    maincalc ();  
  });
  jQuery('.st43').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend43.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('43'); jQuery('.stnum').html('43');    
    maincalc ();  
  });
  jQuery('.st44').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend44.jpg" alt=""/>');
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
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('45'); jQuery('.stnum').html('45');    
    maincalc ();  
  });
  jQuery('.st46').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend46.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('46'); jQuery('.stnum').html('46');    
    maincalc ();  
  });
  jQuery('.st47').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend47.jpg" alt=""/>');
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
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('48'); jQuery('.stnum').html('48');    
    maincalc ();  
  });
  jQuery('.st49').click(function(){
    addprice = 1.05;
    addpricepr = 5;
     quant1 = 4;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend49.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('49'); jQuery('.stnum').html('49');    
    maincalc ();  
  });
  jQuery('.st50').click(function(){
    addprice = 1.0;
    addpricepr = 0;
     quant1 = 6;
     jQuery('.imglc').html('<img src="/wp-content/uploads/img/stend50.jpg" alt=""/>');
     jQuery(".n18").val(quant1); jQuery("#input_2_1").val(quant1);
     jQuery('.stpl').html(quant1);
    jQuery('#input_2_7').val('50'); jQuery('.stnum').html('50');    
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

    var maincalc2 = function () {  
    
   var summnd = (nds1*36000) +  (nds2*2400) + (nds3*8000) +  (nds4*8000) +  (nds5*12000) +  (nds6*12000) +  (nds7*18000) +  (nds8*18000) +  (nds9*8000) +  (nds10*4000) +  (nds11*4000) +  (nds12*6000) +  (nds13*6000) +  (nds14*4000) +  (nds15*8000);
   jQuery('.duheadersum').html(Math.round(summnd)); 
       
  } 
	maincalc2 ();
	
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
      jQuery('.ndr03').html(nds3*8000);
       maincalc2 ();
    });
    jQuery(".nd04").change(function(){
      nds4 = jQuery(this).val();
      jQuery('.ndr04').html(nds4*8000);
       maincalc2 ();
    });
    jQuery(".nd05").change(function(){
      nds5 = jQuery(this).val();
      jQuery('.ndr05').html(Math.round(nds5*12000));
       maincalc2 ();
    });
    jQuery(".nd06").change(function(){
      nds6 = jQuery(this).val();
      jQuery('.ndr06').html(Math.round(nds6*12000));
       maincalc2 ();
    });
    jQuery(".nd07").change(function(){
      nds7 = jQuery(this).val();
      jQuery('.ndr07').html(Math.round(nds7*18000));
       maincalc2 ();
    });
    jQuery(".nd08").change(function(){
      nds8 = jQuery(this).val();
      jQuery('.ndr08').html(Math.round(nds8*18000));
       maincalc2 ();
    });
    jQuery(".nd09").change(function(){
      nds9 = jQuery(this).val();
      jQuery('.ndr09').html(Math.round(nds9*8000));
       maincalc2 ();
    });
    jQuery(".nd10").change(function(){
      nds10 = jQuery(this).val();
      jQuery('.ndr10').html(Math.round(nds10*4000));
       maincalc2 ();
    });
    jQuery(".nd11").change(function(){
      nds11 = jQuery(this).val();
      jQuery('.ndr11').html(Math.round(nds11*4000));
       maincalc2 ();
    });
    jQuery(".nd12").change(function(){
      nds12 = jQuery(this).val();
      jQuery('.ndr12').html(Math.round(nds12*6000));
       maincalc2 ();
    });
    jQuery(".nd13").change(function(){
      nds13 = jQuery(this).val();
      jQuery('.ndr13').html(Math.round(nds13*6000));
       maincalc2 ();
    });
    jQuery(".nd14").change(function(){
      nds14 = jQuery(this).val();
      jQuery('.ndr14').html(Math.round(nds14*4000));
       maincalc2 ();
    });
    jQuery(".nd15").change(function(){
      nds15 = jQuery(this).val();
      jQuery('.ndr15').html(Math.round(nds15*8000));
       maincalc2 ();
    });


    
});

jQuery(window).scroll(function (event) {
    var scroll = jQuery(window).scrollTop();    
    if (scroll >= 150) {
	jQuery(".mline").css({"position": "fixed", "top": "0"});
    } else {
      jQuery(".mline").css({"position": "relative", "top": "auto"});
    }
});
function printPage() {
    window.print();

    //workaround for Chrome bug - https://code.google.com/p/chromium/issues/detail?id=141633
    if (window.stop) {
        location.reload(); //triggering unload (e.g. reloading the page) makes the print dialog appear
        window.stop(); //immediately stop reloading
    }
    return false;
}