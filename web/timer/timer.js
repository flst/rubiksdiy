// JavaScript Document
var timer
var space_timer
var start_time
var timer_status = 0
var space_status = 0
var ready_status = 0
var timeout ;  


$(document).ready(function(){

//键盘操作
	$(document).keydown(function(event) {
	    if (event.keyCode == 32) {
	    	pressDown()
	    	return false;
	    };
	    return true;
	});

	$(document).keyup(function () {
		pressUp()
	});
	

	$("#timer_value").on({
		touchstart: function(e){
			pressDown()
		},
		touchmove: function(){
            	clearTimeout(space_timer); 
		    	space_timer = 0; 
		},
		touchend: function(){
	   		pressUp()
			return false; 
		}
	});


	function pressDown()
	{
		if (timer_status) 
    	{
    		timer_status = 0
    		clearTimeout(timer) 
    	}
    	else 
    	{
    		if(space_status == 0) 
    		{
    			space_status = 1
    			$("#timer_value").addClass("red")
    			//console.log("ddd") 
    			space_timer = setTimeout(function() {  
    				$("#timer_value").html("0.00")
    				$("#timer_value").removeClass("red")
    				$("#timer_value").addClass("green")
    				ready_status = 1
				}, 500)
    		}
    	}
	}

	function pressUp()
	{
		space_status = 0
		$("#timer_value").removeClass("red")
		clearTimeout(space_timer);  
		if(ready_status)
		{
			timer_status = 1
			$("#timer_value").removeClass("green")
	    	timedCount()
	    	ready_status = 0
		}
	}
	 
});

function timedCount() 
{ 
	start_time = new Date()
	startTime()
}  

function startTime()
{
	var cur_time=new Date() 

    val = cur_time-start_time
    val = Math.round(val/10)

    ms = checkTime(val%100)
    s = Math.floor(val/100) % 60
    m = Math.floor(Math.floor(val/100) / 60)
    val_str =  s+ "."+ms
    if (m>0) {val_str=m+":"+checkTime(s)+ "."+ms}
    $("#timer_value").html(val_str)
   
    timer=setTimeout('startTime()',10) 

}

function checkTime(ct)
{
    if(ct<10)
        ct = "0" + ct
    return ct
}
