@extends('layouts.app')

@section('content')

    @if($errors->any())

                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                            {{$error}}<br/>
                    @endforeach
                </div>

    @endif


    {!! Form::open(['method'=>'post','action'=>'PostsController@store','files'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('title','عنوان:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('body','توضیحات:') !!}
        {!! Form::text('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file','تصویر اصلی:') !!}
        {!! Form::file('file',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@endsection
{{--    <form method="post" action="/posts">--}}
{{--        @csrf--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب"><br>--}}
{{--        <textarea type="text" name="body" placeholder="توضیحات عنوان مطلب را بنویسید"> </textarea><br>--}}
{{--        <button type="submit" name="submit">ذخیره</button>--}}
{{--    </form>--}}

