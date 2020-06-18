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

        <div class="row">
            <div class="col-lg-6">
                <h1>USER REGISTRATION</h1>
            </div>
            <div class="col-lg-6">
                <a class="btn btn-primary mt-2" href="admins/login">LOGIN</a>
            </div>
        </div>
        <div class="row">
            <form class="col-lg-12" action="{{ route('admins.store') }}" method="POST">
                @csrf
                <div class="col-lg-12 mt-3">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control @error('name') alert alert-danger @enderror" placeholder="Name" value="{{old('name')}}">
                        <p class="@error('name')alert-danger @enderror">{{$errors->first('name')}}</p>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Email:</strong>

                        <input class="form-control @error('email') alert alert-danger @enderror" name="email" placeholder="Email" value="{{old('email')}}"></input>
                        <p class=" @error('email')alert-danger @enderror">{{$errors->first('email')}}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Phone_number:</strong>
                        <input class="form-control @error('phone_number') alert alert-danger @enderror" name="phone_number" placeholder="Phone_number" value="{{old('phone_number')}}"></input>
                        <p class="@error('phone_number')alert-danger @enderror">{{$errors->first('phone_number')}}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Password:</strong>

                        <input class="form-control @error('password') alert alert-danger @enderror" name="password" placeholder="password" value="{{old('assword')}}"></input>
                        <p class="@error('password')alert-danger @enderror">{{$errors->first('password')}}</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>