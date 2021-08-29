var textBahasa = "";
var textImage = "";

$(document).ready(function($) {

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
            name: $('#title').val(),
            image: $('#description').val()
        };
        var type = "POST";
        var ajaxurl = '/manager/data/prola/create';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                var newBahasa = `
                <tr id="` + data.id + `">
                    <td style="width: 5%">` + data.id + `</td>
                    <td id="name_` + data.id + `" style="width: 10%">` + data.name + `</td>
                    <td id="image_` + data.id + `" style="width: 50%">` + data.image + `</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-edit me-2" value="` + data.id + `">edit</button>
                        <button type="button" class="btn btn-warning btn-update me-2" value="` + data.id + `">update</button>
                        <button type="button" class="btn btn-danger btn-delete" value="` + data.id + `">delete</button>
                        <button type="button" class="btn btn-primary btn-cancel" value="` + data.id + `">cancel</button>
                    </td>
                </tr>`;

                $('#list_bahasa').append(newBahasa);
                $('#formModal').modal('hide');
            },
            error: function(data) {
                alert(data.statusText);
                console.log(data);
            }
        });
    });

    //edit
    $('#list_bahasa').on('click', ".btn-edit", function() {
        //add input to title and description with them value
        var ID = $(this).val();

        textBahasa = document.getElementById('name_' + ID).innerHTML;
        textImage = document.getElementById('image_' + ID).innerHTML;

        $('#' + 'name_' + ID).html(`
            <input type="text" class="form-control" name="inputname` + ID + `" id="inputname` + ID + `" value="` + textBahasa + `">
        `);

        $('#' + 'image_' + ID).html(`
            <input type="text" class="form-control" name="inputimage` + ID + `" id="inputimage` + ID + `" value="` + textImage + `">
        `);

        //hide edt button, show update btn
        $(this).css('display', 'none');
        $(this).siblings('.btn-update').css("display", "inline-block");
        $(this).siblings('.btn-cancel').css("display", "inline-block");
        $(this).siblings('.btn-delete').css("display", "none");
        $('.btn-edit').addClass('disabled');
        $('.btn-delete').addClass('disabled');
        $('#btn-add').addClass('disabled');
    });

    //cancel
    $('#list_bahasa').on('click', ".btn-cancel", function() {
        var ID = $(this).val();

        $('#' + 'name_' + ID).text(textBahasa);
        $('#' + 'image_' + ID).text(textImage);

        $(this).css("display", "none");
        $(this).siblings('.btn-update').css('display', 'none');
        $(this).siblings('.btn-delete').css('display', 'inline-block');
        $(this).siblings('.btn-edit').css('display', 'inline-block');
        $('.btn-edit').removeClass('disabled');
        $('.btn-delete').removeClass('disabled');
        $('#btn-add').removeClass('disabled');
    });

    //update after click the edit button
    $('#list_bahasa').on('click', ".btn-update", function(e) {
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
            name: $('#inputname' + ID).val(),
            image: $('#inputimage' + ID).val()
        };
        var type = "POST";
        var ajaxurl = '/manager/data/prola/update';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                $('#name_' + ID).text(data.name);
                $('#image_' + ID).text(data.image);
            },
            error: function(data) {
                alert(data.statusText);
                console.log(data);
            }
        });

        $(this).css('display', 'none');
        $(this).siblings('.btn-edit').css("display", "inline-block");
        $(this).siblings('.btn-delete').css("display", "inline-block");
        $(this).siblings('.btn-cancel').css("display", "none");
        $('.btn-edit').removeClass('disabled');
        $('.btn-delete').removeClass('disabled');
        $('#btn-add').removeClass('disabled');
    });

    //delete
    $('#list_bahasa').on('click', ".btn-delete", function(e) {
        var ID = $(this).val();

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
        var ajaxurl = '/manager/data/prola/delete';
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
                console.log(data);
                //location.reload();
            }
        });
    });

    //searching
});