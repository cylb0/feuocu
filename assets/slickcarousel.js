$(document).ready(function(){
    // Carousel 10 produits catégorie
    $('.products_carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1080,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.slider').slick({
        centerMode: true,
        dots: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        variableWidth: true,
        focusOnSelect : true,
        centerPadding: '60px',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    }).on('afterChange', function(event, slick, currentSlide){
        const slide = document.querySelector(`[data-slick-index="${currentSlide}"]`);
        const src = slide.getAttribute('src');
        updateMainImg(src);
    });

    $('.slider-product-admin').slick({
        infinite: true,
        slideToShow: 6,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
    })

    function updateMainImg(newSrc) {
        const mainImg = document.getElementById('main-img');
        mainImg.src = newSrc;
    }

});