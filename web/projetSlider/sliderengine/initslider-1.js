jQuery(document).ready(function () {    var scripts = document.getElementsByTagName("script");    var jsFolder = "";    for (var i = 0; i < scripts.length; i++)    {        if (scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);    }    jQuery("#amazingslider-2").amazingslider({        jsfolder: jsFolder,        width: 800,        height: 300,        loadimageondemand: false,        enabletouchswipe: false,        fullscreen: false,        autoplayvideo: false,        addmargin: false,        randomplay: false,        isresponsive: true,        pauseonmouseover: false,        playvideoonclickthumb: true,        slideinterval: 3000,        fullwidth: false,        transitiononfirstslide: false,        scalemode: "fill",        loop: 0,        autoplay: true,        navplayvideoimage: "play-32-32-0.png",        navpreviewheight: 60,        timerheight: 2,        descriptioncssresponsive: "font-size:8px;",        shownumbering: false,        skin: "Rotator",        textautohide: true,        addgooglefonts: false,        navshowplaypause: true,        navshowplayvideo: false,        navshowplaypausestandalonemarginx: 8,        navshowplaypausestandalonemarginy: 8,        navbuttonradius: 2,        navthumbnavigationarrowimageheight: 32,        navmarginy: 20,        lightboxshownavigation: false,        showshadow: false,        navfeaturedarrowimagewidth: 16,        navpreviewwidth: 120,        googlefonts: "",        textpositionmarginright: 24,        bordercolor: "#ffffff",        lightboxdescriptionbottomcss: "{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",        lightboxthumbwidth: 80,        navthumbnavigationarrowimagewidth: 32,        navthumbtitlehovercss: "text-decoration:underline;",        texteffectresponsivesize: 600,        arrowwidth: 32,        texteffecteasing: "easeOutCubic",        texteffect: "slide",        lightboxthumbheight: 60,        navspacing: 4,        playvideoimage: "playvideo-64-64-0.png",        ribbonimage: "ribbon_topleft-0.png",        navwidth: 20,        navheight: 20,        arrowtop: 50,        timeropacity: 0.6,        titlecssresponsive: "font-size:12px;",        navthumbnavigationarrowimage: "carouselarrows-32-32-0.png",        navshowplaypausestandalone: false,        texteffect1: "slide",        navpreviewbordercolor: "#ffffff",        ribbonposition: "topleft",        navthumbdescriptioncss: "display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",        lightboxtitlebottomcss: "{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",        arrowstyle: "none",        navthumbtitleheight: 20,        textpositionmargintop: 24,        texteffectdelay: 800,        navswitchonmouseover: false,        navarrowimage: "navarrows-20-20-0.png",        arrowimage: "arrows-32-32-0.png",        textstyle: "dynamic",        playvideoimageheight: 64,        navfonthighlightcolor: "#ffffff",        showbackgroundimage: false,        navpreviewborder: 4,        navopacity: 0.8,        shadowcolor: "#aaaaaa",        navbuttonshowbgimage: false,        navbuttonbgimage: "navbuttonbgimage-28-28-0.png",        textbgcss: "display:none;",        playvideoimagewidth: 64,        navborder: 4,        navshowpreviewontouch: false,        bottomshadowimagewidth: 110,        showtimer: true,        navradius: 2,        navmultirows: false,        navshowpreview: false,        navpreviewarrowheight: 8,        navmarginx: 20,        navfeaturedarrowimage: "featuredarrow-16-8-0.png",        showribbon: false,        navstyle: "numbering",        textpositionmarginleft: 24,        descriptioncss: "display:inline; position:relative; font:14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#e04000; white-space:nowrap;  background-color:#fff; margin-top:16px; padding:10px; ",        navplaypauseimage: "navplaypause-20-20-0.png",        backgroundimagetop: -10,        timercolor: "#ffffff",        numberingformat: "%NUM/%TOTAL ",        navfontsize: 12,        navhighlightcolor: "#ff4629",        texteffectdelay1: 1000,        navimage: "bullet-24-24-0.png",        texteffectduration1: 800,        navshowplaypausestandaloneautohide: false,        navbuttoncolor: "#e3e3e8",        navshowarrow: true,        texteffectslidedirection: "bottom",        navshowfeaturedarrow: false,        lightboxbarheight: 64,        titlecss: "display:inline; position:relative; font:16px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; white-space:nowrap; background-color:#e04000; padding:10px;",        ribbonimagey: 0,        ribbonimagex: 0,        texteffectresponsive: true,        texteffectslidedistance1: 10,        navrowspacing: 8,        navshowplaypausestandaloneposition: "bottomright",        shadowsize: 5,        lightboxthumbtopmargin: 12,        arrowhideonmouseleave: 1000,        navshowplaypausestandalonewidth: 28,        navfeaturedarrowimageheight: 8,        navshowplaypausestandaloneheight: 28,        navpreviewposition: "bottom",        backgroundimagewidth: 120,        navcolor: "#e3e3e8",        navthumbtitlewidth: 120,        lightboxthumbbottommargin: 8,        texteffectseparate: true,        arrowheight: 32,        arrowmargin: 8,        texteffectduration: 600,        bottomshadowimage: "bottomshadow-110-95-4.png",        border: 0,        lightboxshowdescription: false,        timerposition: "bottom",        navfontcolor: "#333333",        navthumbnavigationstyle: "arrow",        borderradius: 0,        navbuttonhighlightcolor: "#ff4629",        textpositionstatic: "bottom",        navthumbstyle: "imageonly",        texteffecteasing1: "easeOutCubic",        textcss: "display:block; padding:8px 16px; text-align:left;",        navbordercolor: "#ffffff",        navpreviewarrowimage: "previewarrow-16-8-1.png",        showbottomshadow: true,        texteffectslidedistance: 10,        navdirection: "horizontal",        textpositionmarginstatic: 0,        backgroundimage: "",        navposition: "topright",        texteffectslidedirection1: "bottom",        navpreviewarrowwidth: 16,        textformat: "Red box",        bottomshadowimagetop: 95,        textpositiondynamic: "bottomleft",        navshowbuttons: true,        navthumbtitlecss: "display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",        textpositionmarginbottom: 24,        lightboxshowtitle: true,        slice: {            checked: true,            effectdirection: 0,            effects: "up,down,updown",            slicecount: 10,            duration: 1500,            easing: "easeOutCubic"        },        blocks: {            columncount: 5,            checked: true,            rowcount: 5,            effects: "topleft,bottomright,top,bottom,random",            duration: 1500,            easing: "easeOutCubic"        },        slide: {            duration: 1000,            easing: "easeOutCubic",            checked: true,            effectdirection: 0        },        threed: {            checked: true,            effectdirection: 0,            bgcolor: "#222222",            perspective: 1000,            slicecount: 5,            duration: 1500,            easing: "easeOutCubic",            fallback: "slice",            scatter: 5,            perspectiveorigin: "right"        },        transition: "slice,blocks,slide,threed",        isfullscreen: false,        textformat: {        }    });});