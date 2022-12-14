let  message = "";
let  iconMessage = "";
$(document).ready(function () {
    $('.carousel-wrapper').attr('style','margin:auto 60px;');
    $('#document').val('');
    $('#email').val('');
    if (message.length > 1) {
        openSwalFire(message, iconMessage);
    }
});

function openSwalFire(message, icon){
    Swal.fire({
        position: 'center',
        title: icon,
        text: message,
        showCloseButton: true,
        showConfirmButton: false,
        timer: 3000
    });
}

$('.btn-password').click(function(){
    if($('.btn-password i').hasClass('fa-solid fa-eye')){
        $('.btn-password i').removeClass();
        $('.btn-password i').addClass('fa-solid fa-eye-slash');
        $('#password').attr('type','text');
    }else{
        $('.btn-password i').removeClass();
        $('.btn-password i').addClass('fa-solid fa-eye');
        $('#password').attr('type','password');
    }
});

$('.btn-confirm-password').click(function(){
    if($('.btn-confirm-password i').hasClass('fa-solid fa-eye')){
        $('.btn-confirm-password i').removeClass();
        $('.btn-confirm-password i').addClass('fa-solid fa-eye-slash');
        $('#confirm-password').attr('type','text');
    }else{
        $('.btn-confirm-password i').removeClass();
        $('.btn-confirm-password i').addClass('fa-solid fa-eye');
        $('#confirm-password').attr('type','password');
    }
});

$('.btn-bellavista').click(function(){
    $('.section-apto').addClass('off');
    $('.section-carrousel').removeClass('off');
    $(document).scrollTop($(document).height());
});

$('.btn-apto').click(function(){
    $('.section-carrousel').addClass('off');
    $('.section-apto').removeClass('off');
    $(document).scrollTop($(document).height());
});
$('.item-nav-left .nav-link').click(function(){
    $('embed').addClass('off');
    $('.tittle-document').removeClass('off');
    $('.tittle-document').html($(this).attr('tittle-item'));
    $('#'+$(this).attr('name-item')).removeClass('off');
});