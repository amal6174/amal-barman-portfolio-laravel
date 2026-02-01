@extends('admin.layout')

@section('content')
<h3>Skills</h3>

<ul class="list-group">
    @foreach ($skills as $sk )
        
  
    <li class="list-group-item">{{ $sk->name }}</li>
      @endforeach
</ul>
@endsection
