
$(document).ready(function(){
	$('#select').on('change',function(){
    	if( $(this).val()==="send"){
    	$("#sendType").show()
    	}
    	else{
    	$("#sendType").hide()
    	}
	});
});