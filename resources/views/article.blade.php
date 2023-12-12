@extends('partials.layout')
@section('content')
<section class="fullbody">
    <div class="container mx-auto">
        <div class="card mx-3 bg-base-100 shadow-xl h-full fullbody">
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
                <div class="stat">
                <h1 class="card-title burgernames">{{ $article->title }}</h1>
                <p>{{ $article->body }}</p>
                                <div class="stat-desc flex flex-wrap">
                                    @foreach($article->tags as $tag)
                                        <a href="{{route('public.tag', ['tag' => $tag])}}">
                                            <div class="badge badge-accent badge-outline mt-1 mr-1">{{$tag->name}}</div>
                                        </a>
                                    @endforeach
                                </div>

                                <div class="flex flex-wrap justify-start">
                                <ul>
                                    @if ($article->vegan > 0)
                                        <p style="color: #00AB66">Vegan</p>
                                    @endif

                                    @if ($article->vegetarian > 0)
                                        <p style="color: #00AB66">Vegetarian</p>
                                    @endif

                                    @if ($article->gluten > 0)
                                        <p style="color: #00AB66">Gluten Free</p>
                                    @endif
                                </ul>
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
    </section>
