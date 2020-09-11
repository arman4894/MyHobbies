@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-2 mb-2">
                <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Add Hobbies</a>
                
            </div>
            <div class="card">
                <div class="card-header">All Hobbies</div>

                <div class="card-body">
                    <ul class="list-group">
                    @foreach($hobbies as $hobby) 
                        <li class="list-group-item">
                            <a title="Show Detail" href="hobby/{{ $hobby->id }}">{{$hobby->name}}</a>
                            <a href="/hobby/{{$hobby->id}}/edit" class="btn btn-sm tbn-light"><i class="fa fa-edit"></i>Edit</a>
                        </li>
                    @endforeach    
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
