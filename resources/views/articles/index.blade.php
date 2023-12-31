@extends('partials.layout')

@section('content')
    <div class="container mx-auto addbtn">
        <a class="btn btn-primary" href="{{route('articles.create')}}">Add Burger</a>
        <a class="btn btn-error" href="{{route('articles.deleted')}}">Deleted Burgers</a>

        {{$articles->links()}}
        <table class="table onsale">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                            <div class="join">
                                <a href="{{route('articles.edit', ['article' => $article])}}" class="btn btn-warning join-item">Edit</a>
                                <input type="submit" class="btn btn-error join-item" value="Delete" form="delete-{{$article->id}}">
                            </div>
                            <form id="delete-{{$article->id}}" action="{{route('articles.destroy', ['article' => $article])}}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
