$(function() {
$("#badd").click(function() {
		var alldatacorrect = '1';
        var all_data_address_correct = '1';
        var venues_checked = [];
            $(':checkbox:checked').each(function(i){
                venues_checked[i] = $(this).val();
            });
		
        var name_new_course = $("#name_new_course").val();
        
        if((name_new_course == '') && (alldatacorrect == '1')) {
            alert("Введите название курса");
            var input = document.getElementById ("name_new_course");
            input.focus();
            alldatacorrect = 0;
        }        
        
        var venues_checked = [];
            $(':checkbox:checked').each(function(i){
                venues_checked[i] = $(this).val();
            });
		if((venues_checked[1] == '') && (alldatacorrect == '1')) {
            alert("Укажите местополодение курса");
            var input = document.getElementById ("address_new_course");
            input.focus();
            alldatacorrect = 0;
        } 
        
        
		var type_new_course = $("#type_new_course").val();
        if((type_new_course == '') && (alldatacorrect == '1')) {
            alert("Укажите тип курса");
            var input = document.getElementById ("type_new_course");
            input.focus();
            alldatacorrect = 0;
        } 
        
        var subtype_new_course = $("#subtype_new_course").val();
		if((subtype_new_course == '') && (alldatacorrect == '1')) {
            alert("Укажите подтип курса");
            var input = document.getElementById ("subtype_new_course");
            input.focus();
            alldatacorrect = 0;
        } 
        
		var description_new_course = $("#description_new_course").val();
        if((description_new_course == '') && (alldatacorrect == '1')) {
            alert("Введите описание курса");
            var input = document.getElementById ("description_new_course");
            input.focus();
            alldatacorrect = 0;
        }
        
		var image_new_course_local = $("#image_new_course_local").val();
        
		var name_new_venue = $("#name_new_venue").val();
            if((name_new_venue == '')&&(all_data_address_correct == '1')) {
                alert("Введите название филиала где будет проходить данный курс.<br>Если названия нет, укажите ближайшее метро");
                var input = document.getElementById ("name_new_venue");
                input.focus();
                all_data_address_correct = 0;
            }
        
		var countre_adress_new_venue = $("#countre_adress_new_venue").val();
            if((countre_adress_new_venue == '')&&(all_data_address_correct == '1')) {
                alert("Введите город нового филиала");
                var input = document.getElementById ("countre_adress_new_venue");
                input.focus();
                all_data_address_correct = 0;
            }
        
		var phone_new_venue = $("#phone_new_venue").val();
        
		var street_adress_new_venue = $("#street_adress_new_venue").val();
            if((street_adress_new_venue == '')&&(all_data_address_correct == '1')) {
                alert("Введите улицу, где будет проходить курс");
                var input = document.getElementById ("street_adress_new_venue");
                input.focus();
                all_data_address_correct = 0;
            }
            
		var metro_new_venue = $("#metro_new_venue").val();
        
		var home_adress_new_venue = $("#home_adress_new_venue").val();
            if((home_adress_new_venue == '')&&(all_data_address_correct == '1')) {
                alert("Введите номер дома, где будет проходить курс");
                var input = document.getElementById ("home_adress_new_venue");
                input.focus();
                all_data_address_correct = 0;
            }
            
		var found_adress_new_venue = $("#found_adress_new_venue").val();
        
		var corpus_adress_new_venue = $("#corpus_adress_new_venue").val();
        alert(alldatacorrect);
        alert(all_data_address_correct);

    		$.ajax({
    			type: "POST",
    			url: '/php/new_course.php',
    			data: {
    				"name_new_course": name_new_course,
    				"type_new_course": type_new_course,
                    "description_new_course":description_new_course,
                    "venues_checked":venues_checked,
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
            var input = document.getElementById ("modal-header");
            input.focus();
        
        
        
	})
})