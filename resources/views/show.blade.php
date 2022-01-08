@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="title_form">PROFIL</h2>
	    <div class="col-sm-offset-2 col-sm-8">
	    	<br>
			<div class="panel panel-info">	
				<div class="panel-heading">Fiche d'utilisateur</div>
				<div class="panel-body"> 
					<p>Nom : {{ $user->name }}</p>
					<p>Email : {{ $user->email }}</p>
					@if($user->admin == 1)
						Administrateur
					@endif
				</div>
				<div>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}
				</div>
			</div>
						
			<a href="javascript:history.back()" class="btn btn-info">
				<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
			</a>
		</div>
	</div>
@endsection