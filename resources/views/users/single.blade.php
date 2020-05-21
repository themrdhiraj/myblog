@extends('users.layouts.app')
@section('content')
<div class="sub-title">
  <a href="/" title="Go to Home Page"><h2>Back Home</h2></a>
  <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
</div>


<div class="col-md-12 content-page">
  <div class="col-md-12 blog-post">
    
    
    <!-- Post Headline Start -->
    <div class="post-title">
      <h1>{{$post->title}}</h1>

    </div>
    <!-- Post Headline End -->
    
    
    <!-- Post Detail Start -->
    <div class="post-info">
      <span>{{$post->created_at}} / by <a href="#" target="_blank">{{$user->name}}</a></span>
    </div>
    <!-- Post Detail End -->

    <!-- Post Image Start -->
    <div class="post-image margin-top-40 margin-bottom-40">
      <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
      <p>Image source from <a href="#" target="_blank">Link</a></p>
    </div>
    <!-- Post Image End -->
    
    
    <p>{{$post->body}}</p>
    
    
    
  
  
  
  <!-- Post Author Bio Box Start -->
  <div class="about-author margin-top-70 margin-bottom-50">
    
    <div class="picture">
      <img src="{{ asset('assets/images/pic/profile.jpeg') }}" class="img-responsive" alt="">
    </div>
    
    <div class="c-padding">
      <h3>Article By <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Alex Website">{{$user->name}}</a></h3>
      <p>You can use about author box when someone guest post on your blog, Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ad minim veniam.</p>
    </div>
  </div>
  <!-- Post Author Bio Box End -->
  
  
  
  
  <!-- You May Also Like Start -->
  <div class="you-may-also-like margin-top-50 margin-bottom-50">
    <h3>You may also like</h3>
    <div class="row">
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="/single"><p>Make mailchimp singup form working with ajax using jquery plugin</p></a>
      </div>
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="/single"><p>How to design elegant e-mail newsletter in html for wish christmas to your subscribers?</p></a>
      </div>
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="/single"><p>How to customize a wordpress theme entirely from scratch using a child theme?</p></a>
      </div>
      
    </div>
  </div>
  <!-- You May Also Like End -->
  
  
  
  
  <!-- Post Comment (Disqus) Start -->
  <div id="comment" class="comment">
    <h3>Discuss about post</h3>
    
    
    <!-- Disqus Code Start  (Please Note: Disqus will not be load on local, You have to upload it on server.)-->
    <div id="disqus_thread"></div>
    <script>
    
    /***  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS. LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables.
    
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//uipasta.disqus.com/embed.js';   // Please change the url from your own disqus id
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <!-- Disqus Code End -->
    
  </div>
  <!-- Post Comment (Disqus) End -->
  
  
</div>
</div>
@endsection