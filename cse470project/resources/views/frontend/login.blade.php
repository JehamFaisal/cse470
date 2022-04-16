
@extends('frontend.layouts.master')
@section('title')
        Sign in
        @endsection
@section('content')

             <div class="blank"></div>

             <div class="login-page">
      <div class="box">
          <div class="left">
              <h3>Create Account</h3>
              <a class="register-btn" style="text-decoration: none" href="{{  url('user/register') }}">Sign Up</a>
          </div>
          
          <div class="form">


          @if ( $errors->any() )

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @if ( session()->has('msg') )

                        <div class="alert alert-success">{{ session()->get('msg') }}</div>

                    @endif

               <!-- Login form Start -->
               <form action="/user/login" method="post">
               <div class="login-form">

                   <h3>Log In</h3>
                   @csrf
                   <div class="form-group">
                    {{-- <label for="email">Email:</label> --}}
                       <input type="text" name="email" id="email" placeholder="Email Address*" class="form-control">
                   </div>
                   <div class="form-group">
                    {{-- <label for="password">Password:</label> --}}
                    <input type="password" name="password" placeholder="Password" id="password"
                    class="form-control">
                   </div>
                   <div class="form-group">
                       <label>
                           <input type="checkbox"> Remember Me
                       </label>
                   </div>

                   {{-- <button type="button" class="submit-btn">Login</button> --}}
                   <div class="form-group">
                    <button class=" submit-btn"> Sign in </button>
                </div>
               </div>
               <!-- Login form End -->
               </form>

               

          </div>
      </div>
  </div>
  <div class="blank"></div>
  @endsection
  



