jQuery(document).ready(function ($) {
    $('#owlClients').owlCarousel({
        loop: true,
        margin: 5,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 6
            }
        }
    })
});