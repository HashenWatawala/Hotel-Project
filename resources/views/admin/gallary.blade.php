<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Add room</a></li>
                    <li><a href="{{url('view_room ')}}">View Rooms</a></li>
                  </ul>
                </li>
                <li><a href="{{url('bookings')}}"> <i class="icon-home"></i>Bookings</a></li>
                <li>
                  <a href="{{url('view_gallary')}}"><i class=""></i>Gallary</a>
                </li>
        </ul>
      </nav>
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
              <center>
              <h1>
                Gallary
              </h1>
              <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
                @foreach ($gallary as $gallary)
                  <img style="height: 200px !important; width: 300px !important; object-fit: cover;" src="/gallary/{{$gallary->image}}" alt="">
                  <a class="btn btn-danger" href="{{url('delete_gallary', $gallary->id)}}">Delete</a>
                  @endforeach
              </div>
              <form action="{{url('upload_gallary')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 30px">
                  <label style="color: white; font-weight: bold;">Upload Image</label>
                  <input type="file" name="image">
                </div>

                <div>
                  <input class="btn btn-primary" type="submit" name="Add Image">
                </div>
              </form>
              </center>
            </div>
        </div>
      </div>
      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
             <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
          </div>
        </div>
      </footer>
    <!-- Sidebar Navigation end-->
</body><!-- Sidebar Navigation end-->
    
</body>
</html>