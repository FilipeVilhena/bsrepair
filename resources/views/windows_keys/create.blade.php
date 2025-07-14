@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Add New Windows Key</h2>
    <form action="{{ route('windows_keys.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 500px;">
        @csrf

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" required>
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="e.g. Microsoft Windows 10 Pro" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" id="price" name="price" step="0.01" min="0" placeholder="e.g. 29.99" value="{{ old('price') }}" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Create</button>
    </form>
</div>
@endsection
