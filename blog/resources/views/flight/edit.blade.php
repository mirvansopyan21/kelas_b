@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ action('FlightController@update', $flight->id)}}">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $flight->username }}" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $flight->email }}" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Airline</label>
                    <input type="text" name="airline" class="form-control" value="{{ $flight->airline }}" placeholder="Airline" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description">{{ $flight->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection
