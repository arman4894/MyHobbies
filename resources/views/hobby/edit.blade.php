@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update Hobby</div>
                    <div class="card-body">
                        <form action="{{url('/hobby/{$hobby->id}')}}">
                            @csrf
                             @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" id="name" name="name" value="{{$hobby->name ?? old('name')}}">
                                <small class="form-text text-danger">{{ $errors->first('name') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control {{ $errors->has('description') ? 'border-danger' : '' }}" id="description" name="description" rows="5">{{$hobby->description ?? old('description')}}</textarea>
                                 <small class="form-text text-danger">{{ $errors->first('description') }}</small>
                            </div>
                            
                            <button class="btn btn-primary mt-4" type="submit">Update Hobby</button>
                        </form>
                        <a class="btn btn-primary float-right" href="/hobby"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection