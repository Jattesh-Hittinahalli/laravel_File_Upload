
@extends('layout')
@section('content')



<div  style="width: 70%;
    margin: auto;
    ">
<h2>User Name List</h2>
<ul>
@foreach($user as $u)
<li>  <span> {{$u->name}} </li>
@endforeach


</ul>
</div>
@endsection