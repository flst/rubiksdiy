// JavaScript Document
var timer
var space_timer
var start_time
var timer_status = 0
var space_status = 0
var ready_status = 0
var timeout 
var record = new Array()
var record_ind = 0
var cur_record = 0

$(document).ready(function(){
	set_formula()

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

    		update_record()
    		set_formula()

    		show_all_div()
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

	    	hidden_all_div()
		}
	}

	function hidden_all_div()
	{
		$("#upset_cube").fadeOut("fast",function (){
			$("#header_naver").hide()		
		})
		$("#footer_naver").slideUp("fast",function () {

			$("#timer_value").removeClass("timer_stop_font_size")
			$("#timer_value").addClass("timer_start_font_size")

		})
		
	}

	function show_all_div()
	{
		$("#header_naver").show()
		$("#footer_naver").slideDown("fast")
		$("#upset_cube").fadeIn("fast")
		$("#timer_value").addClass("timer_stop_font_size")
		$("#timer_value").removeClass("timer_start_font_size")
	}

	function set_formula()
	{
		$.post("./get_formula.php",{},function(result){
        //alert(result);
        //ret = eval("("+result+")");
	        //console.log(result); 
	        formula_png = eval("("+result+")");
	        $("#upset_cube_formula").html(formula_png["formula"]); 
	        $("#upset_cube_formula_png").html(formula_png["png"]); 
        //alert("提交成功！");
    	});   
	}

	function update_record()
	{
		//update array
		record_ind=record_ind+1

		record.push({ind:record_ind, record:cur_record, avg5:"-", avg12:"-"})

		best = 0;
		max = 0;
		min = 10000000000;
		avg5 = 0;
		avg12 = 0;
		cnt = 0;
		for (var i = record.length - 1; i >= 0; i--) {
			if(cnt < 5) 
				avg5 = avg5 + record[i]["record"]
			if(cnt < 12) 
				avg12 = avg12 + record[i]["record"]
			if(record[i]["record"]>max)
				max = record[i]["record"]
			if(record[i]["record"]<min)
				min = record[i]["record"]

			cnt = cnt + 1
			if (cnt == 12)
				break
		}

		if(cnt>4)	
			record[record.length-1]["avg5"] = (avg5 - max - min)/3
		if(cnt>11)
			record[record.length-1]["avg12"] = avg12/12
		//console.log(record)

		//update record table
		$("#record_table").html("")
		for (var i = record.length - 1; i > record.length - 6 && i>=0 ; i--) {
			append_str = "<tr><td>"+record[i]["ind"]+"</td><td>"+timeToStr(record[i]["record"])
			append_str = append_str + "</td><td>"+timeToStr(record[i]["avg5"])+"</td><td>"+timeToStr(record[i]["avg12"])+"</td></tr>"
			$("#record_table").append(append_str)
		};		

		for (var i = 5-record.length; i > 0  ; i--) {
			$("#record_table").append("<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>")
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
    cur_record = val  //用于记录原始成绩

    $("#timer_value").html(timeToStr(val))
   
    timer=setTimeout('startTime()',10) 
}

function timeToStr(ti)
{
	if (ti=="-") 
		return ti;
	val = Math.round(ti/10)

    ms = checkTime(val%100)
    
    s = Math.floor(val/100) % 60
    m = Math.floor(Math.floor(val/100) / 60)
    val_str =  s+ "."+ms
    if (m>0) {val_str=m+":"+checkTime(s)+ "."+ms}

    return val_str
}

function checkTime(ct)
{
    if(ct<10)
        ct = "0" + ct
    return ct
}
