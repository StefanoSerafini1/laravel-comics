@extends('layout.main')

@section('contenuto')

   <main class="generalContainer">
        <section class="containerHeader">
            <img src="{{ asset('images/cover-home.jpg')}}" alt="">
        </section>
        <section class="comics">
            <div class="containerCard">
                <ul class="comicList">
                    @foreach ($comics as $comic)
                    <li class="lista">
                        <a href="{{ route('comic-detail', $comic['id']) }}">
                            <img src="{{ $comic['image']}}" alt="">
                            <h3>
                                {{ $comic['title']}}
                            </h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
   </main>

@endsection