$(document).ready(function(){
 var max_text=200;
 $(".character_remaining1").html(max_text+" characters remaining");
 $(".minus1").keyup(function(){
 var text_length=$(".minus1").val().length;
 var total_character_remaining=max_text-text_length;
 $(".character_remaining1").html(total_character_remaining+" characters remaining");
 });
 
 var max_text=200;
 $(".character_remaining2").html(max_text+" characters remaining");
 $(".minus2").keyup(function(){
 var text_length=$(".minus2").val().length;
 var total_character_remaining=max_text-text_length;
 $(".character_remaining2").html(total_character_remaining+" characters remaining");
 });
 
 var max_text=200;
 $(".character_remaining3").html(max_text+" characters remaining");
 $(".minus3").keyup(function(){
 var text_length=$(".minus3").val().length;
 var total_character_remaining=max_text-text_length;
 $(".character_remaining3").html(total_character_remaining+" characters remaining");
 });
 
 var max_text=200;
 $(".character_remaining4").html(max_text+" characters remaining");
 $(".minus4").keyup(function(){
 var text_length=$(".minus4").val().length;
 var total_character_remaining=max_text-text_length;
 $(".character_remaining4").html(total_character_remaining+" characters remaining");
 });
 
 var max_text=200;
 $(".character_remaining5").html(max_text+" characters remaining");
 $(".minus5").keyup(function(){
 var text_length=$(".minus5").val().length;
 var total_character_remaining=max_text-text_length;
 $(".character_remaining5").html(total_character_remaining+" characters remaining");
 });
 
 });