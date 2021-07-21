<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 16px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body   >
   

    <div class="wrapper">

        <h2>Login</h2>
 
        <form action = "Select.php" method="POST"  >
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control ">  
                <span class="invalid-feedback">  </span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
           
            </div>

            <p>Don't have an Account ? <a href="Cadastro.html">Register here</a>.</p>
        </form>
    </div>

    <?php if(isset($_GET['erro'])){ ?>
      
      <div class="alert alert-danger" role="alert" class="justify-content: center" >
          Usuario ou/Senha errado!
      </div>
      
    

      <?php } ?>    
</body>
</html>