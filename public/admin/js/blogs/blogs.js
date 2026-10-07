$(document).ready(function () {
    $(document).on('click', '.remove-image', function () {
        $(this).closest('.image-input-row').remove();
    });

    $(document).on('change', '.image-input', function (e) {
        let input = this;
        let preview = $(this).siblings('.img-preview');
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                preview.attr('src', e.target.result).show();
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.hide();
        }
    });

    // thats for index datatables
    var table = null;

    if ($('#blogs_table').length && window.APP_URLS) {
        var imagePath = window.APP_URLS.image_path;

        table = $('#blogs_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: window.APP_URLS.getBlogsData,
                type: "GET",
                dataSrc: function (json) {
                    return json.data;
                }
            },
            order: [[0, 'desc']],
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                {
                    data: 'front_image',
                    name: 'front_image',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        if (data) {
                            var alt = row.front_image_alt ? row.front_image_alt : row.title;
                            return '<img src="' + imagePath + data + '" alt="' + alt + '" width="60" height="60">';
                        } else {
                            return '<span class="text-muted">No Image</span>';
                        }
                    }
                },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    }

    // delete blogs
    $(document).on('click', '.delete_blogs', function () {
        if (!window.APP_URLS) return;

        let id = $(this).data('id');
        var url = window.APP_URLS.deleteblogs.replace(':id', id);

        if (confirm('Are you sure you want to delete this blogs ?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': window.APP_URLS.csrfToken
                },
                success: function (response) {
                    if (response.result) {
                        $("#message-pop-up").attr('style', 'display:block');
                        $("#message-pop-up").addClass('alert-success');
                        $("#success-message").html(response.message);
                        setTimeout(() => {
                            $("#message-pop-up").attr('style', 'display:none');
                        }, 3000);
                        if (table) table.draw();
                    } else {
                        $("#message-pop-up").attr('style', 'display:block');
                        $("#message-pop-up").addClass('alert-warning');
                        $("#success-message").html(response.message);
                        setTimeout(() => {
                            $("#message-pop-up").attr('style', 'display:none');
                        }, 3000);
                    }
                },
                error: function (xhr) {
                    alert('Something went wrong!');
                }
            });
        }
    });
});

// Remove image preview when clicking the × button
$(document).on('click', '.remove-preview', function () {
    $(this).closest('.preview-image').remove();
});
$(document).on('click', '.remove-image', function () {
    $(this).closest('.position-relative').remove();
});

function previewImageFile(inputId, previewId) {
    const input = document.getElementById(inputId);
    const file = input.files[0];
    const previewImg = document.getElementById(previewId);
    const bannerId = document.getElementById("span_blogs_image_id")?.value;

    // allow update without new image
    if (bannerId && !file) {
        return true;
    }
    if (!file) {
        if (previewImg) previewImg.style.display = "none";
        return false;
    }

    if (!file.type.startsWith("image/")) {
        input.value = ""; // reset input
        if (previewImg) previewImg.style.display = "none";
        return false;
    }

    // Show image preview
    const reader = new FileReader();
    reader.onload = function (e) {
        if (previewImg) {
            previewImg.src = e.target.result;
            previewImg.style.display = "block";
        }
    };
    reader.readAsDataURL(file);
    return true;
}

function validateAndPreviewFrontImage() {
    return previewImageFile("blogs_front_image", "preview_front_image");
}

function validateAndPreviewBannerImage() {
    return previewImageFile("blogs_detail_image", "preview_detail_image");
}

function validateAndPreviewCTAImage() {
    return previewImageFile("cta_image", "preview_cta_image");
}