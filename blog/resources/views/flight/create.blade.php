@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ url('/flight')}}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Airline</label>
                    <input type="text" name="airline" class="form-control" placeholder="Airline" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
