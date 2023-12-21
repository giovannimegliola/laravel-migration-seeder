@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main>
    <h1>Trains</h1>
    <div class="row g-4">
        @forelse ($trains as $train)
            <div class="col-12 col-md-3 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5>Departure Station: </h5>
                        <p>{{$train->departure_station}}</p>
                    <h5>Arrival Station: </h5>
                        <p>{{$train->arrival_station}}</p>

                    <h5>Departure Time:</h5>
                    <p>{{$train->departure_time}}</p>

                    <h5>Arrival Time:</h5>
                    <p>{{$train->arrival_time}}</p>
                    <p>Company : {{$train->company}} | Code: {{$train->train_code}} </p>

                </div>
            </div>
        </div>
        @empty
            <h6>No record found</h6>
        @endforelse

    </div>
</main>
@endsection
