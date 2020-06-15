<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 </script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
  
  .boder{
    border-bottom: 1px solid;
    padding: 12px 14px;

  }
  .col-md-3{
    width: 315px;
    padding: 15px;
    border:1px solid #ddd;
    margin-top: 100px;
    margin-left: 20px;
  }
  .col-md-3 b{
    margin-top: 10px;
    font-size: 25px;

  }
  .col-md-3 img{
    height: 280px;
    width: 280px;
    border-radius: 5px;
  }
  .float-between {
    display: flex;
    justify-content: space-between;
  }
  .float-between a{
    font-weight: bold;
    color: #ecad3f;
    text-decoration: none;
  }
</style>
</head>
<body>
		
<div class="nav1">
  <div class="container">
  <div class="collapse navbar-collapse" id="myNavbar">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/2a/64/0f/logo-gold-hotel.jpg" style="width: 200px;height: 150px">
      <ul class="nav navbar-nav "style=" margin-top: 5px;float: right;">
        <li><a href=""><i class="fas fa-home"></i> Trang chủ</a></li>
        <li><a href="#"><i class="fas fa-star"></i> Phòng & mức giá</a></li>
        <li><a href="/admin/create"><i class="fas fa-clock"></i> Đặt phòng</a></li>
        <li><a href="#"><i class="fas fa-image"></i> Hình ảnh</a></li>
        <li><a href="#"><i class="fas fa-phone-volume"></i> Liên hệ</a></li>
      </ul>
    </div>
 </form>
 
<div class="container">                 
  @foreach($rooms as $room)  
    <div class="col-md-3">
      <img src="{{'/storage/'.$room->image}}">         
         <b> {{$room->typeroom}}</b>

         <hr>
         <div class="float-between">
           <span> PHÒNG</span><p> {{ $room->name}}</p>
         </div>  
         <hr>
         <div class="float-between">
           <span> CHỖ NGHỈ</span><p>{{$room->number}} </p>
         </div>     
          <hr>
          <div class="float-between">
           <span> KÍCH THƯỚC</span><p>{{$room->area}} </p>
         </div>     
          <hr>
          <div class="float-between">
           <span> GIÁ PHÒNG</span><p>{{$room->getPrice()}} </p>
         </div>     
          <hr>
          <div class="float-between">
           <span> XEM</span><a href="">ĐẶT PHÒNG</a>
         </div> 

    </div>
         @endforeach
    </div>

</body>
</html>