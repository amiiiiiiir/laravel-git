@extends('layouts.app')

@section('content')
    <h3>ویرایش فرم</h3>
    @can('update',$post)
    {!! Form::model($post,['method'=>'patch','action'=>['PostsController@update',$post->id]]) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان:') !!}
        {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','توضیحات:') !!}
        {!! Form::text('body',$post->body,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('بروزرسانی',['class'=>'btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::model($post,['method'=>'delete','action'=>['PostsController@destroy',$post->id]]) !!}

    <div class="form-group">
        {!! Form::submit('حذف',['class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}

    @endcan
{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="PATCH">--}}
{{--        <label>--}}
{{--            <input type="text" name="title" value="{{$post->title}}">--}}
{{--        </label><br>--}}
{{--        <label>--}}
{{--            <input type="text" name="body" value="{{$post->body}}">--}}
{{--        </label> <br>--}}
{{--        <button type="submit" name="submit">بروزرسانی</button>--}}
{{--    </form>--}}

{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}

{{--        <button type="submit" name="submit">حذف</button>--}}
{{--    </form>--}}
@endsection
