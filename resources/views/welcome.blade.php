@extends('partials.layout')
@section('content')
<style>
    body{
        background-color: white;
    }

    .hero{
        background-image: 
        url("https://cdn.discordapp.com/attachments/915343471957655563/1183758654692937770/header.png?ex=65898028&is=65770b28&hm=41adabc17baf0edb8d06135734e04dfd1073df85158c72865e54d61c2e36ad2f&");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        padding: 200px;
    }   
</style>
<section>
<div class="hero">
</div>
</section>
    <div class="container mx-auto" style="padding-top: 20px;">
        {{$articles->links()}}
        <div class="flex flex-row flex-wrap">
            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card mx-3 bg-base-100 shadow-xl h-full">
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
                            <h1 class="card-title justify-center">{{ $article->title }}</h1>
                            <p class="justify-center">{{ $article->snippet }}</p>
                            <div class="stat">
                                <div class="stat-desc flex flex-wrap justify-center">
                                    @foreach($article->tags as $tag)
                                        <a href="{{route('public.tag', ['tag' => $tag])}}">
                                            <div class="badge badge-accent badge-outline mt-1 mr-1">{{$tag->name}}</div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="card-title justify-center">
                                    <h2 class="justify-center">Price: {{ $article->price }}</p>
                                </div>
                                <div class="flex flex-wrap justify-center">
                                <ul>
                                    @if ($article->vegan > 0)
                                        <p style="color: #66FF00">Vegan</p>
                                    @endif

                                    @if ($article->vegetarian > 0)
                                        <p style="color: #66FF00">Vegetarian</p>
                                    @endif

                                    @if ($article->gluten > 0)
                                        <p style="color: #66FF00">Gluten Free</p>
                                    @endif
                                </ul>
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
