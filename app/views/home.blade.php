@extends('template.template')
@section('content')
<a href="login" id='logout' class="btn btn-large btn-primary disabled">Logout</a>

    <h1> Welcom to main page</h1>
    @if(isset($user))
  
    <span>
        <img src='images/anonymous.jpg' alt='anon'><h2 id='h2'>{{$user->name}}&nbsp;&nbsp;{{$user->surname}}</h2>
    </span>
    
    @endif
    <p>
  <a href='#'><button class="btn btn-primary" type="button">Send a Message</button></a>
  <a href='#'><button class="btn btn-primary" type="button">Inbox Messages</button></a>
</p>
     @stop