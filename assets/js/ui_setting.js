// Init template on DOM ready
// ===================================
$(function() {

    //PAGETOP
    $("body").append("<a href='#top' class='backtopbutton'><i class='arrow_carrot_up_alt'></i></a>");
    var topBtn = $('.backtopbutton');
    topBtn.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 160) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    topBtn.click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });


    // Append .background-image-holder <img>'s as CSS backgrounds

    $('.background-image-holder').each(function() {
        var imgSrc = $(this).children('img').attr('src');
        $(this).css('background', 'url("' + imgSrc + '")');
        $(this).children('img').hide();
        $(this).css('background-position', '50% 0%');
    });

    //
    var pageh = $(window).innerHeight();
    var hd = $('header').height();
    console.log(hd);
    var menuheight = pageh - hd;

    $('.menubar').css('height', menuheight);
    $(window).resize(function(event) {
        var pageh = $(window).innerHeight();
        var hd = $('header').height();
        console.log(hd);
        var menuheight = pageh - hd;
        $('.menubar').css('height', menuheight);
    });

    //magnific-popup   
    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });
    $(document).on('click', '.popup-modal-dismiss', function(e) {
        e.preventDefault();
        $.magnificPopup.close();
    });


    $('.popup-video').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',

            patterns: {
                youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                    id: 'v=', // String that splits URL in a two parts, second part should be %id%              
                    src: 'https://www.youtube.com/embed/%id%?autoplay=0'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                },
                gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                }
                // you may add here more sources
            },
            srcAction: 'iframe_src',
        }

    });

    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });

    //owl peopple
    var owl = $('.apec-carousel');
    owl.owlCarousel({
        loop: true,
        autoplay: true,
        pagination: true,
        dots: true,
        nav: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 2
            },
            1200: {
                items: 2
            }
        },
        onInitialize: function(element) {
            owl.children().sort(function() {
                return Math.round(Math.random()) - 0.5;
            }).each(function() {
                $(this).appendTo(owl);
            });
        }
    });
    owl.on('mousewheel', '.owl-stage', function(e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
    //owl mentor
    var owlmentor = $('.mentor-carousel');
    owlmentor.owlCarousel({
        loop: true,
        items: 1,
        lazyLoad: true,
        autoplay: true,
        pagination: true,
        dots: true,
        nav: true,
        margin: 10,
        autoHeight: true,
        onInitialize: function(element) {
            owlmentor.children().sort(function() {
                return Math.round(Math.random()) - 0.5;
            }).each(function() {
                $(this).appendTo(owlmentor);
            });
        }
    });
    //owl mentor
    var owlbanner = $('.banner-carousel');
    owlbanner.owlCarousel({
        loop: true,
        lazyLoad: true,
        autoplay: true,
        pagination: true,
        dots: true,
        nav: false,
        margin: 0,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            960: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });


    //Datepicker
    if ($.fn.datepicker) {
        // $('.datepicker-yyyymmdd').datetimepicker({
        //      locale: 'zh-tw',
        //      format:'YYYY/MM/DD',
        //      widgetPositioning:{vertical: "bottom"}
        // });
        $('.dpymd').datepicker({
            format: "yyyy/mm/dd",
            language: "zh-TW",
            orientation: "bottom auto"
        });
    }
    // 
    $(".dragtable").sortable({
        placeholder: "ui-state-highlight"
    });
    $(".dragtable").disableSelection();


    //modal middle
    function centerModals() {
        $('.modal').each(function(i) {
            var $clone = $(this).clone().css('display', 'block').appendTo('body');
            var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
            top = top > 0 ? top : 0;
            $clone.remove();
            $(this).find('.modal-content').css("margin-top", top);
        });
    }
    $('.modal').on('show.bs.modal', centerModals);
    $(window).on('resize', centerModals);
    //

    // upload file
    $('.inputfile').each(function() {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function(e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });

        // Firefox bug fix
        $input
            .on('focus', function() { $input.addClass('has-focus'); })
            .on('blur', function() { $input.removeClass('has-focus'); });
    });




});