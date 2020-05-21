@extends('users.layouts.app')
@section('content')
<div class="sub-title">
  <h2>My Blog</h2>
  <a href="/contact"><i class="icon-envelope"></i></a>
</div>
<div class="col-md-12 content-page">

  @if(count ($posts) > 0)
    @foreach($posts as $post)
    <!-- Blog Post Start -->
  <div class="col-md-12 blog-post">
    <div class="post-image">
      <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    </div>
    <div class="post-title">
      <a href="/single"><h1>{{ $post->title }}</h1></a>
    </div>
    <div class="post-info">
      <span>{{ $post->created_at }} / by <a href="#" target="_blank">{{$user->name}}</a></span>
    </div>
    <p>{{ $post->body }}</p>
    <a href="/single/{{$post->id}}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
  </div>
  <!-- Blog Post End -->
  @endforeach
  @else
  <div class="col-md-12 blog-post">
    No post yet...
  </div>
  @endif

  <div class="col-md-12 text-center">
    <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
    <div id="post-end-message"></div>
  </div>
</div>
@endsection