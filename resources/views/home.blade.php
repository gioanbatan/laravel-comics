@extends('layouts.app')

@section('content')
    <section class="header-main">
        <div class="container">
            <h2>CURRENT SERIES</h2>
        </div>
    </section>

    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($comics as $comic)
                        <p>{{ $comic['title'] }}</p>
                    @endforeach
                    {{-- <ComicsCard v-for="(comic, index) in comicsDC" :key="index" :comicSeries="comic.series"
                        :comicImg="comic.thumb" /> --}}
                </div>
            </div>
        </div>

        <button class="btn-std">load more</button>
    </section>
@endsection
