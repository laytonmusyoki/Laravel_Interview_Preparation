<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            @csrf
            @method('post')
            <input type="text" name="name" placeholder="Name" value="{{$data['name']}}">
            <input type="text" name="email" placeholder="Email" value="{{$data['email']}}">
            <input type="text" name="phone" placeholder="Phone" value="{{$data['phone']}}">
            <input type="text" name="occupation" placeholder="Occupation" value="{{$data['occupation']}}">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>