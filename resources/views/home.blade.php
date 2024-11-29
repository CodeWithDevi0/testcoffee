@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Welcome to HeraldArthurGianWenyl Coffee Shop</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Hello, {{ Auth::user()->name }}!</h5>
                    <p>We’re delighted to have you here. Explore our collection of freshly brewed coffee and start your journey to finding your favorite blend.</p>

                    <div class="mt-4">
                        <h6 class="fw-bold">What would you like to do today?</h6>
                        <div class="d-grid gap-2">
                            <a href="{{ route('shop') }}" class="btn btn-outline-primary btn-block">Browse Our Shop</a>
                            <a href="{{ route('user.orders') }}" class="btn btn-outline-success btn-block">View My Orders</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h5>About HeraldArthurGianWenyl Coffee Shop</h5>
                </div>
                <div class="card-body">
                    <p>HeraldArthurGianWenyl Coffee Shop is your go-to destination for the finest coffee blends. From bold espressos to creamy lattes, we’ve got something for every coffee enthusiast. Enjoy the perfect cup, tailored to your taste!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
