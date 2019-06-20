 @extends('layouts.backend')

 @section('main')

     <div class="card mt-4">
         <div class="card-header">
             My Profile
         </div>

         <div class="card-body">
             <form>
                 @csrf

                 <div class="form-group">

                     <label for="full_name">Full Name:</label>
                     <input type="text" name="full_name" value="{{ $user->full_name }}"
                           class="form-control"  id="full_name">
                 </div>

                 <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" name="email" value="{{ $user->email }}"
                            class="form-control"  id="email">
                 </div>

                 <div class="form-group">
                     <label for="phone_number">Phone Number:</label>
                     <input type="text" name="phone_number" value="{{ $user->phone_number }}"
                            class="form-control"  id="phone_number">
                 </div>

                 <div class="form-group">
                     <label for="address">Address:</label>
                     <textarea name="address" id="address" class="form-control" cols="30"
                               rows="10">
                         {{ $user->address}}
                     </textarea>
                 </div>



                 <button type="submit" class="btn btn-primary btn-block">
                     Update profile
                 </button>
             </form>
         </div>
     </div>

   @stop

