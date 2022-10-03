<!DOCTYPE html>
<html lang="en}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Crud </title>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.1.1//dist/css/bootstrap.min.css') }}">
    </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <h4> {{ $Title }} | Laravel Crud  </h4>
            <hr>

            @if(Session::get('success'))
                <div class="alert alert-success">
                {{ Session::get('success')}}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                {{ Session::get('fail')}}
                </div>
            @endif

            <form action="{{ route('update') }}" method="post">

            @csrf
                <input type="hidden" name="cid" value = "{{ $Info->id }}">
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $Info->name }}">
                <span style="color:red">@error('name') {{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label for="">Favorite color</label>
                <input type="text" class="form-control" name="favoriteColor" placeholder="Enter name" value="{{ $Info->favoritecolor }}">
                <span style="color:red">@error('favoriteColor') {{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter name" value="{{ $Info->email }}">
                <span style="color:red">@error('email') {{ $message }} @enderror</span>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Update</button>

            </form>

        </div>
    </div>
</div>

</body>
</html>