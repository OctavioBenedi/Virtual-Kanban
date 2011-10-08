$(document).ready(function() {
  var obj = $("#galleta");
        obj.css("top","-73px");
        $(function(){
            obj.stop().animate({top:'0px'},{queue:false,duration:2000});
        });
});
