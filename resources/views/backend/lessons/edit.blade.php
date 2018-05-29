@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit lesson</div>

                <div class="panel-body">                    
                    
                    <form action="{{ route('lessons.update', $lesson->id) }}" method="POST">
                        
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="title">Name *</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $lesson->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug *</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug', $lesson->slug) }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Body *</label>
                            <textarea name="body" class="form-control">{{ old('body', $lesson->body) }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-sm btn-primary">
                        </div>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.9.2/basic/ckeditor.js"></script>
<script>
    $(document).ready(function(){       
        CKEDITOR.config.width  = 'auto';
        CKEDITOR.replace('body');
    });
</script>
@endsection