$(document).ready(function(){
     
    $(".contentofcircle").hide();
    
    $(".contentofcircle button").hide();
    
    $("#first").click(function(){
    
    $("#first").next().toggle(1000);
    $("#firstb").toggle(2000);
    
    });
    
    $("#second").click(function(){
        $("#second").next().toggle(1000);
        $("#secondb").toggle(2000);

    });
    
    $("#third").click(function(){
    
    $("#third").next().toggle(1000);
    $("#thirdb").toggle(2000);
    
    });
    
    $("#fourth").click(function(){
    
    $("#fourth").next().toggle(1000);
    $("#fourthb").toggle(2000);
    });
    
});