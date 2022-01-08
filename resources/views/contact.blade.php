@extends('layouts.app')

@section('title')
   Contact
@endsection

@section('content')
	<div class="container ">
	    <h2 class="title_form">NOUS CONTACTER</h2>
	    <div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-info">
				<div class="panel-heading">Veuillez remplir la fiche de contact</div>
				<div class="panel-body"> 
					{!! Form::open(['url' => 'contact']) !!}
						<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
							{!! Form::label("nom", "Nom*", ['class' => 'control-label']) !!}
							{{ Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) }}
							{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
							{!! Form::label("email", "Email*", ['class' => 'control-label']) !!}
							{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
							{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('tel') ? 'has-error' : '' !!}">
							{!! Form::label("tel", "Tel", ['class' => 'control-label']) !!}
							{{ Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Tel']) }}
							{!! $errors->first('tel', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('sujet') ? 'has-error' : '' !!}">
							{!! Form::label("sujet", "Sujet*", ['class' => 'control-label']) !!}
							{{ Form::text('sujet', null, ['class' => 'form-control', 'placeholder' => 'Sujet']) }}
							{!! $errors->first('sujet', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
							{{ Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) }}
							{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
						</div>
						{!! Form::submit('ENVOYER', ['class' => 'btn btn-info btn-block']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection