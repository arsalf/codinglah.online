var title_id = "";
var desc_id = "";
var id = "";

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
            title: $('#title').val(),
            description: $('#description').val()
        };
        var type = "POST";
        var ajaxurl = '/karya/alat/todo/create';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                var todo = `<tr id="` + data.id + `">
                <td>` + data.id + `</td>
                <td class="title" id="title` + data.id + `">` + data.title + `</td>
                <td class="desc" id="desc` + data.id + `">` + data.description + `</td>
                <td>
                    <button type="button" class="btn btn-success btn-edit"
                        value="` + data.id + `">
                        Edit
                    </button>
                    <button type="button" class="btn btn-success btn-updated"
                        value="` + data.id + `">
                        Update
                    </button>
                    <button type="button" class="btn btn-success btn-delete" value="` + data.id + `">
                        Delete
                    </button>
                </td>
            </tr>`;
                $('#todos-list').append(todo);
                $('#formModal').modal('hide');
            },
            error: function(data) {
                alert(data.statusText);
                location.reload();
            }
        });
    });

    //edit
    $('#todos-list').on('click', ".btn-edit", function() {
        //add input to title and description with them value
        id = $(this).val();
        title_id = "title" + id;
        var text = $(this).parent().siblings('.title').text();
        console.log($(this).parent().siblings('.title'));
        $('#' + title_id).html(`<input type="text" class="form-control" name="input` + title_id + `" id="input` + title_id + `" placeholder="Enter new title" value="` + text + `">`);
        desc_id = "desc" + id;
        text = $(this).parent().siblings('.desc').text();;
        $('#' + desc_id).html(`<input type="text" class="form-control" name="input"` + desc_id + `" id="input` + desc_id + `" placeholder="Enter new description" value="` + text + `">`);

        //hide edt button, show update btn
        $(this).css('display', 'none');
        $(this).siblings('.btn-updated').css("display", "inline-block");
        $('.btn-edit').addClass('disabled');
        $('.btn-delete').addClass('disabled');
        $('#btn-add').addClass('disabled');
    });

    //update after click the edit button
    $('#todos-list').on('click', ".btn-updated", function(e) {
        let num_id = parseInt(id);
        let in_title = "#input" + title_id;
        let in_desc = "#input" + desc_id;

        //Call Ajax for request data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            id: num_id,
            title: $(in_title).val(),
            description: $(in_desc).val()
        };
        var type = "POST";
        var ajaxurl = '/karya/alat/todo/update';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                $('#' + title_id).text(data.title);
                $('#' + desc_id).text(data.description);
            },
            error: function(data) {
                alert(data.statusText);
                location.reload();
            }
        });

        $(this).css('display', 'none');
        $(this).siblings('.btn-edit').css("display", "inline-block");
        $('.btn-edit').removeClass('disabled');
        $('.btn-delete').removeClass('disabled');
        $('#btn-add').removeClass('disabled');
    });

    //delete
    $('#todos-list').on('click', ".btn-delete", function(e) {
        let num_id = parseInt($(this).val());
        console.log(num_id);
        //Call Ajax for request data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            id: num_id
        };
        var type = "POST";
        var ajaxurl = '/karya/alat/todo/delete';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                $('#' + num_id).remove();
            },
            error: function(data) {
                alert(data.statusText);
                //location.reload();
            }
        });
    });

    //searching
});