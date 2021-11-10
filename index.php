
<!DOCTYPE html>
<html>
<head> 

<title>User Login and Registeration</title>



<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="style.css">



<body>

<div class="container">

<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">

<h2> login here</h2>

<form action="login.php" method="post">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="form-group">
<label> Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="form-group">
<label> Password</label>
<input type="password" name="password" class="form-control" required>
</div>
</br>
<button type="submit" class="btn btn-primary"> Login </button>
</form> 
</div>




<div class="col-md-6 login-right">

<h2> Register here</h2>

<form action="registeration.php" method="post">
<div class="form-group">
<label> Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="form-group">
<label> Email</label>
<input type="email" name="email" class="form-control" required>
</div>


<div class="form-group">
<label> Password</label>
<input type="password" name="password" class="form-control" required>
</div>
</br>
<button type="submit" class="btn btn-primary">  Register </button>
</form>


</div>

</div>


</div>

</div>
                                                                                                                                                                                                                             
</html>

</body>
 























