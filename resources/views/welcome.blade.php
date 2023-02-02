@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row mx-auto">
        <div class="col-6 col-md-3 plat-card bg-white px-0 py-2">
            <div class="col">
                <img src="https://images.unsplash.com/photo-1519077336050-4ca5cac9d64f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
            </div>
            <div class="col p-2">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <span class="check float-end">Book Now <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </div>
    </div>
</section>
@endsection
