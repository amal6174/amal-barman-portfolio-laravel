@extends('admin.layout')

@section('content')

<h4>Add Project</h4>

<form method="POST" action="{{ route('admin.projects.store') }}">
@csrf

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <input type="text" name="descriptio" class="form-control">
</div>


<div class="mb-3">
    <label>Technology</label>
    <input type="text" name="tech_stack" class="form-control">
</div>


<div class="mb-3">
    <label>Github Link</label>
    <input type="url" name="github_link" class="form-control">
</div>

<button class="btn btn-success">Save</button>

</form>

@endsection
