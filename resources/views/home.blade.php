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
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($plats as $plat)
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="{{ asset('storage/Image/'.$plat->image) }}" alt="{{ $plat->title }}" width="70" srcset=""></td>
                                    <td>{{ $plat->title }}</td>
                                    <td>{{ $plat->description }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('plat.edit' , $plat->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                               onclick="if(confirm('Are You sure to delete this record?')){document.getElementById('delete-plat-{{ $plat->id }}').submit();} else {return false}"
                                               class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                        <form action="{{ route('plat.destroy' , $plat->id) }}" method="post" class="d-none" id="delete-plat-{{ $plat->id }}" >
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
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
