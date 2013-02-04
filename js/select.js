$(function() {
    
    $('#type_new_course').change(function(){
        var type_new_course = $("#type_new_course").val();
        $.ajax({
            url:'/php/subtype.php',
            type: "POST",
            data:
                {"type_new_course":type_new_course},  
                success:function(data){
                    var options = '';
                    $(data).each(function() {
                        options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#under_type_new_course').html(options);
                }
        })
    })
})
