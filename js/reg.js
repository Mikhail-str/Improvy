$(function() {
	//$('#myModal').hide();
	/*if($.cookie("login")) {
		$("#b").hide();
		$("#b3").hide();
		$("#b1").show();
		$("#b2").show();
	} else {
		$("#b1").hide();
		$("#b2").hide();

	}*/
	$("#b").click(function() {
		//$('#myModal').modal('show')
		//$("#entForm").hide();
		//$("#regForm").show();
		location.href = '/registration';

	})
	$("#b2").click(function() {
		$.cookie("login", null, {
			path: '/'
		});
		$.cookie("sesid", null, {
			path: '/'
		});
		$.ajax({
			url: '/php/del.php'
		});
		location.href = '/';
	})
	$("#b3").click(function() {
		$('#myModal').modal('show');
		$("#regForm").hide();
		$("#entForm").show();
	})
})
$(function() {
	$("#sub").click(function() {
		$(".err").remove();
		var Cname = $("#Inputname").val();
		var name = $("#fio").val();
		var email = $("#inputEmail").val();
		var Address = $("#Address").val();
		var Site = $("#Site").val();
		var Phone = $("#Phone").val();


		if(/^[a-zA-Z0-9](([a-z0-9\-_\+\&]?)+[a-z0-9])?\@((\w([a-zA-Z0-9\-_]+\w)?\.[a-z]{2,4})|(([01]?\d\d|2[0-4]\d|25[0-5])\.([01]?\d\d|2[0-4]\d|25[0-5])\.([01]?\d\d |2[0-4]\d|25[0-5])\.([01]?\d\d|2[0-4]\d|25[0-5]))|(localhost))$/i.test(email)) {

		} else {
			$("#1").append("<p class='err' style='color:red'>Email введен не верно</p>");
			return false;
		}

		if(Cname == '' || name == '' || Address == '' || Phone == '') {
			$("#1").append("<p class='err' style='color:red'>Заполните все обязательные поля</p>");
			return false;
		}
		////////
		$.ajax({
			type: "POST",
			url: '/php/registration.php',
			data: {
				"Cname": Cname,
				"fio": name,
				"email": email,
				"address": Address,
				"site": Site,
				"phone": Phone
			},
			success: function(data) {
				if(data == 1) {
					$("#1").append("<p class='err'>Пользователь с таким именим или Email существует</p>");
					//alert(1);
				} else {
					$("#regForm").hide();
					$("#thx").show();
					//window.location = "http://localhost:8010/main#";
					//$('#myModal').modal('show');
					//window.location = "/main";
					//alert(data);
				};
			}
		})

	})
	$("#ent").click(function() {
		$(".er").remove();
		var email = $("#entEmail").val();
		var pas = $("#entPassword").val();
		$.ajax({
			type: "POST",
			url: '/php/enter.php',
			data: {
				"password": pas,
				"email": email
			},
			success: function(data) {
				if(data == 1) {
					$('#myModal').modal('show');
					$("#ent").after("<div class='er'>Пользователя с таким Email не существует или вы ввели неверно парольспас</div>");
				} else {
					window.location = location.href.substring(0, location.href.length - 1);
					//alert($.cookie("PHPSESSID"))
					//$('#myModal').modal('show');
				};
			}
		})
	})

})