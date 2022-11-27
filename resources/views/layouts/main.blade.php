<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/templatemo.css">
    <link rel="stylesheet" href="/css/custom.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/css/fontawesome.min.css">

    <link rel="stylesheet" type="text/css" href="/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
</head>

<body>

    @yield('content')

    <!-- Start Script -->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/templatemo.js"></script>
    <script src="/js/custom.js"></script>

    <!-- End Script -->

    <script src="/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
</body>

</html>
