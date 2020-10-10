<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>
<div class="header">
@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="list">UserList</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="/">Login <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="create">Create Account</a>
      <a class="nav-link" href="#">Logout</a>
      
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
@show
</div>

<div class="Content">
@section('content')
<h2>content part</h2>
@show

</div>
@section('footer')
<div class="footer">

<div style="color: aliceblue;
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #000;">
<h2 
    


>footer part</h2>
</div>
@show
    
</body>
</html>