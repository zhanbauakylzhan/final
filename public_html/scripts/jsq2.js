$(document).ready(
	function(){
		$(".yeslei").click(function(){
			$("#"+$(this).val()+"was").fadeToggle();
		})
		$("#new_file").click(add_input);
		$("#theme_change").change(function(){
			alert("11111");
		});
		setInterval(function(){
			b = $("#id_code").val()
			if($("#shlow_po").val()=="yes" && $("#avtomat").val()=="yes"){
                                t = $("#chatad").val()
				$(".copes").empty();
				$.ajax({
					url:'ajax/code_change.php',
					type:'post',
					data:{
						g:b,
                                                g1:t
					},
					response:'text',
					success:function(data){
						$(".copes").append(data)
					}
				})
			}
		},1500)
	}
	)

function add_input(){
	if($("#counter_file").val()=="1"){
		alert("save or remove");
	}else{
		$("#top_files").fadeIn(200);
		$("#top_files").append("<span id='adding_side'><input type='text' class='file_style' id='malls'><button onclick='remove_it();' id='delete_button'>cancel</button><button onclick='save_it();' id='saving_button'>add</button></span>");
		$("#counter_file").val("1");
	}
}

function remove_it(){
	$("#counter_file").val("0");
	$("#adding_side").fadeOut(444);
	setTimeout(function(){
		$("#top_files").hide();
		$("#adding_side").remove();
	},500);
}

function save_it(){
	index = $("#malls").val();
	user_name = $("#happs").val();
	if(check_symbols(index)==false){
		alert("Mistakes in file source. HINT: \'Eminem - Lose Yourself \'");
	}
	else{
	$.ajax({
		url:'ajax/save_code.php',
		type:'get',
		data:{
			a:user_name,
			b:index
		},
		response:'text',
		success:function(data){
			if(data=="error"){
				alert("You have the same files,please change the name");
				$("#malls").val("");
			}
			else{
				alert("You must wait for some time that admin will accept it, and will add to Server.");
				$("#not_files").remove();
				remove_it();
			}
		}
	})
}
}
function check_symbols(a){
	return true;
}

function show_index(b,c){
	$("#find_files").val(b);
	$.ajax({
		type:'post',
		url:'ajax/show_file.php',
		data:{
			ab:b,
			cd:c
		},
		response:'text',
		success:function(data){
			$("#code_contents").empty();
			$("#code_contents").append(data);
		}
	})
}
function show_ref(b,c){
	$.ajax({
		type:'post',
		url:'ajax/show_file.php',
		data:{
			ab:b,
			cd:c
		},
		response:'text',
		success:function(data){
			$("#refres").after("<img id='sheet' src='imag/uploading.gif' width='15px' height='15px'>");
			setTimeout(function(){
			$("#sheet").hide();
			$("#code_contents").empty();
			$("#code_contents").hide();
			$("#code_contents").append(data);
			$("#code_contents").fadeIn(500);
			},100);
		}
	})
}

function save_now(f,g){
	a = $(".text_line_files").val();
	$.ajax({
		type:'post',
		url:'ajax/update.php',
		data:{
			val:a,
			to:f,
			user:g
		},
		response:'text',
		success:function(data){
			$("#save_it10").after("<img id='sheet1' src='imag/uploading.gif' width='15px' height='15px'>");
			setTimeout(function(){
			$("#sheet1").hide();
			$("#code_contents").hide();
			$("#code_contents").fadeIn(500);
			},100);
		}
	})
}

function publish(a,b){
	$("#center_in").empty();
	$("#center_in").css("height","160px");
	$("#center_in").append("<span style='font-size:25px; color:#42747A; font-weight:bolder;'>"+b+"</span><br><br><input type='text' id='text_theme' placeholder='Title or Headline'><br><br><input type='submit' value='Cancel' class='files_info' onclick=cancel();><input type='submit'  onclick=add_pub('"+a+"','"+b+"'); class='files_info' value='Share'>");
	$("#opacity_all").hide();
	$("#opacity_all").show();

}
function add_pub(a,b){
	c = $("#text_theme").val();
	if(c<4){
		alert("The header must be more than 4");
	}else{
	$.ajax({
		type:'post',
		url:'ajax/publish.php',
		data:{
			who:b,
			name:a,
			them:c
		},
		response:'text',
		success:function(data){
			alert("published");
			$("#center_in").empty();			
			$("#opacity_all").hide();
		}
	})
}}

function change2(){
	t = $("#malks").val()
	t2 = $("#admins_wq").val()
	$("#theme_change").after("<input type='text' placeholder='Write your theme' style='text-align:center; font-weight:bold;' id='temea' onchange='change();'>");
	$("#theme_change").hide()
}
function change(){
	t = $("#temea").val()
	t2 = $("#malks").val()
	$.ajax({
		url:'ajax/set.php',
		type:'post',
		data:{
			g:t,
			g2:t2
		},
		response:'text',
		success:function(data){
		$("#theme_change").val(t)
		$("#temea").remove()
		$("#theme_change").show()
		}
	})
}

