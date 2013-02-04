$(function() {
$("#badd").click(function() {
		

		var name_new_course = $("#name_new_course").val();
		var type_new_course = $("#type_new_course").val();
		var description_new_course = $("#description_new_course").val();
		var image_new_course_local = $("#image_new_course_local").val();
		var name_new_venue = $("#name_new_venue").val();
		var countre_adress_new_venue = $("#countre_adress_new_venue").val();
		var phone_new_venue = $("#phone_new_venue").val();
		var street_adress_new_venue = $("#street_adress_new_venue").val();
		var metro_new_venue = $("#metro_new_venue").val();
		var home_adress_new_venue = $("#home_adress_new_venue").val();
		var found_adress_new_venue = $("#found_adress_new_venue").val();
		var corpus_adress_new_venue = $("#corpus_adress_new_venue").val();
        
		$.ajax({
			type: "POST",
			url: '/php/new_course.php',
			data: {
				"name_new_course": name_new_course,
				"type_new_course": type_new_course,
                "description_new_course":description_new_course,
                "image_new_course_local":  image_new_course_local,
                "var name_new_venue": name_new_venue,
                "countre_adress_new_venue": countre_adress_new_venue,
                "phone_new_venue": phone_new_venue,
                "street_adress_new_venue": street_adress_new_venue,
                "metro_new_venue": metro_new_venue,
                "home_adress_new_venue": home_adress_new_venue,
                "found_adress_new_venue": found_adress_new_venue,
                "corpus_adress_new_venue":corpus_adress_new_venue
			},
			success: function(data) {
				
				if(data==1){
				    location.reload();
				    //window.location = location.href;
					//alert($.cookie("PHPSESSID"))
					//$('#myModal').modal('show');
				}
                
			}
		})
	})
})