@extends('template.template')
@section('content')
<h1 id='h1'>Welcom to Social.am</h1>
<form class="form-horizontal" name="login" method="post" action='login'>
  <div class="control-group">
    <label class="control-label" for="login">Login</label>
    <div class="controls">
      <input type="text" name="login" placeholder="Login">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Log In</button>
    </div>
  </div>
    <input type='hidden' value="<?php echo csrf_token(); ?>" name="_token">
</form>

@stop