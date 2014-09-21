$( document ).ready(function() {
 //hide stuff   
$(".job-stats").hide();

//job box slide down with variable
$( ".job-box-click" ).click(function() {
	//get the id of clicked
	var clicked = $(this).siblings('.job-stats') //gets the siblingh job-stats of the clicked job box click 


  $( clicked ).slideToggle( 1000, function() {   //uses the clicked variable to toggle. 
    // Animation complete.
  });
});



}); //ready end