@extends('layouts.app')

@section('title')
    Artiste
@endsection

@section('content')
<div class="container section">
	<div class="row">
		<h2>L'ARTISTE</h2>
		<div class="col-md-offset-2 {{-- col-sm-offset-3 --}} {{-- col-xs-offset-1 --}} col-md-3 "><img id="photo" src=".././public/images/photo.jpg"></div>
		<div class="col-md-offset-1 col-sm-offset-2 col-xs-offset-1 col-md-4 col-sm-8 col-xs-10" >
			<p>
				Passionné de peinture depuis son enfance, ISSIFOU Issa, alias Chris, est un artiste peintre autodidacte dont les œuvres n’ont de cesse de nous émerveiller et de sublimer notre regard, des toiles riches en couleurs savamment appliquées pour nous faire rêver.<br><br>
				Artiste aux multiples talents, ses créations sont tout aussi singulières qu’axées sur la diversité : portraits, natures mortes, nus, scènes diverses et variées.<br><br>
				Très technique, dans sa quête permanente de nous apporter encore et encore plus de plaisir, Chris ne cesse de peaufiner son coup d’œil afin de capturer des instants, des positions et des mouvements, le tout habilement restitué sur toile par des couleurs magnifiques, une perspective remarquable et une composition ingénieuse.   
			</p>
		</div>
	</div>
</div>
@endsection