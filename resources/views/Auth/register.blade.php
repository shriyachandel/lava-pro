@extends('layout.app')
@section('register-content')
        <form class="form" method="post" action="">
            <h2>Register</h2>
            <div class="input">
                <div class="inputBox">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="name" @error('name')class="is-invalid" @enderror placeholder="Username">
                    @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="inputBox">
                  <label for="uemail">Email</label>
                  <input type="email" id="uemail" name="email" @error('email')class="is-invalid" @enderror placeholder="Email">
                  @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
              </div>
                <div class="inputBox">
                    <label for="upass">Password</label>
                    <input type="password" id="upass" name="password" @error('password')class="is-invalid" @enderror placeholder="Password">
                    @error('password')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="inputBox">
                  <label for="cpass">Confirm Password</label>
                  <input type="password" id="cpass" name="password_confirmation" @error('password_confirmation') class="is-invalid" @enderror placeholder="Confirm Password">
                  @error('password_confirmation')
                  <p class="invalid-feedback">{{ $message }}</p>
                @enderror
              </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Sign Up"> 
                </div>
            </div>
            <p class="forgot">Already have an account? <a href="{{route('login')}}">Login</a></p>
            <div class="social">
                <button><i class="fa fa-facebook" aria-hidden="true"></i><p>Signin with Facebook</p></button>
                <button><i class="fa fa-twitter" aria-hidden="true"></i><p>Signin with Twitter</p></button>
            </div>
          </form>
@endsection
