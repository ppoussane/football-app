$(document).ready(function() {});
    function markNotificationAsRead() {
        $.get('/markAsRead');
}

(function($) {
    $('[data-toggle="tooltip"]').tooltip();
}(jQuery));