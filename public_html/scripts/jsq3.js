$(document).ready(
	function(){
                $("#sings").click(function(){
                $("#allas").fadeIn(300);
                })
                $("#cloop").click(function(){
                $("#allas").fadeOut(200);
                })
		$("#right_shet").click(function(){
			$("#new_pole").show();
			$("#pole_reg").hide();
			$("#right_shet").css("background-color","rgba(0,0,0,0.2)");
			$("#left_shet").css("background-color","rgba(0,0,0,0.4)");
			$("#registration").css("width","540px");
			$("#registration").css("padding-bottom","80px");
			$("#registration").css("margin-left","365px");
			$("#registration").css("padding-left","80px");
		})
		$("#left_shet").click(function(){
			$("#new_pole").hide();
			$("#pole_reg").show();
			$("#left_shet").css("background-color","rgba(0,0,0,0.2)");
			$("#right_shet").css("background-color","rgba(0,0,0,0.4)");
			$("#registration").css("width","400px");
			$("#registration").css("padding-bottom","30px");
			$("#registration").css("margin-left","475px");
			$("#registration").css("padding-left","0px");
			
		})
	})

function shuw(e){
	if(e.which == 13){
		check_log();
	}
}

function check_log(){
	a = $("#log_line").val();
	b = $("#log_pass").val();
	if(check_symbols(a)==false || a.length < 4){
		$("#log_line").css("border","2px solid red");
	}else{
		$("#log_line").css("border","1px solid rgba(0,120,0,0.8)");
		if(b.length < 4){
			$("#log_pass").css("border","2px solid red");
		}else{
			$("#log_pass").css("border","1px solid rgba(0,120,0,0.8)");
			take_der();
		}
	}
}

function check_symbols(item){
	count = 0
	for(var i = 0; i < item.length ; i++){
		if((item[i].charCodeAt() < 65 || item[i].charCodeAt() > 90) && (item[i].charCodeAt() < 97 || item[i].charCodeAt() > 123)){
			count += 1;
		}
	}
	if(count != 0){
		return false;
	}
	return true;
}

function take_der(){
	a = $("#log_line").val()
	b = $("#log_pass").val()
	$.ajax({
		url:"ajax/log_in.php",
		type:"post",
		data:{
			name:a,
			pass:b
		},
		response:'text',
		success:function(data){
			if(data == "No"){
				$("#log_pass").val("")
				$("#log_pass").css("border","2px solid red");
			}
			else{
				location.reload();
			}
		}
	})
}