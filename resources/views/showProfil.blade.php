@extends('layouts.app')

@section('title')
	Profil
@endsection

@section('content')
	<div class="container">
			<h2 class="title_form">PROFIL</h2>
			<div style="text-align: center">
				<img src="{{url('../public/uploads/avatars/default.jpg')}}" style="width:150px; height:150px; border-radius:50%; border: 1px solid white;">
			</div>
			<form enctype="multipar/form-data" action="{{ route('profil.store')}}" method="POST">
				<label>Télécharger une image de profil</label>
				<input type="file" name="avatar">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="btn btn-info">
				
			</form>
			@if(session()->has('ok'))
				<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
			@endif

	    <div class="col-sm-offset-2 col-sm-8">
			
			<div class="panel panel-info">	
				<div class="panel-heading">Mes informations</div>
				<div class="panel-body"> 
					<p>Nom : {{ $user->name }}</p>
					<p>Email : {{ $user->email }}</p>
					@if($user->admin == 1)
						Administrateur
					@endif
				</div>
				<div>{!! link_to_route('profil.edit', 'MODIFIER', [$user->id], ['class' => 'btn btn-info btn-block']) !!}
				</div>
			</div>	
			{!! Form::open(['method' => 'DELETE', 'route' => ['profil.destroy', $user->id]]) !!}
										{!! Form::submit('Supprimer son profil', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer votre compte ?\')']) !!}
									{!! Form::close() !!}			
			 
		</div>

		</div>
	</div>

@endsection