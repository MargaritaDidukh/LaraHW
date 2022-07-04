<h1>Page for video "{{$video['nameOfVideo']}}"</h1>
<h2>Description</h2>
<p>id of author {{$video['author']}}</p>
<h2>Update video info</h2>
<form  method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name"  placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="number" class="form-control" id="author" placeholder="Enter author id">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h2>
    Add videos
</h2>
<form  method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name"  placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="number" class="form-control" id="author" placeholder="Enter author id">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h2>
    Delete video
</h2>
<form  method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name"  placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="number" class="form-control" id="author" placeholder="Enter author id">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

