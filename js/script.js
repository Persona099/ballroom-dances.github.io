$(document).ready(function () {
  $(document).on("scroll",function () {
    var scroll = $("body").scrollTop();
    var nav = $("nav");
    if(scroll > 560){
      if(!nav.hasClass("light")) nav.addClass("light");
    } else{
      if(nav.hasClass("light")) nav.removeClass("light");
    }
  });

});
