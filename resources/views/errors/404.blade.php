@extends('layout.base')
@section('headlinks')
<!--script src="/js/your-custom-javascript.js"></script-->
@stop
@section('crumbtrail')
<a href="/"><li><i class="fa fa-home"></i> Dashboard</li></a>
@stop
@section('body')
    <body>
    @include('layout.nav')
    <div id="main">
        @include('layout.header')
        <h1>404</h1>
        <p>Page not found.</p>
    </div>
</body>
@stop