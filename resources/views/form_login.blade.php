@extends('layout.principal')
@section('conteudo')
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
	<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
    <li><a href="/auth/register">Register</a></li>
  @else
    <li>{{ Auth::user()->name }} </li>
    <li><a href="/auth/logout">Logout</a></li>
  @endif
</ul>
<form action="login" method="POST">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="for-group">
		<label>Email:</label>
		<input name="email" class="form-control" />
	</div>

	<div class="for-group">
		<label>Senha:</label>
		<input name="password" class="form-control" type="password" />
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Login</button>
</form>

@stop