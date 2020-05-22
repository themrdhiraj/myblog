@extends('users.layouts.app')
@section('content')
  <div class="sub-title">
    <h2>My Portfolio</h2>
    <a href="/contact"><i class="icon-envelope"></i></a>
  </div>
  
  
  <div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">
      
      
      <!-- Intro Start -->
      <div class="post-title margin-bottom-30">
        <h1>Let's take a look on <span class="main-color">My Work</span></h1>
      </div>
      <!-- Intro End -->
      
      
      
      
      <!-- Portfolio Start -->
      <div>
        
        
        @if(count ($works) > 0)
          @foreach($works as $work)
            <!-- Portfolio Detail Start -->
        <div class="row portfolio">
          <div class="col-sm-12 custom-pad-2">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  
                  <tr>
                    <td><b>Project name</b></td>
                    <td>{{$work->project_name}}</td>
                  </tr>
                  
                  <tr>
                    <td><b>Language(s) used</b></td>
                    <td>{{$work->project_languages}}</td>
                  </tr>
                  
                  <tr>
                    <td><b>Time taken</b></td>
                    <td>
                      @if($work->project_time_taken == 0)
                      Less than a week
                      @elseif($work->project_time_taken == 1)
                      One day
                      @elseif($work->project_time_taken == 2)
                      Less than a week
                      @elseif($work->project_time_taken == 3)
                      A week
                      @else
                      Less than a month
                      @endif
                    </td>
                  </tr>
                  
                  <tr>
                    <td><b>Url</b></td>
                    <td><a href="{{$work->project_url}}" title="uipasta">Click here to visit my project.</a></td>
                  </tr>
                  
                  <tr>
                    <td><b>About Project</b></td>
                    <td>{!! $work->project_about !!}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Portfolio Detail End -->
          @endforeach
        @else
          No projects done yet!!!
        @endif
        
      </div>
      <!-- Portfolio End -->
      
      
    </div>
    
    <div class="col-md-12 text-center">
      <a href="javascript:void(0)" id="load-more-portfolio" class="load-more-button">Load</a>
      <div id="portfolio-end-message"></div>
    </div>
    
  </div>
@endsection