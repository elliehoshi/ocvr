$(document).ready(function() {

  // Animate Nav Scroll
  $("#nav ul li a[href^='#']").on('click', function(e){
    e.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top
    }, 300, function() {
      window.location.hash = hash;
    });
  });

  $("#down_carot").on('click', function(){
    $("body, html").animate({ scrollTop: 800 });
  });


  var videos  = $(".video");
  videos.on("click", function(){
      var elm = $(this),
          conts   = elm.contents(),
          le      = conts.length,
          ifr     = null;

      console.log(elm);

      for(var i = 0; i<le; i++){
        if(conts[i].nodeType == 8) ifr = conts[i].textContent;
      }

      elm.addClass("player").html(ifr);
      elm.off("click");
  });

});