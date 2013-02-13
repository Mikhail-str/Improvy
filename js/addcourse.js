$(function() {

$("#button_add_course").click(function() {
		var alldatacorrect = '1';
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
            alert("Укажите хотя бы одно местоположение курса");
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
        
        var price_new_course = $("#price_new_course").val();
        if((price_new_course == '') && (alldatacorrect == '1')) {
            alert("Укажите информацию о цене курса");
            var input = document.getElementById ("price_new_course");
            input.focus();
            alldatacorrect = 0;
        }
        
        var minprice_new_course = $("#minprice_new_course").val();
        if((minprice_new_course == '') && (alldatacorrect == '1')) {
            alert("Укажите информацию о минимальной цене курса");
            var input = document.getElementById ("minprice_new_course");
            input.focus();
            alldatacorrect = 0;
        }
        var timetable_new_course = $("#timetable_new_course").val();
        if((timetable_new_course == '') && (alldatacorrect == '1')) {
            alert("Укажите информацию о расписании занятий");
            var input = document.getElementById ("timetable_new_course");
            input.focus();
            alldatacorrect = 0;
        }
        
		var image_new_course_local = $("#image_new_course_local").val();
        if (alldatacorrect == 1)
        {
    		$.ajax({
    			type: "POST",
    			url: '/php/new_course.php',
    			data: {
    				"name_new_course": name_new_course,
    				"type_new_course": type_new_course,
                    "subtype_new_course": subtype_new_course,
                    "description_new_course":description_new_course,
                    "price_new_course":price_new_course,
                    "minprice_new_course":minprice_new_course,
                    "timetable_new_course":timetable_new_course,
                    "venues_checked":venues_checked,
                    "image_new_course_local":  image_new_course_local,  
    			},
    			success: function(data) {
    				
    				    alert(data);
    				    location.reload();
    				    window.location = location.href;
    					//$('#myModal').modal('show');
    				
                    
    			}
    		})  
        }       
	})
	

})