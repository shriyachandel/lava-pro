@extends('layout.app')
@section('content')
     <form class="form" method="post" action="{{ route('authenticate')}}">
      @csrf
            <h2>Login</h2>
            <div class="input">
              <div class="inputBox">
                  <label for="uemail">Email</label>
                  <input type="email" id="uemail" name="email" @error('email')class="is-invalid" @enderror value="{{ old('email')}}" placeholder="Email">
                  @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
              </div>
                <div class="inputBox">
                    <label for="upass">Password</label>
                    <input type="password" id="upass" name="password" placeholder="Password">
                </div>
                <div class="inputBox">
                    <input type="submit"  value="Sign In"> 
                </div>
            </div>
            <p class="forgot text-center"><a href="#">Forgot Password?</a></p>
            
            <p class="forgot">Don't have a account? <a href="{{route('register.view') }}">Sign Up</a></p>
          </form>
@endsection
