@extends('users.layouts.app')
@section('content')
  <div class="sub-title">
    <h2>About Me</h2>
    <a href="/contact"><i class="icon-envelope"></i></a>
  </div>
  
  
  <div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">
      
      
      @if($works)
      <?php $i=1; ?>
      <!-- My Intro Start -->
      <div class="post-title margin-bottom-30">
        <h1>Hi, I am <span class="main-color">Alex Parker</span></h1>
        
        <ul class="knowledge">
          @foreach($works as $work)
          <li class="bg-color-{{$i++}}">{{$work}}</li>
          @endforeach
        </ul>
        
      </div>
      <!-- My Intro End -->
      @endif
      
      
      <p>{!! $user->profile_aboutme !!}</p>
      
      
      
      
      @if($services)
      <!-- My Service Start -->
      <div class="post-title">
        <h1>My <span class="main-color">Services</span></h1>
      </div>
      
      <div class="list list-style-2 margin-top-30">
        <ul>
          @foreach($services as $service)
            <li>{{$service}}</li>
          @endforeach
        </ul>
      </div>
      <!-- My Service End -->
      @endif
      
    </div>
    
    <div class="col-md-12 text-center">
      <a href="/contact" data-toggle="tooltip" data-placement="top" title="Visit on my contact page for hire me." class="load-more-button">Hire</a>
    </div>
    
  </div>
@endsection