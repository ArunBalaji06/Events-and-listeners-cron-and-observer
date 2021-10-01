<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


    <title>Home</title>
</head>
<body>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="/member-edit" class="btn btn-primary">Edit</a>
                <a href="/member-delete" class="btn btn-warning">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


    
</body>
</html>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>