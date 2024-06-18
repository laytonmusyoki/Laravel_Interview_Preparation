<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <div class="container">
        @if($errors->any())

        @foreach($errors->all() as $error)

        <p class="btn btn-warning">{{$error}}</p>

        @endforeach
        @endif
        <form action="" method="post">
            @csrf
            @method('post')
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="text" name="occupation" placeholder="Occupation">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>