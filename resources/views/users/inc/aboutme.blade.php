<!-- About Me (Left Sidebar) Start -->
<div class="col-md-3">
  <div class="about-fixed">
    
    <div class="my-pic">
      <img src="storage/profile_image/{{ $user->profile_image}}" alt="">
      <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
      <div id="menu" class="collapse">
        <ul class="menu-link">
          <li><a href="/about">About</a></li>
          <li><a href="/work">Work</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>
    
    
    
    <div class="my-detail">
      
      <div class="white-spacing">
        <h1>{{$user->name}}</h1>
        <span>{{$user->profile_designation}}</span>
      </div>
      
      <ul class="social-icon">
        <li><a href="https://facebook.com/{{$user->profile_facebook}}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/{{$user->profile_twitter}}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://linkedin.com/{{$user->profile_linkedin}}" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://gitlab.com/{{$user->profile_github}}" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- About Me (Left Sidebar) End -->