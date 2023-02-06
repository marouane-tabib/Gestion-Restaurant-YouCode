@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard')}}
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add Plat
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('profile.update',auth()->id()) }}">
            <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Your Title</label>
                    <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" name="title" aria-describedby="titleHelp" placeholder="Add Plat Title">
                </div>
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label for="description" class="form-label">Your Title</label>
                    {{-- <input type="description" class="form-control @error('description') is-invalid @enderror" id="description" name="description" aria-describedby="descriptionHelp"> --}}
                    <textarea name="description" class="form-control  @error('description') is-invalid @enderror" id="description" cols="30" rows="5"></textarea>
                </div>
                @error('description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
    </div>
@endsection
