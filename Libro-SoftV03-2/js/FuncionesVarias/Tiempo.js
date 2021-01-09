var count = 60;

$("span").text(count);

var myTimer = setInterval(function(){
    if(count > 0){
        count = count - 1;
        $("span").text(count);
    }
    else {
       clearInterval(myTimer);
       alert("I'm done counting down!"); 
    }
},1000);