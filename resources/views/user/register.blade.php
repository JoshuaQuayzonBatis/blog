@extends('index')
@section('content')

<div class="col">
    @foreach($posts as $post)
        <table class="table table-striped">
            <thead>
            <th class="text-capitalize">Post ID</th>
            <th class="text-capitalize">Post Username</th>
            <th class="text-capitalize">Post Password</th>
            </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->username}}</td>
            <td>{{$post->password}}</td>
        </tr>
    @endforeach
</div>
@endsection