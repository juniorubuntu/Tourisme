function detail() {
    if ($('.pubS').hasClass('expd')) {
        $('.pubS_1').hide("slow");
        $('.pubS').removeClass('expd');
        changeGlyphicon(1);
    } else {
        $('.pubS_1').show("slow");
        $('.pubS').addClass('expd');
        changeGlyphicon(0);
    }
}

function changeGlyphicon(a) {
    if (a) {
        $('.span_1').removeClass('glyphicon-triangle-bottom');
        $('.span_1').addClass('glyphicon-triangle-right');
    } else {
        $('.span_1').removeClass('glyphicon-triangle-right');
        $('.span_1').addClass('glyphicon-triangle-bottom');
    }
}


function sousMenu(pere, fils) {

    $('.listeNow').css(
            {'background': "hsl(32, 89%, 31%)"}
    );
    $('.liste').hide();
    $('.liste').removeClass('liste');
    $('.listeNow').removeClass('listeNow');
    $('.' + fils).show('slow').delay(3000).hide('slow');
    $('.' + pere).css(
            {'background': "hsl(0, 0%, 88%"}
    );
    $('.' + pere).addClass('listeNow');
    $('.' + fils).addClass('liste');
}