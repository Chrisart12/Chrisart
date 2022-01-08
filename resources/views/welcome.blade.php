@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')
    {{-- <div class="row backgroundimg">
        <div class="container">
            <div class="home_text">BIENVENUE CHEZ CHRIS ART</div>
            <div id="contact_us">
                <a href="{{ url('contact') }}"><button class="contact_us">NOUS CONTACTER</button></a>
            </div>
        </div>
    </div> --}}
    
<div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" id="slider1">
                <div class="carousel-caption">
                    <h3>Sous la pluie</h3>
                </div>
            </div>
            <div class="item" id="slider2">
                <div class="carousel-caption">
                    <h3>Fogot de bois</h3>
                </div>
            </div>
            <div class="item" id="slider3">
                <div class="carousel-caption">
                    <h3>Contraste</h3>
                </div>
            </div>
        </div>

      <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
 </div>
@endsection


