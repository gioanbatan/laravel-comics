@extends('layouts.app')

@section('content')
    <section class="header-main">
        <div class="container">
            <h2>CURRENT SERIES</h2>
        </div>
    </section>

    <section class="main-container">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    <div class="col">
                        @include('partials.comicCard')
                    </div>
                @endforeach
                {{-- <ComicsCard v-for="(comic, index) in comicsDC" :key="index" :comicSeries="comic.series"
                        :comicImg="comic.thumb" /> --}}
            </div>
        </div>

        <button class="btn-std">load more</button>
    </section>
@endsection
