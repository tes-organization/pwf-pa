$(function(){
    
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 0) {
            $("nav").removeClass("bg-transparent py-4");
            $("nav").addClass("bg-dark py-1 shadow p-3 mb-5 ") 
                
        } 
        else {
            $("nav").removeClass("bg-dark py-1 shadow p-3 mb-5 ");
            $("nav").addClass("bg-transparent py-4");            
        }
      }); 

});