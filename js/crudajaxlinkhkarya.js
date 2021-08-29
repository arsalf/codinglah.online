var textImage = "";
var readyDoc = false;

$(document).ready(function($) {
    //add
    //----- Open model CREATE -----//
    $('#btn-add').click(function() {
        $('#btn-create').val();
        $('#myForm').trigger("reset");
        $('#formModal').modal('show');
    });

    // CRUD JS AJAX (biar ga reload)
    //create
    $("#btn-create").click(function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            image: $('#image').val(),
            category: $('#category').val(),
            rating: $('#rating').val(),
            title: $('#title').val(),
            description: $('#description').val(),
            link: $('#link').val()
        };
        var type = "POST";
        var ajaxurl = '/manager/page/karya/create';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                var newKarya = `
                <tr id="` + data.id + `">
                    <td style="width: 5%">` + data.id + `</td>
                    <td id="image_` + data.id + `">` + data.image + `</td>
                    <td id="category_` + data.id + `">` + data.category + `</td>
                    <td id="rating_` + data.id + `">` + data.rating + `</td>
                    <td id="title_` + data.id + `">` + data.title + `</td>
                    <td id="description_` + data.id + `">` + data.description + `</td>
                    <td id="link_` + data.id + `">` + data.link + `</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-edit me-2" value="` + data.id + `">edit</button>
                        <button type="button" class="btn btn-warning btn-update me-2" value="` + data.id + `">update</button>
                        <button type="button" class="btn btn-danger btn-delete" value="` + data.id + `">delete</button>
                        <button type="button" class="btn btn-primary btn-cancel" value="` + data.id + `">cancel</button>
                    </td>
                </tr>`;
                console.log(data);
                $('#list_karya').append(newKarya);
                $('#formModal').modal('hide');
            },
            error: function(data) {
                alert(data.statusText);
                console.log(data);
            }
        });
    });

    //edit
    $('#list_karya').on('click', ".btn-edit", function() {
        //add input to title and description with them value
        var ID = $(this).val();

        textImage = document.getElementById('image_' + ID).innerHTML;
        textCategory = document.getElementById('category_' + ID).innerHTML;
        textRating = document.getElementById('rating_' + ID).innerHTML;
        textTitle = document.getElementById('title_' + ID).innerHTML;
        textDescription = document.getElementById('description_' + ID).innerHTML;
        textLink = document.getElementById('link_' + ID).innerHTML;


        $('#' + 'image_' + ID).html(`
            <input type="text" class="form-control" name="inputimage` + ID + `" id="inputimage` + ID + `" placeholder="Enter Link Direct" value="` + textImage + `">
        `);
        $('#' + 'category_' + ID).html(`
            <input type="text" class="form-control" name="inputcategory` + ID + `" id="inputcategory` + ID + `" placeholder="Enter Link Direct" value="` + textCategory + `">
        `);
        $('#' + 'rating_' + ID).html(`
            <input type="text" class="form-control" name="inputrating` + ID + `" id="inputrating` + ID + `" placeholder="Enter Link Direct" value="` + textRating + `">
        `);
        $('#' + 'title_' + ID).html(`
            <input type="text" class="form-control" name="inputtitle` + ID + `" id="inputtitle` + ID + `" placeholder="Enter Link Direct" value="` + textTitle + `">
        `);
        $('#' + 'description_' + ID).html(`
            <input type="text" class="form-control" name="inputdescription` + ID + `" id="inputdescription` + ID + `" placeholder="Enter Link Direct" value="` + textDescription + `">
        `);
        $('#' + 'link_' + ID).html(`
            <input type="text" class="form-control" name="inputlink` + ID + `" id="inputlink` + ID + `" placeholder="Enter Link Direct" value="` + textLink + `">
        `);

        //hide edt button, show update btn
        $(this).css('display', 'none');
        $(this).siblings('.btn-update').css("display", "inline-block");
        $(this).siblings('.btn-cancel').css("display", "inline-block");
        $(this).siblings('.btn-delete').css("display", "none");

        $('.btn-delete').addClass('disabled');
        $('.btn-edit').addClass('disabled');
        $('#btn-add').addClass('disabled');
    });

    //cancel
    $('#list_karya').on('click', ".btn-cancel", function() {
        var ID = $(this).val();

        $('#' + 'image_' + ID).text(textImage);
        $('#' + 'category_' + ID).text(textCategory);
        $('#' + 'rating_' + ID).text(textRating);
        $('#' + 'title_' + ID).text(textTitle);
        $('#' + 'description_' + ID).text(textDescription);
        $('#' + 'link_' + ID).text(textLink);

        $(this).css("display", "none");
        $(this).siblings('.btn-update').css('display', 'none');
        $(this).siblings('.btn-edit').css('display', 'inline-block');
        $(this).siblings('.btn-delete').css('display', 'inline-block');
        $('.btn-edit').removeClass('disabled');
        $('.btn-delete').removeClass('disabled');
        $('#btn-add').removeClass('disabled');
    });

    //update after click the edit button
    $('#list_karya').on('click', ".btn-update", function(e) {
        var ID = $(this).val();

        //Call Ajax for request data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            id: ID,
            image: $('#inputimage' + ID).val(),
            category: $('#inputcategory' + ID).val(),
            rating: $('#inputrating' + ID).val(),
            title: $('#inputtitle' + ID).val(),
            description: $('#inputdescription' + ID).val(),
            link: $('#inputlink' + ID).val()
        };
        var type = "POST";
        var ajaxurl = '/manager/page/karya/update';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                $('#image_' + ID).text(data.image);
                $('#category_' + ID).text(data.category);
                $('#rating_' + ID).text(data.rating);
                $('#title_' + ID).text(data.title);
                $('#description_' + ID).text(data.description);
                $('#link_' + ID).text(data.link);
                console.log(data);
            },
            error: function(data) {
                alert(data.statusText);
                console.log(data);
            }
        });

        $(this).css('display', 'none');
        $(this).siblings('.btn-edit').css("display", "inline-block");
        $(this).siblings('.btn-cancel').css("display", "none");
        $(this).siblings('.btn-delete').css("display", "inline-block");
        $('.btn-edit').removeClass('disabled');
        $('.btn-delete').removeClass('disabled');
        $('#btn-add').removeClass('disabled');
    });

    //delete
    $('#list_karya').on('click', ".btn-delete", function(e) {
        var ID = $(this).val();
        console.log($(this).parent().parent());
        //Call Ajax for request data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            id: ID
        };
        var type = "POST";
        var ajaxurl = '/manager/page/karya/delete';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                $('#' + ID).remove();
            },
            error: function(data) {
                alert(data.statusText);

                //location.reload();
            }
        });
    });

    //select change
    //init
    var id_bahasa = $('#form_select_bhs').val();
    for (let i = 1; i <= $('option').length; i++) {
        if (i == id_bahasa) {
            $('.' + i).css('display', 'table-row');
        } else {
            $('.' + i).css('display', 'none');
        }
    }

    $('#form_select_bhs').on('change', function() {
        var id_bahasa = $(this).val();
        for (let i = 1; i <= $('option').length; i++) {
            if (i == id_bahasa) {
                $('.' + i).css('display', 'table-row');
            } else {
                $('.' + i).css('display', 'none');
            }
        }
    });

});