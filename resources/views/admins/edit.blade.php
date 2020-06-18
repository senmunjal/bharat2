<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- @if($errors)
    <p>{{$errors}}</p>
    @endif -->

    <div class="container mt-5">
        <form action="{{ route('admins.update',$admin->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>

                        <input class="form-control @error('name') alert alert-danger @enderror" name="name" placeholder="name" value="{{$admin->name}}"></input>
                        <p class=" @error('name')alert-danger @enderror">{{$errors->first('name')}}</p>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>

                        <input class="form-control @error('email') alert alert-danger @enderror" name="email" placeholder="email" value="{{$admin->email}}"></input>
                        <p class="@error('email')alert-danger @enderror">{{$errors->first('email')}}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>phone:</strong>

                        <input class="form-control @error('phone_number') alert alert-danger @enderror" name="phone_number" placeholder="phone_number" value="{{$admin->phone}}"></input>
                        <p class="@error('phone_number')alert-danger @enderror">{{$errors->first('phone_number')}}</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>