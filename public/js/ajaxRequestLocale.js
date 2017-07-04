$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#locale').change(function() {
        var locale = $(this).val();
        var path = window.location.pathname;
        var split_path = path.split("/");
        console.log(split_path[1]);
        console.log(locale);
        $.ajax({
            type: 'post',
            url: split_path[1]+'/change-language',
            dataType: 'json',
            data: {
                'locale': locale
            },
            success: function() {
                location.reload();
            }
         });
    });
});

$(document).ready(function() {
    var lc = $('#locale').data('locale');
    if (lc == 'vi') {
        $('#vi').attr('selected', 'selected');
    } else {
        $('#en').attr('selected', 'selected');
    }
});