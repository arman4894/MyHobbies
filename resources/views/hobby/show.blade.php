@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hobby Details</div>

                <div class="card-body">
                    <b>{{$hobby->name}}</b>
                    <p>{{$hobby->description}}</p>
                </div>
            </div>
            <div class="mt-2">
                <a class="btn btn-primary" href="/hobby"><i class="fas fa-arrow-circle-up"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
