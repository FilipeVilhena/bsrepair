@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Windows Key Details</h1>
    <div class="card" style="width: 24rem;">
        @if($windowsKey->image)
            <img src="{{ asset('storage/' . $windowsKey->image) }}" class="card-img-top" alt="{{ $windowsKey->name }}">
        @else
            <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="No Image">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $windowsKey->name }}</h5>
            <p class="card-text"><strong>Price:</strong> ${{ number_format($windowsKey->price, 2) }}</p>
        </div>
    </div>
</div>
@endsection
