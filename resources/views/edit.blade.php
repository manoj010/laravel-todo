<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container p-4">
        <p class="text-center h3">TODO app</p>
        <p class="text-center h5">Edit</p>
        <form action="{{route('updateTodo')}}" method="post">
            <div class="d-flex p-2 mt-3">
                @csrf
                <input type="text" class="form-control m-2" name="todo" value="{{$data->title}}" placeholder="Enter Todo">
                <input type="hidden" class="form-control m-2" name="id" value="{{$data->id}}">
                <button type="submit" class="btn btn-primary m-2">Update</button>
            </div>
        </form>
    </div>

    <!-- <pre>
        {{$data}}
    </pre> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>