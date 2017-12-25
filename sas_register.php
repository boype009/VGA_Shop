<!DOCTYPE html>
<html>
<head> 
<meta charset = "UtF-8"> 
<title></title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycss.css">
</head> 
<body> 
<div class="register">
        <header class="text-center">
            <h1>Register</h1>
        </header>


<form action="register.php" method="POST"> 
<div class="form-group">
<input type="text" name="username" class="form-control" placeholder="username" required autofocus> 
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="password" required> 
</div>
<div class="form-group">
<input type="text" name="email"  class="form-control" placeholder="Email" required>
</div>
<input type="submit" value="Register" class="btn btn-info form-control">
<br><br>
<input type="submit" onclick= "window.location='lgindex.php'"  value="Back" class="btn btn-info form-control"> 
</form>


</body> 

</html> 