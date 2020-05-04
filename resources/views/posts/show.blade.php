@extends("layouts.app");

@section("content")
    <a class="btn btn-primary" href="/posts">Back</a>
    <h2>{{$post->title}}</h2>
    
    <div><p>{!!$post->body!!}</p></div>
    <hr>
    <small>Written on: {{$post->created_at}}  by {{$post->user["name"]}}</small>
    <hr>
    @if(!Auth::Guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>
            {!!Form::open(["action" => ["PostsController@destroy", $post->id], "method"=>"POST", "class" => "float-right"])!!} 
                {{Form::hidden("_method", "DELETE")}}
                {{Form::submit("Delete", ["class"=>"btn btn-danger"])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection