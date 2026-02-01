@extends('admin.layout')

@section('content')
<div>
<h3>Projects</h3> <a class="btn btn-primary" role="button" href="{{ route('admin.projects.create') }}">Add</a>
</div>
<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Project Title</th>
            <th>Technology</th>
              <th>Git Hub</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $p )
            
       
        <tr>
            <td>1</td>
            <td>
    <img src="{{ asset('uploads/projects/' . $p->image) }}" class="img-fluid rounded" style="max-width: 100px;" alt="Product Image">
</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->tech_stack }}</td>
            <th><a  class="btn btn-dark btn-sm" href="{{ $p->github_link }}">link</a></th>
            <td>Completed</td>
            <td>
                <a>Edit</a>
                <a>Delete</a>
            </td>
        </tr>
         @endforeach
    </tbody>
</table>
@endsection
