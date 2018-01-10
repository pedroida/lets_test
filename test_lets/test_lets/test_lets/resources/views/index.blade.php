@extends('layouts.app')

@section('title','Início')
@section('content')


<div class="container">
	<div class="row">
		<h1>Lista dos Produtos</h1>

		
		<div class=" col-lg-12">
			<div class="table-responsive">
				<a href="{{ action('ProductController@register') }}" class="btn btn-small btn-success">Cadastrar</a>
				<table id="table-index" class="table table-striped table-bordered table-hover table-dark" >
					<thead >
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Título</th>
							<th scope="col">Descrição</th>
							<th scope="col">Valor</th>
							<th scope="col">Imagem</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($product as $value) { ?>
						<tr>
							<td><?php echo $value->id; ?></td>
							<td><?php echo $value->title; ?></td>
							<td><?php echo $value->description; ?></td>
							<td>{{  'R$ '.number_format($value->price, 2, ',', '.') }} </td>
							<td><img src="<?php echo $value->image; ?>" width="50px" height="50px"></td>
							<td><a href="{{ action('ProductController@edit',$value->id) }}"  class="glyphicon glyphicon-edit"></a></td>
							<td><a href="#"  class="glyphicon glyphicon-remove" onclick="apagar('{{ action('ProductController@delete', $value->id) }}');"></a></td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection()