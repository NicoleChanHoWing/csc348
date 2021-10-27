
@include('commons.head')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">


<div class="wrapper fadeInDown">
  <div id="formContent">

  <div class="fadeIn first">
      <h1>Login</h1>
    </div>

    <form action="{{url('/login')}}" method="post">
    @csrf

      <input type="text" id="name" class="fadeIn second" name="name" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">

      <div>
         <p>{{$errormessage}}</p>
      </div>
    </form>

  </div>
</div>
