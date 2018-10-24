$(document).ready(function () {
    $('.course_likes').click(function (e) { 
        e.preventDefault();
        var idCourse=$(this).attr('idCourse');
        url ='like-course'
       
            $.ajax({
                type: "GET",
                url: url,
                data: {idCourse:idCourse},
                dataType: "Json",
                success: function (response) {
                    if (response.success){
                        alert('sucessfully like');
                    }else{
                        alert('please login'); 
                    }
                }
            });
    
    });
});