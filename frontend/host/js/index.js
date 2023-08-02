
$(document).ready(function() {
    $('.btn').on('click', function() {
        var targetContent = $(this).data('target');
        $('.content').hide();
        $('#' + targetContent).show();
    });
});