@extends("layouts.app");

@section("content")
    <h2>Posts</h2>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body bg-light">
                <h3>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h3>
                <p>{!!$post->body!!}</p>
                
            <small>Written on: {{$post->created_at}} by {{$post->user["name"]}}</small>
            </div>
            
        @endforeach
    @else   
        <p>No posts</p>
    @endif
@endsection