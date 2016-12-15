$(document).ready(function(){
    $(".small-thumb").click(function(){
        $("#thumbnail").attr("src",$(this).attr("src"));
    });
});