@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Windows Keys - Admin Panel</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($windowsKeys as $key)
            <tr>
                <td>
                    <img src="{{ asset('storage/' . $key->image) }}" alt="{{ $key->name }}" width="80">
                </td>
                <td>{{ $key->name }}</td>
                <td>${{ number_format($key->price, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
