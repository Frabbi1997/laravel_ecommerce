@extends('layouts.frontend')

  @section('main')

      <div class="container">
          <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="well">
                      <h3 class="text-center mt-4">Register your account</h3>

                         @include('error_message._message')

                      <form action="{{route('register')}}" method="post" class="form
                         form-horizontal" >
                          @csrf
                          <div class="form-group">
                              <label for="full_name">Full Name</label>
                              <input type="text" name="full_name" id="full_name"
                                     class="form-control" placeholder="Enter full name"
                                      value="{{old('full_name')}}">
                          </div>

                          <div class="form-group">
                              <label for="email">Email Address</label>
                              <input type="email" name="email" id="email"
                                     class="form-control" placeholder="Enter email"
                                      value="{{old('email')}}">
                          </div>

                          <div class="form-group">
                              <label for="phone_number">Phone Number</label>
                              <input type="text" name="phone_number" id="phone_number"
                                     class="form-control" placeholder="Enter phone number"
                                     value="{{old('phone_number')}}">
                          </div>

                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password"
                                     class="form-control" placeholder="Enter password">
                          </div>

                          <div class="form-group">
                              <label for="confirm_password">Confirm Password</label>
                              <input type="password" name="password_confirmation"
                                     id="confirm_password"
                                     class="form-control" placeholder="Enter password again">
                          </div>


                          <button type="submit" class="btn btn-primary btn-block">
                              Register
                          </button>

                      </form>
                  </div>

              </div>

          </div>

      </div>


  @stop