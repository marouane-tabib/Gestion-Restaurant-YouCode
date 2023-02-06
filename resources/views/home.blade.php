@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header">{{ __('Dashboard')}} @include('components.plat-modal')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($plats as $plat)
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="{{ $plat->image }}" alt="{{ $plat->title }}" width="70" srcset=""></td>
                                    <td>{{ $plat->title }}</td>
                                    <td>{{ $plat->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
