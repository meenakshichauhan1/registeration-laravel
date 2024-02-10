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
             
            <div class="col-sm-4 offset-sm-4 mt-2">
          
                <div class="card">
                  <div class="card-header">
                   User Profile <a href="logout">logout</a>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                        Name:{{$user_data->name}}
</div>
  <div class="form-group">
    Email:{{$user_data->email}}
</div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>