function del(t,a){
	$("#center_in").empty();
	$("#center_in").css("overflow","none");
	$("#center_in").append("<center style='font-size:23px;padding:20px; color:#42747A; font-weight:bold;'>Do you really want to delete it? it is impossible to get it back</center><br><input type='submit' style='width:70px;' class='files_info' value='Yes' onclick=del2('"+t+"','"+a+"');><input type='submit' style='width:70px;' class='files_info' value='No' onclick='cancel();'>");
	$("#opacity_all").hide();
	$("#opacity_all").show();

}

function cancel(){
	$("#center_in").empty();
	$("#center_in").css("width","300px");
	$("#center_in").css("height","200px");
	$("#opacity_all").hide();
	$("#center_in").css("overflow","none");
}

function del2(t,a){
	$.ajax({
		url:'ajax/delete.php',
		type:'post',
		data:{
			a:t
		},
		response:'text',
		success:function(data){
			$("#center_in").empty();
			$("#opacity_all").hide();
			if(data=="YEAS"){
				$("#"+a+"www").fadeOut(500);
				setTimeout(function(){
					$("#"+a+"www").remove();
				},2000);
				$("#code_contents").empty();
				location.reload();
			}
			else{
				alert("FELLAS IT DOESNT WORK");
			}
		}
	})
}

function access_give(b){
	$.ajax({
		url:'ajax/access.php',
		type:'post',
		data:{
			b:b
		},
		response:'text',
		success:function(data){
			$("#center_in").empty();
			$("#center_in").css("width","300px");
			$("#center_in").css("height","180px");
			$("#center_in").css("text-align","center");
			$("#center_in").css("overflow","scroll");
			$("#center_in").append(data);
			$("#opacity_all").hide();
			$("#opacity_all").show();
		}
	})
}
function helpers(a,b,c){
	t = $("#"+c+"op").val()
	$("#center_in").empty();
	$("#center_in").css("width","500px");
	$("#center_in").css("height","400px");
	re = $(".code_firci").val()
	$("#center_in").append("Write your message to:<span style='font-weight:bolder;font-size:18px;'>"+a+"</span><input type='submit' value='take code' class='files_info' onclick=get_code('"+c+"');><br><textarea style='width:450px;height:300px;' id='text_mess'></textarea><br><br><input type='submit' class='files_info' onclick='cancel();' value='cancel'><input type='submit' class='files_info' onclick=send_mess('"+a+"','"+b+"'); value='send'>");
	$("#opacity_all").hide();
	$("#opacity_all").show();
}

function get_code(a){
	g = $("#"+a+"op").val()
	$("#text_mess").val(g);
}

function send_mess(a,b){
	c = $("#text_mess").val();
	$.ajax({
		url:'ajax/send.php',
		type:'post',
		data:{
			a:a,
			b:b,
			c:c
		},
		response:'text',
		success:function(data){
			cancel();
		}
	})
}

function add_access(g,b){
	$.ajax({
		url:'ajax/access_give.php',
		type:'post',
		data:{
			a:g,
			b:b
		},
		response:'text',
		success:function(data){
			if(data=="ERROR"){
				alert("This guy already has an access");
			}else{
				$("#center_in").append("<a href='name="+g+"'>@"+g+"</a>");		
			}
		}
	})
}

function show_index2(a,b){
	$.ajax({
		url:'ajax/access_take.php',
		type:'post',
		data:{
			a:a,
			b:b
		},
		response:'text',
		success:function(data){
			alert(data);
		}
	})
}
function del_naz(a,b){
	$.ajax({
		url:'ajax/kill_shot.php',
		type:'post',
		data:{
			a:a,
			b:b
		},
		response:'text',
		success:function(data){
			alert(data)
		}
	})
}
function gets(e){
	if(e.which == 13){
		b = $("#malks").val();
		save_mess(1,b);
	}	
}
function save_mess(a,b){
	c = $("#write_line").val()
        d = $("#chatad").val()
	if(c.length == 0){
		alert("Write some shit")
	}
	else{
		$.ajax({
			url:'ajax/save_mess.php',
			type:'post',
			data:{
				a1:a,
				b1:b,
				c1:c,
                                d1:d
			},
			response:'text',
			success:function(data){
				s = $("#admins_wq").val()
				$("#hodels").after("<div class='mess_info' style='float:right'><span style='color:yellow;'>"+s+"</span><br><span>"+c+"</span><hr>"+data+"</div>");
				$("#write_line").val("");
			}
		})
	}
}

function messag(){
	a = $("#chat_co").val()
	if(a == "open chat"){
		$("#chat_co").val("hide chat");
		$(".text_line_files").css("width","600px");
		$("#message_all").slideDown(600);
		$("#shlow_po").val("yes")
	}
	else{
		$("#chat_co").val("open chat");
		$(".text_line_files").css("width","870px");
		$("#message_all").hide();
		$("#shlow_po").val("no")
	}
}

function restar_yes(){
	if($("#avtomat").val()=="yes"){
		$("#avtomat").val("no");
		$("#resop").css("color","red");
	}else{
		$("#avtomat").val("yes");
		$("#resop").css("color","green");
	}
}
function add_ball(a,b,c){
	$.ajax({
		url:'ajax/get_code.php',
		type:'post',
		data:{
			a1:a,
			b1:b,
			c1:c
		},
		response:'text',
		success:function(data){
			alert(data);
			location.reload();
		}
	})
}			