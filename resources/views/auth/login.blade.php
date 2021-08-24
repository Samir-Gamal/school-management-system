<!DOCTYPE html>
<html lang="en">
@section('title')
    {{__('main.title')}}
@stop
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template"/>
    <meta name="author" content="potenzaglobalsolutions.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.head')
</head>

<body>
<div class="btn-group mb-1">
    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
        @if (App::getLocale() == 'ar')
            {{ LaravelLocalization::getCurrentLocaleName() }}
            <img src="{{ URL::asset('assets/images/flags/SA.png') }}" alt="">
        @else
            {{ LaravelLocalization::getCurrentLocaleName() }}
            <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
        @endif
    </button>
    <div class="dropdown-menu">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        @endforeach
    </div>
</div>
<div class="wrapper">

    <!--=================================
preloader -->

    <div id="pre-loader">
        <img src="images/pre-loader/loader-01.svg" alt="">
    </div>

    <!--=================================
preloader -->

    <!--=================================
login-->

    <section class="height-100vh d-flex align-items-center page-section-ptb login"
             style="background-image: url(assets/images/login-background.jpg); bgcolor:#800000;">
        <div class="container">
            <div class="row justify-content-center no-gutters vertical-align">
                <div class="col-lg-4 col-md-6 login-fancy-bg bg"
                     style="background-image: url(images/login-inner-bg.jpg);">
                    <div class="login-fancy">
                        <div class="card-body">
                            <div class="col-xl-12 mb-10">
                                <h3 class="text-white mb-12">{{__('main.title')}}</h3>
                                <p class="mb-20 m-4 text-white">{{__('main.description')}}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-xl-12 mb-30">
                                <h3 class="text-white mb-12">{{__('main.test_account')}}</h3>
                                <div class="table-responsive table-dark">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('validation.attributes.email')}}</th>
                                            <th>{{__('validation.attributes.password')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>admin@admin.com</td>
                                            <td>123456789</td>

                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=" " style="text-align: center;height: 70px">
                            {{--                            <div class="col-xl-12 mb-30">--}}
                            <a href="https://github.com/fh32000/school-management-system" target="_blank"
                               rel="noreferrer">
                                <svg viewBox="-150 0 300 300">
                                    <path class="tw-fill-current" fill-rule="nonzero"
                                          d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z">
                                    </path>
                                </svg>
                            </a>
                            {{--                            </div>--}}
                        </div>
                        <ul class="list-unstyled  pos-bot pb-30">
                            <li class="list-inline-item"><a class="text-white"
                                                            href="#">{{__('main.terms_of_use')}}</a></li>
                            <li class="list-inline-item"><a class="text-white"
                                                            href="#">{{__('main.privacy_policy')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bg-white">
                    <div class="login-fancy pb-40 clearfix">
                        <h3 class="mb-30">{{__('auth.login')}}</h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="section-field mb-20">
                                <label class="mb-10" for="name">{{__('validation.attributes.email')}}*</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                            <div class="section-field mb-20">
                                <label class="mb-10" for="Password">{{__('validation.attributes.password')}}
                                    * </label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>
                            <div class="section-field">
                                <div class="remember-checkbox mb-30">
                                    <input type="checkbox" class="form-control" name="two" id="two"/>
                                    <label for="two">{{__('validation.attributes.remember_me')}}</label>
                                    <a href="#" class="float-right">{{__('main.forgot_password')}}</a>
                                </div>
                            </div>
                            <button class="button"><span>{{__('main.enter')}}</span><i class="fa fa-check"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
login-->

</div>
<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

</script>

<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
