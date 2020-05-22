@extends('admin.layouts.app')
@section('content')
<!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>All Posts <a href="/works" class="pull-right btn btn-primary">New project</a> </h3>
                </div>
                <div class="card-body">
                    
                            @if(count ($projects) > 0)
                            <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th colspan="2">Action</th>
                        </tr>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->project_name}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/editWorks/{{ $project->id }}" class="btn btn-warning">Edit</a>
                                        {!! Form::open(['action' => ['AdminController@destroyWorks', $project->id ],'method' => 'POST',]) !!}
                                            {{Form::hidden('_method', 'GET')}}
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
                    {{$projects->links()}}
                </div>
            </div>
            <!-- //forms 1 -->
@endsection