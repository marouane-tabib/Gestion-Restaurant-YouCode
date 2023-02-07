@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row mx-auto">
        @foreach ($plats as $plat)
            <div class="col-6 col-md-3 p-1">
                <div class=" plat-card bg-white px-0 pb-2 m-1">
                    <div class="col">
                        <img src="{{ asset('storage/Image/'.$plat->image) }}" width="100%" class="img-fluid" alt="">
                    </div>
                    <div class="col p-2">
                        <h5 class="card-title">{{ $plat->title }}</h5>
                        <p class="card-text">{{ $plat->description }}</p>
                        <span class="check float-end shadow">Book Now <i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
