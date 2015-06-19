<div class="row">
    <h1>Login to FWRFC Forms</h1>
</div>
<div class = "row loginForm">
      <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 col-offset-md-3 col-offset-lg-3">
          <form action=".php" method = "post" class= "loginForm">
              <div class="form-group">
                <label for="username">First Name</label>
                <input type="text" class="form-control" name="username" maxlength="50" placeholder="First Name" value= "<?=$varFirstName;?>">
                <br>
                <label for="password">Last Name</label>
                <input type="text" class="form-control" name="password" maxlength="50" placeholder="Last Name" value= "<?=$varLastName;?>">
                <br>
                <button type="submit" class="btn btn-default" name = "formLogin" value = "Login">Login</button>
              </div>
            </form>
    </div>
</div>