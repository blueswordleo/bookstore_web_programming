@extends('template')

@section('content')
<div class="page-title">
    <h3 class="d-flex justify-content-center">About Us</h3>
</div>

<div class="information">
    <img src="/bookstore.jpg" alt="bookstore" class="w-100">
    <div class="session d-flex flex-column pt-3">
        <h3 class="d-flex justify-content-center">Store Address :</h3>
        <p class="d-flex justify-content-center">Kompleks Pertokoan Emerald Blok III/12 Bintaro, Tangerang Selatan, Indonesia</p>
    </div>
    <hr>
    <div class="session d-flex justify-content-center p-5">
        <img src="/clock.png" alt="" width="200px">
        <div class="d-flex flex-column justify-content-center p-5">
            <h3>Open Daily :</h3>
            <h5>08.00 - 20.00</h5>
        </div>
    </div>
    <hr>

    <div class="social">
        <ul class="list-inline list-unstyled">
            <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
            </li>
        </ul>
    </div>

    <div class="session d-flex flex-column">
        <h3 class="d-flex justify-content-center">Contact Us :</h3>
        <div class="d-flex justify-content-center">
            <img src="/telephone.png" alt="" width="20px" height="20px">
            <p class="px-3">021-08899776655</p>
        </div>
        <div class="d-flex justify-content-center">
            <img src="/mail.png" alt="" width="20px" height="20px">
            <p class="px-3">happybookstore@happy.com</p>
        </div>
    </div>
    <hr>
</div>
@endsection