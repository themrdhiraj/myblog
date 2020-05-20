
<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>{{config('app.name', 'MyBlog')}}</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugin.css') }}">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/style.css') }}">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>

 <body>

	
     
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
    <div id="main">
        <div class="container">
            <div class="row">
              @include('users.inc.aboutme')
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>My Blog</h2>
                                <a href="contact.html"><i class="icon-envelope"></i></a>
                             </div>
                            
                            
                            @yield('content')
                              
                         </div>
                         
                        
                        
                        @include('users.inc.sub')
                           
                         </div>
                     
                     
                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                          <footer>
                          <ul class="menu-link">
                               <li><a href="index.html">Home</a></li>
                               <li><a href="about.html">About</a></li>
                               <li><a href="work.html">Work</a></li>
                               <li><a href="contact.html">Contact</a></li>
                            </ul>
                            
                          <p>© Copyright 2016 DevBlog. All rights reserved</p>
						  
						  
						  <!-- UiPasta Credit Start -->
                          <div class="uipasta-credit">Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
                          <!-- UiPasta Credit End -->

                           
                         </footer>
                       </div>
                       <!-- Footer End -->
                     
                     
                  </div>
                  <!-- Blog Post (Right Sidebar) End -->
                
            </div>
         </div>
      </div>
    
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugin.js') }}"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>

    
   </body>
 </html>
