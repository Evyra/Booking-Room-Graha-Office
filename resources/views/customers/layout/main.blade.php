<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Meeting Room | {{ $title }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/logo.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('') }}/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ url('') }}/css/custom.css" rel="stylesheet">

</head>

<body class="datepicker_mobile_full">
    <div id="page">
        @include('customers.layout.navbar')

        @yield('container')
        
        @include('customers.layout.footer')
    </div>

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ url('') }}/js/common_scripts.js"></script>
    <script src="{{ url('') }}/js/main.js"></script>
    <script src="{{ url('') }}/assets/validate.js"></script>

    <!-- DATEPICKER  -->
    <script>
        $(function() {
            'use strict';
            $('input[name="dates"]').daterangepicker({
                autoUpdateInput: false,
                minDate: new Date(),
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format(
                    'MM-DD-YY'));
            });
            $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>

    <!-- INPUT QUANTITY  -->
    <script src="{{ url('') }}/js/input_qty.js"></script>

</body>

</html>
