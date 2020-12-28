
      $( ".navbar-toggler" ).click(function() {
        if($("#menu").hasClass('fa-bars')) {
          $("#menu").removeClass("fa-bars")
          $("#menu").addClass("fa-times")
        }else{
          $("#menu").removeClass("fa-times")
          $("#menu").addClass("fa-bars")
        }
      });