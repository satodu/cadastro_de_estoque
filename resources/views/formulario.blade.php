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
<form action="adiciona" method="POST">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="for-group">
		<label>Nome:</label>
		<input name="nome" class="form-control" />
	</div>

	<div class="for-group">
		<label>Valor:</label>
		<input name="valor" class="form-control" />
	</div>

	<div class="for-group">
		<label>Quantidade:</label>
		<input name="quantidade" class="form-control" />
	</div>

	<div class="for-group">
		<label>Tamanho:</label>
		<input name="tamanho" class="form-control" />
	</div>

	<div class="for-group">
		<label>Descrição:</label>
		<input name="descricao" class="form-control" />
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Adicionar</button>
</form>

@stop