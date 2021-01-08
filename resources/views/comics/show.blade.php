@extends('layout.main')


@section('contenuto')
    <main class="hero">
        <section class="section-hero comic-section" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src="{{ $comic['image-cover'] }}" alt={{ $comic['title'] }}>
            </div>
        </section>


        <section class="comic-section">
            <div class="container"> 
                
               <h1 class="title">{{ $comic['title'] }}</h1>
               <div class="price">{{ $comic['price'] }}</div>
               
            </div>

        </section>
        
    </main>
@endsection