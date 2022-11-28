@extends('template')

@section('content')
    @forelse ($publishers as $publisher)
        <div class="publisher-info pt-3 pb-3">

            <div class="d-flex ">
                <img class="card" src="{{ asset('Storage/'.$publisher->image) }}" alt="..." height="200px" width="200px">
                <div class="d-flex flex-column justify-content-center px-4">
                    <h3>{{ $publisher->name }}</h3>
                    <div class="d-flex">
                        <img src="/location.png" alt="" width="20px" height="20px">
                        <p class="px-3">{{ $publisher->address }}</p>
                    </div>
                    <div class="d-flex">
                        <img src="/telephone.png" alt="" width="20px" height="20px">
                        <p class="px-3">{{ $publisher->phone }}</p>
                    </div>
                    <div class="d-flex">
                        <img src="/mail.png" alt="" width="20px" height="20px">
                        <p class="px-3">{{ $publisher->email }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards">
            @forelse ($publisher->books as $book)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <p class="card-text">{{ $book->synopsis }}</p>
                        </div>
                        <div class="card-img-btm bg-dark d-flex justify-content-center">
                            <button class="btn detail-btn text-white" onclick="location.href='{{ url('BookDetail', ['id' => $book->id])}}'">Detail</button>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <hr>
    @empty
    @endforelse
@endsection
