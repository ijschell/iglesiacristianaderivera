class SaveWorld{

    initAOS(){

        AOS.init();

    }

    menuEffect(){

        $('header .bottom .flex > div ul li ul').addClass('animated fadeIn');

        $('.menu-item-has-children > a').append('<span><i class="fas fa-caret-down"></i></span>');

    }

    testimonialSlider() {
        $('.testimonial').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2500,
            cssEase: 'linear',
            dots: true,
            fade: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 600
        });
    }

    partnersSlider() {
        $('.partners').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2500,
            // cssEase: 'linear',
            dots: false,
            fade: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 600
        });
    }


    buttonTop(){

        $(window).on('scroll', function(){

            // if($(window).scrollTop() > 150){
            //     $('#categoryPage #sideBar > ul').addClass('moveTop');
            //     $('#categoryPage #sideBar > ul').niceScroll().resize();
            // }else{
            //     $('#categoryPage #sideBar > ul').removeClass('moveTop');
            //     $('#categoryPage #sideBar > ul').niceScroll().resize();
            // }

            if($(window).scrollTop() > 200){
                $('.btnToTop').addClass('active');
            }else{
                $('.btnToTop').removeClass('active');
            }

        })

    }

    clickAndGoTop(){

        $('.btnToTop').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });

    }

    menuCategories(){

        $(document).on('click', '#categoryPage #sideBar ul li a', function(e){

            // if ($(this).next('ul').length > 0) {
            //     e.preventDefault();
            //     $(this).next('ul').slideToggle();   
            // }

        })

        $('#categoryPage #sideBar ul.children').parent().children('a').append('<span><i class="fas fa-chevron-right"></i></span>');

    }

    setHeightInSidebar(){

        var heightSidebar = $('#sideBar').height();
        var heightSection = $('#categoryPage').height();        

        if (heightSidebar > heightSection) {
            $('#categoryPage').css('height', heightSidebar + 'px');
        }else{
            $('#sideBar').css('height', heightSection + 'px');
        }

    }

    toggleSidebar(){

        $(document).on('click', '#sideBar .closeSidebar', function(e){

            e.preventDefault();

            $('#sideBar').toggleClass('closed');
            $('#contentInformation').toggleClass('closed');

        })

    }

    mobileMenu(){
        
    }

}

$(document).ready(function(){

    $('#categoryPage #sideBar > ul').niceScroll({
        background : 'transparent',
        cursorborder : 'none',
        cursoropacitymax : 0
    });

    var saveWorld = new SaveWorld();

    // init AOS
    saveWorld.initAOS();

    // init menu effect in header menu
    saveWorld.menuEffect();

    // init testimonial slider
    saveWorld.testimonialSlider();
    
    // init testimonial slider
    saveWorld.partnersSlider();

    // button scroll to top
    saveWorld.buttonTop();

    // on click in button top, scroll to top
    saveWorld.clickAndGoTop();

    // init menu subcategorie
    saveWorld.menuCategories();

    // fix sidebar floating
    saveWorld.setHeightInSidebar();

    // toggle class sidebar
    saveWorld.toggleSidebar();

    

})