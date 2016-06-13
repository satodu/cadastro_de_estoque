@extends('layout.principal')

@section('conteudo')
		<h1>Listagem de produtos com Laravel</h1>
		<table class="table table-striped table-bordered table-hover">
			@foreach ($produtos as $p)
				<tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
					<td> {{$p->nome}} </td>
					<td> {{$p->valor}} </td>
					<td> {{$p->descricao}} </td>
					<td> {{$p->quantidade}} </td>
					<td> {{$p->tamanho}} </td>
					<td><a href="produtos/mostra/{{$p->id}} "><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
					<td><a href="produtos/remove/{{$p->id}} "><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</table>
		@if(old('nome'))
		<div class="alert alert-sucess">
		Produto {{old('nome')}} Adicionado com Sucesso!!
		</div>
		@endif
	</div>
@stop