
	

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Site</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="icon" href="images/s1.jpg">
    <style>
       .d 
      {
        background-image: url('images/img-11.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center ;
        height: 1100px;
      }


   .footer
   {
    margin-top: -80px;
   }
       .y 
      {
        margin-left: 50px;
        margin-right: 50px;
      } 
      body 
      {
        background-color:skyblue;
      }
       .yash
      {
        font-size:20px;
      } 

      .admin 
      {
        color:orange;
        padding:300px;
        padding-left:300px;
        font-size:50px;
        text-shadow:3px 4px blue;
        background-color:skyblue;
        height:900px;
        width:100%;
      }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                
               
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-success">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <center><a href="admin"><img src="images/s1.jpg" height="30px" width=30px" margin-left="50px"></a>  <a class="navbar-brand brand-logo  " href="admin"><h2>Travel</h2></a></center>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                   </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="images/yash.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                   <p class="mb-1 text-black"> {{ session('admin') }}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="log">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/yash.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Khalas Yash</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/mita.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mita Kanzariya</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/nay.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Nayan Pitroda</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a> -->
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">3 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="log">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas bg-gradient-danger"  id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="images/yash.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Khalas Yash</span>
                  <span class="text-secondary text-small">yash123@gmail.com</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <div class="yash">
               <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"><h3>User </h3></span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="user"><h4>User Details</h4></a></li>
            
                </ul>
              </div>
            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                <span class="menu-title"><h3>Manage Slider</h3></span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                 <h1> <li class="nav-item"> <a class="nav-link" ><h3>First Slider</h3></a></li>
                  <li class="nav-item"><h3></h3>
                <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="homeinsert1"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="homeedit1"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="homeedit1"><h3>Delete</h3></a></li> 
                </ul>
              </li>
              </ul>
              </div>
            </li>
            

          

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"><h3>Package</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
              <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><h3>Boating</h3>
                <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="insert"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit"><h3>Delete</h3></a></li> 
                </ul>
              </li>
              <li class="nav-item"><h3>Hawai</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="insert11"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit11"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit11"><h3>Delete</h3></a></li>
                </ul>
              </li>
              <li class="nav-item"><h3>Architecture</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="insert13"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit13"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit13"><h3>Delete</h3></a></li>
                </ul>
              </li>
              <li class="nav-item"><h3>Camping</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="insert14"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit14"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit14"><h3>Delete</h3></a></li>
                </ul>
              </li>
              <li class="nav-item"><h3>Snow</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="insert15"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit15"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit15"><h3>Delete</h3></a></li>
                </ul>
              </li>
              <li class="nav-item"><h3>Amazing</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="insert12"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit12"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit12"><h3>Delete</h3></a></li>
                </ul>
              </li>
              <li class="nav-item"><h3>place</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="insert16"><h3>Add</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit16"><h3>Update</h3></a></li>
              <li class="nav-item"> <a class="nav-link" href="edit16"><h3>Delete</h3></a></li>
                </ul>
              </li>

               <li class="nav-item"><h3>Temple</h3>
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="boatt"><h3>Temple</h3></a></li>
                </ul>
              </li>

              </div>
            </li> 

             <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"><h3>Book</h3></span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="book_disp"><h4>Book Details</h4></a></li>
            
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"><h3>Feedback</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a> 
              <div class="collapse" id="ui-basic"> 
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="feed_disp"><h3>Feedback</h3></a></li>
              
                </ul>
              </div>
            </li>
           
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
               
                
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="d">
          <div class="y">
        	<center><h1  style="color:white">Update & Remove Camping Package Details</h1>
        	<br><br><br><br>
        	<table class = "table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Image</th>
              <th scope="col">Package</th>
              <th scope="col">Price</th>
              <th scope="col">Option</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach($in as $data)
            <tr>
              <th>{{$data->id}}</th>
              <td><img src="{{asset('images/' . $data->image) }}" height="40px" width="40px" /></td>
              <td>{{$data->package}}</td>
              <td>{{$data->price}}</td>
              <td>
                <a href="update14/{{$data->id}}" class="btn btn-primary" style="background-color:#2874f0;">Edit</a>
                <a href="delete14/{{$data->id}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

</center>
</div>
</div>
            </div> 
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
               
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
            <center>
           <h1> <marquee width="900px" direction="left" height="50px">
         <div class="credit"> Developed By <span>Yash</div>
         </marquee></h1>
         </center>
                 </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>





