// JavaScript Document

$(document).ready(function(){
	

//键盘操作
	$(".match").click(function() {
	    id=$(this).attr("id");
	    console.log(id);

	    for (var i = 5; i > 0; i--) {
	    	id_str = "match"+i;
	    	if (id_str != id) {
	    		$("#"+id_str).fadeOut("fast",function(){
	    			 $("#"+id).animate({top:'30px'},function(){
	    			 	$("#"+id).hide();
	    			 	$("#title").show();
	    			 	$("#title").animate({top:'0px',height:'140px'})
	    			 	$("#detail").slideDown()
	    			 });
	    		});
	    	}
	    } 
	});


	/*$(window).resize(function(){
        line_height = $("#timer_value").height()
        //console.log(line_height)
        $("#timer_value").css("line-height",line_height+"px")
    }); */
	

});