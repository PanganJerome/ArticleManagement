<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
    .selector-for-some-widget {
  box-sizing: content-box;
}
.btn-bg{
  border:  none;
  background: none;
}
a{
  list-style-type: none;
  text-decoration: none;
}
    </style>
</head>
<body> 

<div class="container p-4 table-responsive">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <a  href="{{ url('Create')}}"> <button type="button" class="btn btn-success me-md-2">New Article</button> </a>
    </div>
    
<table class="table table-striped border align-middle mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($article as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->title_fld}}</td>
      <td>{{$item->detail_fld}}</td>
      <td>
        <div> 
        <a  href="{{ url('Edit/'.$item->id) }}"> <button type="button" class="btn-bg"> <i data-feather="edit" color="blue"></i> </button> </a>  

        <a href="{{ route('Delete', $item->id) }}" 
          onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this article?')){document.getElementById('delete-form-{{ $item->id }}').submit();}">
          <button type="button" class="btn-bg"> <i data-feather="trash-2" color="red"></i></button>
       </a>

       <form id="delete-form-{{ $item->id }}" action="{{ route('Delete', $item->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

      </div>
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>

    {{-- @foreach ($article as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$item->title_fld}}</td>
      <td>{{$item->detail_fld}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach --}}
    
</div>

</body> 

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script>
    feather.replace()
  </script>
</html>