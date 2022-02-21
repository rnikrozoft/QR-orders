$(document).ready(function() {

    $(".edit").click(function() {

        let id = $(this).attr('data-id');
        let n = $(this).attr('data-name');
        let d = $(this).attr('data-detail');
        let q = $(this).attr('data-qty');
        let p = $(this).attr('data-price');
        let img = $(this).attr('data-img');

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        $('#fd-e').on('shown.bs.modal', function(i) {
            $('#id').val(id);
            $('#n').val(n);
            $('#d').val(d);
            $('#q').val(q);
            $('#p').val(p);
            $('#i').val(img);
            $('img.img-thumbnail').attr('src', baseUrl + '/assets/uploads/foods/' + img);
        });
    });
});