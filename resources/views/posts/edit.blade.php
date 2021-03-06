@extends("layouts.app");

@section("content")
    <h2>Edit Post</h2>
    {!! Form::open(["action"=>["PostsController@update",$post->id], "method"=>"POST"]) !!}
        <div class="form-group">
            {{Form::label("title", "Title")}}
            {{Form::text("title", $post->title, ["class"=>"form-control", "placeholder"=>"Title"])}}
        </div>
        <div class="form-group">
            {{Form::label("body", "Body")}}
            {{Form::textarea("body", $post->body, ["id"=>"editor1","class"=>"form-control", "placeholder"=>"Body"])}}
        </div>
        {{-- Laravel only allows GET and POST so we must spoof a PUT request--}}
        {{Form::hidden("_method", "PUT")}}
        {{Form::submit("Submit", ["class"=>"btn btn-primary"])}}
    {!! Form::close() !!}
@endsection