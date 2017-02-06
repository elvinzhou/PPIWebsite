$(document).ready(function(){
    var headerHeight = $("#header").height();
    var navHeight = $("#navBar").height();
    var scrollSpeed = 400;
    var visible = false;
    
    $("#menuBtn").click(function(){
        if(!visible){
            $("#navBar").slideDown(scrollSpeed).show();
            $("#header").animate({height: (navHeight + headerHeight)}, scrollSpeed);
            visible = true;
        }else{
            $("#navBar").slideUp(scrollSpeed);
            $("#header").animate({height: headerHeight}, scrollSpeed);
            visible = false;
        }
    });
});