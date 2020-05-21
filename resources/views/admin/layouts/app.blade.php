<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('adminPanel/css/style-starter.css') }}">
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  </head>
  <body class="sidebar-menu-collapsed">
    <div class="se-pre-con"></div>
    <section>
      @include('admin.layouts.nav')
      <!-- header-starts -->
      <div class="header sticky-header">
        <!-- notification menu start -->
        <div class="menu-right">
          <div class="navbar user-panel-top">
            <div class="search-box">
              <form action="#search-results.html" method="get">
                <input class="search-input" placeholder="Search Here..." type="search" id="search">
                <button class="search-submit" value=""><span class="fa fa-search"></span></button>
              </form>
            </div>
            <div class="user-dropdown-details d-flex">
              <div class="profile_details_left">
                <ul class="nofitications-dropdown">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                      class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                      <ul class="dropdown-menu">
                        <li>
                          <div class="notification_header">
                            <h3>You have 3 new notifications</h3>
                          </div>
                        </li>
                        <li><a href="#" class="grid">
                          <div class="user_img"><img src="{{ asset('adminPanel/images/avatar1.jpg') }}" alt=""></div>
                          <div class="notification_desc">
                            <p>Johnson purchased template</p>
                            <span>Just Now</span>
                          </div>
                        </a></li>
                        <li class="odd"><a href="#" class="grid">
                          <div class="user_img"><img src="{{ asset('adminPanel/images/avatar2.jpg') }}" alt=""></div>
                          <div class="notification_desc">
                            <p>New customer registered </p>
                            <span>1 hour ago</span>
                          </div>
                        </a></li>
                        <li><a href="#" class="grid">
                          <div class="user_img"><img src="{{ asset('adminPanel/images/avatar3.jpg') }}" alt=""></div>
                          <div class="notification_desc">
                            <p>Lorem ipsum dolor sit amet </p>
                            <span>2 hours ago</span>
                          </div>
                        </a></li>
                        <li>
                          <div class="notification_bottom">
                            <a href="#all" class="bg-primary">See all notifications</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                        <ul class="dropdown-menu">
                          <li>
                            <div class="notification_header">
                              <h3>You have 4 new messages</h3>
                            </div>
                          </li>
                          <li><a href="#" class="grid">
                            <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                            <div class="notification_desc">
                              <p>Johnson purchased template</p>
                              <span>Just Now</span>
                            </div>
                          </a></li>
                          <li class="odd"><a href="#" class="grid">
                            <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                            <div class="notification_desc">
                              <p>New customer registered </p>
                              <span>1 hour ago</span>
                            </div>
                          </a></li>
                          <li><a href="#" class="grid">
                            <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                            <div class="notification_desc">
                              <p>Lorem ipsum dolor sit amet </p>
                              <span>2 hours ago</span>
                            </div>
                          </a></li>
                          <li><a href="#" class="grid">
                            <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                            <div class="notification_desc">
                              <p>Johnson purchased template</p>
                              <span>Just Now</span>
                            </div>
                          </a></li>
                          <li>
                            <div class="notification_bottom">
                              <a href="#all" class="bg-primary">See all messages</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="profile_details">
                    <ul>
                      <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                          aria-expanded="false">
                          <div class="profile_img">
                            <img src="{{ asset('adminPanel/images/profileimg.jpg') }}" class="rounded-circle" alt="" />
                            <div class="user-active">
                              <span></span>
                            </div>
                          </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                          <li class="user-info">
                            <h5 class="user-name">{{ Auth::user()->name }}</h5>
                            <span class="status ml-2">Available</span>
                          </li>
                          <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                          <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                          <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                          <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>
                          <li class="logout"> <a href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout</a>
                            <!-- Denote the post method -->
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--notification menu end -->
        </div>
        <!-- //header-ends -->
        <!-- main content start -->
        <div class="main-content">
          <!-- content -->
          <div class="container-fluid content-top-gap">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>
            @include('admin.layouts.messages')
            @yield('content')
          </div>
          <!-- //content -->
        </div>
        <!-- main content end-->
      </section>
      @include('admin.layouts.footer')
      <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
      scrollFunction()
      };
      function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
      } else {
      document.getElementById("movetop").style.display = "none";
      }
      }
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      }
      </script>
      <!-- /move top -->
      <script src="{{ asset('adminPanel/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('adminPanel/js/jquery-1.10.2.min.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('adminPanel/js/Chart.min.js') }}"></script>
      <script src="{{ asset('adminPanel/js/utils.js') }}"></script>
      <!-- //chart js -->
      <!-- Different scripts of charts.  Ex.Barchart, Linechart -->
      <script src="{{ asset('adminPanel/js/bar.js') }}"></script>
      <script src="{{ asset('adminPanel/js/linechart.js')}}"></script>
      <!-- //Different scripts of charts.  Ex.Barchart, Linechart -->
      <script src="{{ asset('adminPanel/js/jquery.nicescroll.js') }}"></script>
      <script src="{{ asset('adminPanel/js/scripts.js')}}"></script>
      <!-- close script -->
      <script>
      var closebtns = document.getElementsByClassName("close-grid");
      var i;
      for (i = 0; i < closebtns.length; i++) {
      closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
      });
      }
      </script>
      <!-- //close script -->
      <!-- disable body scroll when navbar is in active -->
      <script>
      $(function () {
      $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
      })
      });
      </script>
      <!-- disable body scroll when navbar is in active -->
      <!-- loading-gif Js -->
      <script src="{{ asset('adminPanel/js/modernizr.js') }}"></script>
      <script>
      $(window).load(function () {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
      });
      </script>
      <!--// loading-gif Js -->
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('adminPanel/js/bootstrap.min.js') }}"></script>
    </body>
  </html>