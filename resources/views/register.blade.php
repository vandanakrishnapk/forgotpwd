@extends('index')
@section('content')
<form action="{{ route('register') }}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control ml-5" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" style="width:250px">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control ml-5" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"  style="width:250px">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control ml-5" name="password" id="exampleInputPassword1"  style="width:250px">
  </div>
  
  <input type="submit" value="submit">
</form>
@endsection