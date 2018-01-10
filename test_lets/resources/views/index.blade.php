@extends('layouts.app')

@section('title','Início')
@section('content')

<div class="container">
	<div class="row ">
		<div class=" col-md-12 mx-auto">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Lista de Produtos
				</div>
				@isset($message)
					<div class="alert alert-warning">
						<ul>
							<strong>Ops!</strong>
							
							<li>{{ $message }}</li>
							
						</ul>
					</div>
				@endisset
				<div class="panel-body">
					<table id="table-index" class="table table-striped table-bordered table-hover">
						<thead >
							<tr>
								<th width="35vw">ID</th>
								<th>Título</th>
								<!-- <th>Descrição</th> -->
								<th>Valor</th>
								<th>Imagem</th>
								<th width="60vw">Editar</th>
								<th width="65vw">Excluir</th>
							</tr>
						</thead>
						<tbody>
							@foreach($product as $p)
							<tr>
								<th><p>{{ $p->id }}</p></th>
								<td><a href="{{ route('ver',$p->id) }}">{{ str_limit($p->title,20) }}</a></td>
								<!-- <td><p>{{ str_limit($p->description,20) }}</p></td> -->
								<td>{{  'R$ '.number_format($p->price, 2, ',', '.') }} </td>
								<td><img src="{{ $p->image }}" width="40em" height="40em"></td>
								<td><a href="{{ action('ProductController@edit',$p->id) }}"  class="glyphicon glyphicon-edit"></a></td>
								<td><a href="#"  class="glyphicon glyphicon-remove" onclick="apagar('{{ action('ProductController@delete', $p->id) }}');"></a></td>
							</tr>

							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@stop()

