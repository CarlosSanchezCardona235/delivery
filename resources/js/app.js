
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


var url='http://' + window.location.hostname

$( document ).ready(function() {

if($("#create-messenger").length > 0){

 $.ajax({
   	url: url + '/api/provinces',
   	type:'get',
   	dataType: 'json'
   })
   .done(function(data) {
   	
   	var options='';

   		$.each(data,function(key,value){
   			options+="<option value='"+value.id+"'>"+value.name+"</option>";
   		})
   		$("#provinces").append(options);
   })
   .fail(function(error) {
   	console.log("error");
   	console.log(error.responseText);
   })
   .always(function() {
   	console.log("complete");
   });
  }
 });