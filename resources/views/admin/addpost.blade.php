@extends('admin.layouts.app')
@section('content')
<!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Create post <span></span></h3>
                </div>
                <div class="card-body">
                   {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('title','Title',['class' => 'input__label'])}}
                            {{Form::text('title','',['class' => 'form-control input-style', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('body','Content',['class' => 'input__label'])}}
                            {{Form::textarea('body','',['placeholder' => 'Content','id' => 'mytextarea'])}}
                        </div>

                        <div class="custom-file">
                            {{Form::file('cover_image',['class' => 'custom-file-input'])}}
                            {{Form::label('cover_image','',['class' => 'custom-file-label'])}}
                        </div>

                        {{Form::submit('Submit',['class' => 'btn btn-primary btn-style mt-4'])}}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- //forms 1 -->
            
@endsection