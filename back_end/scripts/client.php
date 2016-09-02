        <!--page content-->
        <h4 class="blue-tet center">Client Management</h4>
        <hr style="width: 4%; border-color: red;">
                <br/><br/>

             <!--modal for view-->   
        <div id="modal1" style="width:40%" class="col s5 modal">
              <div class="modal-content" id="viewScreen">
              </div>
              <div class="modal-footer">
                 <a href="#!" class="modal-close waves-effect" style="float: right;">
                    <button class="btn" type="submit">OK</button></a>
              </div>
        </div>


        <div class="row ">
        <!--form for search-->
 		    <form method="POST" action="search.php">
                <div id="test" class="input-field col s12 offset-s2"><span>
                          <em style="font-size: 20px;">Client Name:</em>
                          <input type="text" class="validate" name="search" style="width: 30%"
                                 onkeyup="search2(this.value)" placeholder="search client by name">
                          <br/>
                </div>
        </form>
        </div>

        <br/>
      
        <div class="col s10 offset-s2">
	             <table class="bordered center-align" id="example" style="padding: 10px;">
		                      <thead>
			                           <tr>
			                                 <th>No</th>
				                              <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone</th>
                                      <th>Action</th>
                                </tr>
		                      </thead>

	   <tbody id="clientsearch">
          <!--script that prints out the data from database-->
           <?php require 'submit3.php';?>

      </tbody>
		
	</table>


	<br/><br/>
	<!-- <ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>-->
        


        </div>  
   

 
      

 