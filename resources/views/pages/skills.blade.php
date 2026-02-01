@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold mb-4">Skills</h2>

    @foreach($skills as $sk)
        <div class="mb-2">
            <span>{{ $sk->name }}</span>
            <div class="progress">
                <div class="progress-bar bg-success" style="width:80%"></div>
            </div>
        </div>
    @endforeach
</div>
@endsection
