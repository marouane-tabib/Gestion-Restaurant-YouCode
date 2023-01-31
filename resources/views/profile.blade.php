@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" class="img-thumbnail col-md-3 col-12" height="auto" alt="...">
                        <div class="col">
                            <label for="">Your Name :</label>
                            <p>{{ Auth::user()->name }}</p>
                            <label for="">Your Email :</label>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
