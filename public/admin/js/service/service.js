$(document).ready(function () {

    $(".modal").on("hidden.bs.modal", function(){
        $("#service_form")[0].reset() 
        $(".error").html(''); // Hide the preview image after successful save
        $("#color_value").val('');
    });
    console.log("ready");
    var imagePath = window.APP_URLS.image_path;
    // console.log("Image Path: " + imagePath);
    var table = $('#servicetable').DataTable({
        processing: true,
        serverSide: true,
        ajax: window.APP_URLS.service_get_data,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'url', name: 'url' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });


    $("#Saveservice").on('click' , function(){
       if(valid_service() & valid_service_status() & valid_url()){
         var serviceId = $("#service_id").val();
            if (serviceId) {
               var url = window.APP_URLS.serviceUpdate.replace(':id', serviceId);
            } else {
               var url = window.APP_URLS.serviceStore;
            }
            var formData = new FormData($("#service_form")[0]);
            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: function (response, textStatus, jqXHR) {
                    $("#message-pop-up").removeClass('alert-success alert-warning')
                   if(response.result){
                    $('#service_modal').modal('hide');
                    $("#service_form")[0].reset()
                    $("#service_id").val();
                     $("#message-pop-up").attr('style' , 'display:block')
                     $("#message-pop-up").addClass('alert-success')
                     $("#success-message").html(response.message);
                     $("#preview_service_image").hide(); // Hide the preview image after successful save
                     $("#color_value").val(''); // Clear the color value
                     setTimeout(() => {
                         $("#message-pop-up").attr('style' , 'display:none')
                     }, 3000);
                     table.draw();
                   }else{
                        $('#service_modal').modal('hide');
                        $("#service_form")[0].reset()
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
    
    $(document).on('click' , '.edit_service' , function(){
        var service_id = $(this).data('id');
        var url = window.APP_URLS.service_edit_data.replace(':id' , service_id);
        $.ajax({
            type: "GET",
            url: url,
            success: function (response, textStatus, jqXHR) {
                if(response.result){
                    $("input[name='status']").prop('checked', false);
                    $('#service_modal').modal('show');
                    $("#service_id").val(response.data.id);
                    $("#service_name").val(response.data.name);
                    $("#service_url").val(response.data.url);
                    $("input[name='status'][value='" + response.data.status + "']").prop('checked', true);
                    // ✅ Show existing banner image if available

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

    $(document).on('click' , '.delete_service' , function(){
        service_id = $(this).data('id');
        var url = window.APP_URLS.service_delete_data.replace(':id' , service_id);
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
    

    function valid_service(){
        if($("#service_name").val() == ''){
            $("#span_service").text("Enter Name This Filed is Required.")
            return false
        }else{
            $("#span_service").text("")
            return true;
        }
    }

    function valid_url(){
        if($("#service_url").val() == ''){
            $("#span_url").text("Enter Url.This Field is Required.")
            return false
        }else{
            $("#span_url").text("")
            return true;
        }
    }
   function valid_service_status() {
        // alert("11111111")
        if ($("input[name='status']:checked").length === 0) {
            $("#span_service_status").text("Please select a our expert status.");
            return false;
        } else {
            $("#span_service_status").text(""); // Clear error message
            return true;
        } 
    }

});
    