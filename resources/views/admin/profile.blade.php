@extends('admin.layouts.app')
@section('content')
<section class="people">
    <section class="w3l-team-block">
        <!-- //people cards style 1 -->
        <div class="card card_border mb-5">
            <div class="cards__heading">
                <h3>Update profile</h3>
            </div>
            <div class="card-body">
                <div class="teams mb-4">
                    <div class="row px-2">
                        <div class="col-lg-6 col-md-6 mb-lg-0 mb-4 px-2">
                            {!! Form::open(['action' => ['AdminController@profileUpdate'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('name','Name',['class' => 'input__label'])}}
                                {{Form::text('name',$user->name,['class' => 'form-control input-style', 'placeholder' => 'Name'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('profile_designation','Designation',['class' => 'input__label'])}}
                                {{Form::text('profile_designation',$user->profile_designation,['class' => 'form-control input-style', 'placeholder' => 'Designation'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('profile_facebook','Facebook',['class' => 'input__label'])}}
                                {{Form::text('profile_facebook',$user->profile_facebook,['class' => 'form-control input-style', 'placeholder' => 'Facebook'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('profile_linkedin','Linkedin',['class' => 'input__label'])}}
                                {{Form::text('profile_linkedin',$user->profile_linkedin,['class' => 'form-control input-style', 'placeholder' => 'Linkedin'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('profile_twitter','Twitter',['class' => 'input__label'])}}
                                {{Form::text('profile_twitter',$user->profile_twitter,['class' => 'form-control input-style', 'placeholder' => 'Twitter'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('profile_github','Github',['class' => 'input__label'])}}
                                {{Form::text('profile_github',$user->profile_github,['class' => 'form-control input-style', 'placeholder' => 'Github'])}}
                            </div>
                            <div class="custom-file">
                            {{Form::file('profile_image',['class' => 'custom-file-input'])}}
                            {{Form::label('profile_image','',['class' => 'custom-file-label'])}}
                        </div>
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            {{Form::hidden('_method', 'GET')}}
                            {{Form::submit('Update',['class' => 'btn btn-primary btn-style mt-4'])}}
                            {!! Form::close() !!}
                        </div>
                        <div class="col-lg-6 col-md-6 mb-lg-0 mb-4 px-2">
                            <div class="item">
                                <div class="d-team-grid team-info">
                                    <div class="column">
                                        <a href="team-single.html"><img src="storage/profile_image/{{ $user->profile_image}}" alt=""></a>
                                    </div>
                                    <div class="team-member">
                                        <h3 class="name-pos mb-0"><a href="team-single.html">{{$user->name}}</a>
                                        </h3>
                                        <p>{{$user->profile_designation}}</p>
                                        <div class="social">
                                            <a href="https://facebook.com/{{$user->profile_facebook}}" class="team-facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="https://twitter.com/{{$user->profile_twitter}}" class="team-twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                            <a href="https://linkedin.com/{{$user->profile_linkedin}}" class="team-linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                            <a href="https://github.com/{{$user->profile_github}}" class="team-github"><span class="fa fa-github" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection