@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Flights Data</h1>
    <a href="{{ url('flight/create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Airline</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @php
            $no=1;
        @endphp

        @foreach ($flights as $flight)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $flight->username }}</td>
            <td>{{ $flight->email }}</td>
            <td>{{ $flight->airline }}</td>
            <td>{{ $flight->description }}</td>
            <td>
                <a href="{{ action('FlightController@edit', $flight->id) }}" class="btn btn-success btn-sm">edit</a>

                <form method="post" action="{{ action('FlightController@destroy', $flight->id)}}">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
