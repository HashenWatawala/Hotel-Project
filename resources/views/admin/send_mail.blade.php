<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style type="text/css">
    label {
      display: inline-block;
      width: 200px
    }

    .div_deg {
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    max-width: 400px;
    margin: auto;
  }

  .div_deg input,
  .div_deg textarea {
    width: 100%;
    padding: 10px;
    font-size: 15px;
    border: none;
    border-radius: 5px;
    background-color: #444;
    color: #fff;
    margin-top: 5px;
  }

  .div_deg input:focus,
  .div_deg textarea:focus {
    outline: 2px solid #007bff;
    background-color: #333;
  }

  .dev_center {
    text-align: center;
    padding-top: 40px;
  }
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
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
              class="icon-windows"></i>Example dropdown </a>
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
          <center>
            <h1 style="font-size: 30px; font-weight: bold;">Mail send to {{$data->name}}</h1>

            <form action="{{url('mail', $data->id)}}" method="post">

              @csrf
              <div class="div_deg">
                <label for="">Greeting</label>
                <input type="text" name="greeting" id="">
              </div>
              <div class="div_deg">
                <label for="">Mail body</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="div_deg">
                <label for="">Action text</label>
                <input type="text" name="action_text" id="">
              </div>
              <div class="div_deg">
                <label for="">Action Url</label>
                <input type="text" name="action_url" id="">
              </div>
              <div class="div_deg">
                <label for="">End Line</label>
                <input type="text" name="endline" id="">
              </div>

              <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Send Mail">
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
          <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank"
              href="https://templateshub.net">Templates Hub</a>.</p>
        </div>
      </div>
    </footer>
</body>

</html>