@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="title_form">AJOUTER UN UTILISATEUR</h2>
		<div class="col-sm-offset-2 col-sm-8">
			<br>
			<div class="panel panel-info">	
				<div class="panel-heading">Création d'un utilisateur</div>
				<div class="panel-body"> 
					<div class="col-sm-12">
						{!! Form::open(['route' => 'user.store']) !!}	
						<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
							{!! Form::label("name", "Nom*", ["class" => "control-label"]) !!}
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
							{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
							{!! Form::label("email", "Email*", ["class" => "control-label"]) !!}
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
							{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
							{!! Form::label("password", "Mot de passe*", ["class" => "control-label"]) !!}
							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
							{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group">
							{!! Form::label("password_confirmation", "Confirmation mot de passe*", ["class" => "control-label"]) !!}
							{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									{!! Form::checkbox('admin', 1, null) !!} Administrateur
								</label>
							</div>
						</div>
						{!! Form::submit('ENVOYER', ['class' => 'btn btn-info btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<a href="javascript:history.back()" class="btn btn-info">
				<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
			</a>
		</div>
	</div>
@endsection