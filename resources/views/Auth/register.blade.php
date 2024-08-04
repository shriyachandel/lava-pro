@extends('layout.app')
@section('register-content')
        <form class="form" method="post" action="{{route('register.submit')}}">
          @csrf
            <h2>Register</h2>
            <div class="input">
                <div class="inputBox">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="name" @error('name')class="is-invalid" @enderror value="{{old('name')}}" placeholder="Username">
                    @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="inputBox">
                  <label for="uemail">Email</label>
                  <input type="email" id="uemail" name="email" @error('email')class="is-invalid" @enderror value="{{old('email')}}"placeholder="Email">
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
                <label for="uage">Age</label>
                <input type="number" id="uage" name="age" @error('age')class="is-invalid" @enderror placeholder="Age" value="{{old('age')}}">
                @error('age')
                <p class="invalid-feedback">{{ $message }}</p>
              @enderror
             </div>
             <div class="inputBox">
              <label for="uage">Gender</label>
              
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" value="{{old('gender')}}">
            <label for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input"  type="radio" name="gender" id="flexRadioDefault2" value="Female" value="{{old('gender')}}">
            <label for="flexRadioDefault2">
                Female
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input"  type="radio" name="gender" id="flexRadioDefault3" value="Other" value="{{old('gender')}}">
            <label for="flexRadioDefault3">
                Other
            </label>
        </div>
        @error('gender')
              <p class="error text-danger">{{ $message }}</p>
        @enderror
          
          
        <div class="inputBox">
          <label for="ucity">City</label>
          <input type="text" id="ucity" name="city" @error('city')class="is-invalid" @enderror placeholder="City" value="{{old('city')}}">
          @error('city')
          <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>
                <div class="inputBox">
                    <input type="submit"  value="Sign Up"> 
                </div>
            </div>
            <p class="forgot">Already have an account? <a href="{{route('login')}}">Login</a></p>
            <div class="social">
                <button><i class="fa fa-facebook" aria-hidden="true"></i><p>Signin with Facebook</p></button>
                <button><i class="fa fa-twitter" aria-hidden="true"></i><p>Signin with Twitter</p></button>
            </div>
          </form>
@endsection
