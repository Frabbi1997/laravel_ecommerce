 @extends('layouts.backend')

 @section('main')
     <div class="mt-4">
         @include('error_message._message')
     </div>

     <div class="card mt-4">
         <div class="card-header">
             My Profile
         </div>

         <div class="card-body">

             <form action="{{ route('profile') }}" method="post">
                 @csrf

                 <div class="form-group">

                     <label for="full_name">Full Name:</label>
                     <input type="text" name="full_name" value="{{ $user->full_name }}"
                           class="form-control"  id="full_name" required>
                 </div>

                 <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" name="email" value="{{ $user->email }}"
                            class="form-control"  id="email" required>
                 </div>

                 <div class="form-group">
                     <label for="phone_number">Phone Number:</label>
                     <input type="text" name="phone_number" value="{{ $user->phone_number }}"
                            class="form-control"  id="phone_number" required>
                 </div>

                 <div class="form-group">
                     <label for="address">Address:</label>
                     <textarea name="address" id="address" class="form-control" cols="30"
                               rows="10" required>
                         {{ $user->address}}
                     </textarea>
                 </div>



                 <button type="submit" class="btn btn-primary btn-block">
                     Update profile
                 </button>
             </form>
         </div>
     </div>


     <div class="card mt-4">
         <div class="card-header">
             Changed Password:
         </div>

         <div class="card-body">

             <form action="{{ route('password.update') }}" method="post">
                 @csrf

                 <div class="form-group">

                     <label for="full_name">Old Password:</label>
                     <input type="password" name="old_password" class="form-control"
                            class="old_password"  id="old_password" required>
                 </div>

                 <div class="form-group">
                     <label for="password">New Password:</label>
                     <input type="password" name="password" class="form-control"
                            class="password"  id="password" required>
                 </div>

                 <div class="form-group">
                     <label for="password_confirmation">Comfirm New Password:</label>
                     <input type="password" name="password_confirmation" class="form-control"
                            class="password_comfirmation"  id="password_confirmation" required>
                 </div>

                 <button type="submit" class="btn btn-primary btn-block">
                     Change Password
                 </button>
             </form>
         </div>


   @stop

