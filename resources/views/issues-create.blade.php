@extends('layout.base')
@section('crumbtrail')
    <a href="/"><li><i class="fa fa-home"></i> Home</li></a>
    <a href="/clients/{{{ $client->stub }}}"><li>{{{ $client->name }}}</li></a>
    <a href="/clients/{{{ $client->stub }}}/projects/{{{ $project->stub }}}"><li>{{{ $project->name }}}</li></a>
    <a href="/clients/{{{ $client->stub }}}/projects/{{{ $project->stub }}}/issues"><li>Issues</li></a>
    <li class="current">Create</li>
@stop
@section('body')
    <body>
    @include('layout.nav')
    <div id="main">
        @include('layout.header')
        <h1>Log an issue</h1>
        <form action="" method="POST" accept-charset="UTF-8">

            <label>Description</label>
            <textarea name="description" class="large" placeholder="Please be as specific as you can, including details on how to reproduce the issue, browser (IE/Chrome) and operating system."></textarea>

            <br/><button type="submit"><i class="fa fa-arrow-circle-right"></i> Save issue</button>
        </form>

    </div>
    </body>
@stop