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
            @forelse($windowsKeys as $key)
            <tr>
                <td>
                    @if($key->image)
                        <img src="{{ asset('storage/' . $key->image) }}" alt="{{ $key->name }}" width="80">
                    @else
                        <span>No image</span>
                    @endif
                </td>
                <td>{{ $key->name }}</td>
                <td>${{ number_format($key->price, 2) }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">No Windows Keys found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
