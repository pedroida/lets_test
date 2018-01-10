@extends('layouts.app')

@section('title','Registrar')
@section('content')

<h1>Cadastrar Produto</h1>

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

<form action="{{ action('ProductController@save') }}" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="title">Título</label>
		<input class="form-control" type="text" name="title" value="{{ old('title')}}" required><br>
	</div>
	<div class="form-group">
		<label for="description">Descrição</label>
		<input class="form-control" type="text" name="description" value="{{ old('description')}}" required><br>
	</div>
	<div class="form-group">
		<label for="price">Preço</label>
		<input class="preco form-control" type="text" name="price" value="{{ old('price')}}" required ><br>
	</div>
	<div class="form-group">
		<label for="image">Imagem</label>
		<input class="form-control" type="file" class="form-control-file" name="image" required><br>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="submit" name="submit" class="btn btn-success" value="Cadastrar">

	<a href="{{ URL::previous() }}" class="btn btn-default">Voltar</a>

</div>
</form>

@stop()