@if (request()->routeIs('home'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('#categories').owlCarousel({
            loop: false,
            center: true,
            lazyLoad: true,
            margin: 10,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                    // autoplay: true,
                    // autoplayTimeout: 2000,
                    // autoplayHoverPause: true,
                },
            }
        })
    </script>
@endif
