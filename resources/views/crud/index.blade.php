<!DOCTYPE html>
<html lang="en}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Laravel Crud </title>
        <link rel="stylesheet" href="assets/bootstrap-3.1.1//dist/css/bootstrap.min.css">
    </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <h4> -- Tambah Rekod -- </h4>
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

            <form action="add" method="post">

            @csrf
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}">
                <span style="color:red">@error('name') {{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label for="">Favorite color</label>
                <input type="text" class="form-control" name="favoriteColor" placeholder="Enter favorite color" value="{{ old('favoriteColor') }}">
                <span style="color:red">@error('favoriteColor') {{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
                <span style="color:red">@error('email') {{ $message }} @enderror</span>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>

            </form>

            <br>

            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Favorite Color</th>
                    <th>Email</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                @foreach ($list as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->favoritecolor }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="btn-group">
                        <a href="delete/{{ $item->id }}" class="btn btn-danger btn-xs"> Delete</a>
                        <a href="edit/{{ $item->id }}" class="btn btn-primary btn-xs"> Edit </a>
                    </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>

</body>
</html>