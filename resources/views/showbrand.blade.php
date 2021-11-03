@extends('layout.mainlayout')

@section('title','Brand')

@section('pagetitle','Detail Brand')

@section('main_content')
    <div class="mt-4 p-5 bg-secondary text-white rounded">
        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
        <h1>{{$brands['brand_name']}}</h1>
        <p><b>Brand Code : </b>{{ $brands['brand_code'] }}</p>
        <p><b>Brand Name : </b>{{ $brands['brand_name'] }}</p>
        <p><b>Founder : </b>{{$brands['founder']}}</p>
        <p><b>Date Found : </b>{{$brands['date_found']}}</p>
        <p><b>Headquarters : </b>{{$brands['headquarters']}}</p>

            <b>List Car</b>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Car Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Engine</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($brands->cars as $car)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $car['code'] }}</td>
                            <td>{{ $car['car'] }}</td>
                            <td>{{ $car['type'] }}</td>
                            <td>{{ $car['engine'] }}</td>
                            <td>{{ $car['price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection