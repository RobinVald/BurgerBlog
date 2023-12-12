@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Burger Name</span>

                        </label>
                        <input name="title" type="text" value="{{$article->title}}" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror" />
                        @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>

                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Discription</span>
                        </label>
                        <textarea name="body" class="textarea textarea-bordered @error('title') textarea-error @enderror" placeholder="Content here">{{$article->body}}</textarea>
                        @error('body')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Burger Name</span>

                        </label>
                        <input name="price" type="text" value="{{$article->price}}" placeholder="Article Price" class="input input-bordered w-full @error('price') input-error @enderror" />
                        @error('price')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>

                        </label>
                        @enderror
                    <input type="submit" value="Update" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection
