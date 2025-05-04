<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <title>create_room</title>
    <style type="text/css">
      label{
        display: inline-block;
        width: 200px
      }
      .div_deg{
        padding-top: 30px; 
      }
      .dev_center{
        text-align: center;
        padding-top: 40px;
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
                      <li><a href="#">Page</a></li>
                      <li><a href="#">Page</a></li>
                    </ul>
                  </li>
          </ul>
        </nav>

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="dev_center">
                      <h1>Add Room</h1>
                        <form action="">
                            <div class="div_deg">
                                <label for="">Room Title</label>
                                <input type="text" name="title" id="">
                            </div>
                            <div class="div_deg">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="div_deg">
                                <label for="">Price</label>
                                <input type="number" name="price" id="">
                            </div>
                            <div class="div_deg">
                              <label for="">Room type</label>
                              <select name="type" id="">
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                              </select>
                            </div>
                            <div class="div_deg">
                              <label for="">Free Wifi</label>
                              <select name="wifi" id="">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                            </div>
                            <div class="div_deg">
                              <label for="">Upload Image</label>
                              <input type="file" name="image">
                            </div>

                            <div class="div_deg">
                              <input class="btn btn-primary" type="submit" value="Add Room">
                            </div>
                        </form>
                    </div>
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