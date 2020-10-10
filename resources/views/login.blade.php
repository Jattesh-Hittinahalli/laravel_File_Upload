
@extends('layout')
@section('content')
<div class="footer">

<div style="width: 70%;
    margin: auto;
    ">
<h2 
>Login Page</h2>
<form action="/loginsubmit" method="POST">
@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name='Email' id="email" >
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='Password' id="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
