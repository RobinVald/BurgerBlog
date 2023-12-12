@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="card mx-3 bg-base-100 shadow-xl h-full">
            @if($article->images->count() === 1)
                <figure><img class="bigimg" src="{{$article->image->path}}"></figure>
            @elseif($article->images->count() > 1)
                <div class="h-96 carousel carousel-vertical rounded-box">
                    @foreach($article->images as $image)
                        <div class="carousel-item h-full">
                            <img src="{{$image->path}}" />
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="card-body">
                <h1 class="card-title">{{ $article->title }}</h1>
                <p>{{ $article->body }}</p>
                <div class="stat">
                                <div class="stat-desc flex flex-wrap">
                                    @foreach($article->tags as $tag)
                                        <a href="{{route('public.tag', ['tag' => $tag])}}">
                                            <div class="badge badge-accent badge-outline mt-1 mr-1">{{$tag->name}}</div>
                                        </a>
                                    @endforeach
                                </div>
                <h2 class="card-title">{{ $article->price }}</h2>
            </div>
        </div>
    </div>

    <style>
        .bigimg{
            width: 35%;
        }
    </style>
@endsection
