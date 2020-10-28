@extends('layouts.app')
@section('content')
    <h1>@lang('message.welcome',['name'=>'امیر'])</h1>
    <h3>{{trans_choice('message.cars',25,['value'=>1000])}}</h3>

@endsection
