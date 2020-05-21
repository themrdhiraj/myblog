@extends('admin.layouts.app')
@section('content')
<!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>All Posts <a href="/posts/create" class="pull-right btn btn-primary">New post</a> </h3>
                </div>
                <div class="card-body">
                    
                            @if(count ($posts) > 0)
                            <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th colspan="2">Action</th>
                        </tr>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id ],'method' => 'POST',]) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <td colspan="3">No posts Found</td>
                            @endif
                    </table>
                    {{$posts->links()}}
                </div>
            </div>
            <!-- //forms 1 -->
@endsection