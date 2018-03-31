@extends('layouts.master')

@section('content')
    <div class="col-12 col-md-6">
        <div class="alert alert-success text-center">
            <p>{{ $result }}</p>

            <a href="{{ url('/') }}" class="text-center">Split another bill.</a>
        </div>
    </div>
@endsection