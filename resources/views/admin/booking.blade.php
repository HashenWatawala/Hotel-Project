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
        </ul>
      </nav>
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
              <table class="table table_deg">
                <thead>
                  <tr>
                    <th class="th_deg" scope="col">Room ID</th>
                    <th class="th_deg" scope="col">Customer name</th>
                    <th class="th_deg" scope="col">Email</th>
                    <th class="th_deg" scope="col">Phone</th>
                    <th class="th_deg" scope="col">Arrival Date</th>
                    <th class="th_deg" scope="col">Leaving Date</th>
                    <th class="th_deg" >Status</th>
                    <th class="th_deg" >Room Title</th>
                    <th class="th_deg" >Price</th>
                    <th class="th_deg" >Image</th>
                    <th class="th_deg" >Delete</th>

                  </tr>
                </thead>
                <tbody>
                   
                   @foreach ($data as $data)
                   
                        
                  <tr>
                    <td>{{$data->room_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->end_date}}</td>
                    <td>
                      @if ($data->status == 'approve')
                      <span style="color: skyblue">Approved</span>
                      @endif
                      @if ($data->status == 'rejected')
                      <span style="color: red">Rejected</span>
                      @endif
                      @if ($data->status == 'waiting')
                      <span style="color: yellow">Waiting</span>
                      @endif
                    </td>
                    <td>{{$data->room->room_title}}</td>
                    <td>{{$data->room->price}}</td>
                    <td><img style="width: 200px" src="/room/{{$data->room->image}}" alt=""></td>
                    <td>
                      <a onclick="return confirm('Are you sure want to delete this')" class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Delete</a>
                    </td>
                    <td>
                      <span style="padding-bottom: 10px">
                      <a class="btn btn-success" href="{{url('approve_book', $data->id)}}">Approve</a>
                      </span>
                      <a class="btn btn-warning" href="{{url('reject_book', $data->id)}}">Rejected</a>
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
</body>
</html>