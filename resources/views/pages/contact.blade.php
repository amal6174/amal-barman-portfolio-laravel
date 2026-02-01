@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold mb-4 text-center">Contact Me</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="/contact">
                @csrf

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Message</label>
                    <textarea name="message"
                              class="form-control" rows="4" required></textarea>
                </div>

                <button class="btn btn-primary w-100">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
