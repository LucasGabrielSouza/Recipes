@extends('Main')

@section('Content')
   

{{-- Banners --}}
<div id="banners" class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
        <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
        <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
        <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
      </div>

      <div id="deslogo">
            <h1 class="center">DESTAQUES</h1>
        </div>

<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <div id="card" class="card">
                <div id="card-image" class="card-image">
                    <img src="https://images.pexels.com/photos/1600711/pexels-photo-1600711.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    <span class="card-title">Sanduice Natural</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a class="btn pink darken-1" href="#">Read</a>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
                <div id="card" class="card">
                    <div id="card-image" class="card-image">
                        <img src="https://images.pexels.com/photos/1600711/pexels-photo-1600711.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        <span class="card-title">Sanduice Natural</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a class="btn pink darken-1" href="#">Read</a>
                    </div>
                </div>
            </div>


            <div class="col s12 m4">
                    <div id="card" class="card">
                        <div id="card-image" class="card-image">
                            <img src="https://images.pexels.com/photos/1600711/pexels-photo-1600711.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                            <span class="card-title">Sanduice Natural</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn pink darken-1" href="#">Read</a>
                        </div>
                    </div>
                </div>
    </div>
</div>


{{-- Receitas --}}
    
                    
<section   id='cards'>
    <div class="row">
        <div id="cards-content" class="col m6 s12 l4">
               <h2 class="header">Salgados</h2>
        @foreach ($salgados as $s)        
            <div id="cardzin" class="card horizontal">
                <div id="cardzin-image" class="card-image">
                    <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
                </div>
            </div>
        @endforeach
        </div>


    <div id="cards-content" class="col s12 m6 l4">
        <h2 class="header">sobremesas</h2>
    @foreach ($sobremesas as $s)
 
        <div class="card horizontal">
            <div class="card-image">
                <img src="https://lorempixel.com/100/190/nature/6">
            </div>
            <div class="card-stacked">
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
            </div>
        </div>
    @endforeach
</div>


</div>
</section>
         

<section class="container" id="sugestions">
    <div class="row">
        <div class="col s12 m6 l6">
            <h3>Any suggestions??</h3>
        <form action="/send" method="POST">
                <div class="input-field">
                    <input name="name" id="sname" type="text" placeholder="Name">
                    <textarea name="message" id="textarea1 icon_prefix2" class="materialize-textarea" placeholder="Message"></textarea>
                    <input name="email" type="text" placeholder="E-mail">
                    <button class="btn waves-effect waves-light purple accent-3 right" type="submit">Submit
                    <i class="material-icons right">send</i>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </button>
                </div>
            </form>            
        </div>
        <div id="myrec" class="col s12 m6 l6">
            <h1>#MY</h1>
            <h1>RECIPES</h1> 
        </div>
    </div>
</section>
        
      
@endsection