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
            id_bahasa: $('#form_select_bhs').val(),
            basic: $('#basic').val(),
            inter: $('#inter').val(),
            pro: $('#pro').val()
        };
        var type = "POST";
        var ajaxurl = '/manager/page/tantangan/create';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                var newLink = `
                <tr id="` + data.id + `" class="` + data.id_bahasa + `">
                    <td style="width: 5%">` + data.id + `</td>
                    <td id="basic_` + data.id + `">` + data.basic + `</td>
                    <td id="inter_` + data.id + `">` + data.inter + `</td>
                    <td id="pro_` + data.id + `">` + data.pro + `</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-edit me-2" value="` + data.id + `">edit</button>
                        <button type="button" class="btn btn-warning btn-update me-2" value="` + data.id + `">update</button>
                        <button type="button" class="btn btn-danger btn-delete" value="` + data.id + `">delete</button>
                        <button type="button" class="btn btn-primary btn-cancel" value="` + data.id + `">cancel</button>
                    </td>
                </tr>`;
                console.log(data);
                $('#list_bahasa').append(newLink);
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

        textBasic = document.getElementById('basic_' + ID).innerHTML;
        textInter = document.getElementById('inter_' + ID).innerHTML;
        textPro = document.getElementById('pro_' + ID).innerHTML;

        $('#' + 'basic_' + ID).html(`
            <input type="text" class="form-control" name="inputbasic` + ID + `" id="inputbasic` + ID + `" placeholder="Enter Link Direct" value="` + textBasic + `">
        `);

        $('#' + 'inter_' + ID).html(`
            <input type="text" class="form-control" name="inputinter` + ID + `" id="inputinter` + ID + `" placeholder="Enter Link Direct" value="` + textInter + `">
        `);

        $('#' + 'pro_' + ID).html(`
            <input type="text" class="form-control" name="inputpro` + ID + `" id="inputpro` + ID + `" placeholder="Enter Link Direct" value="` + textPro + `">
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
    $('#list_bahasa').on('click', ".btn-cancel", function() {
        var ID = $(this).val();

        $('#' + 'basic_' + ID).text(textBasic);
        $('#' + 'inter_' + ID).text(textInter);
        $('#' + 'pro_' + ID).text(textPro);

        $(this).css("display", "none");
        $(this).siblings('.btn-update').css('display', 'none');
        $(this).siblings('.btn-edit').css('display', 'inline-block');
        $(this).siblings('.btn-delete').css('display', 'inline-block');
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
            id_bahasa: $('#form_select_bhs').val(),
            id: ID,
            basic: $('#inputbasic' + ID).val(),
            inter: $('#inputinter' + ID).val(),
            pro: $('#inputpro' + ID).val()
        };
        var type = "POST";
        var ajaxurl = '/manager/page/tantangan/update';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data) {
                data = data.data;
                $('#basic_' + ID).text(data.basic);
                $('#inter_' + ID).text(data.inter);
                $('#pro_' + ID).text(data.pro);
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
    $('#list_bahasa').on('click', ".btn-delete", function(e) {
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
            id_link: ID,
            id_bahasa: $(this).parent().parent().attr('class')
        };
        var type = "POST";
        var ajaxurl = '/manager/page/tantangan/delete';
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