$(document).ready(function(){
    
    setActiveMenu();

    initSliderHeader();

    goToBack();

    changeSubbmitButton();

    initSliderTransmision();

    overCasasPaz();

    smooth();

    animationHeader();

    initSliderLibro();

    $('.tooltip').tooltipster({
        theme: ['tooltipster-noir', 'tooltipster-noir-customized'],
        arrow : false,
        distance : 3
    });

})

function setActiveMenu(){

    var path = window.location.pathname;

    // reset all menu
    $('#menu li a').removeClass('active');

    switch (path) {
        case '/':
            $('#menu li:nth-child(1) a').addClass('active');
        break;
        case '/nuestra-mision':
            $('#menu li:nth-child(2) a').addClass('active');
        break;
        case '/galeria':
            $('#menu li:nth-child(3) a').addClass('active');
        break;
        case '/contacto':
            $('#menu li:nth-child(4) a').addClass('active');
        break;
    }
    

}

function initSliderHeader(){

    var element = $('#sliderHeader');

    element.slick({
        arrows : false,
        fade : true,
        autoplay : true,
        pauseOnFocus : false
    })

}

function initSliderLibro(){

    var element = $('#containerLibros .contentLibros');

    element.slick({
        arrows : false,
        fade : false,
        autoplay : true,
        pauseOnFocus : false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive : [{
            breakpoint: 550,
            settings : {
                slidesToShow: 2
            }
        }]
    })

}

function goToBack(){

    $(document).on('click', '.goToBack', function(e){

        window.history.back();

        return false;

    })

}

function initSliderTransmision(){
 
    var element = $('#contnetTransmisiones');

    element.slick({
        arrows : false,
        fade : false,
        autoplay : true,
        slidesToShow : 3,
        responsive : [{
            breakpoint : 550,
            settings : {
                slidesToShow : 1,
            }
        }]
    })

}

function changeSubbmitButton(){

    $('button[type="submit"]')
    .addClass('btn btn-success')
    .text('Enviar')
    .attr('data-submit-text', 'Enviar')
    .attr('data-alt-text', 'Enviando...')

}

function casasDePazMap(){

    var initCoords = [-30.9178625,-55.5469032];

    window.mymap = L.map('map').setView(initCoords, 13);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoicG9jaG9tb3RvcyIsImEiOiJjazIxNThyYTkwNzlvM25tbHMydDNhaHJvIn0.jiZcJpff7ye4AQ7-1ZnJVg', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoicG9jaG9tb3RvcyIsImEiOiJjazIxNThyYTkwNzlvM25tbHMydDNhaHJvIn0.jiZcJpff7ye4AQ7-1ZnJVg'
    }).addTo(window.mymap);

    window.circleMap = L.circle(initCoords, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(window.mymap);

    // first trigger in first casa
    setTimeout(function(){
        $('#containerContact .left .casaPaz:first-child').trigger('mouseenter');    
    }, 2000);   
   

}

function initMapSingle(){

    var initCoords = $('#singleMap').attr('data-coords').split(',');

    window.mymap = L.map('singleMap').setView(initCoords, 15);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoicG9jaG9tb3RvcyIsImEiOiJjazIxNThyYTkwNzlvM25tbHMydDNhaHJvIn0.jiZcJpff7ye4AQ7-1ZnJVg', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoicG9jaG9tb3RvcyIsImEiOiJjazIxNThyYTkwNzlvM25tbHMydDNhaHJvIn0.jiZcJpff7ye4AQ7-1ZnJVg'
    }).addTo(window.mymap);

    window.circleMap = L.circle(initCoords, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(window.mymap);

    // first trigger in first casa
    setTimeout(function(){
        $('#containerContact .left .casaPaz:first-child').trigger('mouseenter');    
    }, 2000);   
   

}

function setNewViewInMap(coords){

    var coords = coords.split(',');

    // now, set a new position in map
    window.mymap.setView(coords);

    // and clear all circles
    window.circleMap.remove();

    // and set again new circle in new position
    window.circleMap = L.circle(coords, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(window.mymap);


}

function overCasasPaz(){

    $(document).on('mouseover', '#containerContact .left .casaPaz', function(){

        var newCoord = $(this).attr('data-coords');

        setNewViewInMap(newCoord);

    })

}

function smooth(){

    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
            scrollTop: target.offset().top
            }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
                return false;
            } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
            };
            });
        }
        }
    });

}

function animationHeader(){

    $(window).on('scroll', function(e){

        if(window.scrollY > 100){
            $('body').addClass('float');
        }else{
            $('body').removeClass('float');
        }

    })

}

$("#menuMobile .menu").click(function() {
    $("#menuMobile .menu").toggleClass("active");
    $("#menuMobile .navbar-menu").toggleClass("active");
});

$(".menu-listing li a").click(function() {
    $("#menuMobile .menu").removeClass("active");
    $("#menuMobile .navbar-menu").removeClass("active");
})