$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    stagePadding: 10,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2500,
    responsiveClass: true,
    nav: true,
    navText: ["<img src='assests/images/arow-1.png'>", "<img src='./assests/images/arow-2.png'>"],
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 2
        },
        600: {
            item: 2
        },
        1000: {
            items: 4
        }
    }
});