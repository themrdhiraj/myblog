@extends('admin.layouts.app')
@section('content')
<!-- forms -->
<section class="forms">
    <!-- forms 1 -->
    <div class="card card_border py-2 mb-4">
        <div class="cards__heading">
            <h3> Add project <span></span></h3>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => 'AdminController@addWorks', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('project_name','Project name',['class' => 'input__label'])}}
                {{Form::text('project_name','',['class' => 'form-control input-style', 'placeholder' => 'Project name'])}}
            </div>
            <div class="form-group">
                {{Form::label('project_time_taken','Project time taken',['class' => 'input__label'])}}
                {{Form::select('project_time_taken', array('0' => 'Less than a day', '1' => 'One day', '2' => 'Less than a week', '3' => 'A week', '4' => 'Less than a month'), '0',['class' => 'custom-select input-style'])}}
            </div>
            <div class="form-group">
                {{Form::label('project_url','Project url',['class' => 'input__label'])}}
                {{Form::text('project_url','',['class' => 'form-control input-style', 'placeholder' => 'https://website.com/projectName'])}}
            </div>
            <div class="form-group">
                {{Form::label('project_languages','Language(s) used for project',['class' => 'input__label'])}}
                {{Form::text('project_languages','',['class' => 'form-control input-style', 'placeholder' => 'Php/Java'])}}
            </div>
            <div class="form-group">
                {{Form::label('project_about','About',['class' => 'input__label'])}}
                {{Form::textarea('project_about','',['placeholder' => 'About project', 'class' => 'form-control input-style'])}}
            </div>
            {{Form::hidden('_method', 'GET')}}
            {{Form::submit('Submit',['class' => 'btn btn-primary btn-style mt-4'])}}
            {!! Form::close() !!}
        </div>
    </div>
    <!-- //forms 1 -->
    @endsection