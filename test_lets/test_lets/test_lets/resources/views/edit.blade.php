@extends('layouts.app')

@section('title','Editar')
@section('content')

<h1>Editar Produto - {{ $product->title }}({{ $product->id }}) </h1>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		<strong>Erros</strong>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{ action('ProductController@update',$product->id) }}" method="post" enctype="multipart/form-data">
	<label for="title">Título</label>
	<input class="form-control" type="text" name="title" value="{{ $product->title }}" required><br>

	<label for="description">Descrição</label>
	<input class="form-control" type="text" name="description" value="{{ $product->description }}" required><br>

	<label for="price">Preço</label>
	<input class="preco form-control" type="text" name="price" value="{{ $product->price }}" required><br>

	<label for="image">Imagem</label>
	<input class="form-control" type="file" name="image" value="{{ $product->image }}" required><br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input class="btn btn-primary" type="submit" name="submit" value="Salvar">

	<a href="{{ URL::previous() }}" class="btn btn-default">Voltar</a>

</form>
@stop()