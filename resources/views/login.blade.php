<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
                @if(Session::get('logout'))
                <div class="alert alert-success">
                    {{Session::get('logout')}}
</div>
@endif

@if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
</div>
@endif
            <div class="col-sm-4 offset-sm-4 mt-2">
                <form action="login_check" method="post">
                    @csrf
                <div class="card">
                  <div class="card-header">
                   Login
                  </div>
                  <div class="card-body">
                         <div class="form-group">
                             <label>Email</label>
                             <input type="email" name="email" class="form-control" placeholder="Enter Email">
                             <span>@error('email'){{$message}}@enderror</span>
                            </div>
                         <div class="form-group">
                             <label>Password</label>
                             <input type="password" name="password" class="form-control" placeholder="Enter Password">
                             <span>@error('password'){{$message}}@enderror</span>
                            </div>
                  </div>
                  <div class="card-footer">
                      <button class="btn btn-primary">Login</button>
                      <a href="/">Register</a>

                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>