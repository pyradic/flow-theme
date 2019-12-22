<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @stack('pre_metadata')
    @include('anomaly.theme.flow::partials.metadata')
    @stack('pre_metadata')
</head>

<body>

<div id="app">

    @stack('app_start')

    @include('anomaly.theme.flow::partials.header')

    <div id="main">

        @include('anomaly.theme.flow::partials.sidebar')

        <div id="content">

            @include('anomaly.theme.flow::partials.actions')

            @yield('content')

        </div>

    </div>

    @include('anomaly.theme.flow::partials.footer')
    @stack('app_start')

</div>

@include('anomaly.theme.flow::partials.assets')
@include('anomaly.theme.flow::partials.messages')

{!!  assets()->script('public::assets/js/vue.js')  !!}
<script>
Vue.config.devtools = true
</script>
<?php
/** @var \Anomaly\Streams\Webpack\Webpack $webpack */
?>
@if($webpack->isServer())
    {!! $webpack->renderDevServerAssets() !!}
@else
    {!! $webpack->renderStyles() !!}
    {!! $webpack->renderScripts() !!}
@endif

{!! $webpack->renderProviders() !!}

{{--{!!  assets()->script('public::assets/js/anomaly__streams_platform.chunk.vendors.js')  !!}--}}
{{--{!!  assets()->script('public::assets/js/anomaly__streams_platform.js')  !!}--}}
{{--{!!  assets()->script('public::assets/js/anomaly__slug_field_type.js')  !!}--}}

<script>
(function () {

    var app = window.pyro.anomaly__streams_platform.app;

    app.bootstrap({
            providers: window.pyro.providers,
            config   : {},
            data     : {},
        })
        .then(app.boot)
        .then(function (app) {
            console.log('App Start');
            return app.start('#app');
        })
        .catch(app.error);
}());
</script>


</body>
</html>
