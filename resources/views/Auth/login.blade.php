@extends('layout.app')
@section('content')
     <form class="form" method="post" action="{{ route('authenticate')}}">
      @csrf
            <h2>Login</h2>
            <div class="input">
              <div class="inputBox">
                  <label for="uemail">Email</label>
                  <input type="email" id="uemail" name="email" placeholder="Email">
              </div>
                <div class="inputBox">
                    <label for="upass">Password</label>
                    <input type="password" id="upass" name="password" placeholder="Password">
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Sign In"> 
                </div>
            </div>
            <p class="forgot">Forgot Password? <a href="#">Click Here</a></p>
            <div class="social">
                <button><i class="fa fa-facebook" aria-hidden="true"></i><p>Signin with Facebook</p></button>
                <button><i class="fa fa-twitter" aria-hidden="true"></i><p>Signin with Twitter</p></button>
            </div>
          </form>
@endsection
