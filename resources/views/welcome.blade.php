@extends('partials.layout')
@section('content')
<section style="height: 500px;">
<div class="hero">
</div>
</section>
<section class="storebody">
    <div class="bodytitle">
        <h1>Our Products:</h1>
    </div>
</section>
<section class="storebody">
    <div class="container mx-auto burgerposts">
        {{$articles->links()}}
        <div class="flex flex-row flex-wrap">
            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card mx-3 bg-base-100 shadow-xl h-full onepost">
                        @if($article->images->count() === 1)
                            <figure><img src="{{$article->image->path}}"/></figure>
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
                            <h1 class="card-title justify-center burgernames">{{ $article->title }}</h1>
                            <p class="justify-center">{{ $article->snippet }}</p>
                                <div class="stat">
                                    <div class="stat-desc flex flex-wrap justify-center">
                                        @foreach($article->tags as $tag)
                                            <a href="{{route('public.tag', ['tag' => $tag])}}">
                                                <div class="badge badge-accent badge-outline mt-1 mr-1">{{$tag->name}}</div>
                                            </a>
                                        @endforeach
                                    </div>

                                    <div class="flex justify-center">
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

                                    <div class="card-title justify-center">
                                        <h2 class="justify-center">Price: {{ $article->price }}</p>
                                    </div>
                                </div>
                            <div class="card-actions justify-center">
                                    <a href="{{route('public.article', ['article' => $article])}}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
</section>
