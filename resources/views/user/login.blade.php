@extends('index')
@section('content')

<h1 class="text-danger">Login your Account</h1>
{{Form::open(['route'=>'post.login', 'method'=>'login'])}}
<fieldset>
    <label for="email">
        {{Form::email('email')}}
    </label>
</fieldset>
<fieldset>
    <label for="password">
        {{Form::password('password')}}
    </label>
</fieldset>
<fieldset>
    {{Form::submit('submit',array('class'=>'btn btn-lg btn-primary'))}}
    <input type="submit" name="login" class="btn btn-lg btn-warning"/>
</fieldset>
{{Form::close()}}
@endsection