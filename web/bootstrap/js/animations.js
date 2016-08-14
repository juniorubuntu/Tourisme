function detail(id) {
    if ($('.pubS' + id).hasClass('expd')) {
        $('.pubS_' + id).hide("slow");
        $('.pubS' + id).removeClass('expd');
        //$('.page_pub').addClass('col-md-offset-3');
        changeGlyphicon(1, id);
    } else {
        $('.pubS_' + id).show("slow");
        $('.pubS' + id).addClass('expd');
        changeGlyphicon(0, id);
        //$('.page_pub').removeClass('col-md-offset-3');
    }
}

function changeGlyphicon(a, id) {
    if (a) {
        $('.span_' + id).removeClass('glyphicon-triangle-bottom');
        $('.span_' + id).addClass('glyphicon-triangle-right');
    } else {
        $('.span_' + id).removeClass('glyphicon-triangle-right');
        $('.span_' + id).addClass('glyphicon-triangle-bottom');
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