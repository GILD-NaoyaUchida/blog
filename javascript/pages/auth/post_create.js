$(function() {
    //セレクトボックスが切り替わったら発動
    $('#status').change(function() {
        var value = $(this).val();
        if (value === '2') {
            $('#reservation_date').html('<span id="add"><input type="datetime-local" name="reservation_date"></span>');
        } else {
            $('#add').remove();
        }
    });
});