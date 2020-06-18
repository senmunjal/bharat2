<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>User Registration</title>
</head>

<body>
    <div class="container">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <h1>LOGIN PAGE</h1>
            </div>

            <form class="col-lg-12" action="/admins/log" method="POST">
                @csrf
                <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input class=" form-control @error('email') alert alert-danger @enderror" name="email" placeholder="email" value="{{old('email')}}"></input>

                        <p class="@error('password')alert-danger @enderror">{{$errors->first('email')}}</p>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Password:</strong>

                        <input class="form-control @error('password') alert alert-danger @enderror" name="password" placeholder="password" value="{{old('password')}}"></input>
                        <p class="@error('password')alert-danger @enderror">{{$errors->first('password')}}</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary">SIGN UP</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>