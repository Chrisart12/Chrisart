@extends('layouts.app')

@section('title')
	Modifier votre profil
@endsection
@section('content')
	<div class="container">
			<h2 class="title_form"> MODIFIER SON PROFIL</h2>
	    <div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-info">	
				<div class="panel-heading">Modifier ses informations</div>
				<div class="panel-body"> 
					<div >
						{!! Form::model($user, ['route' => ['profil.update', $user->id], 'method' => 'put']) !!}
						<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
						  	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
						  	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						  	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						  	{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
						{{-- <div class="form-group">
							<div class="checkbox">
								<label>
									{!! Form::checkbox('admin', 1, null) !!}Administrateur
								</label>
							</div>
						</div> --}}
							{!! Form::submit('Envoyer', ['class' => 'btn btn-info btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<a href="javascript:history.back()" class="btn btn-primary">
				<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
			</a>
		</div>
	</div>
@endsection