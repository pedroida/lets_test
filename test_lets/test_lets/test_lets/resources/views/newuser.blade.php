@extends('main')

@section('title','Registro')

@section('content')

<h1>Registrar Usuário</h1>

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

<form action="{{ action('UserController@store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="usuario">Usuário: </label>
		<input class="form-control" type="text" name="usuario" required><br>
	</div>
	<div class="form-group">
		<label for="email">Email: </label>
		<input class="form-control" type="email" name="email" required><br>
	</div>
	<div class="form-group">
		<label for="password">Senha: </label>
		<input class="form-control" type="password" name="password" required><br>
	</div>

	<input type="submit" name="submit" class="btn btn-success" value="Registrar">
</div>
</form>

@stop()