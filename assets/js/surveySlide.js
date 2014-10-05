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
    var job_id = $(this).data("id");
    var yes_id = "do_tip_" + job_id;
    var no_id  = "dont_tip_" + job_id;

    var yes = 0;
    var no  = 0;

    switch($(this).attr("id")) {
      case yes_id:
        yes = 1;
        break;
      case no_id:
        no = 1;
        break;
    }

    var data = {
      "job_id" : job_id,
      "yes" : yes,
      "no" : no
    }

    $.ajax({
      type: "POST",
      url: base_url + "index.php/survey/submitTip",
      data: data,
      success: function(){  
        owl.trigger('owl.next');
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      }  
    });
  })

  $( "#survey-share" ).click(function() {
    $( ".share-modal" ).slideDown('slow',function() {
      // Animation complete.
    });
  });

  $( "#close" ).click(function() {
    $( ".share-modal" ).slideUp('slow',function() {
      // Animation complete.
    });
});

 
});