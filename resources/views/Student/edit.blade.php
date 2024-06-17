<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");

    </style>
    <title>CRUD</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-monospace text-success">Edit student</h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a href="{{route('students.index')}}" class="btn btn-warning btn-sm"><i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-12">
                <form action="{{route('students.update', $student->id)}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="first_name">Ism</label>
                        <input class="form-control @error('first_name') is-invalid @enderror" type="text" value="{{$student->first_name}}" placeholder="Enter first_name" name="first_name" id="first_name" required>
                        <p class="text-danger">@error('first_name') {{$message}} @enderror</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="last_name">Familya</label>
                        <input class="form-control @error('last_name') is-invalid @enderror" type="text" value="{{$student->last_name}}" placeholder="Enter last_name" name="last_name" id="last_name" required>
                        <p class="text-danger">@error('last_name') {{$message}} @enderror</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{$student->email}}" placeholder="Enter email" name="email" id="email" required>
                        <p class="text-danger">@error('email') {{$message}} @enderror</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Parol</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" value="{{$student->password}}" placeholder="Enter password" name="password" id="password" required>
                        <p class="text-danger">@error('password') {{$message}} @enderror</p>
                    </div>
                    <button type="submit" class="btn btn-warning">Yangilash</button>
                <a href="{{ route('students.index') }}" class="btn btn-success">Bosh sahifa</a>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
