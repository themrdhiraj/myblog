@extends('admin.layouts.app')
@section('content')
<!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Edit post <span></span></h3>
                </div>
                <div class="card-body">
                   {!! Form::open(['action' => ['AdminController@aboutmeUpdate'], 'method' => 'POST']) !!}

                        <div class="form-group">
                            {{Form::label('profile_aboutme','About me',['class' => 'input__label'])}}
                            {{Form::textarea('profile_aboutme',$aboutme->profile_aboutme,['class' => 'form-control input-style', 'placeholder' => 'About me', 'id' => 'mytextarea'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('profile_services','Services',['class' => 'input__label'])}}
                            <span class="badge">Please seperate with comma(,)</span>
                            {{Form::textarea('profile_services',$aboutme->profile_services,['class' => 'form-control input-style', 'placeholder' => 'Your Services',])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('profile_work','Work',['class' => 'input__label'])}}
                            <span class="badge">Please seperate with comma(,)</span>
                            {{Form::textarea('profile_work',$aboutme->profile_work,['class' => 'form-control input-style', 'placeholder' => 'Your working fields',])}}
                        </div>

                        {{Form::hidden('_method', 'GET')}}
                        {{Form::submit('Submit',['class' => 'btn btn-primary btn-style mt-4'])}}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- //forms 1 -->
@endsection