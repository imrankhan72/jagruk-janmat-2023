<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Login</title>

  {{ HTML::style('assets/css/bootstrap.min.css') }}
  {{ HTML::style('assets/css/signin.css') }}


</head>

<body>
<div class="row">
  <div class="col-md-4"></div>

  <div class="col-md-4">

      @if(Session::has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{ Session::get('message') }}
        </div>
      @endif
      {{ Form::open(array('route' => 'dologin')) }}
      <h2 class="form-signin-heading">Please sign in</h2>
      <label for="username" class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {{ Form::close() }}


</div>
  <div class="col-md-4"></div>

  </div> <!-- /row -->

  {{ HTML::script('assets/js/jquery-1.9.1.min.js')}}
  {{ HTML::script('assets/js/bootstrap.min.js') }}
</body>
</html>
