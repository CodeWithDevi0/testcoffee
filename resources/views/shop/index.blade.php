@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Our Shop</h1>

    <!-- Flash message for successful order -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $product->product_image) }}" class="card-img-top" alt="{{ $product->product_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>${{ number_format($product->price, 2) }}</strong></p>
                        
                        <!-- Order Form -->
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="mb-3">
                                <label for="quantity-{{ $product->id }}" class="form-label">Quantity:</label>
                                <input type="number" name="quantity" id="quantity-{{ $product->id }}" class="form-control" min="1" value="1" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Order Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
