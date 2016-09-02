<h5 class="blue-text center">APPOINTMENT STATISTICS</h5><br/>
<div class="z-depth-1 grey lighten-4">
<div>
    <h5>Date: <input  type="date" class="validate datepicker" name="current_date" style="width: 20%"></h5>
    <h5>Time: <input  type="time" class="validate" name="current_time" style="width: 20%"></h5>
    <h5>By: <input  type="text" class="validate" name="person" style="width: 23%"></h5>
    <br/><br/>

    <form method="POST" action="" >
        <table class="bordered center-align">
            <thead>
                   <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <th>Client</th>
                        <th>Duration</th>
                        <th>Arrived</th>
                        <th>Completed</th>
                        
                    </tr>

            </thead>
            
            <tbody>
                <?php require"submitRep.php"; ?>

            </tbody>

            <tfoot>
                <div class="row">
                    <div class="col s11 offset-s1"><h5>Title:<input type="text" class="validate" name="person" 
                                                                            style="width: 80%"></h5></div><br/>
                </div>
            </tfoot>

        </table>
          
    </form>
          
</div>

</div>
<h5 class="right">SIGNATURE:<input  type="text" class="validate" name="" style="width: 30%"></h5><br/>