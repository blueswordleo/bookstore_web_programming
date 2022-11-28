@extends('template')

@section('content')

    <div class="page-title pt-3">
        <h3 class="d-flex justify-content-center">Book Detail</h3>
    </div>

    <div class="container px-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards justify-content-center">
        <div class="col w-100">
            <div class="card h-100">
                <div class="container p-5">
                    <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
                </div>
                <div class="container px-4">
                <div class="card-body">
                    <h3 class="card-title">{{$book->title}}</h3>
                    <h6 class="card-title text-secondary">Author : {{$book->author}}</h6>
                    <h6 class="card-title text-secondary">Publisher : {{$book->publishers->name}}</h6>
                    <h6 class="card-title text-secondary">Year : {{$book->year}}</h6>
                    <h6 class="card-title">Synopsis :</h6>
                    <p class="card-text">{{$book->synopsis}}</p>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    
    <hr>
@endsection
