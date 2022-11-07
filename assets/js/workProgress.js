function onFinish() { alert('Finish Clicked'); }
function onCancel(elm) { elm.smartWizard("reset"); }

$(function () {
    // Smart Wizard 1
    $('#smartwizard1').smartWizard({
    selected: 0,
    theme: 'round', // basic, arrows, square, round, dots
    transition: {
        animation: 'fade' // none|fade|slideHorizontal|slideVertical|slideSwing|css
    },
    toolbar: {
        showNextButton: true, // show/hide a Next button
        showPreviousButton: true, // show/hide a Previous button
        position: 'both' // none/ top/ both bottom
    },
    lang: { // Language variables for button
        next: 'Siguiente',
        previous: 'Anterior'
    },
    });
});
$('.btn-work').click(function(){
    if($('.section-image').hasClass('off')){
        $('.section-image').removeClass('off');
        $('.section-video').addClass('off');
    }else{
        $('.section-image').addClass('off');
        $('.section-video').removeClass('off');
    }
});

$('.video').click(function(){
    $('.modal-header .modal-title').html('');
    $('.modal-header .modal-title').html('VIDEO');
    $('.video-modal').addClass('off');
    $('#'+$(this).attr('video')).removeClass('off');
    $('#staticBackdrop').modal('show');
});
