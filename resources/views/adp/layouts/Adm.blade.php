<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MyCOIN crypto marketplace">
    <meta name="author" content="KirillB">
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <title>@yield('title','APP_NAME')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--mycss -->
    <link rel="stylesheet" href="{{asset('admin/css/mycss.css')}}">
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link
            href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/uppy.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/dataTables.bootstrap4.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/app-light.css')}}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('admin/css/app-dark.css')}}" id="darkTheme">

    <!-- Radar charts-->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js')}}"></script>

    <script src="{{asset('https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js')}}"></script>


</head>
<body class="vertical  dark">
@if(session()->has('status'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: '{{__(session()->get('status'))}}'
        })
    </script>
@endif
@if(session()->has('error'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 9000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'error',
            title: '{{__(session()->get('error'))}}'
        })
    </script>
@endif
@if($errors->any())

    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 9000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: '{{ __($error) }}'
            })
        </script>
    @endforeach
@endif

<div class="wrapper">
    <!-- user_top_nav -->
    @include('adp.layouts.AdmTopNav')
    <!-- user_aside_left_nav -->
    @include('adp.layouts.AdmLeftNav')
    @yield('content')

</div> <!-- .wrapper -->


<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/moment.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/simplebar.min.js')}}"></script>
<script src='{{asset('admin/js/daterangepicker.js')}}'></script>
<script src='{{asset('admin/js/jquery.stickOnScroll.js')}}'></script>
<script src="{{asset('admin/js/tinycolor-min.js')}}"></script>
<script src="{{asset('admin/js/config.js')}}"></script>
<script src="{{asset('admin/js/d3.min.js')}}"></script>
<script src="{{asset('admin/js/topojson.min.js')}}"></script>
<script src="{{asset('admin/js/datamaps.all.min.js')}}"></script>
<script src="{{asset('admin/js/datamaps-zoomto.js')}}"></script>
<script src="{{asset('admin/js/datamaps.custom.js')}}"></script>
<script src="{{asset('admin/js/Chart.min.js')}}"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="{{asset('admin/js/gauge.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/js/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/js/apexcharts.custom.js')}}"></script>
<script src='{{asset('admin/js/jquery.mask.min.js')}}'></script>
<script src='{{asset('admin/js/select2.min.js')}}'></script>
<script src='{{asset('admin/js/jquery.steps.min.js')}}'></script>
<script src='{{asset('admin/js/jquery.validate.min.js')}}'></script>
<script src='{{asset('admin/js/jquery.timepicker.js')}}'></script>
<script src='{{asset('admin/js/dropzone.min.js')}}'></script>
<script src='{{asset('admin/js/uppy.min.js')}}'></script>
<script src='{{asset('admin/js/quill.min.js')}}'></script>
<script src="{{asset('https://cdn.ckeditor.com/4.12.1/full/ckeditor.js')}}"></script>
<script type="text/javascript">
    CKEDITOR.replace('coinIn-editor', {
        filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

<script>
    $('.select2').select2(
        {
            theme: 'bootstrap4',
        });
    $('.select2-multi').select2(
        {
            multiple: true,
            theme: 'bootstrap4',
        });
    $('.drgpicker').daterangepicker(
        {
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale:
                {
                    format: 'DD/MM/YYYY'
                }
        });
    $('.time-input').timepicker(
        {
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
    /** date range picker */
    if ($('.datetimes').length) {
        $('.datetimes').daterangepicker(
            {
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale:
                    {
                        format: 'M/DD hh:mm A'
                    }
            });
    }
    var start = moment().subtract(29, 'дней');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'));
    }

    $('#reportrange').daterangepicker(
        {
            startDate: start,
            endDate: end,
            ranges:
                {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
        }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000",
        {
            placeholder: "__/__/____"
        });
    $('.input-zip').mask('00000-000',
        {
            placeholder: "____-___"
        });
    $('.input-money').mask("#.##0,00",
        {
            reverse: true
        });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
        {
            translation:
                {
                    'Z':
                        {
                            pattern: /[0-9]/,
                            optional: true
                        }
                },
            placeholder: "___.___.___.___"
        });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
        var toolbarOptions = [
            [
                {
                    'font': []
                }],
            [
                {
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [
                {
                    'header': 1
                },
                {
                    'header': 2
                }],
            [
                {
                    'list': 'ordered'
                },
                {
                    'list': 'bullet'
                }],
            [
                {
                    'script': 'sub'
                },
                {
                    'script': 'super'
                }],
            [
                {
                    'indent': '-1'
                },
                {
                    'indent': '+1'
                }], // outdent/indent
            [
                {
                    'direction': 'rtl'
                }], // text direction
            [
                {
                    'color': []
                },
                {
                    'background': []
                }], // dropdown with defaults from theme
            [
                {
                    'align': []
                }],
            ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
            {
                modules:
                    {
                        toolbar: toolbarOptions
                    },
                theme: 'snow'
            });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script src='{{asset('admin/js/jquery.dataTables.min.js')}}'></script>
<script src='{{asset('admin/js/dataTables.bootstrap4.min.js')}}'></script>
<script>
    $('#dataTable-1').DataTable(
        {
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "Все"]
            ]
        });
</script>
<script src="{{asset('admin/js/apps.js')}}"></script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('#showAction').modal('show');
    });
</script>
</body>
</html>
