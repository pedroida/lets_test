@extends('layouts.app')

@section('title','Visualizar')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<div class="thumbnail">
				<img class="img-responsive" src="{{asset($product->image) }}" alt="{{$product->image}}">
				<div class="caption well">
					<h3><b>Título:</b> {{ $product->title }}</h3>
					<hr>
					<h3><b>Descrição:</b> {{ $product->description }}</h3>
					<span class="badge">{{  'R$ '.number_format($product->price, 2, ',', '.') }} </span>
				</div>
				<a class="btn btn-primary" href="{{ route('editar',$product->id) }}">Editar</a>

				<a href="{{ route('index') }}" class="btn btn-default">Voltar</a>
				
			</div>
		</div>
	</div>
</div>

@stop()