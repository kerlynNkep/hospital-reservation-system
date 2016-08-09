 <div class="row">
     <div class="col s2">.</div>
    <form id="signup_form"  class="col s8  z-depth-2" action="submit.php" method="POST">
      <h3>SignUp Form :</h3>
      <div class="row ">
        <div class="input-field col s4">
          <input  id="first_name" type="text" name="fname" class="validate">
          <label class=" active" for="first_name">First Name</label>
        </div>
        <div class="input-field col s4">
          <input id="last_name" type="text" name="lname" class="validate">
          <label class="active" for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input  id="age" type="number" name=""  class="validate">
          <label class="active" for="age">Age</label>
        </div>
        <div class="input-field col s4">
           <input  id="test1" type="radio" name="sex"  class="validate">
              <label class="active" for="test1">Male</label>
           <input  id="test2" type="radio" name="sex"   class="validate">
              <label class="active" for="test2">Female</label>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <input  id="date_of_birth" type="date" name="DOB" class="validate">
              <label class=" active" for="date_of_birth">Date Of Birth</label>
          </div>
          <div class="input-field col s4">
          <input id="country" type="text" name="country" class="validate">
            <label class="active" for="country">Country</label>
          </div>
        </div>
       <div class="row">
        <div class="input-field col s4">
          <input id="phone_number" type="tel" name="phoneNo" class="validate">
          <label class="active" for="phone_number">Phone Number</label>
        </div>
       <div class="input-field col s4">
          <input id="email" type="email" name="email" placeholder="someone@gmail.com" class="validate">
          <label class="active" for="email">Email</label>
        </div>
        </div>
      <div class="row">
          <div class="input-field col s4">
          <input id="password" type="password" name="password" class="validate">
          <label class="active" for="password">Password</label>
        </div>
        <div class="input-field col s4">
          <input id="password" type="password" name="password2" class="validate">
          <label class="active" for="password">Confirm Password</label>
        </div>
      </div>
      <button class="btn  indigo darken-1 waves-effect waves-grey col s3 offset-s4" type="submit" name="action">Submit
               <i class="material-icons right">send</i></button>
       
    </form>
    <div class="col s2">.</div>
   </div>