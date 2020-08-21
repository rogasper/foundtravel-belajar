@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<main>
        <div class="section-success d-flex align-items-center ">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_succes.jpg') }}" alt="success">
                <h1>Yay! Success</h1>
                <p>
                    Kami sudah mengirim email ke anda segera konfirmasi dan ikuti langkah selanjutnya
                </p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
</main>
@endsection