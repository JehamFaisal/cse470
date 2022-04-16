
@extends('frontend.layouts.master')
@section('title')
        Sign up
        @endsection
@section('content')

             <div class="blank"></div>

             <div class="login-page">
      <div class="box">
          
          <div class="left">
              <h3>Have an Account ?</h3>
            
              <a class="register-btn" style="text-decoration: none" href="{{  url('user/login') }}">Login</a>

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
                    <form action="/user/register" method="post">

              



              <!-- Register form Start -->
               <div class="register-form ">
                   <h3>Register</h3>
                   @csrf
                   <div class="form-group">
                        {{-- <label for="name">Name:</label> --}}
                        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        {{-- <label for="email">Email:</label> --}}
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        {{-- <label for="password">Password:</label> --}}
                        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        {{-- <label for="password_confirmation">Confirm Password:</label> --}}
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        {{-- <label for="address">Address:</label> --}}
                        <textarea name="address" placeholder="Address" id="address" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="submit-btn">Register</button>
                    </div>
                </div>
                <!-- Registration form End -->
                </form>
 
                
 
           </div>
       </div>
   </div>
  <div class="blank"></div>
  @endsection
  
