@extends('admin.layouts.main')

@section('title','Crear Perfil')

@section('content')

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="card-header" style="color: gray;">
        	<i class="fa fa-pencil-square-o fa-fw"></i> Nuevo Perfil
		</div>

		<div class="container">

		 	{!! Form::open(['route' => 'perfils.store', 'method' => 'POST']) !!}

			<div class="form-group">
				{!! Form::label('nombre', 'Nombre') !!}
				{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('abreviatura', 'Abreviatura') !!}
				{!! Form::text('abreviatura', null, ['class' => 'form-control', 'placeholder' => 'Abreviatura', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('descripcion', 'Descripcion') !!}
				{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection


