$(document).ready(function () {

    $(".modal").on("hidden.bs.modal", function(){
        $("#ourexpert_form")[0].reset() 
        $("#preview_ourexpert_image").hide();
        $(".error").html(''); // Hide the preview image after successful save
        $("#color_value").val('');
    });
    // console.log("ready");
    var imagePath = window.APP_URLS.image_path;
    // console.log("Image Path: " + imagePath);
    var table = $('#ourexperttable').DataTable({
        processing: true,
        serverSide: true,
        ajax: window.APP_URLS.ourexpert_get_data,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            {
                data: 'image',
                name: 'image',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    if (data) {
                        return '<img src="'+ imagePath +  data + '" alt="' + row.image + '" width="60" height="60">';
                    } else {
                        return '<span class="text-muted">No Image</span>';
                    }
                }
            },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });


    $("#Saveourexpert").on('click' , function(){
       if(valid_ourexpert() & valid_ourexpert_status() & validateAndPreviewImage()){
         var ourexpertId = $("#ourexpert_id").val();

            if (ourexpertId) {
               var url = window.APP_URLS.OurexpertUpdate.replace(':id', ourexpertId);
            } else {
               var url = window.APP_URLS.OurexpertStore;
            }
            // var url = window.APP_URLS.OurexpertStore;
            var formData = new FormData($("#ourexpert_form")[0]);
            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: function (response, textStatus, jqXHR) {
                    $("#message-pop-up").removeClass('alert-success alert-warning')
                   if(response.result){
                    $('#ourexpert_modal').modal('hide');
                    $("#ourexpert_form")[0].reset()
                    $("#ourexpert_id").val();
                     $("#message-pop-up").attr('style' , 'display:block')
                     $("#message-pop-up").addClass('alert-success')
                     $("#success-message").html(response.message);
                     $("#preview_ourexpert_image").hide(); // Hide the preview image after successful save
                     $("#color_value").val(''); // Clear the color value
                     setTimeout(() => {
                         $("#message-pop-up").attr('style' , 'display:none')
                     }, 3000);
                     table.draw();
                   }else{
                        $('#ourexpert_modal').modal('hide');
                        $("#ourexpert_form")[0].reset()
                        $("#message-pop-up").attr('style' , 'display:block')
                        $("#message-pop-up").addClass('alert-warning')
                        $("#success-message").html(response.message);
                        setTimeout(() => {
                            $("#message-pop-up").attr('style' , 'display:none')
                        }, 3000);
                   }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
            });
       }else{
           return false
       }
       
    })
    
    $(document).on('click' , '.edit_ourexpert' , function(){
        var ourexpert_id = $(this).data('id');
        var url = window.APP_URLS.ourexpert_edit_data.replace(':id' , ourexpert_id);
        $.ajax({
            type: "GET",
            url: url,
            success: function (response, textStatus, jqXHR) {
                if(response.result){
                    $("input[name='status']").prop('checked', false);
                    $('#ourexpert_modal').modal('show');
                    $("#ourexpert_id").val(response.data.id);
                    $("#ourexpert_name").val(response.data.name);
                    $("#ourexpert_designation").val(response.data.designation);
                    $("input[name='status'][value='" + response.data.status + "']").prop('checked', true);
                    // ✅ Show existing banner image if available

                    if (response.data.image) {
                        $("#preview_ourexpert_image").show(); // full URL or relative path
                        $("#preview_ourexpert_image")
                            .attr('src',window.APP_URLS.image_path +  response.data.image);
                            
                    }
                }else{
                    $("#message-pop-up").attr('style' , 'display:block')
                    $("#message-pop-up").addClass('alert-warning')
                    $("#success-message").html(response.message);
                    setTimeout(() => {
                        $("#message-pop-up").attr('style' , 'display:none')
                    }, 3000);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.table(jqXHR)
            }
        });
    })

    $(document).on('click' , '.delete_ourexpert' , function(){
        ourexpert_id = $(this).data('id');
        var url = window.APP_URLS.ourexpert_delete_data.replace(':id' , ourexpert_id);
        var confrim_delete = confirm("Are You Sure want To Delete?");
        if(confrim_delete){
            $.ajax({
                type: "Delete",
                url: url,
                headers: {
                    'X-CSRF-TOKEN': window.APP_URLS.csrfToken
                },
                success: function (response, textStatus, jqXHR) {
                    if(response.result){
                        $("#message-pop-up").attr('style' , 'display:block')
                        $("#message-pop-up").addClass('alert-success')
                        $("#success-message").html(response.message);
                        setTimeout(() => {
                            $("#message-pop-up").attr('style' , 'display:none')
                        }, 3000);
                        table.draw();
                    }else{
                        $("#message-pop-up").attr('style' , 'display:block')
                        $("#message-pop-up").addClass('alert-warning')
                        $("#success-message").html(response.message);
                        setTimeout(() => {
                            $("#message-pop-up").attr('style' , 'display:none')
                        }, 3000);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
            });
        }
        
    })
    

    function valid_ourexpert(){
        if($("#ourexpert_name").val() == ''){
            $("#span_ourexpert").text("Enter Name This Filed is Required.")
            return false
        }else{
            $("#span_ourexpert").text("")
            return true;
        }
    }

   function valid_ourexpert_status() {
        // alert("11111111")
        if ($("input[name='status']:checked").length === 0) {
            $("#span_ourexpert_status").text("Please select a our expert status.");
            return false;
        } else {
            $("#span_ourexpert_status").text(""); // Clear error message
            return true;
        } 
    }

});
    function validateAndPreviewImage() {
        const input = document.getElementById("ourexpert_image");
        const file = input.files[0];
        const errorSpan = document.getElementById("span_ourexpert_image");
        const previewImg = document.getElementById("preview_ourexpert_image");
        const bannerId = document.getElementById("ourexpert_id")?.value;
        // Check if file selected
        if (bannerId && !file) {
            errorSpan.innerText = "";
            return true; // allow update without new image
        }
        if (!file) {
            errorSpan.innerText = "our expert image is required.";
            previewImg.style.display = "none";
            return false;
        }
 
        if (!file.type.startsWith("image/")) {
            errorSpan.innerText = "Only image files are allowed.";
            input.value = ""; // reset input
            previewImg.style.display = "none";
            return false;
        }
 
        // Show image preview
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewImg.style.display = "block";
            errorSpan.innerText = "";
        }
        reader.readAsDataURL(file);
        return true;
    }