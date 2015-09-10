@extends('template.template')
@section('content')
<form class="form-horizontal" name="login" method="post" action='#'>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Login</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Login">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Log In</button>
    </div>
  </div>
</form>
@stop