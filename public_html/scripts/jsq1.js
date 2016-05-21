$(document).ready(
	function (e){
		$("#change_sex").click(sex_change);
		$("#file_ava").change(function(){
			var file = this.files[0];
			reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
	}
	)})

function check_all_function(){
	if(check_names()==false){
		return false;
	}
	if(check_dates()==false){
		return false;
	}
	return true;
}

function check_names(){
	name = $("#name_in").val();
	surname = $("#sur_in").val();
	pass = $("#pass_in").val();
	email = $("#mail_in").val();
	if(name.length < 4 ||  check_symbols(name)==false){
		$("#name_in").css("border","3px ridge red")
		if($("#name_ch").val()=="nope"){
			$("#name_in").after("<span id='name_er' style='font-size:13px;' class='error_mistake'></span>")
			$("#name_ch").val("")
		}
		$("#name_er").fadeIn(800);
		$("#name_er").fadeOut(600);
		return false
	}
	else{
		$("#name_in").css("border","3px ridge green")
	}
	if(surname.length < 4 || check_symbols(surname)==false){
		$("#sur_in").css("border","3px ridge red")
		if($("#sur_ch").val()=="nope"){
			$("#sur_in").after("<span id='sur_er' class='error_mistake'></span>")
			$("#sur_ch").val("")
		}
		$("#sur_er").fadeIn(800);
		$("#sur_er").fadeOut(600);
		return false
	}
	else{
		$("#sur_in").css("border","3px ridge green")
	}
	if(email.length < 1){
		$("#mail_in").css("border","3px ridge red")
		return false
	}
	else{
		$("#mail_in").css("border","3px ridge green")
	}
	if(pass.length < 4){
		$("#pass_in").css("border","3px ridge red")
		if($("#pass_ch").val()=="nope"){
			$("#pass_in").after("<span id='pass_er' class='error_mistake'></span>")
			$("#pass_ch").val("")
		}
		$("#pass_er").fadeIn(800);
		$("#pass_er").fadeOut(600);
		return false
	}
	else{
		$("#pass_in").css("border","3px ridge green")
	}
	return true
}

function check_symbols(item){
	count = 0
	for(var i = 0; i < item.length ; i ++){
		if((item[i].charCodeAt() < 65 || item[i].charCodeAt() > 90) && (item[i].charCodeAt() < 97 || item[i].charCodeAt() > 123)){
			count += 1;
		}
	}
	if(count != 0){
		return false;
	}
	return true;
}

function check_dates(){
	day = $("#date_d").val()
	month = $("#date_m").val()
	year = $("#date_y").val()
	if(day == 'Day' || month == 'Month' || year == 'Year'){
		return false
	}
	return true
}

function sex_change(){
	if($("#sex_reality").val() == "male"){
		$("#cursor_sex").css("float","right");
		$("#sex_reality").val("women");
		$("#male_sex").css("background-color","rgba(250,250,250,0.1)");
		if($("#picture_id").val()=="none"){
			$("#default_picture").attr("src","imag/women.jpg");
		}
}
	else{
		$("#cursor_sex").css("float","left");
		$("#sex_reality").val("male");
		$("#female_sex").css("background-color","");
		if($("#picture_id").val()=="none"){
			$("#default_picture").attr("src","imag/man.jpg");
	}
	}}

function imageIsLoaded(e) {
$('#default_picture').attr('src', e.target.result);
$("#picture_id").val("yeap")
};