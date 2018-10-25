var URL_SITE='http://localhost/school/public';

$(function() {
    /**
     * loadm model cover helper 
     */

    $("#albomImge").click(function (e) { 
        e.preventDefault();
        $( ".modal-body" ).load(URL_SITE +"/teacher/courses/load-albom" , function() {
            $('#imagemodal').modal('show');   
        });
    });  
    /**
     * cover helper 
     */
    $("#use_image").click(function (e) { 
        e.preventDefault();
        $('#li-albomImge').text('select image coure ');
        $('#li-albomImge').removeClass('fa-file-image-o');
        $('#li-albomImge').addClass('fa-fw fa-arrows-alt');
        var path=$('.image-checkbox-checked >img').attr('src');
        document.getElementById("cover_helper").value = path;
        $('#imagemodal').modal('hide'); 
    });
});