$(document).ready(function() {
 
  var owl = $("#job-slide");
 
  owl.owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      mouseDrag: false,
      touchDrag: false,
      rewindNav: false
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })

 
});