'use strict';
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#imgInp").change(function() {
    readURL(this);
});

function getSelect(url, selectname, select,method = "GET"){
    let id = select.value;
    if (id == '') {
        return;
    };
    $.ajax({
        url:url+'/'+id,
        type:method,
        dataType: 'json',
        success: (data) => {

            let carModelSelect = $('select[name="'+selectname+'"]');

            carModelSelect.html('').append('<option value="">Seçin</option>');
            $.each(data, function (k,v) {
                 carModelSelect.append(`<option value="${data[k].id}">${data[k].name}</option>`);

            })
        },
        error: function (data) {
            //
        }
    });
}