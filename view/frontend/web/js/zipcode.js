/* require([
    "jquery",
    "jquery/ui"
], function($){

	function checkgivenzipcode(zipcode){
	 alert(zipcode);
	 console.log('clicked');
		alert('clicked');
	}

}); */

 define([
    "jquery",
    "jquery/ui"
],
    function($){
        
        $.widget('zipcode.js', {
        function checkgivenzipcode(zipcode){
	     
	    }		
    });
   window.checkgivenzipcode = checkgivenzipcode;
    

});
 

