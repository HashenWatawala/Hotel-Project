<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <title>create_room</title>
    <style>
        .table_deg{
            border: 2px solid white;
        }
        tr{
            border: 3px solid white;
        }
    </style>
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
                      <li><a href="{{url('view_room)')}}">View Room</a></li>
                      
                    </ul>
                  </li>
          </ul>
        </nav>

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <table class="table table_deg">
                        <thead>
                          <tr>
                            <th scope="col">Room Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Wifi</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                
                          <tr>
                            <td>{{$data->room_title}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->wifi}}</td>
                            <td>{{$data->room_type}}</td>
                            <td>
                                <img style="width: 60px" src="room/{{$data->image}}" alt="">
                            </td>
                            <td>
                              <a onclick="return confirm('Are you sure want to delete this!')"; class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Delete</a>
                            </td>
                            <td>
                              <a class="btn btn-warning" href="{{url('room_delete',$data->id)}}">Update</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
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
</body>
</html>