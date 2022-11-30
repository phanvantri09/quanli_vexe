@extends('layouts.master')
@section('content')



<div class="container" style="margin-top: 30px;">


<h1> form nhà xe</h1>
 <center>
 <form action="/action_page.php">
  <div class="row">
    <spans> <label for="fname">First Name</label></spans>
    <span>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
    </span>
    
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
 </center>
</div>

@endsection