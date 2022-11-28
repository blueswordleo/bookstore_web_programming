@extends('template')

@section('content')

    <div class="page-title pt-3">
        <h3>Book List</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards">
        @forelse ($book as $b)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Storage/'.$b->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->title }}</h5>
                        <p class="card-text">by {{ $b->author }}</p>
                    </div>
                    <div class="card-img-btm bg-dark d-flex justify-content-center">
                        <button class="btn detail-btn text-white " onclick="location.href='{{ url('BookDetail', ['id' => $b->id])}}'">Detail</button>
                    </div>
                    
                </div>
            </div>
        @empty
            <h2>there is no book</h2>
        @endforelse

    </div> 
@endsection