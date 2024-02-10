<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
</div>
@endif
@if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
</div>
@endif
            <div class="col-sm-4 offset-sm-4 mt-2">
                <form action="register_save" method="post">
            @csrf
                <div class="card">
                  <div class="card-header">
                   Register
                  </div>
                  <div class="card-body">
                         <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
                             <span>@error('name'){{$message}}@enderror</span>
                         </div>
                         <div class="form-group">
                             <label>Email</label>
                             <input type="email" name="email" class="form-control" placeholder="Enter Email"value="{{old('email')}}">
                             <span>@error('email'){{$message}}@enderror</span>

                            </div>
                         <div class="form-group">
                             <label>Password</label>
                             <input type="password" name="password" class="form-control" placeholder="Enter Password"value="{{old('password')}}">
                             <span>@error('password'){{$message}}@enderror</span>

                            </div>
                  </div>
                  <div class="card-footer">
                      <button class="btn btn-primary">Register</button>
                  <a href="login">Login</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>