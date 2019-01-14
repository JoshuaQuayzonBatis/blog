@extends('view.index')

@section)('content')
    {{Form::open(['route'=>'post.find', 'method'=>'post'])}}
    <input type="search" placeholder="Search Title" name="search"/>
    {{Form::submit('search')}}
    {{Form::close()}}
@endsection


























































