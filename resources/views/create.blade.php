
@extends('layout')
@section('content')

<form action="/createsubmit" method="POST">
@csrf

<div style="width: 70%;
    margin: auto;
    ">
    <h2>Create Account </h2>

<div class="form-group">
    <label for="Email">Name</label>
    <input type="text" class="form-control" name='Name' id="name" >
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name='Email' id="exampleInputEmail1" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='Password' id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection