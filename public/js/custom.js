var pathname = window.location.pathname; // Returns path only
var url      = window.location.href;     // Returns full URL
var origin   = window.location.origin;

var full_path = origin+pathname;

var toastr_opts = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-top-right",
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
$(function() {
    url = url.split('?')[0];
    $('#main-menu').removeClass('opened');
    $('#main-menu').removeClass('active');
    $('#main-menu a[href="' + url + '"]').parents('.has-sub').addClass('active');
    $('#main-menu a[href="' + url + '"]').parents('ul').addClass('visible');

    $('#main-menu a[href="' + url + '"]').parents('.has-sub').addClass('opened');
    $('#main-menu a[href="' + url + '"]').parent('li').addClass('active');
    
    setTimeout(function() {
        $(".hideMsg").fadeOut()
    }, 3000);

    //File upload
    $('#file-upload').change(function() {
        var file = $('#file-upload')[0].files[0].name;
        $("#fileName").text(file);
    });

    
});



