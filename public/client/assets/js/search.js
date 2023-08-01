$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#keyword").keyup(function () {
    let query = $(this).val();
    let url = $(this).data("url");
    // alert(url);
    if (query != "") {
        $.ajax({
            method: "POST",
            url: url,
            dataType: "json",
            data: {
                query: query,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (data) {
                console.log(data.product_component);
                $(".wrapper_input-dropdown").html(data.product_component);
            },
            error: function (error) {
                alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
            },
        });
    }
});
