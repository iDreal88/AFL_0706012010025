@extends('layout.mainlayout')

@section('title','Car')

@section('pagetitle','Detail Car')

@section('main_content')
    <div class="mt-4 p-5 bgshow text-light">
        <a href="{{ URL::previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>
        <h5><b><i class="fa-light fa-car fa-xl me-2"></i>Car Name  : </b>{{ $cars['car'] }}</h5>
        <h5><b><i class="fa-light fa-text fa-xl me-2"></i>Type : </b>{{ $cars['type'] }}</h5>
        <h5><b><i class="fa-light fa-id-card fa-xl me-2"></i>Brand Name : </b>{{$cars['merk']}}</h5>
        <h5><b><i class="fa-light fa-engine fa-xl me-2"></i>Engine : </b>{{$cars['engine']}}</h5>
        <h5><b><i class="fa-light fa-dollar fa-xl me-2"></i>Price : </b>{{$cars['price']}}</h5>
        <h5><b><i class="fa-light fa-image fa-xl me-2"></i>Image : </b><br><img src="{{ asset('storage/'. $cars['image'] ) }}" width="350" alt="carimage"></h5>
    </div>
@endsection