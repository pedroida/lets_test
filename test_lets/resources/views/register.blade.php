@extends('layouts.app')

@section('title','Cadastrar')
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
					Cadastrar Produto
				</div>

				<div class="panel-body well">
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
							<label for="price">Preço (R$)</label>
							<input class="preco form-control" type="text" name="price" value="{{ old('price')}}" required ><br>
						</div>
						<div class="form-group">
							<label for="image">Imagem</label>
							<input class="form-control" type="file" class="form-control-file" name="image" required><br>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input type="submit" name="submit" class="btn btn-success" value="Cadastrar">

						<a href="{{ route('index') }}" class="btn btn-default">Voltar</a>
					</form>

				</div>

			</div>
		</div>
	</div>
</div>
@stop()