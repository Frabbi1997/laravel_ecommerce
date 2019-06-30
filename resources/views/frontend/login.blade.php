@extends('layouts.frontend')

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="well">
                    <h3 class="text-center mt-4">User login form</h3>

                    @include('error_message._message')

                    <form action="#" method="post" class="form
                         form-horizontal" >
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email"
                                   class="form-control" placeholder="Enter email">
                        </div>


                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                   class="form-control" placeholder="Enter password">
                        </div>


                        <button type="submit" class="btn btn-primary btn-block">
                            Login
                        </button>

                    </form>
                </div>

            </div>

        </div>

    </div>


@stop