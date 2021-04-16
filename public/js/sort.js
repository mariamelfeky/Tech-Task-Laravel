$("#sortNews").change(function() {
    let option = $(this)
        .children("option:selected")
        .val();
    if (option) {
        var sortArr = option.split('_');
    }
    $.ajax({
        url: "sort",
        type: "POST",
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'sort': sortArr[0],
            'type': sortArr[1]
        },
        success: function (data) {
            $("#news").html(data);
        },
        error: function(err) {
            console.log(err);
        }
    });
});
