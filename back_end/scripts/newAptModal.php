
<div class="row centered"  style="align-self: center;width:50%;">
    
      <div id="moda3" class="modal" >
          <form method="POST" action="addappt.php">
              <div class="modal-content">
                  <p style="color: blue;">Create new Appoinment:</p>

                  <div class="row margin">
                        <div class="input-field col s4">
                              <i class="material-icons prefix "></i>
                              <input class="validate" id="Ddate" type="date" name="Ddate" >
                              <label for="Ddate"class="active">Date</label>
                        </div>

                        <div class="input-field col s4">
                              <i class="material-icons prefix">person</i>
                              <input class="validate" id="dname" type="text" name="dname" >
                              <label for="dname" class="active">Doctor Name</label>   
                        </div>

                        <div class="input-field col s4">
                              <i class="material-icons prefix">person</i>
                              <input class="validate" id="cname" type="text" name="cname" >
                              <label for="cname" class="active">client name</label>   
                        </div>
                </div>

                  <div class="row margin">

                        <div class="input-field col s4">
                              <i class="material-icons prefix">subtitles</i>
                              <input class="validate" id="service" type="text" name="service" >
                              <label for="service" class="active">Service needed</label>
                        </div>

                        <div class="input-field col s4">
                               <select class="icons" name="status">
                                <option value="" disabled selected>Status</option>
                                <option value="Pending" >Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                              </select> 
                        </div>

                        <div class="input-field col s4">
                              <select class="icons" name="payment">
                                <option value="" disabled selected>Payment</option>
                                <option value="Non" >Non</option>
                                <option value="Completed">Completed</option>
                                <option value="Incomplete">Incomplete</option>
                              </select>  
                        </div>
                  </div>
              
              </div>
              
              <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect">
                    <button class="btn red" type="submit">Cancel</button></a>
                  <a  class="modal-close"  href="">
                    <button class="btn blue" >ADD</button></a>
              </div>
                </form>
            </div>
      </div>
