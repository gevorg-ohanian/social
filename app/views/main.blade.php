@extends('template.template')
@section('content')
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
    @stop