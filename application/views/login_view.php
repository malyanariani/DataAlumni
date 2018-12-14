<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style type="text/css">
    body {
      background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .login-form {
      margin-top: 60px;
    }
    form[role=login] {
      color: #5d5d5d;
      background: #f2f2f2;
      padding: 26px;
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
    }
    form[role=login] img {
      display: block;
      margin: 0 auto;
      margin-bottom: 35px;
    }
    form[role=login] input,
    form[role=login] button {
      font-size: 18px;
      margin: 16px 0;
    }
    form[role=login] > div {
      text-align: center;
    }
  </style>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body>
  <div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form action="<?php echo base_url();?>index.php/login/getlogin" method="post" role="login">
          <h3><center>Login</center></h3>
          <hr>
          <input type="username" name="nama" placeholder="Username" required class="form-control input-lg"/>
          
          <input type="password" class="form-control input-lg" name="pass" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
        </form>
</body>
</html>