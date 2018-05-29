@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lesson
                    <a href="{{ url()->previous() }}" class="pull-right btn btn-sm btn-primary">Back</a>
                </div>

                <div class="panel-body">                    
                    <p><strong>Name</strong> {{ $lesson->title }}</p>
                    <p><strong>Slug</strong> {{ $lesson->slug }}</p>
                    <p><strong>Body</strong> {!! $lesson->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection