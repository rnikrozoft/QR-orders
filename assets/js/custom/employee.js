$(document).ready(function() {
    $('.table').DataTable({
        "language": {
            "paginate": {
                "previous": "«",
                "next": "»"
            }
        }
    });

    $(".insert").click(function() {
        $("#em-m").on("shown.bs.modal", function(t) {
            $(this).find("input")
                .val("")
                .end();

            $('input[name="id"]').removeAttr("readonly");
            $('#title').text("เพิ่มข้อมูล");
            $("#form").attr("action", window.location + "/insert");
        })
    });

    $(".getone").click(function() {
        let data = [];
        $.each($(this).closest("tr").find("td:not(:last-child)"), function(i) {
            data[i] = ($(this).text()).replace(/ /g, "").replace(/\r?\n|\r/g, "");
        });

        $('#em-m').on('shown.bs.modal', function(i) {
            $('#form').attr("action", window.location + "/edit");
            $('input[name="id"]').val(data[0]).attr('readonly', 'readonly');
            $('input[name="fn"]').val(data[1]);
            $('input[name="ln"]').val(data[2]);
            $('input[name="nn"]').val(data[3]);
            $('input[name="a"]').val(data[4]);
            $('input[name="t"]').val(data[5]);

            $('#title').text("แก้ไขข้อมูล");
            $('button[type="submit"]').text("แก้ไขข้อมูล");
        });
    });
});