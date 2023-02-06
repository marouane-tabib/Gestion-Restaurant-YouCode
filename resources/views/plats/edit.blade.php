@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header">{{ __('Update' . $plat->name)}}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('plat.create' , $plat->id)}}" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <img src="{{ asset('storage/Image/'.$plat->image) }}" width="300" alt="" srcset=""><br>
                            <div class="mb-3">
                                <label for="image" class="form-label">Your Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" aria-describedby="imageHelp" placeholder="Add Plat Image">
                            </div>
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="mb-3">
                                <label for="title" class="form-label">Your Title</label>
                                <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $plat->title }}" aria-describedby="titleHelp" placeholder="Add Plat Title">
                            </div>
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="mb-3">
                                <label for="description" class="form-label">Your Title</label>
                                <textarea name="description" class="form-control  @error('description') is-invalid @enderror" id="description" cols="30" rows="5">{{ $plat->description }}</textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
