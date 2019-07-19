@extends('layout')

@section('title', 'Blade Template Engine')

@section('sidebar')
    @parent
    <br/>This is child layout
@endsection

@section('content')
    This is content
@endsection

@component('alert')
    @slot('title')
        Header
    @endslot
    
    <strong>Hello</strong>
@endcomponent