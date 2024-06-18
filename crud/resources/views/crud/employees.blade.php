<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <h1>Employee</h1>

    @if(session()->has('success'))


    <p class="btn btn-success">{{session()->get('success')}}</p>

    @endif
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Occupation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
        <tr>
            <th>{{$item['id']}}</th>
            <th>{{$item['name']}}</th>
            <th>{{$item['email']}}</th>
            <th>{{$item['phone']}}</th>
            <th>{{$item['occupation']}}</th>
            <th>
                <a href="/update/{{$item['id']}}" class="btn btn-primary">Update</a>
                <a href="/delete/{{$item['id']}}" onclick="return confirm('Are you sure you want to delete?') " class="btn btn-danger">Delete</a>
            </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>