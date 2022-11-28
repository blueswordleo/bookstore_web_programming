@extends('template')

@section('content')

    <div class="page-title pt-3">
        <h3>{{$category->name}}</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards pb-4">
        @forelse ($category->books as $book)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Storage/' . $book->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->author }}</p>
                    </div>
                    <div class="card-img-btm bg-dark d-flex justify-content-center">
                        <button class="btn detail-btn text-white" onclick="location.href='{{ url('BookDetail', ['id' => $book->id]) }}'">Detail</button>
                    </div>
                </div>
            </div>
        @empty
            
        @endforelse

    </div>
@endsection
