<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Registration</h4>
                <h3></h3>
                <form>
                    <div class="form">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name"
                    name="name"value="">
                </div>
                <div class="form">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email"
                    name="Email"value="">
                </div>
                <div class="form">
                    <label for="Password">Password</label>
                    <input type="text" class="form-control" placeholder="Enter Password"
                    name="Password"value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary"type="submit">Register
                        
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
crossorigin="anonymous"></script>

</html>