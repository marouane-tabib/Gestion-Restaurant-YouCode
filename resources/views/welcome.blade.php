@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row mx-auto">
        @for ($i = 0; $i < 5; $i++)

        <div class="col-6 col-md-3 p-1">
            <div class=" plat-card bg-white px-0 pb-2 m-1">
                <div class="col">
                    <img src="https://images.pexels.com/photos/14000579/pexels-photo-14000579.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid" alt="">
                </div>
                <div class="col p-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <span class="check float-end shadow">Book Now <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>
@endsection
