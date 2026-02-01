@extends('admin.layout')

@section('content')

<h4>Edit Project</h4>

<form method="POST" action="{{ route('admin.projects.update',$project->id) }}">
@csrf
@method('PUT')

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" value="{{ $project->title }}" class="form-control">
</div>

<div class="mb-3">
    <label>Technology</label>
    <input type="text" name="technology" value="{{ $project->technology }}" class="form-control">
</div>

<button class="btn btn-primary">Update</button>

</form>

@endsection
