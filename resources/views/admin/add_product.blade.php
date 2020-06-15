<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>insertproduct</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
     @endif
    
  <div class="container" style="padding: 16px 18px;">
      <h1>Thêm Phòng</h1>
    <form action="/admin/index" method="POST" enctype="multipart/form-data">
      @csrf
          <div class="form-group">
              <label  for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
          </div>
      
          <div class="form-group">
              <label  for="image">Image</label>
              <input type="file" class="form-control" name="image" value="{{old('image')}}">
          </div>
          <div class="form-group">
            <label  for="typeroom">typeroom</label>
            <input type="text" class="form-control" name="typeroom" placeholder="Type room" value="{{old('typeroom')}}">
        </div>
        <div class="form-group">
            <label  for="number">number:</label>
            <input type="text" class="form-control" name="number" placeholder="Number"value="{{old('number')}}">
        </div>
        <div class="form-group">
            <label  for="area">area:</label>
            <input type="text" class="form-control" name="area" placeholder="Area"value="{{old('area')}}">
        </div>
        <div class="form-group">
            <label  for="sale">price:</label>
            <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
        </div>
          <button type="submit" class="btn btn-sucess">Submit</button>
      </form>
      
   
  </div>

</div>   
</body>
</html>
