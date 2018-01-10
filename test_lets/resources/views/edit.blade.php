@extends('layouts.app')

@section('title','Editar')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="panel panel-danger">
				@else
				<div class="panel panel-success">
				@endif
				<div class="panel-heading">
					Editar {{ str_limit($product->title,20) }}({{ $product->id }})
				</div>

				<div class="panel-body">
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

						<label for="price">Preço (R$)</label>
						<input class="preco form-control" type="text" name="price" value="{{ $product->price }}" required><br>

						<label for="image">Imagem</label>
						<input class="form-control" type="file" name="image" value="{{ $product->image }}" required><br>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input class="btn btn-primary" type="submit" name="submit" value="Salvar">

						<a href="{{ route('index') }}" class="btn btn-default">Voltar</a>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop()