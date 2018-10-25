<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span></button>
                 <h4 class="modal-title">images albom</h4>
              </div>
              <div class="modal-body">
                    
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary " id="use_image">Used This Image</button>
              </div>
           </div>
        </div>
    </div>

    <script>
    $("#use_image").click(function (e) { 
        e.preventDefault();
        $('#li-albomImge').text('select image coure ');
        $('#li-albomImge').removeClass('fa-file-image-o');
        $('#li-albomImge').addClass('fa-fw fa-arrows-alt');
        var path=$('.image-checkbox-checked >img').attr('src');
        document.getElementById("cover_helper").value = path;
        $('#imagemodal').modal('hide'); 
    });
    </script>