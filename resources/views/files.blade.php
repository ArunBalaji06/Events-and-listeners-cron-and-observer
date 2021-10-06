<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>File Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <h2 class="container">File upload</h2>
    <div class="container card col-md-6 offset-3">
        <div class="card-header">
            File 
        </div>
        <div class="card-body">
            <form class="form" method="post" action="{{route('file.submit')}}" enctype="multipart/form-data">
            @csrf
                Choose file
                <input type="file" name="file" id = "img" class="from-control"><br>
                <br>
                <div id="insert"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div id="response"> </div>
    <div class="container">
    <table class="table data-table" class="display" id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($files as $file)
                <tr>
                    <td id="lastRow">{{$file->id}}</td>
                    <td>{{$file->name}}</td>
                    <td><a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <a href='/download-csv' class="btn btn-primary">Download File</a>
    </div>
</body>
</html>