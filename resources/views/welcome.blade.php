<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container p-4">
        <p class="text-center h3">TODO app</p>
        <form action="{{route('saveTodo')}}" method="post">
            <div class="d-flex p-2 mt-3">
                @csrf
                <input type="text" class="form-control m-2" name="todo" placeholder="Enter Todo">
                <button type="submit" class="btn btn-primary m-2">Add</button>
            </div>
        </form>
    </div>

    <div class="container p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">SN</th>
                <th scope="col">List</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $sn = 1;
                @endphp
                @foreach($list as $value)
                    <tr>
                        <th scope="row">{{$sn++}}</th>
                        <!-- <th scope="row">{{$value->id}}</th> -->
                        <td style="width:800px;">{{$value->title}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm"><a class="text-white text-decoration-none" href="{{url('/edit/'.$value->id)}}">Edit</a></button></td>
                        <td><button type="button" class="btn btn-danger btn-sm"><a class="text-white text-decoration-none" href="{{url('/delete/'.$value->id)}}">Delete</a></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>