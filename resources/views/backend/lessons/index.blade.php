@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of lessons 
                    <a href="{{ route('lessons.create') }}" class="pull-right btn btn-sm btn-primary">
                        Create lesson
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Name</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->id }}</td>
                                <td>{{ $lesson->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-sm btn-default">See</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-sm btn-default">Edit</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST">
                        
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-sm btn-danger">
                                            Remove
                                        </button> 
                                    
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>        

                    {{ $lessons->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection