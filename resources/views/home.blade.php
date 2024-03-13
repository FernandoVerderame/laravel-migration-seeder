@extends('layouts.main')

@section('title', 'Home')

@section('cdns')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')

<table class="table table-dark table-striped text-center">

    <h1 class="text-center my-5">Train Info</h1>

    <thead class="bg-primary">
        <tr>
            <th scope="col" class="text-start">Company</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train Code</th>
            <th scope="col">Carriage Number</th>
            <th scope="col">On Time</th>
            <th scope="col">Canceled</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($trains as $train)
        <tr>
            <td class="text-start">{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->carriage_number }}</td>
            <td>{!! $train->getIconOnTime() !!}</td>
            <td>{!! $train->getIconIsCanceled() !!}</td>
          </tr>
        @empty
          There are't any trains.
        @endforelse
    </tbody>
</table>

@endsection