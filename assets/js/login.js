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

$('.header-form-login .nav-link').click(function() {
    $('.header-form-login .nav-link').removeClass('active');
    $(this).addClass('active');
    if ($('.content-login2').hasClass('off')) {
        $('.content-login1').addClass('off');
        $('.content-login2').removeClass('off');
        $('#email').attr('required');
        $('#documentType').removeAttr('required');
        $('#document').removeAttr('required');
        $('#document').val('');
    }else{
        $('.content-login1').removeClass('off');
        $('.content-login2').addClass('off');
        $('#email').removeAttr('required');
        $('#email').val('');
        $('#documentType').attr('required');
        $('#document').attr('required');
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

function optionLogin(option){
    $('.modal-header .modal-title').html('');
    $('.control-modal').addClass('off');
    if (option === 'sendPassword') {
        $('.modal-header .modal-title').html('Recuperar contraseña');
        $('.modal-getEmail').removeClass('off');
    }else if(option === 'TyC'){
        $('.modal-header .modal-title').html('Terminos y condiciones');
        $('.modal-TyC').removeClass('off');
    }
    $('#modalCenter').modal('show');
}