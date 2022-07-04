<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
<ul>
    <li>
        {{ $user['name'] }}
        <b>{{ $user['phone'] }}</b>
    </li>
</ul>
<h2>
    Add user
</h2>
<form method="post" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="id">id</label>
        <input name="id" type="number" class="form-control" id="id" placeholder="Enter id" />
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" />
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input name="phone" type="tel" class="form-control" id="phone" placeholder="Enter phone" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h2>
    Update user
</h2>
<form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="id">id</label>
        <input name="id" type="number" class="form-control" id="id" placeholder="Enter id" />
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" />
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input name="phone" type="tel" class="form-control" id="phone" placeholder="Enter phone" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h2>
    Delete user
</h2>
<form method="post" enctype="multipart/form-data">
    @csrf @method('DELETE')
    <div class="form-group">
        <label for="id">id</label>
        <input name="id" type="number" class="form-control" id="id" placeholder="Enter id" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
