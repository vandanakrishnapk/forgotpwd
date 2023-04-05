@extends('index')
@section('content')
<form action="{{ route('login') }}" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <input type="submit" value="submit">
   
  </div>


</form>
@endsection