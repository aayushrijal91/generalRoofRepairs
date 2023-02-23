// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#services"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }

    if($(this).scrollTop() >= 218) {
        $('header').css('z-index', '-1');
        $('.slide-logo').css('transform','translateX(0)').css('opacity', '1');
    } else {
        $('header').css('z-index', '1000000');
        $('.slide-logo').css('transform','translateX(-1000%)');
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

if ($("#banner-slider").length) {
    $("#banner-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
    });

    let percentTime;
    let tick;
    let time = .1;
    let progressBarIndex = 0;

    $('.progressBarContainer .progressBar').each(function (index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);

        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            tick = setInterval(interval, 10);
        }

        function interval() {
            if (($('#banner-slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
                progressBarIndex = $('#banner-slider .slick-track div[aria-hidden="false"]').data("slickIndex");
                startProgressbar();
            } else {
                percentTime += 1 / (time + 5);
                $('.inProgress' + progressBarIndex).css({
                    width: percentTime + "%"
                });

                if (percentTime >= 100) {
                    $('#banner-slider').slick('slickNext');
                    progressBarIndex++;

                    if (progressBarIndex > 1) {
                        progressBarIndex = 0;
                    }

                    startProgressbar();
                }
            }
        }

        function resetProgressbar() {
            $('.inProgress').css({
                width: 0 + '%'
            });

            clearInterval(tick);
        }

        startProgressbar();

        $('.banner_item').on('click', function () {
            clearInterval(tick);
            var goToThisIndex = $(this).find("span").data("slickIndex");
            $('#banner-slider').slick('slickGoTo', goToThisIndex, false);
            startProgressbar();
        });
    });
}

$('.why-us-large .why-us-card').on('mouseenter', function () {
    $('.why-us-large .why-us-card').removeClass('active');
    $(this).addClass('active');
});

$('.service-card .description').each(function () {
    let fullDescription = $(this).text();
    let truncatedDescription = fullDescription.length > 40 ? fullDescription.substring(0, 40) + "..." : fullDescription;

    $(this).html(truncatedDescription);

    $(this).parents('.service-card').find('.showMoreServiceDescription').on('click', function () {
        $(this).parents('.service-card').find('.description').html(fullDescription);
    })
});

function fileUploaded(uploadName, labelId, textColor = '#161616') {
    var file = document.getElementById(uploadName);
    if (file.value != "") {
        var theSplit = file.value.split('\\');
        var fileName = theSplit[theSplit.length - 1];
        $(`#${labelId}`).html(fileName.substring(0, 50));
        $(`#${labelId}`).css('color', textColor);
    }
}

$("#review-sliders").slick({
    slidesToScroll: 1,
    autoplay: true,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: "50px",
    arrows: false,
    variableWidth: true,
});

$('.whyUsCardInnerSlider').each(function () {
    const newThis = this;

    let whyUsCardSlider = $(newThis).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true,
    });

    $(newThis).parents('.why-us-card').find('a.whyUsGoTo').on('click', function () {
        let goTo = parseInt($(this).attr('dtarget'));

        whyUsCardSlider.slick('slickGoTo', goTo);
        manageFooter(newThis);
    });

    manageFooter(newThis);
});

function manageFooter(pointerThis) {
    if ($(pointerThis).slick('slickCurrentSlide', true) == 0) {
        $(pointerThis).parents('.why-us-card').find('.whyUsGoBack').css('visibility', 'hidden');
        $(pointerThis).parents('.why-us-card').find('ul.whyUsDots li').removeClass('active');
        $(pointerThis).parents('.why-us-card').find('ul.whyUsDots li:first').addClass('active');
    }
    else {
        $(pointerThis).parents('.why-us-card').find('.whyUsGoBack').css('visibility', 'visible');
        $(pointerThis).parents('.why-us-card').find('ul.whyUsDots li').removeClass('active');
        $(pointerThis).parents('.why-us-card').find('ul.whyUsDots li:last').addClass('active');
    }
}

if($(document).width() <= 900) {
    $('.serviceSliderNav').slick({
        slidesToShow: 4,
        arrows: false,
        slidesToScroll: 1,
        asNavFor: $("#serviceSlider"),
        focusOnSelect: true,
    });

    $("#serviceSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $(".servicePrev"),
        nextArrow: $(".serviceNext"),
        asNavFor: $('.serviceSliderNav')
    });
}


