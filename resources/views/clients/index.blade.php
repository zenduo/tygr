@extends('_layout.base')
@section('headlinks')
    <script src="/js/list.min.js"></script>
    <script src="/js/sortable.min.js"></script>
@stop
@section('crumbtrail')
<a href="/"><li><i class="fa fa-home"></i> Home</li></a>
<a href=""><li class="current">Clients</li></a>
@stop
@section('body')
    <body>
    @include('_layout.nav')
    <div id="main">
        @include('_layout.header')
        <h1>All clients</h1>
        <div id="clients">
        <input class="filter search" placeholder="Search" autofocus/>
        <a class="action" href="/clients/create"><i class="fa fa-plus-circle"></i> New client</a>

        <table class="full" data-sortable>
            <thead>
                <tr class="head">
                    <th>Name <i class="fa fa-sort"></i></th>
                    <th>Stub <i class="fa fa-sort"></i></th>
                    <th>Type <i class="fa fa-sort"></i></th>
                    <th>Projects <i class="fa fa-sort"></i></th>
                    <th>Reviewarea <i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tbody class="list">
            @foreach($clients as $client)
            <tr onclick="document.location='/clients/show/{{{ $client->stub }}}';" style="cursor:pointer">
                <td class="name">{{{ $client->name }}}</td>
                <td class="stub">{{{ $client->stub }}}</td>
                <td>{{{ $client->type }}}</td>
                <td class="project_count">{{{ count($client->projects) }}}</td>
                <td><a href="http://reviewarea.co.uk/Secure/{{{ $client->stub }}}" target="_blank">reviewarea.co.uk/Secure/{{{ $client->stub }}}</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <script>
            var options = { valueNames: ['name'] };
            var userList = new List('clients', options);
        </script>
    </div>
</body>
@stop
