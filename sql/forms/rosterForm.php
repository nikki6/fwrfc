 
<div class = "row">
      <div class = "col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 rosterForm">
        <h1>Roster Form</h1>
        <form action="rosterInput.php" method = "post" class="rosterForm form-inline">
          <div class="form-group">
            <label for="formFN">First Name</label>
            <input type="text" class="form-control" name="formFN" maxlength="50" placeholder="First Name" value= "<?=$varFirstName;?>">
            <label for="formLN">Last Name</label>
            <input type="text" class="form-control" name="formLN" maxlength="50" placeholder="Last Name" value= "<?=$varLastName;?>">
            <br>
            <label for="formFN">Nick Name</label>
            <input type="text" class="form-control" name="formNN" maxlength="50" placeholder="Nick Name" value= "<?=$varNickName;?>">
            <label for="formPosition">Position</label>
            <input type="text" class="form-control" name="formPosition" maxlength="50" placeholder="Position" value= "<?=$varPositon;?>">
            <br>
            <label for="formEB">Exec Board Position</label>
            <input type="text" class="form-control" name="formEB" maxlength="50" placeholder="E-Board" value= "<?=$varExecBoard;?>">
            <label for="formEB">Current Player</label>
            <select class="form-control">
              <option>Yes</option>
              <option>No</option>
            </select>            
            <br>
     
            <button type="submit" class="btn btn-default" name = "formSubmit" value = "Submit">Submit Form</button>
          </div>
        </form>
      </div>
    </div>