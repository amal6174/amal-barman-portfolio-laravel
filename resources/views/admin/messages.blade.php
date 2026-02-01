@extends('admin.layout')

@section('content')
<h3>User Messages</h3>

<table class="table table-striped bg-white">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Rahul</td>
            <td>rahul@gmail.com</td>
            <td>Nice portfolio 👍</td>
        </tr>
    </tbody>
</table>
@endsection
