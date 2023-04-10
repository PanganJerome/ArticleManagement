<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    .selector-for-some-widget {
  box-sizing: content-box;
}
    </style>

</head>
<body> 

<div class="container mt-5 w-50 border p-5">
    <form action="{{ route('Update', $article->id) }}" method="POST"> 
      @csrf
      @method('PUT')

<div class="mb-3">
  <label for="title_fld" class="form-label">Title</label>
  <input type="text" class="form-control" id="title_fld" name="title_fld" value="{{$article->title_fld}}">
</div>
<div class="mb-3">
  <label for="detail_fld" class="form-label">Details</label>
  <textarea class="form-control" id="detail_fld" name="detail_fld" rows="3">{{$article->detail_fld}}</textarea>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ url('/')}}"><button type="button" class="btn btn-danger me-md-2">Back</button></a>
    <button type="submit" class="btn btn-success me-md-2">Update</button>
    </div>
    </form>
</body> 
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>