@extends('template.template')
@section('content')
<h1 id='h1'>Create New Account</h1>

<form class="form-horizontal" name="register" method="post" action="register">
    
  <div class="control-group">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input type="text" name="name" placeholder="name">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="surname">Surname</label>
    <div class="controls">
      <input type="text" name="surname" placeholder="surname">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="dob">Dob</label>
    <div class="controls">
      <input type="text" name="dob" placeholder="dob">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" name="email" placeholder="email">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="login">Login</label>
    <div class="controls">
      <input type="text" name="login" placeholder="login">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" name="password" placeholder="password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Register</button>
    </div>
  </div>
    <input type='hidden' value="<?php echo csrf_token(); ?>" name="_token">
</form>
 <img src='images/arm_map.jpg' alt="arm_map">
@stop